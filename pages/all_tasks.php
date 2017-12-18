<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/17/2017
 * Time: 3:33 PM
 */
    use \core\utility\htmlTable as nameSpc1, \functions\stringFunctions as nameSpc2, \functions\forms as nameSpc3;
    $html = nameSpc3::userProfile();
    $html .= nameSpc1::createTaskList($data);
    $html .= nameSpc3::createTaskForm();

    nameSpc2::printThis($html);
?>