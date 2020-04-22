<?php

/* @var $this yii\web\View */
/* @var $searchModel common\models\MailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Create Calculator';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mail-index">

    <form action="#result" method="post">

        <div class="form-left-title"><?= Yii::t('app', 'ID куда копируем по порядку увеличения чего небудь, либо через тире:') ?></div>

        <input name="id" class="form-control select-extended">

        <br>

        <div class="form-left-title"><?= Yii::t('app', 'Язык:') ?></div>

        <input name="language" class="form-control select-extended">

        <br>


        <div class="form-left-title"><?= Yii::t('app', 'Увеличение числа, либо через запятую, либо диапазон через тире:') ?></div>

        <input name="numberKeys" class="form-control select-extended">

        <br>


        <div class="form-left-title"><?= Yii::t('app', 'Текс, либо изменяющися через запятую, либо неизменяющееся слово или предложение без зяпятых:') ?></div>

        <input name="textKeys" class="form-control select-extended">

        <br>

        <div class="form-left-title"><?= Yii::t('app', 'Текс, сое текста через enter. Использование: {numberKkey}, {textKey}:') ?></div>
        <textarea rows="10" cols="45" name="text" class="form-control select-extended"></textarea>

        <br>

        <input class="btn btn-success form-button" type="submit" value="<?= Yii::t('app', 'Сохранить') ?>"
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
