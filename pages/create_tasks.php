<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/17/2017
 * Time: 8:15 PM
 */
    use \functions\stringFunctions as nameSpc1, \functions\forms as nameSpc2;
    $html = nameSpc2::createTaskDetialForm();
    nameSpc1::printThis($html);
?>