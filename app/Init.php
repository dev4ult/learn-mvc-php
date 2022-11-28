<?php

// require_once 'core/App.php';
// require_once 'core/Controller.php';

spl_autoload_register(function ($class) {
 require_once "core/$class.php";
});