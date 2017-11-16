<?php

namespace kurraz\yii2_simple_image_upload_widget;

use yii\base\Widget;

/**
 * Created by PhpStorm.
 * User: Kurraz
 */
class ImageUpload extends Widget
{
    public $model;
    public $attribute;
    public $upload_path;

    public function run()
    {
        return $this->render('widget', [
            'model' => $this->model,
            'attribute' => $this->attribute,
            'upload_path' => $this->upload_path,
        ]);
    }
}