<?php

/* 
base controller
*lod thre model and view
*/

class controller{

// lode mode
public function model($model){
    // requir model 
    require_once '../app/models/'.$model.'.php';

    // instatiate model
    return new $model();
}
//lod the view 
public function view($view,$data=[]){
    // check for view file
    if(file_exists('../app/views/'.$view.'.php')){
      require_once '../app/views/'.$view.'.php';

    }else{
        // view  des not exsist
        die('view des not exsist');
    }

}


}

?>