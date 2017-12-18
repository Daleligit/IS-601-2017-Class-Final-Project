<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/5/2017
 * Time: 9:26 PM
 */
    namespace core\utility;
    use \functions\htmlTags as nameSpc;
    class htmlTable {
        static public function createTaskTable($inputArray, $needID)
        {
            $table = nameSpc::tableHead('displayTable');
            foreach ($inputArray as $key => $line) {
                if ($key == 0) {
                    $table .= nameSpc::tableLineStart();
                    foreach ($line as $columns => $value) {
                        if ($columns == 'id') {
                            if ($needID == 1){
                                $table .= nameSpc::tableTitle('');
                            }
                        } else if ($columns != 'owneremail' && $columns != 'ownerid') {
                            $table .= nameSpc::tableTitle($columns);
                        }
                    }
                    $table .= nameSpc::tableLineEnd();
                    break;
                }
            }
            return $table;
        }
        static public function createTaskList ($inputArray) {
            $table = self::createTaskTable($inputArray,1);
            foreach ($inputArray as $key => $line) {
                $table .= nameSpc::tableLineStart();
                foreach ($line as $columns => $value) {
                    if ($columns == 'id'){
                        $valueLink = nameSpc::hyperLink('index.php?page=tasks&action=show&id=' . $value, 'View');
                        $table .= nameSpc::tableDetail($valueLink);
                    } else if ($columns != 'owneremail' && $columns != 'ownerid') {
                        $table .= nameSpc::tableDetail($value);
                    }
                }
                $table .= nameSpc::tableLineEnd();
            }
            $table .= nameSpc::tableEnd();
            return $table;
        }
        static public function showTaskTable ($inputArray) {
            $table = self::createTaskTable($inputArray,0);
            foreach ($inputArray as $key => $line) {
                $table .= nameSpc::tableLineStart();
                foreach ($line as $columns => $value) {
                    if ($columns != 'id' && $columns != 'owneremail' && $columns != 'ownerid') {
                        $table .= nameSpc::tableDetail($value);
                    }
                }
                $table .= nameSpc::tableLineEnd();
            }
            $table .= nameSpc::tableEnd();
            return $table;
        }
    }
?>