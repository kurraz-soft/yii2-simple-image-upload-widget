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
        <img src="<?= $upload_path ?>/<?= $model->$attribute ?>">
        <br>
        <?= Html::activeCheckbox($model,$attribute . '_delete',['label' => '']) ?> Удалить
    <?php endif; ?>
</div>

