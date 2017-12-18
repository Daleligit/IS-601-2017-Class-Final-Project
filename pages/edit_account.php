<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/17/2017
 * Time: 10:12 PM
 */
    use \functions\stringFunctions as nameSpc1, \functions\forms as nameSpc2, \core\utility\htmlTable as nameSpc3;
    $html = nameSpc3::createAccountTable($data);
    $html .= nameSpc2::userUpdateForm($data);
    nameSpc1::printThis($html);
?>