<?php

namespace portfolio\app\Controllers;

use portfolio\system as sys;
use portfolio\app\Models as Models;

class Login extends sys\MainController
{
    public function index()
    {
        if(isset($_SESSION['username'])){
          redirect("home");
        }
        $this->loadView("login");
    }

    public function login()
    {
        if (isset($_REQUEST['lgSubmit'])) {

          //Dohvatanje user-a po username i password-u
           $mysqli = new \mysqli("localhost", "root", "root", "portfolio");
            $username = $mysqli->real_escape_string($_REQUEST['lgUsername']);
            $password = md5($mysqli->real_escape_string($_REQUEST['lgPassword']));
            $admin = false;
            $query = "SELECT * FROM admin WHERE username='$username' AND password='$password';";

            if ($result = $mysqli->query($query)) {
                while($obj = $result->fetch_object())
                {
                  $admin = $obj;
                }
                if($admin){
                   $_SESSION['username'] = $admin->username;
                   $_SESSION['id'] = $admin->id;
                   redirect("admin");
                } else {
                  $_SESSION['flash']['error'] = "Invalid username or password.";
                  redirect("login");
                }
            }
        }
    }

    public function logout()
    {
        session_destroy();
        redirect("home");
    }
}
