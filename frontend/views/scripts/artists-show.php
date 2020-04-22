<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
//echo $pageText['title'];

use common\models\components\FlowUrlTransliteration;
use yii\widgets\Pjax;


?>

<?php

function showBigData($bigDataName, $bigDataFull){

    $bigData = new \common\components\bigData\BigData();
    $result = '<br>Count = ' . $bigData->loadData($bigDataName)['process'] . ' из ' .  $bigDataFull . '<br>';
    return $result;

}


//updateArtistsID();

?>
<?php Pjax::begin([
    'id' => 'list-messages',
    'enablePushState' => false,
    'formSelector' => false,
    'linkSelector' => false,
]) ?>
<?php echo showBigData('work' , 170401) ?>
<?php Pjax::end() ?>

<?php $this->registerJs(<<<JS
        function updateList() {
          $.pjax.reload({container: '#list-messages'});
        };
        setInterval(updateList, 500);
JS
); ?>

