<?php

/* @var $this yii\web\View */
/* @var $searchModel common\models\MailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Create View Partials';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="mail-index">

    <form action="#result" method="post">

        <div class="form-left-title"><?= Yii::t('app', 'Выберите что будет создавать:') ?></div>

        <select id="cycle-length-from" name="name" class="form-control select-extended">

            <option value="language-selection">Выбор текущего языка</option>
            <option value="menu">Основное меню сайта</option>
            <option value="alternate">link rel=alternate</option>
            <option value="breadcrumbs">Крошки</option>
            <option value="parent-categories">Внутрение категории</option>
        </select>

        <br>


        <input class="btn btn-success form-button" type="submit" value="<?= Yii::t('app', 'Создать') ?>"
               id="button_calc">

    </form>




</div>

