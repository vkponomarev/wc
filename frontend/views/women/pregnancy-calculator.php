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




            <form action="./<?php if (!Yii::$app->params['embed']):?>#result<?php endif;?>">

                <?=$this->render('/partials/embed/_embed-hidden-input.php');?>
                <?=$this->render('/partials/embed/_embed-title');?>

                <div class="col-xs-12 col-sm-6 align-mid">

                    <div class="form-left-title"><?=Yii::t('app','Pregnancy calculation method:')?></div>

                    <div>
                        <label class="form-left-label" id="form-label-id-one">
                            <span class="form-radio">
                                <?php if ($getParams['method'] == 1):?>
                                    <input type="radio" name="method" value="1" checked="checked" class="">
                                <?php elseif (!$getParams['method']): ?>
                                    <input type="radio" name="method" value="1" checked="checked" class="">
                                <?php else: ?>
                                    <input type="radio" name="method" value="1" class="">
                                <?php endif; ?>

                            </span>
                            <span class="form-radio"><?=Yii::t('app','By date of last period')?></span>
                        </label>

                        <br>

                        <label class="form-left-label" id="form-label-id-two">
                            <span class="form-radio">

                                <?php if ($getParams['method'] == 2): ?>
                                    <input type="radio" name="method" checked="checked" value="2">
                                <?php else: ?>
                                    <input type="radio" name="method" value="2">
                                <?php endif ?>

                            </span>

                            <span class="form-radio"><?=Yii::t('app','By date of conception')?></span>
                        </label>

                    </div>

                </div>


                <div class="col-xs-12 col-sm-6 align-mid">
                    <hr class="form-hr-xs-block">

                    <div class="form-choose-date-text-1"
                    id="form-radio-choose-text-one">
                        <?=Yii::t('app','Select the first day of your last period:')?>
                    </div>
                    <div class="form-choose-date-text-2"
                    id="form-radio-choose-text-two">
                        <?=Yii::t('app','Select the date of conception:')?>
                    </div>

                    <?= $this->render('/partials/date-picker/_standard-date-picker.php')?>

                </div>


                <div class="clearfix"></div>
                <div class="form-ad col-12">
                    <a name="result"></a>

                <?= $this->render('/partials/ads/_ads_5')
                ?>



            </div>
            <br>

            <div class="form-button-div" >

                <input class="btn btn-success form-button" type="submit" value="<?=Yii::t('app','Calculate pregnancy')?>"
                   id="button_calc">
     <?=$this->render('/partials/embed/_embed-label-link.php');?>

            </div>
            <?php if (!Yii::$app->params['embed']):?>
            <br>
        <?php endif;?>

    </form>

        </div>


        <div class="<?php if (($result['pregnancyCalculationDivShow']) or Yii::$app->params['embed']):?>result-div-on<?php else: ?>result-div-off<?php endif ?>">

            <span class="form-result">

                <?=Yii::t('app','Result')?>

            </span>

            <br><br>

            <div class="result-div-text">
                <span class="result-pre-text">
                    <?=Yii::t('app','Your gestational age:')?>
                    <br>
                </span>
                <span class="result-main-text">


                    <?php if ($result['pregnancyCalculationException'] == 'echoPlanning'): ?>

                        <?=Yii::t('app','You are planning a pregnancy')?>

                    <?php endif ?>

                    <?php if ($result['pregnancyCalculationException'] == 'echoHaveBaby'): ?>

                        <?=Yii::t('app','You have already given birth to a baby')?>

                    <?php endif ?>

                    <?php if ($result['pregnancyCalculationException'] == 'echoWeeks'): ?>

                        <?= Yii::t('app', '{n,plural, one{# week} few{# weeks} other{# weeks}}', ['n' => $result['pregnancyWeeks']]) ?>

                    <?php endif ?>

                </span>
            </div>

            <div class="result-div-text">

                <span class="result-pre-text">
                    <?=Yii::t('app','Estimated due date:')?><br>
                </span>

                <span class="result-main-text">
                    <?= $result['dueDate']; ?>
                </span>

            </div>

        </div>




        <?=$this->render('/partials/embed/_embed-link-to-embed.php');?>

        <?=$this->render('/partials/share-social/_share-social.php');?>


<script>
    document.getElementById('form-label-id-one').onclick = function () {

        document.getElementById('form-radio-choose-text-one').style.display = 'block';
        document.getElementById('form-radio-choose-text-two').style.display = 'none';
    };
    document.getElementById('form-label-id-two').onclick = function () {

        document.getElementById('form-radio-choose-text-one').style.display = 'none';
        document.getElementById('form-radio-choose-text-two').style.display = 'block';
    };

</script>




<?php

?>




