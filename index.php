<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload.php
require_once('vendor/autoload.php');

//instantiate F3 base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function(){
    echo '<h1>Howdy Partner!</h1>';
});

//run fat free
$f3->run();
