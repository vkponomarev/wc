<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PagesText */
/* @var $form yii\widgets\ActiveForm */
/*->hiddenInput()->label(false)*/

//echo $modelText->model->id;
?>

<div class="pages-text-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pages_id')->textInput(['value'=>$model->pages_id])->hiddenInput(['value' => $model->pages_id])->label(false) ?>

    <?= $form->field($model, 'languages_id')->textInput(['value'=>$model->languages_id])->hiddenInput(['value' => $model->languages_id])->label(false) ?>



    <?= $form->field($model, 'menu_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'index_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plates_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'h1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'text1')->textarea(['rows' => 6]) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>


    <div>
        <?php if ($model->menu_name):?>
            <?=$model->menu_name;?>
        <?php endif; ?>
        <br>
        <br>
        <?php if ($model->title):?>
            <?=$model->title;?>
        <?php endif; ?>
        <br>
        <br>
        <?php if ($model->plates_title):?>
            <?=$model->plates_title;?>
        <?php endif; ?>
        <br>
        <br>
        <?php if ($model->h1):?>
            <?=$model->h1;?>
        <?php endif; ?>
        <br>
        <br>
        <?php if ($model->description):?>
            <?=$model->description;?>
        <?php endif; ?>
        <br>
        <br>
        <?php if ($model->text1):?>
            <?=$model->text1;?>
        <?php endif; ?>
        <br>
        <br>

    </div>







</div>
