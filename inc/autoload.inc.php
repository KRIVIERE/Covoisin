<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 19/03/18
 * Time: 17:53
 */

spl_autoload_register(function ($class_name) {

    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);

    include '../models/'.$path . '.php';
});