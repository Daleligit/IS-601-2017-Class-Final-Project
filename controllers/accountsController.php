<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/17/2017
 * Time: 8:48 PM
 */
//each page extends controller and the index.php?page=tasks causes the controller to be called
    namespace controllers;
    use \collection as nameSpc, \functions\stringFunctions as nameSpc2, \functions\forms as nameSpc3;
    class accountsController extends \core\http\controller
    {
        //each method in the controller is named an action.
        //to call the show function the url is index.php?page=task&action=show
        public static function show()
        {
            session_start();
            $record = nameSpc\accounts::findOne($_SESSION['userID']);
            self::getTemplate('show_account', $record);
        }

        //to call the show function the url is index.php?page=accounts&action=all
        /*public static function all()
        {
            $records = nameSpc\accounts::findAll();
            self::getTemplate('all_accounts', $records);
        }*/
        //to call the show function the url is called with a post to: index.php?page=task&action=create
        //this is a function to create new tasks
        //you should check the notes on the project posted in moodle for how to use active record here
        //this is to register an account i.e. insert a new account
        public static function register()
        {
            //https://www.sitepoint.com/why-you-should-use-bcrypt-to-hash-stored-passwords/
            //USE THE ABOVE TO SEE HOW TO USE Bcrypt
            self::getTemplate('register');
        }

        //this is the function to save the user the new user for registration
        public static function store()
        {
            $user = nameSpc\accounts::findUserbyEmail($_REQUEST['email']);
            if ($user == FALSE) {
                $user = nameSpc\accounts::create();
                $user->email = '\'' . $_POST['email'] . '\'';
                $user->fname = '\'' . $_POST['fname'] . '\'';
                $user->lname = '\'' . $_POST['lname'] . '\'';
                $user->phone = '\'' . $_POST['phone'] . '\'';
                $user->birthday = '\'' . $_POST['birthday'] . '\'';
                $user->gender = '\'' . $_POST['gender'] . '\'';
                //$user->password = $_POST['password'];
                //this creates the password
                //this is a mistake you can fix...
                //Turn the set password function into a static method on a utility class.
                $user->password = '\'' . $user->setPassword($_POST['password']) . '\'';
                if (nameSpc2::stringLength($_POST['password']) >=6){
                    $user->save();
                    //you may want to send the person to a
                    // login page or create a session and log them in
                    // and then send them to the task list page and a link to create tasks
                    header("Location: index.php");
                }   else {
                    $error = 'Please Input Valid Password (Length>=6)';
                    self::getTemplate('error', $error);
                }

            } else {
                //You can make a template for errors called error.php
                // and load the template here with the error you want to show.
                // echo 'already registered';
                $error = 'Already Registered';
                self::getTemplate('error', $error);
            }
        }

        public static function edit()
        {
            session_start();
            $record = nameSpc\accounts::findOne($_SESSION['userID']);
            self::getTemplate('edit_account', $record);
        }

    //this is used to save the update form data
        public static function save()
        {
            session_start();
            $user = nameSpc\accounts::create();
            $user->id = $_SESSION['userID'];
            $user->email = '\'' . $_POST['email'] . '\'';
            $user->fname = '\'' . $_POST['fname'] . '\'';
            $user->lname = '\'' . $_POST['lname'] . '\'';
            $user->phone = '\'' . $_POST['phone'] . '\'';
            $user->birthday = '\'' . $_POST['birthday'] . '\'';
            $user->gender = '\'' . $_POST['gender'] . '\'';
            if (!empty($_POST['password']) && nameSpc2::stringLength($_POST['password'])>=6) {
                $user->password = '\'' . $user->setPassword($_POST['password']) . '\'';
                $user->save();
                header("Location: index.php?page=accounts&action=show");
            } elseif (empty($_POST['password'])){
                $user->save();
                header("Location: index.php?page=accounts&action=show");
            } else{
                echo 'Please Input Valid Password (Length>=6)';
                echo nameSpc3::backBottom('index.php?page=accounts&action=edit','Back');
            }
        }

        public static function delete()
        {
            session_start();
            $record = nameSpc\accounts::create();
            $record->id = $_SESSION['userID'];
            $record->delete();
            session_destroy();
            header("Location: index.php");
        }

        //this is to login, here is where you find the account and allow login or deny.
        public static function login()
        {
            //you will need to fix this so we can find users username.  YOu should add this method findUser to the accounts collection
            //when you add the method you need to look at my find one, you need to return the user object.
            //then you need to check the password and create the session if the password matches.
            //you might want to add something that handles if the password is invalid, you could add a page template and direct to that
            //after you login you can use the header function to forward the user to a page that displays their tasks.
            //        $record = accounts::findUser($_POST['email']);
            $user = \collection\accounts::findUserbyEmail($_REQUEST['email']);
            if ($user == FALSE) {
                $error = 'User not Found';
                self::getTemplate('error', $error);
            } else {
                $check = \collection\accounts::create();
                $check->id = $user->id;
                $check->password = $user->password;
                if ($check->checkPassword($_POST['password']) == TRUE) {
                    session_start();
                    $_SESSION["userID"] = $check->id;
                    //forward the user to the show all todos page
                    header('Location: index.php?page=tasks&action=all');
                } else {
                    $error = 'Password does not Match';
                    self::getTemplate('error', $error);
                }
            }
        }
        public static function logout(){
            session_start();
            session_destroy();
            header('Location: index.php');
        }
    }