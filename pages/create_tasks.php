<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/17/2017
 * Time: 8:15 PM
 */
    use \functions\stringFunctions as nameSpc1, \functions\forms as nameSpc2;
    $html = nameSpc2::userProfile();
    $html .= nameSpc2::userLogOut();
    $html .= nameSpc2::createTaskDetialForm();
    $html .= nameSpc2::backBottom('index.php?page=tasks&action=all','Back');
    nameSpc1::printThis($html);
?>