<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/17/2017
 * Time: 9:51 PM
 */
    use \functions\stringFunctions as nameSpc1, \functions\forms as nameSpc2, \core\utility\htmlTable as nameSpc3;
    $html = nameSpc2::userLogOut();
    $html .= nameSpc3::createAccountTable($data);
    $html .= nameSpc2::editUserForm();
    $html .= nameSpc2::deleteUserForm();
    $html .= nameSpc2::backBottom('index.php?page=tasks&action=all','Back');
    nameSpc1::printThis($html);
?>