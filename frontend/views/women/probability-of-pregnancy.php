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
/*

Калькулятор беременности

*/


?>


<div class="form-left">


    <form action="./<?php if (!Yii::$app->params['embed']): ?>#result<?php endif; ?>">

        <?= $this->render('/partials/embed/_embed-hidden-input.php'); ?>
        <?= $this->render('/partials/embed/_embed-title'); ?>


        <div class="form-content">

            <div class="col-xs-12 col-sm-6 align-mid">

                <div class="form-element-title">
                    <?= Yii::t('app', 'Age (18 - 44):') ?>
                </div>

                <input id="cycle-length-from" name="age" class="form-control select-extended" type="text"
                       size="40"
                       value="<?php if ($getParams['age']): ?><?= $getParams['age'] ?><?php else: ?>25<?php endif ?>">




                <div class="form-left-title"><?= Yii::t('app', 'Method of contraception:') ?></div>


                <select id="cycle-length-from" name="contraception" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['contraception']==1) {echo 'selected';} else if ($getSpecify==1) {echo 'selected';}?> >
                        <?=Yii::t('app','Unprotected intercourse')?></option>
                    <option value="2" <?php if ($getParams['contraception']==2) {echo 'selected';} else if ($getSpecify==2) {echo 'selected';}?> >
                        <?=Yii::t('app','Unprotected intercourse during menstruation')?></option>
                    <option value="3" <?php if ($getParams['contraception']==3) {echo 'selected';} else if ($getSpecify==3) {echo 'selected';}?> >
                        <?=Yii::t('app','Unprotected intercourse the day before menstruation')?></option>

                    <option value="19" <?php if ($getParams['contraception']==19) {echo 'selected';} else if ($getSpecify==19) {echo 'selected';}?> >
                        <?=Yii::t('app','Unprotected intercourse after menstruation')?></option>

                    <option value="4" <?php if ($getParams['contraception']==4) {echo 'selected';} else if ($getSpecify==4) {echo 'selected';}?> >
                        <?=Yii::t('app','Unprotected intercourse on the day of ovulation')?></option>


                    <option value="5" <?php if ($getParams['contraception']==5) {echo 'selected';} else if ($getSpecify==5) {echo 'selected';}?> >
                        <?=Yii::t('app','Interrupted sexual intercourse')?></option>

                    <option value="6" <?php if ($getParams['contraception']==6) {echo 'selected';}?> >
                        <?=Yii::t('app','Calendar method')?></option>

                    <option value="7" <?php if ($getParams['contraception']==7) {echo 'selected';}?> >
                        <?=Yii::t('app','Spermicides')?></option>
                    <option value="8" <?php if ($getParams['contraception']==8) {echo 'selected';}?> >
                        <?=Yii::t('app','Condom (female)')?></option>
                    <option value="9" <?php if ($getParams['contraception']==9) {echo 'selected';}?> >
                        <?=Yii::t('app','Condom (male)')?></option>

                    <option value="10" <?php if ($getParams['contraception']==10) {echo 'selected';}?> >
                        <?=Yii::t('app','Cervical caps (giving birth)')?></option>
                    <option value="11" <?php if ($getParams['contraception']==11) {echo 'selected';}?> >
                        <?=Yii::t('app','Cervical caps (nulliparous)')?></option>

                    <option value="12" <?php if ($getParams['contraception']==12) {echo 'selected';}?> >
                        <?=Yii::t('app','Vaginal diaphragm')?></option>
                    <option value="13" <?php if ($getParams['contraception']==13) {echo 'selected';}?> >
                        <?=Yii::t('app','Intrauterine device')?></option>

                    <option value="14" <?php if ($getParams['contraception']==14) {echo 'selected';}?> >
                        <?=Yii::t('app','Complex hormonal')?></option>
                    <option value="15" <?php if ($getParams['contraception']==15) {echo 'selected';}?> >
                        <?=Yii::t('app','Progestogen contraceptives')?></option>
                    <option value="16" <?php if ($getParams['contraception']==16) {echo 'selected';}?> >
                        <?=Yii::t('app','Symptothermal method of recognition of fertility')?></option>

                    <option value="17" <?php if ($getParams['contraception']==17) {echo 'selected';}?> >
                        <?=Yii::t('app','Sterilization (female)')?></option>
                    <option value="18" <?php if ($getParams['contraception']==18) {echo 'selected';}?> >
                        <?=Yii::t('app','Sterilization (male)')?></option>

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
        <?php if (!Yii::$app->params['embed']):?>
            <br>
        <?php endif;?>
    </form>

</div>


<div class="<?php if (($result['viewResult'] <> 0) or Yii::$app->params['embed']): ?>result-div-on<?php else: ?>result-div-off<?php endif ?>">

        <span class="form-result">
            <?= Yii::t('app', 'Result') ?>
        </span>

    <br><br>
    <div class="result-div-text">
            <span class="result-pre-text">

                  <?php if ($result['pregnancyProbability'][1]): ?>
                      <?= Yii::t('app', 'Likelihood of a miscarriage:') ?> <?= $result['pregnancyProbability'][5] ?> %<br><br>


                      <?= Yii::t('app', 'The probability of becoming pregnant depending on age:') ?><br>
                <?= Yii::t('app', 'for 1 month:') ?> <?= $result['pregnancyProbability'][1] ?> %<br>
                <?= Yii::t('app', 'for 6 months:') ?> <?= $result['pregnancyProbability'][2] ?> %<br>
                <?= Yii::t('app', 'for 1 year:') ?> <?= $result['pregnancyProbability'][3] ?> %<br>
                <?= Yii::t('app', 'for 2 years:') ?> <?= $result['pregnancyProbability'][4] ?> %<br>

                  <?php endif;?>
<br>
                <?= Yii::t('app', 'The likelihood of becoming pregnant, depending on the contraception chosen:') ?><br>
                <?php if ($result['contraceptionPoints'][1]): ?>
                    <?= Yii::t('app', 'Pearl Index:') ?> <?= $result['contraceptionPoints'][1] ?><br>
                <?php endif;?>
                <?php if ($result['contraceptionPoints'][2]): ?>
                    <?= Yii::t('app', 'probability:') ?> <?= $result['contraceptionPoints'][2] ?> %<br>
                <?php endif;?>

            </span>

    </div>
</div>

<?= $this->render('/partials/embed/_embed-link-to-embed.php'); ?>

<?= $this->render('/partials/share-social/_share-social.php'); ?>










<?php

?>




