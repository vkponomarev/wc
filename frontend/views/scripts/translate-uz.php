<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
//echo $pageText['title'];

use common\models\Pages;
use yii\widgets\Pjax;


?>

<?php

function showTranslationsUZ(){

    $pages = Pages::find()->andWhere(['active' => 1])->all();
    $translationsRU = \common\models\PagesText::find()->andWhere(['languages_id' => 1])->all();
    $translationsUZ = \common\models\PagesText::find()->andWhere(['languages_id' => 38])->all();

    foreach ($pages as $page) {

        $keyUZ = array_search($page['id'], array_column($translationsUZ, 'pages_id'));
        $keyRU = array_search($page['id'], array_column($translationsRU, 'pages_id'));

        echo '<br>';
        echo 'Ссылка на страницу: <a href="https://womencalc.com/uz/' . $page['url'] . '/">https://womencalc.com/uz/' . $page['url'] . '/</a><br>';
        echo 'Menu Name = \'' . $translationsRU[$keyRU]['menu_name'] . '\' => \'' . $translationsUZ[$keyUZ]['menu_name'] . '\'<br>';
        echo 'Index Name = ' . $translationsRU[$keyRU]['index_name'] . '\' => \'' . $translationsUZ[$keyUZ]['index_name'] . '\'<br>';
        echo 'Title = ' . $translationsRU[$keyRU]['title'] . '\' => \'' . $translationsUZ[$keyUZ]['title'] . '\'<br>';
        echo 'Plates title = ' . $translationsRU[$keyRU]['plates_title'] . '\' => \'' . $translationsUZ[$keyUZ]['plates_title'] . '\'<br>';
        echo 'Description = ' . $translationsRU[$keyRU]['description'] . '\' => \'' . $translationsUZ[$keyUZ]['description'] . '\'<br>';
        echo 'Text1 = ' . $translationsRU[$keyRU]['text1'] . '\' => \'' . $translationsUZ[$keyUZ]['text1'] . '\'<br>';

    }


}


//updateArtistsID();
showTranslationsUZ();
?>

