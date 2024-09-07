 <?php

//die and dump
function dd($value){
   echo "<pre>";
   var_dump($value);
   echo "</pre>";
}


//nav bar function
  function urlis($value){
     return $_SERVER['REQUEST_URI']=== $value;
  }