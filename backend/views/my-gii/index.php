<?php

/* @var $this yii\web\View */
/* @var $searchModel common\models\MailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Create Calculator';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mail-index">

    <form action="#result">

        <div class="form-left-title"><?= Yii::t('app', 'Основная папка:') ?></div>

        <select id="cycle-length-from" name="main-folder" class="form-control select-extended">

            <option value="womenPages">womenPages</option>

        </select>

        <br>

        <div class="form-left-title"><?= Yii::t('app', 'Папка для калькултяора:') ?></div>

        <select id="cycle-length-from" name="calc-folder" class="form-control select-extended">

            <option value="womenPages/calculation">womenPages/calculation</option>

        </select>

        <br>

        <div class="form-left-title"><?= Yii::t('app', 'Папка для вида калькултяора:') ?></div>

        <select id="cycle-length-from" name="calc-view" class="form-control select-extended">

            <option value="women">women</option>

        </select>

        <br>

        <div class="form-left-title"><?= Yii::t('app', 'Папка для getResult use:') ?></div>

        <select id="cycle-length-from" name="calc-result-use-folder" class="form-control select-extended">

            <option value="common\components\womenPages\calculation\">common\components\womenPages\calculation\</option>

        </select>

        <br>


        <div class="form-left-title"><?= Yii::t('app', 'Создавать калькулятор?:') ?></div>

        <select id="cycle-length-from" name="calc-create" class="form-control select-extended">

            <option value="1">Да</option>
            <option value="2">Нет</option>

        </select>

        <br>

        <div class="form-left-title"><?= Yii::t('app', 'Название калькулятора:') ?></div>

        <input name="calc-name" class="form-control select-extended">

        <br>

        <input class="btn btn-success form-button" type="submit" value="<?= Yii::t('app', 'Создать калькулятор') ?>"
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
