<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PagesText */
/* @var $form yii\widgets\ActiveForm */
/*->hiddenInput()->label(false)*/
?>

<div class="pages-text-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pages_id')->textInput(['value'=>$pages])->hiddenInput(['value' => $pages])->label(false) ?>

    <?= $form->field($model, 'languages_id')->textInput(['value'=>$languages])->hiddenInput(['value' => $languages])->label(false) ?>



    <?= $form->field($model, 'menu_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'index_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plates_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'h1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'short_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'active')->dropDownList(['off','on']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>


    <div>
        <?php if ($model->menu_name):?>
            <?=$model->menu_name;?>
            <br>
        <?php endif; ?>


        <?php if ($model->title):?>
            <?=$model->title;?>
            <br>
        <?php endif; ?>

        <?php if ($model->plates_title):?>
            <?=$model->plates_title;?>
            <br>
        <?php endif; ?>

        <?php if ($model->h1):?>
            <?=$model->h1;?>
            <br>
        <?php endif; ?>

        <?php if ($model->description):?>
            <?=$model->description;?>
            <br>
        <?php endif; ?>

        <?php if ($model->text1):?>
            <?=$model->text1;?>
            <br>
        <?php endif; ?>


    </div>







</div>
