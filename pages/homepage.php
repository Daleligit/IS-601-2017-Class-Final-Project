<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/7/2017
 * Time: 9:22 PM
 */
    use functions\forms as form, functions\htmlTags as htmlTag, functions\stringFunctions as stringFunction;
    $html = htmlTag::headingOne($data['site_name']);
    $html .= htmlTag::headingOne('Log In');
    $html .= form::loginForm();
    $html .= htmlTag::hyperLink('index.php?page=accounts&action=register', 'Register');
    stringFunction::printThis($html);
?>