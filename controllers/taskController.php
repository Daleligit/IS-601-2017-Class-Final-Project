<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/17/2017
 * Time: 3:05 PM
 */
//each page extends controller and the index.php?page=tasks causes the controller to be called
    //edited namespace and make it suitable for my other part of code
    //this fix include both namespace and how to call other classes with namespace
    namespace controllers;
    use \collection as nameSpc;
    final class tasksController extends \core\http\controller
    {
        //each method in the controller is named an action.
        //to call the show function the url is index.php?page=task&action=show
        public static function show()
        {
            $record = nameSpc\todos::findOne($_REQUEST['id']);
            self::getTemplate('show_task', $record);
        }

        //to call the show function the url is index.php?page=task&action=list_task
        public static function all()
        {
            $records = nameSpc\todos::findAll();
            /*session_start();
               if(key_exists('userID',$_SESSION)) {
                   $userID = $_SESSION['userID'];
               } else {
                   echo 'you must be logged in to view tasks';
               }
            $userID = $_SESSION['userID'];
            $records = todos::findTasksbyID($userID);
            */
            self::getTemplate('all_tasks', $records);
        }
        //to call the show function the url is called with a post to: index.php?page=task&action=create
        //this is a function to create new tasks
        //you should check the notes on the project posted in moodle for how to use active record here
        public static function create()
        {
            print_r($_POST);
        }

        //this is the function to view edit record form
        public static function edit()
        {
            $record = nameSpc\todos::findOne($_REQUEST['id']);
            self::getTemplate('edit_task', $record);
        }

        //this would be for the post for sending the task edit form
        //fixed store function
        public static function store()
        {
            $record = nameSpc\todos::create();
            $record->id = $_REQUEST['id'];
            $record->body = $_REQUEST['body'];
            $record->save();
            print_r($_POST);
        }
        //fixed save function
        public static function save()
        {
            session_start();
            $task = nameSpc\todos::create();
            $task->body = $_POST['body'];
            $task->ownerid = $_SESSION['userID'];
            $task->save();
        }
        //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
        //One form is the todo and the other is just for the delete button
        //fixed delete function
        public static function delete()
        {
            $record = nameSpc\todos::create();
            $record->id = $_REQUEST['id'];
            $record->delete();
            print_r($_POST);
        }
    }