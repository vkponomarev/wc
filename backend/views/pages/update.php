<?php


/* @var $this yii\web\View */
/* @var $model common\models\Pages */

$this->title = 'Редактировать страницу: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pages-update">



    <?= $this->render('_form', [
        'model' => $model,
        'parentId' => $parentId,
    ]) ?>

</div>
