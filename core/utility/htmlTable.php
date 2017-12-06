<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/5/2017
 * Time: 9:26 PM
 */
    namespace core\utility;
    use \functions as nameSpc;
    class htmlTable {
        static public function createTable($inputArray)
        {
            $table = nameSpc\htmlTags::tableHead('displayTable');
            foreach ($inputArray as $key => $line) {
                if ($key == 0) {
                    $table .= nameSpc\htmlTags::tableLineStart();
                    foreach ($line as $columns => $value) {
                        $table .= nameSpc\htmlTags::tableTitle($columns);
                    }
                    $table .= nameSpc\htmlTags::tableLineEnd();
                }
                $table .= nameSpc\htmlTags::tableLineStart();
                foreach ($line as $columns => $value) {
                    $table .= nameSpc\htmlTags::tableDetail($value);
                }
                $table .= nameSpc\htmlTags::tableLineEnd();
            }
            $table .= nameSpc\htmlTags::tableEnd();
            return $table;
        }
    }
?>