<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/7/2017
 * Time: 9:22 PM
 */
    use functions\forms as nameSpc, functions\htmlTags as nameSpc2, functions\stringFunctions as nameSpc3;
    $html = $data['site_name'];
    $html .= nameSpc::loginForm();
    $html .= nameSpc2::headingOne(nameSpc2::hyperLink('index.php?page=accounts&action=register', 'Register'));
    nameSpc3::printThis($html);
?>