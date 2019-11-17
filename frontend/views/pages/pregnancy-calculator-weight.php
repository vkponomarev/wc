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
use dosamigos\datepicker\DatePicker;

?>


    <div class="form-left">

        <form action="./#result">
            <div class="form-content">
                <div class="col-xs-12 col-sm-6 align-mid">

                    <div class="form-element-title">
                        <?=Yii::t('app','Weight before pregnancy:')?>
                    </div>

                    <input name="weight-before-pregnancy" class="form-control select-extended" type="text" size="40"
                           value="<?php if ($pregnancyWeightCalculationData['pregnancyWeightCalculationWeightBeforePregnancy']): ?><?=$pregnancyWeightCalculationData['pregnancyWeightCalculationWeightBeforePregnancy']?><?php else:?>50.2<?php endif?>">

                    <div class="form-element-title">
                        <?=Yii::t('app','Your gestational age:')?>
                    </div>

                    <select name="pregnancy-week" class="form-control select-extended">

                        <?php for ($i=1;$i<=40;$i++):?>
                            <option value="<?=$i?>"
                                <?php if ($pregnancyWeightCalculationData['pregnancyWeightCalculationPregnancyWeek']){
                                    if ($i==$pregnancyWeightCalculationData['pregnancyWeightCalculationPregnancyWeek'])
                                        echo 'selected="selected"';
                                } elseif ($i==1){
                                    echo 'selected="selected"';
                                }
                                ?>
                            ><?= Yii::t('app', '{n,plural, one{# week} few{# weeks} other{# weeks}}', ['n' => $i]) ?>
                            </option>
                        <?php endfor;?>

                    </select>

                    <div class="form-element-title">
                        <?=Yii::t('app','Current weight:')?>
                    </div>

                    <input name="weight-after-pregnancy" class="form-control select-extended" type="text" size="40"
                           value="<?php if ($pregnancyWeightCalculationData['pregnancyWeightCalculationWeightAfterPregnancy']): ?><?=$pregnancyWeightCalculationData['pregnancyWeightCalculationWeightAfterPregnancy']?><?php else:?>50.2<?php endif?>">


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



    <div class="<?php if ($pregnancyWeightCalculation['viewResult']==1):?>result-div-on<?php else: ?>result-div-off<?php endif ?>">

            <span class="form-result">

                <?=Yii::t('app','Result')?>

            </span>


        <br><br>


        <div class="result-div-text">

                <span class="result-pre-text">
                     <?=Yii::t('app','Pregnancy week:')?>
                    <?=$pregnancyWeightCalculation['pregnancyWeek']?>
                    <br>
                    <?=Yii::t('app','Current weight:')?>
                    <?=$pregnancyWeightCalculation['pregnancyWeight']?> <?=Yii::t('app','kg')?>
                    <br>
                    <?=Yii::t('app','Weight which should be:')?>
                    <?=$pregnancyWeightCalculation['pregnancyWeightShouldBe']?> <?=Yii::t('app','kg')?>
                    <br>
                    <?=Yii::t('app','Weight difference:')?>
                    <?=$pregnancyWeightCalculation['pregnancyDifference']?> <?=Yii::t('app','kg')?>
                    <br>
                    <?php if ($pregnancyWeightCalculation['fetusHeight']): ?>
                    <?=Yii::t('app','Fetal length:')?>
                    <?=$pregnancyWeightCalculation['fetusHeight']?> <?=Yii::t('app','cm')?>
                    <br>
                    <?php endif; ?>

                    <?php if ($pregnancyWeightCalculation['fetusWeight']): ?>
                    <?=Yii::t('app','Fetal weight:')?>
                    <?=$pregnancyWeightCalculation['fetusWeight']?> <?=Yii::t('app','gm')?>
                    <br>
                    <?php endif; ?>

                    <?php if ($pregnancyWeightCalculation['fetusHeadSize']): ?>
                    <?=Yii::t('app','Fetal head size:')?>
                    <?=$pregnancyWeightCalculation['fetusHeadSize']?> <?=Yii::t('app','cm')?>
                    <br>
                    <?php endif; ?>

                    <?php if ($pregnancyWeightCalculation['fetusHipLength']): ?>
                    <?=Yii::t('app','Fetal femur length:')?>
                    <?=$pregnancyWeightCalculation['fetusHipLength']?> <?=Yii::t('app','cm')?>
                    <br>
                    <?php endif; ?>

                    <?php if ($pregnancyWeightCalculation['fetusChestDiameter']): ?>
                    <?=Yii::t('app','Fetal chest diameter:')?>
                    <?=$pregnancyWeightCalculation['fetusChestDiameter']?> <?=Yii::t('app','cm')?>
                    <?php endif; ?>


                    <?php
                    //Yii::$app->formatter->baseUnits['UNIT_LENGTH']['UNIT_SYSTEM_IMPERIAL'] = 'inch';

                    //Yii::$app->formatter->measureUnits['length']['metric'] = 10;

                    //echo Yii::$app->formatter->asLength($pregnancyWeightCalculation['fetusChestDiameter']);
                    //echo Yii::$app->formatter->asShortLength($pregnancyWeightCalculation['fetusChestDiameter']);

                    //echo Yii::$app->formatter->baseUnits['length']['metric'] = 1;
                    //echo Yii::$app->formatter->baseUnits['length']['metric'] = 10;
                    //echo Yii::$app->formatter->baseUnits['length']['metric'] = 1000;
                    /*Yii::$app->formatter->baseUnits['weight']['imperial'] = 1000;

                    echo  '<br>';
                    echo Yii::$app->formatter->asWeight(0) . '<br>';
                    echo Yii::$app->formatter->asWeight(0.5) . '<br>';
                    echo Yii::$app->formatter->asWeight(1) . '<br>';
                    echo Yii::$app->formatter->asWeight(1.6) . '<br>';
                    echo Yii::$app->formatter->asWeight(4000) . '<br>';*/

                    /*Yii::$app->formatter->baseUnits['length']['metric'] = 1000;

                    echo Yii::$app->formatter->asShortLength(0) . '<br>';
                    echo Yii::$app->formatter->asShortLength(0.5) . '<br>';
                    echo Yii::$app->formatter->asShortLength(1) . '<br>';
                    echo Yii::$app->formatter->asShortLength(1.6) . '<br>';
                    echo Yii::$app->formatter->asShortLength(4000) . '<br>';*/


                   /* echo  '<br>';
                    echo Yii::$app->formatter->baseUnits['length']['metric'] = 10;
                    echo  '<br>';
                    echo Yii::$app->formatter->asShortLength(0) . '<br>';
                    echo Yii::$app->formatter->asShortLength(0.55) . '<br>';
                    echo Yii::$app->formatter->asShortLength(1) . '<br>';
                    echo Yii::$app->formatter->asShortLength(2.7) . '<br>';
                    echo Yii::$app->formatter->asShortLength(10) . '<br>';


                    echo Yii::$app->formatter->asLength(0) . '<br>';
                    echo Yii::$app->formatter->asLength(0.55) . '<br>';
                    echo Yii::$app->formatter->asLength(1) . '<br>';
                    echo Yii::$app->formatter->asLength(2.7) . '<br>';
                    echo Yii::$app->formatter->asLength(10) . '<br>';

                    Yii::$app->formatter->baseUnits['length']['metric'] = 10;
                    echo Yii::$app->formatter->asShortLength(0) . '<br>';
                    echo Yii::$app->formatter->asShortLength(0.55) . '<br>';
                    echo Yii::$app->formatter->asShortLength(1) . '<br>';
                    echo Yii::$app->formatter->asShortLength(2.7) . '<br>';
                    echo Yii::$app->formatter->asShortLength(10) . '<br>';

                    Yii::$app->formatter->baseUnits['length']['metric'] = 10;
                    echo Yii::$app->formatter->asLength(0) . '<br>';
                    echo Yii::$app->formatter->asLength(0.55) . '<br>';
                    echo Yii::$app->formatter->asLength(1) . '<br>';
                    echo Yii::$app->formatter->asLength(2.7) . '<br>';
                    echo Yii::$app->formatter->asLength(10) . '<br>';


                    Yii::$app->formatter->baseUnits['length']['metric'] = 10;
                    echo Yii::$app->formatter->asShortLength(0) . '<br>';
                    echo Yii::$app->formatter->asShortLength(0.55) . '<br>';
                    echo Yii::$app->formatter->asShortLength(1) . '<br>';
                    echo Yii::$app->formatter->asShortLength(2.7) . '<br>';
                    echo Yii::$app->formatter->asShortLength(10) . '<br>';

                    Yii::$app->formatter->baseUnits['length']['metric'] = 10;
                    echo Yii::$app->formatter->asLength(0) . '<br>';
                    echo Yii::$app->formatter->asLength(0.55) . '<br>';
                    echo Yii::$app->formatter->asLength(1) . '<br>';
                    echo Yii::$app->formatter->asLength(2.7) . '<br>';
                    echo Yii::$app->formatter->asLength(10) . '<br>';



                    Yii::$app->formatter->baseUnits['length']['imperial'] = 12;
                    echo Yii::$app->formatter->asShortLength(0) . '<br>';
                    echo Yii::$app->formatter->asShortLength(0.55) . '<br>';
                    echo Yii::$app->formatter->asShortLength(1) . '<br>';
                    echo Yii::$app->formatter->asShortLength(2.7) . '<br>';
                    echo Yii::$app->formatter->asShortLength(10) . '<br>';

                    Yii::$app->formatter->baseUnits['length']['imperial'] = 7000;
                    echo Yii::$app->formatter->asLength(0) . '<br>';
                    echo Yii::$app->formatter->asLength(0.55) . '<br>';
                    echo Yii::$app->formatter->asLength(1) . '<br>';
                    echo Yii::$app->formatter->asLength(2.7) . '<br>';
                    echo Yii::$app->formatter->asLength(10) . '<br>';


                    Yii::$app->formatter->baseUnits['weight']['metric'] = 1000;
                    echo Yii::$app->formatter->asShortLength(0) . '<br>';
                    echo Yii::$app->formatter->asShortLength(0.55) . '<br>';
                    echo Yii::$app->formatter->asShortLength(1) . '<br>';
                    echo Yii::$app->formatter->asShortLength(2.7) . '<br>';
                    echo Yii::$app->formatter->asShortLength(10) . '<br>';

                    Yii::$app->formatter->baseUnits['weight']['imperial'] = 437.5;
                    echo Yii::$app->formatter->asLength(0) . '<br>';
                    echo Yii::$app->formatter->asLength(0.55) . '<br>';
                    echo Yii::$app->formatter->asLength(1) . '<br>';
                    echo Yii::$app->formatter->asLength(2.7) . '<br>';
                    echo Yii::$app->formatter->asLength(10) . '<br>';*/


                    //Yii::$app->formatter->baseUnits['length']['metric'] = 1000000;
                    //echo Yii::$app->formatter->asLength('22') . '<br>';
                    //Yii::$app->formatter->baseUnits['length']['metric'] = 100;
                    //Yii::$app->formatter->baseUnits['length']['metric'] = 1000000;
                    //echo Yii::$app->formatter->asShortLength('22') . '<br>';
                    //echo Yii::$app->formatter->asShortLength('0') . '<br>';
                    //echo Yii::$app->formatter->asLength('0.5') . '<br>';
                    //echo Yii::$app->formatter->asShortLength('1') . '<br>';
                    //echo Yii::$app->formatter->asShortLength('2') . '<br>';
                    //echo Yii::$app->formatter->asShortLength('2.7') . '<br>';

                    ?>



                </span>




        </div>

    </div>

    <?=$this->render('/partials/share-social/_share-social.php',['currentLanguages' => $currentLanguages]);?>




<?php
//$childGenderBloodRenewal
?>




