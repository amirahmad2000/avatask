<?php 

use yii\helpers\Url;


echo
    '<table style="width:100%; border: 1px; solid:black; text-align:center;">'. 
     '<tr>'. 
      '<th>id</th>'. 
      '<th>name</th>'. 
      '<th>country_id</th>'.
     '</tr>'; 
     

 foreach($persons as $person){
    
  
    echo
    '<tr>'. 
     '<td>'. $person->id. '</td>'.
     '<td>'. $person->name. '</td>'.
     '<td>'. $person->country_id. '</td>'.
     
    '</tr>';

 }
   
    



echo '</table>';