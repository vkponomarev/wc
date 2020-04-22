<?php

/* @var $this \yii\web\View */
/* @var $content string */




?>



                <?php foreach (Yii::$app->params['menu'] as $item): ?>
                    <?php if($item['parent_id'] == 0): ?>
                    <li class="dropdown dropdown-menu-hover"><a
                                href="/<?= Yii::$app->language ?>/<?= $item['url']; ?>/"
                                class="dropdown-toggle dropdown-a-extended"
                                data-toggle="dropdown" role="button"
                                aria-haspopup="false" aria-expanded="true">
                            <?= $item['menu_name']; ?>

                            <span class="caret">

                                    </span>
                        </a>
                        <ul class="dropdown-menu dropdown-extended">
                            <li class="show-only-small-resolution dropdown-li-extended"><a href="/<?= Yii::$app->language ?>/"
                                                                                           class="dropdown-li-a-extended">

                                    <?= $item['menu_name']; ?>

                                </a></li>



                                <?php foreach (Yii::$app->params['menu'] as $itemParent): ?>
                                    <?php if($itemParent['parent_id'] == $item['id']): ?>
                                    <li class="dropdown-li-extended">
                                        <a href="/<?= Yii::$app->language ?>/<?= $itemParent['url']; ?>/"
                                           class="dropdown-li-a-extended">

                                            <?= $itemParent['menu_name']; ?>

                                        </a></li>
                                    <?php endif; ?>
                                <?php endforeach ?>



                        </ul>
                    </li>
                    <?php endif; ?>
                <?php endforeach ?>


                </li>

