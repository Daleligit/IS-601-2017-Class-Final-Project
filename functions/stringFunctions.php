<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/3/2017
 * Time: 11:06 PM
 */
    namespace functions;
    class stringFunctions {
        static public function printThis($input) {
            print($input);
        }
        static public function rightTrim($inputArray, $chr) {
            return rtrim($inputArray, $chr);
        }
    }
?>