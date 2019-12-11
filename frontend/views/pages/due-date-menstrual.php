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

Калькулятор беременности по дате последних месячных

*/


use kartik\date\DatePicker;

?>




    <div class="form-left">

        <form action="./#result">

            <?php if ($this->params['isEmbed']): ?>
                <input type="hidden" name="embed" value="<?=$this->params['isEmbed']?>">
            <?php endif; ?>

            <div class="form-content">
                <div class="col-xs-12 col-sm-6 align-mid">

                    <input type="hidden" name="method" value="1">

                    <div class="form-choose-date-text-1"
                         id="form-radio-choose-text-one">
                        <?=Yii::t('app','Select the first day of your last period:')?>
                    </div>

                    <?= $this->render('/partials/date-picker/_standard-date-picker.php')?>

                </div>

                <div class="col-xs-12 col-sm-6 align-mid">

                    <div class="clearfix"></div>
                    <div class="form-ad col-12">
                        <a name="result"></a>

                        <?= $this->render('/partials/ads/_ads_5', [
                            'allAdvertising' => $allAdvertising])
                        ?>


                    </div>
                </div>
                <br>
            </div>
            <div>
                <div class="form-button-div">
                    <br>
                    <br>
                    <input class="btn btn-success form-button" type="submit" value="<?=Yii::t('app','Calculate pregnancy')?>"
                           id="button_calc">

                </div>
                <br>

            </div>
        </form>

    </div>



    <div class="<?php if ($pregnancyCalculation['pregnancyCalculationDivShow']):?>result-div-on<?php else: ?>result-div-off<?php endif ?>">

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


                    <?php if ($pregnancyCalculation['pregnancyCalculationException'] == 'echoPlanning'): ?>

                        <?=Yii::t('app','You are planning a pregnancy')?>

                    <?php endif ?>

                <?php if ($pregnancyCalculation['pregnancyCalculationException'] == 'echoHaveBaby'): ?>

                        <?=Yii::t('app','You have already given birth to a baby')?>

                <?php endif ?>

                <?php if ($pregnancyCalculation['pregnancyCalculationException'] == 'echoWeeks'): ?>

                    <?= Yii::t('app', '{n,plural, one{# week} few{# weeks} other{# weeks}}', ['n' => $pregnancyCalculation['pregnancyWeeks']]) ?>

                <?php endif ?>

                </span>
        </div>


        <div class="result-div-text">

                <span class="result-pre-text">
                    <?=Yii::t('app','Estimated due date:')?><br>
                </span>


            <span class="result-main-text">
                    <?= $pregnancyCalculation['dueDate']; ?>
                </span>

        </div>

    </div>

    <?=$this->render('/partials/share-social/_share-social.php',['currentLanguages' => $currentLanguages]);?>





<?php
 
?>




