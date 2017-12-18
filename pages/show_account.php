<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/17/2017
 * Time: 9:51 PM
 */
    use \functions\stringFunctions as nameSpc1, \functions\forms as nameSpc2, \core\utility\htmlTable as nameSpc3;
    $html = nameSpc3::createAccountTable($data);
    $html .= nameSpc2::editUserForm($data[0]->id);
    $html .= nameSpc2::deleteUserForm($data[0]->id);
    nameSpc1::printThis($html);
?>