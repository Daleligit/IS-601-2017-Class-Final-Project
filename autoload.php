<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/7/2017
 * Time: 2:06 PM
 */
    class Manage
    {
        static public function setDir($input)
        {
            return str_replace('\\', '/', $input) . '.php';
        }
        static public function autoload($class)
        {
            include self::setDir($class);
        }
    }