<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/17/2017
 * Time: 5:34 PM
 */
    use \core\utility\htmlTable as nameSpc1, \functions\stringFunctions as nameSpc2, \functions\forms as nameSpc3;
    $html = nameSpc1::createTable($data);
    $html .= nameSpc3::editTaskDetailForm($data[0]->id);
    nameSpc2::printThis($html);
?>