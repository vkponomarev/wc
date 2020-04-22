<?php

/* @var $this yii\web\View */
/* @var $searchModel common\models\MailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Сохранение переводов';
$this->params['breadcrumbs'][] = $this->title;





?>
<div class="mail-index">

    <form action="./translations" method="post">
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <div class="form-left-title"><?= Yii::t('app', 'ID страницы:') ?></div>

        <input name="id" class="form-control select-extended">

        <br>

        <?php foreach ($languages as $language):?>

            <?php if($language['url']<>'ru' and $language['url']<>'en'):?>

                <div class="form-left-title"> <?=$language['name_ru']?></div>

                <textarea rows="10" cols="45" name="<?=$language['url']?>" class="form-control select-extended"></textarea>

                <br>
            <?php endif;?>
        <?php endforeach;?>


        <input class="btn btn-success form-button" type="submit" value="<?= Yii::t('app', 'Создать переводы') ?>"
               id="button_calc">

    </form>

    <?php if ($createCalculator): ?>
        <?php if ($createCalculator['result']): ?>
            <br><br>

            Файл калькулятора был создан: <br><?=$createCalculator['calculatorCreated']?> <br>
            Файл вида калькулятора был создан: <br><?=$createCalculator['viewCreated']?> <br>
            Файл getPages был изменен: <br><?=$createCalculator['getPages']?> <br>
            Файл getParams был изменен: <br><?=$createCalculator['getParams']?> <br>
            Файл Result был изменен: <br><?=$createCalculator['getResult']?> <br>

        <?php else:?>
            <br><br>
            Калькулятор не был создан так как имя файла уже занято.

        <?php endif;?>
    <?php endif;?>
</div>
