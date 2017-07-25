<?php

namespace portfolio\app\Controllers;

use portfolio\system as sys;

class Home extends sys\MainController
{
    public function index()
    {
        $this->loadView("head");
        $this->loadView("header");
        $this->loadView("about");
        $this->loadView("middle");
        $this->loadView("portfolio");
        $this->loadView("team");
        $this->loadView("address");
        $this->loadView("footer");
    }
}
