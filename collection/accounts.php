<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/3/2017
 * Time: 11:03 PM
 */
    namespace collection;
    final class accounts extends \core\database\collection {
        protected static $modelName = 'accounts';
        public static function findUserbyEmail($email)
        {
            $sql = 'SELECT * FROM ' . self::$modelName . ' WHERE email = \'' . $email . '\'';
            //grab the only record for find one and return as an object
            $recordsSet = self::getResults($sql);
            if (is_null($recordsSet)) {
                return FALSE;
            } else {
                if (isset ($recordsSet[0])) {
                    return $recordsSet[0];
                } else{
                    return FALSE;
                }
            }
        }
    }
?>