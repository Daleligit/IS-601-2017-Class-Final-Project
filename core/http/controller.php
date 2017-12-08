<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/7/2017
 * Time: 9:04 PM
 */
    namespace core\http;
    //this is the controller class that you use to connect models with views and business logic
    class controller
    {
    //this gets the HTML template for the application and accepts the model.  The model array can be used in the template
        static public function getTemplate($template, $data = NULL)
        {
            $template = 'pages/' . $template . '.php';
            //in your template you should use $data to access your array
            //added header.php and footer.php to make the code not repeat it self in different pages.
            //in the order of header, body, foot to include the codes to build the pages.
            include 'pages/header.php';
            include $template;
            include 'pages/footer.php';
        }
    }