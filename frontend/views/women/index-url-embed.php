<?php

/* @var $this yii\web\View */

if (isset($getParams['date']))
    $this->params['calculationDate'] = $getParams['date'];
else $this->params['calculationDate'] = (new \DateTime())->format('d-m-Y');

$this->params['getUrls'] = $getUrls;
$this->params['icon'] = $getPages['icon'];
?>

<div class="container container-no-top-padding-extended-embed">


            <?php

            echo  $this->render($getPages['pageName'], [
                'getSpecify' => $getPages['specify'],
                'getParams' => $getParams,
                'result' => $result,

            ])  ?>





</div>