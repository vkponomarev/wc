<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.08.19
 * Time: 16:24
 */
/** @var TYPE_NAME $pregnancyCalculationResult */
/** @var TYPE_NAME $currentLanguages */
/** @var TYPE_NAME $pregnancyCalculationDate */

/** @var TYPE_NAME $pregnancyCalculationMethod */



?>


<div class="form-left">


    <form action="./<?php if (!Yii::$app->params['embed']): ?>#result<?php endif; ?>">

        <?= $this->render('/partials/embed/_embed-hidden-input.php'); ?>
        <?= $this->render('/partials/embed/_embed-title'); ?>


        <div class="form-content">

            <div class="col-xs-12 col-sm-6 align-mid">

                <div class="form-left-title"><?= Yii::t('app', 'Choose how many children you want to give birth to:') ?></div>


                <select id="cycle-length-from" name="choose" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['choose'] == 1) {
                        echo 'selected';
                    } else if ($getSpecify == 1) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '1 girl') ?></option>
                    <option value="2" <?php if ($getParams['choose'] == 2) {
                        echo 'selected';
                    } else if ($getSpecify == 2) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '2 girls') ?></option>
                    <option value="3" <?php if ($getParams['choose'] == 3) {
                        echo 'selected';
                    } else if ($getSpecify == 3) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '3 girls') ?></option>
                    <option value="4" <?php if ($getParams['choose'] == 4) {
                        echo 'selected';
                    } else if ($getSpecify == 4) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '4 girls') ?></option>

                    <option value="5" <?php if ($getParams['choose'] == 5) {
                        echo 'selected';
                    } else if ($getSpecify == 5) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '1 boy') ?></option>
                    <option value="6" <?php if ($getParams['choose'] == 6) {
                        echo 'selected';
                    } else if ($getSpecify == 6) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '2 boys') ?></option>
                    <option value="7" <?php if ($getParams['choose'] == 7) {
                        echo 'selected';
                    } else if ($getSpecify == 7) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '3 boys') ?></option>
                    <option value="8" <?php if ($getParams['choose'] == 8) {
                        echo 'selected';
                    } else if ($getSpecify == 8) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '4 boys') ?></option>


                    <option value="9" <?php if ($getParams['choose'] == 9) {
                        echo 'selected';
                    } else if ($getSpecify == 9) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '1 girl, 1 boy') ?></option>
                    <option value="10" <?php if ($getParams['choose'] == 10) {
                        echo 'selected';
                    } else if ($getSpecify == 10) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '1 girl, 2 boys') ?></option>
                    <option value="11" <?php if ($getParams['choose'] == 11) {
                        echo 'selected';
                    } else if ($getSpecify == 11) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '2 girls, 1 boy') ?></option>
                    <option value="12" <?php if ($getParams['choose'] == 12) {
                        echo 'selected';
                    } else if ($getSpecify == 12) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '2 girls, 2 boys') ?></option>
                    <option value="13" <?php if ($getParams['choose'] == 13) {
                        echo 'selected';
                    } else if ($getSpecify == 13) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '3 girls, 1 boy') ?></option>
                    <option value="14" <?php if ($getParams['choose'] == 14) {
                        echo 'selected';
                    } else if ($getSpecify == 14) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '3 girls, 2 boys') ?></option>
                    <option value="15" <?php if ($getParams['choose'] == 15) {
                        echo 'selected';
                    } else if ($getSpecify == 15) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '3 girls, 3 boys') ?></option>
                    <option value="16" <?php if ($getParams['choose'] == 16) {
                        echo 'selected';
                    } else if ($getSpecify == 16) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '1 girl, 3 boys') ?></option>
                    <option value="17" <?php if ($getParams['choose'] == 17) {
                        echo 'selected';
                    } else if ($getSpecify == 17) {
                        echo 'selected';
                    } ?> >
                        <?= Yii::t('app', '2 girls, 3 boys') ?></option>

                </select>

            </div>


            <div class="col-xs-12 col-sm-6 align-mid">

                <div class="clearfix"></div>
                <div class="form-ad col-12">
                    <a name="result"></a>

                    <?= $this->render('/partials/ads/_ads_5')
                    ?>


                </div>
            </div>

        </div>

        <div>
            <div class="form-button-div">
                <br>
                <br>
                <input class="btn btn-success form-button" type="submit" value="<?= Yii::t('app', 'Calculate') ?>"
                       id="button_calc">
                <?= $this->render('/partials/embed/_embed-label-link.php'); ?>
            </div>


        </div>
        <?php if (!Yii::$app->params['embed']): ?>
            <br>
        <?php endif; ?>
    </form>

</div>


<div class="<?php if (($result['viewResult'] <> 0) or Yii::$app->params['embed']): ?>result-div-on<?php else: ?>result-div-off<?php endif ?>">

        <span class="form-result">
            <?= Yii::t('app', 'Result') ?>
        </span>

    <br><br>
    <div class="result-div-text">
            <span class="result-pre-text">

                <?= Yii::t('app', 'The probability of the selected option:') ?>
                <?= $result['probabilityOfBirth'] ?> %<br><br>





            </span>


    </div>
</div>

<?= $this->render('/partials/embed/_embed-link-to-embed.php'); ?>

<?= $this->render('/partials/share-social/_share-social.php'); ?>










<?php

?>




