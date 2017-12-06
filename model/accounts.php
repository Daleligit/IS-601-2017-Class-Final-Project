<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/3/2017
 * Time: 11:01 PM
 */
    namespace model;
    final class accounts extends \core\database\model {
        public $id;
        public $email;
        public $fname;
        public $lname;
        public $phone;
        public $birthday;
        public $gender;
        public $password;
        protected static $modelName = 'accounts';
        public function __construct()
        {
            $this->tableName = 'accounts';
        }
    }
?>