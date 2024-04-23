<?php
namespace app\models;

use Yii;
use yii\base\Model;


class PersonForm extends Model{

    public $name;
    public $id;
    public $country_id;
   
    

    public function rules(){
        return[
            [['name','country_id'],'required'],
            
            
        ];
    }
}