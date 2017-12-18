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
        static public function deleteTaskForm ($id) {
            $form = '<form action="index.php?page=tasks&action=delete&id=' . $id .  '" method="post" id="form2">';
            $form .= '<button type="submit" form="form2" value="delete">Delete</button>';
            $form .= '</form>';
            return $form;
        }
        static public function editTaskForm ($id) {
            $form = '<form action="index.php?page=tasks&action=edit&id=' . $id .  '" method="post" id="form1">';
            $form .= '<button type="submit" form="form1" value="edit">Edit</button>';
            $form .= '</form>';
            return $form;
        }
        static public function editTaskDetailForm ($id) {
            $form = '<form action="index.php?page=tasks&action=save&id=' . $id . '" method="post">';
            $form .= 'Message:<input type="text" name="message" required></br>';
            $form .= 'Isdone: <input type="radio" name="isdone" value="Yes" required />Yes';
            $form .= '<input type="radio" name="isdone" value="No" required />No</br>';
            $form .= '<input type="submit" value="Save" name="submit">';
            $form .= '</form>';
            return $form;
        }
    }
?>