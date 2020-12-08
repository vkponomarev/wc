<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.08.19
 * Time: 16:24
 */

?>

<div class="form-left">

   <form action="./<?php if (!Yii::$app->params['embed']): ?>#result<?php endif; ?>">

        <?= $this->render('/partials/embed/_embed-hidden-input.php'); ?>
        <?= $this->render('/partials/embed/_embed-title'); ?>

        <div class="form-content">

            <div class="col-xs-12 col-sm-6 align-mid">

                <div class="form-left-title"><?= Yii::t('app', 'Choose mother\'s blood type:') ?></div>

                <select id="cycle-length-from" name="mother-blood-type" class="form-control select-extended">

                    <?php for ($i = 1; $i <= 4; $i++): ?>
                        <option value="<?= $i ?>"
                            <?php if ($getParams['motherBloodType']) {
                                if ($i == $getParams['motherBloodType'])
                                    echo 'selected="selected"';
                            } elseif ($i == 1) {
                                echo 'selected="selected"';
                            }
                            ?>
                        ><?= $i ?>
                        </option>
                    <?php endfor; ?>

                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Choose father\'s blood type:') ?></div>

                <select id="cycle-length-from" name="father-blood-type" class="form-control select-extended">

                    <?php for ($i = 1; $i <= 4; $i++): ?>
                        <option value="<?= $i ?>"
                            <?php if ($getParams['fatherBloodType']) {
                                if ($i == $getParams['fatherBloodType'])
                                    echo 'selected="selected"';
                            } elseif ($i == 1) {
                                echo 'selected="selected"';
                            }
                            ?>
                        ><?= $i ?>
                        </option>
                    <?php endfor; ?>

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

<div class="<?php if (($result <> 'n') or Yii::$app->params['embed']): ?>result-div-on<?php else: ?>result-div-off<?php endif ?>">

        <span class="form-result">
            <?= Yii::t('app', 'Result') ?>
        </span>

    <br><br>
    <div class="result-div-text">
            <span class="result-main-text">
                <?php if ($result == 'g'): ?>
                    <?= Yii::t('app', 'You will have a girl') ?>
                <?php else: ?>
                    <?= Yii::t('app', 'You will have a boy') ?>
                <?php endif; ?>
                    <br>
            </span>

    </div>
</div>

<?= $this->render('/partials/embed/_embed-link-to-embed.php'); ?>

<?= $this->render('/partials/share-social/_share-social.php'); ?>

