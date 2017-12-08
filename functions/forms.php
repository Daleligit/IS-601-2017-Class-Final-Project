<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/7/2017
 * Time: 9:45 PM
 */
    namespace functions;
    class forms {
        static public function loginForm() {
            $form = '<form action="index.php?page=accounts&action=login" method="POST">';
            $form .= '<div class="container">';
            $form .= '<label><b>Username</b></label>';
            $form .= '<input type="text" placeholder="Enter Username" name="email" required>';
            $form .= '<label><b>Password</b></label>';
            $form .= '<input type="password" placeholder="Enter Password" name="password" required>';
            $form .= '<button type="submit">Login</button>';
            $form .= '</div>';
            $form .= '</form>';
            return $form;
        }
    }