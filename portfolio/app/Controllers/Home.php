<?php

namespace portfolio\app\Controllers;

use portfolio\system as sys;
use portfolio\app\Models as Models;
class Home extends sys\MainController
{
    public function index()
    {
      //Dohvatanje clanova tima
       $coll = new Models\Team_Members_Collection();
       $db = new sys\Libraries\Database();
       $coll->selectItemsFromDb($db, "SELECT * FROM team_members;");
       $data['team_members'] = $coll->getItems();

        $this->loadView("head");
        $this->loadView("header");
        $this->loadView("about");
        $this->loadView("middle");
        $this->loadView("portfolio");
        $this->loadView("team", $data);
        $this->loadView("address");
        $this->loadView("footer");
    }
}
