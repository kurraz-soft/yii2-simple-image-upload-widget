<?php
/**
 * @var \yii\base\Model $model
 * @var string $attribute
 * @var string $upload_path
 */

use yii\helpers\Html;

?>
<div class="form-group <?= $model->hasErrors($attribute)?'has-errors':'' ?>">
    <?= Html::activeLabel($model,$attribute) ?>
    <?= Html::activeFileInput($model,$attribute) ?>
    <div class="help-block">
        <?= Html::error($model,$attribute) ?>
    </div>
    <?php if($model->$attribute): ?>
        <div style="display: inline-block">
            <img src="<?= $upload_path ?>/<?= $model->$attribute ?>" id="image-uploaded-<?= $attribute ?>">
        </div>
        <br>
        <?= Html::activeCheckbox($model,$attribute . '_delete',['label' => '']) ?> Удалить
    <?php endif; ?>
</div>

