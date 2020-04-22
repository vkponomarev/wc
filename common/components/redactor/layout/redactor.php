<?php

use common\components\redactor\Redactor;

$model =  new Redactor($pageID);

echo  $this->render('../../common/components/redactor/_redactor', $model);


?>
