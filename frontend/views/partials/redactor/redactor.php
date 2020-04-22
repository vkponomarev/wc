<?php

use common\components\redactor\Redactor;

$model =  new Redactor($pageID);

//echo '<pre>';
//var_dump($texts);
//print_r($model);
//echo '</pre>';


echo  $this->render('/partials/redactor/_redactor', [
    'model' => $model->model,
    'pageID' =>$pageID
]);

?>
