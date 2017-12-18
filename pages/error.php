<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/17/2017
 * Time: 9:38 PM
 */
    use \functions\stringFunctions as nameSpc, \functions\forms as nameSpc2;
    $html = $data;
    $html .= nameSpc2::backBottom('index.php','Back');
    nameSpc::printThis($html);
?>