<?php

// lod config
require_once 'config/config.php';


// autolod core libries
spl_autoload_register(function($className){

    require_once 'libaries/'.$className.'.php';

});
