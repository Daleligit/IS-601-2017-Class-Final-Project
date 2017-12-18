<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/3/2017
 * Time: 11:07 PM
 */
    namespace functions;
    class arrayFunctions
    {
        public static function countNumber($array, $mode)
        {
            return count($array, $mode);
        }

        public static function objToArray($obj)
        {
            foreach ($obj as $key => $objects) {
                $obj[$key] = (array)$objects;
            }
            return $obj;
        }

        public static function arrayPop($array)
        {
            array_pop($array);
            return $array;
        }

        public static function arrayKeys($array)
        {
            return array_keys($array);
        }

        public static function arrayShift($array)
        {
            array_shift($array);
            return $array;
        }

        public static function arrayEnd ($array)
        {
            return end($array);
        }
    }
?>