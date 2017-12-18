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
            $form .= 'body:     <input type="text" name="body" required></br>';
            $form .= 'complete: <input type="radio" name="complete" value="Yes" checked>Yes';
            $form .= '<input type="radio" name="complete" value="No">No</br>';
            $form .= '<input type="submit" value="Save" name="submit">';
            $form .= '</form>';
            return $form;
        }
        static public function createTaskForm () {
            $form = '<form action="index.php?page=tasks&action=create" method="post" id="form">';
            $form .= '<button type="submit" form="form" value="Create">Create</button>';
            $form .= '</form>';
            return $form;
        }
        static public function createTaskDetialForm () {
            $form = '<form action="index.php?page=tasks&action=store" method="post">';
            $form .= 'body:     <input type="text" name="body" required></br>';
            $form .= 'complete: <input type="radio" name="complete" value="Yes" checked>Yes';
            $form .= '<input type="radio" name="complete" value="No">No</br>';
            $form .= '<input type="submit" value="create" name="submit">';
            $form .= '</form>';
            return $form;
        }
        static public function registerForm () {
            $form = '<form action="index.php?page=accounts&action=register" method="post">';
            $form .= 'First name: <input type="text" name="fname" required><br>';
            $form .= 'Last name: <input type="text" name="lname" required><br>';
            $form .= 'Email: <input type="text" name="email" required><br>';
            $form .= 'Password: <input type="password" name="password" required><br>';
            $form .= 'Phone: <input type="text" name="phone"><br>';
            $form .= 'Birthday: <input type="text" name="birthday"><br>';
            $form .= 'Gender: <input type="text" name="gender"><br>';
            $form .= '<input type="submit" value="Submit form">';
            $form .= '</form>';
            return $form;
        }
        static public function userUpdateForm($data) {
            $form = '<form action="index.php?page=accounts&action=save" method="post">';
            $form .= 'First name: <input type="text" name="fname" value="' . $data[0]->fname .  '" required><br>';
            $form .= 'Last name: <input type="text" name="lname" value="' . $data[0]->lname . '" required><br>';
            $form .= 'Email: <input type="text" name="email" value="' . $data[0]->email . '" required><br>';
            $form .= 'Phone: <input type="text" name="phone" value="' . $data[0]->phone . '"><br>';
            $form .= 'Birthday: <input type="text" name="birthday" value="' . $data[0]->birthday . '"><br>';
            $form .= 'Gender: <input type="text" name="gender" value="' . $data[0]->gender . '"><br>';
            $form .= 'Password: <input type="password" name="password" ><br>';
            $form .= '<input type="submit" value="Update">';
            $form .= '</form>';
            return $form;
        }
        static public function deleteUserForm() {
            $form = '<form action="index.php?page=accounts&action=delete" method="post" id="form2">';
            $form .= '<button type="submit" form="form2" value="delete">Delete</button>';
            $form .= '</form>';
            return $form;
        }
        static public function editUserForm() {
            $form = '<form action="index.php?page=accounts&action=edit" method="post" id="form1">';
            $form .= '<button type="submit" form="form1" value="edit">Edit</button>';
            $form .= '</form>';
            return $form;
        }
        static public function userProfile() {
            $form = '<form action="index.php?page=accounts&action=show" method="post" id="form1">';
            $form .= '<button type="submit" form="form1" value="profile">Profile</button>';
            $form .= '</form>';
            return $form;
        }
    }
?>