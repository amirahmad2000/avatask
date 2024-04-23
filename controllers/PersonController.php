<?php 

namespace app\controllers;


use Yii;
use yii\web\Controller;
use yii\web\Response;

use app\models\Person;
use app\models\PersonForm;
use app\models\Country;
use app\models\CountryForm;


class PersonController extends Controller {

    public function actionGetPersons(){
        //country/get-countries
 
        $persons= Person::find()->all(); //[]
 
        return $this->render('person-index',['persons'=>$persons]);
     }

     public function actionGetPersoncountries(){
        //country/get-countries
 
        $countries= Country::find()->all(); //[]
 
        return $this->render('person-form',['countries'=>$countries]);
        
     } 


     public function actionCreatePersons(){

        $model = new PersonForm();

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $person = new Person();

            $name = $model['name'];
            // $id = $model['id'];
            $country_id = $model['country_id'];

            $person->name = $name;
            $person->country_id = $country_id;
            $countries= Country::find()->all();

            $person->save();

            return $this->redirect('get-persons');
            





        } else{
            return $this->render('person-form',['model'=>$model]);
            
        }  


     }
    
}