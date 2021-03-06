<?php

namespace portfolio\app\Models;

use portfolio\system as sys;

class Work implements sys\Interfaces\IDbItem
{
    public $id;
    public $name;
    public $link;
    public $picture;

    public function insertIntoDb(sys\Libraries\Database $db)
    {
        //Prvo unos slike, a zatim i rada, na osnovu id-a
        $this->picture->insertIntoDb($db);
        //Dohvatanje id-a slike posle unosa
        $this->picture->id = $db->getInsertedId();
        //Unos rada
        $this->picture->id;
        $query = "INSERT INTO works (name,link) VALUES ('$this->name', '$this->link');";
        // //Ukoliko je unos uspesan, unosi se u veznu tabelu
        if ($db->executeQuery($query)) {
            $this->id = $db->getInsertedId();
            echo $this->id . "</br>";
            //Unos u veznu tabelu
            $query = "INSERT INTO work_to_picture (work_id, picture_id) VALUES ($this->id," . $this->picture->id . ");";
            return $db->executeQuery($query);
        } else {
            return false;
        }
    }

    public function deleteFromDb(sys\Libraries\Database $db)
    {
        //Prvo se brise iz vezne tabele, pa iz slike i iz rada
        $query = "SELECT * FROM work_to_picture WHERE work_id = $this->id;";
        $result = $db->executeQuery($query);
        $r = mysqli_fetch_array($result);

        $this->picture = new Picture();
        $this->picture->id = $r['picture_id'];
        $query = "DELETE FROM work_to_picture WHERE work_id = $this->id;";

        if ($db->executeQuery($query)) {
            $query = "DELETE FROM picture WHERE id = " . $this->picture->id . ";";
            if ($db->executeQuery($query)) {
                $query = "DELETE FROM works WHERE id = $this->id;";
                return $db->executeQuery($query);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function updateInDb(sys\Libraries\Database $db)
    {
    }
}
