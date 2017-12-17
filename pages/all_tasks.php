<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/17/2017
 * Time: 3:33 PM
 */
    use \core\utility\htmlTable as nameSpc1, \functions\stringFunctions as nameSpc2;
    $html = nameSpc1::createTable($data);
    nameSpc2::printThis($html);
?>