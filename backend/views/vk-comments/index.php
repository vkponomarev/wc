<?php

/* @var $this yii\web\View */
/* @var $searchModel common\models\MailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Администрирование комментарниев ВКонтакте';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="mail-index">
    <div id="vk_comments_browse"></div>
    <script type="text/javascript">
        window.onload = function () {
            VK.init({apiId: 7213089, onlyWidgets: true});
            VK.Widgets.CommentsBrowse('vk_comments_browse', {width: 500, limit: 15, mini: 0});
        }
    </script>
</div>
