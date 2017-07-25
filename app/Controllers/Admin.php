<?php

namespace portfolio\app\Controllers;

use portfolio\system as sys;

class Admin extends sys\MainController
{
    public function index()
    {
        $this->loadView("Admin/navigation");
        $this->loadView("Admin/users");
    }
}
