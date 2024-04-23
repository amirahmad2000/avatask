<?php

use app\models\Country;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;


$countries= Country::find()->all();


?>


<div class="row">

        <div class="col-md-7 mx-auto">

            <div class="card">

                <div class="card-body">

                    <form method="post">
                        <div class="form-group">
                            <label for="name"> نام <sup>*</sup> </label>
                            <input type="text" name="name" class="form-control " value="<?php  $model['name']; ?>">
                            
                        </div>

                        <div class="form-group">
                            <label for="name"> country name<sup>*</sup> </label>
                            <input type="text" name="country_id" class="form-control " value="<?php  $model['country_id']; ?>">
                            
                        </div>

                        <div class="text-center my-4">
                            <button class="btn btn-dark" type="submit"> submit</button>
                        </div>



                    </form>



                </div>
            </div>
        </div>
    </div>    
</div>   