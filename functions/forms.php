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
            $form .= '<label><b>Username:</b></label>';
            $form .= '<input type="text" placeholder="Enter Username" name="email" required></br>';
            $form .= '<label><b>Password:</b></label>';
            $form .= '<input type="password" placeholder="Enter Password" name="password" required></br>';
            $form .= '<button type="submit">Login</button>';
            $form .= '</div>';
            $form .= '</form>';
            return $form;
        }
        static public function deleteTaskForm ($id) {
            $form = '<form action="index.php?page=tasks&action=delete&id=' . $id .  '" method="post" id="form1">';
            $form .= '<button type="submit" form="form1" value="delete">Delete</button>';
            $form .= '</form>';
            return $form;
        }
        static public function editTaskForm ($id) {
            $form = '<form action="index.php?page=tasks&action=edit&id=' . $id .  '" method="post" id="form2">';
            $form .= '<button type="submit" form="form2" value="edit">Edit</button>';
            $form .= '</form>';
            return $form;
        }
        static public function editTaskDetailForm ($data) {
            $form = '<form action="index.php?page=tasks&action=save&id=' . $data[0]->id . '" method="post">';
            $form .= 'duedate:     <input type="text" name="duedate" value="' . $data[0]->duedate . '"></br>';
            $form .= 'body:     <input type="text" name="body"  value="' . $data[0]->body . '"></br>';
            $form .= 'complete: <input type="radio" name="complete" value="Yes" checked>Yes';
            $form .= '<input type="radio" name="complete" value="No">No</br>';
            $form .= '<input type="submit" value="Save" name="submit">';
            $form .= '</form>';
            return $form;
        }
        static public function createTaskForm () {
            $form = '<form action="index.php?page=tasks&action=create" method="post" id="form4">';
            $form .= '<button type="submit" form="form4" value="Create">Create</button>';
            $form .= '</form>';
            return $form;
        }
        static public function createTaskDetialForm () {
            $form = '<form action="index.php?page=tasks&action=store" method="post">';
            $form .= 'duedate: <input type="text" name="duedate" value="' . date('Y-m-d H:i:s') .  '"></br>';
            $form .= 'body: <input type="text" name="body"></br>';
            $form .= 'complete: <input type="radio" name="complete" value="Yes" checked>Yes';
            $form .= '<input type="radio" name="complete" value="No">No</br>';
            $form .= '<input type="submit" value="create" name="submit">';
            $form .= '</form>';
            return $form;
        }
        static public function registerForm () {
            $form = '<form action="index.php?page=accounts&action=register" method="post"> ';
            $form .= 'First name: <input type="text" name="fname" required><br>';
            $form .= 'Last name: <input type="text" name="lname" required><br>';
            $form .= 'Email: <input type="text" name="email" required pattern="^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$" title="Please Input Valid Email"><br>';
            $form .= 'Password: <input type="password" name="password" required pattern="^[a-zA-Z0-9]{6,}$" title="Please Input Valid Password (Length>=6. Only can include a-z,A-Z,0-9)"><br>';
            $form .= 'Phone: <input type="text" name="phone"><br>';
            $form .= 'Birthday: <input type="text" name="birthday"><br>';
            $form .= 'Gender: <input type="text" name="gender"><br>';
            $form .= '<input type="submit" value="Submit form">';
            $form .= '</form>';
            return $form;
        }
        static public function userUpdateForm($data) {
            $form = '<form action="index.php?page=accounts&action=save" method="post" >';
            $form .= 'First name: <input type="text" name="fname" value="' . $data[0]->fname .  '" required><br>';
            $form .= 'Last name: <input type="text" name="lname" value="' . $data[0]->lname . '" required><br>';
            $form .= 'Email: <input type="text" name="email" value="' . $data[0]->email . '" required pattern="^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$" title="Please Input Valid Email"><br>';
            $form .= 'Phone: <input type="text" name="phone" value="' . $data[0]->phone . '"><br>';
            $form .= 'Birthday: <input type="text" name="birthday" value="' . $data[0]->birthday . '"><br>';
            $form .= 'Gender: <input type="text" name="gender" value="' . $data[0]->gender . '"><br>';
            $form .= 'Password: <input type="password" name="password" pattern="^[a-zA-Z0-9]{6,}$" title="Please Input Valid Password (Length>=6. Only can include a-z,A-Z,0-9)"><br>';
            $form .= '<input type="submit" value="Update">';
            $form .= '</form>';
            return $form;
        }
        static public function deleteUserForm() {
            $form = '<form action="index.php?page=accounts&action=delete" method="post" id="form8">';
            $form .= '<button type="submit" form="form8" value="delete">Delete</button>';
            $form .= '</form>';
            return $form;
        }
        static public function editUserForm() {
            $form = '<form action="index.php?page=accounts&action=edit" method="post" id="form9">';
            $form .= '<button type="submit" form="form9" value="edit">Edit</button>';
            $form .= '</form>';
            return $form;
        }
        static public function userProfile() {
            $form = '<form action="index.php?page=accounts&action=show" method="post" id="form10">';
            $form .= '<button type="submit" form="form10" value="profile">Profile</button>';
            $form .= '</form>';
            return $form;
        }
        static public function userLogOut () {
            $form = '<form action="index.php?page=accounts&action=logout" method="post" id="form11">';
            $form .= '<button type="submit" form="form11" value="logout">Logout</button>';
            $form .= '</form>';
            return $form;
        }
        static public function backBottom ($link, $words) {
            $form = '<form action="' . $link . '" method="post" id="form12">';
            $form .= '<button type="submit" form="form12" value="logout">' . $words . '</button>';
            $form .= '</form>';
            return $form;
        }
    }
?>