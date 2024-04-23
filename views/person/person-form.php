<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Country;
use app\models\CountryForm;
 




$countries= Country::find()->all();




?>

<?php $form = ActiveForm::begin() ?>


    <?= $form->field($model,'name') ?>


    <?= $form->field($model,'country_id') ?>

    

    



    

    <div class="form-group">
        <?= Html::submitButton('submit',['class'=>'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); 

