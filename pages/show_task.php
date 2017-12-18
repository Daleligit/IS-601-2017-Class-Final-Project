<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/17/2017
 * Time: 4:11 PM
 */
    use \core\utility\htmlTable as nameSpc1, \functions\stringFunctions as nameSpc2, \functions\forms as nameSpc3;
    $html = nameSpc1::showTaskTable($data);
    $html .= nameSpc3::editTaskForm($data[0]->id);
    $html .= nameSpc3::deleteTaskForm($data[0]->id);
    nameSpc2::printThis($html);