<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/18/2017
 * Time: 12:44 AM
 */
    use \functions\htmlTags as nameSpc, \functions\forms as nameSpc2, \functions\stringFunctions as nameSpc3;
    $html = nameSpc::headingOne('Page Not Found 404');
    $html .= nameSpc2::backBottom('index.php','Back');
    nameSpc3::printThis($html);
?>