<?php

namespace portfolio\app\Models;

use portfolio\system as sys;

class Picture implements sys\Interfaces\IDbItem
{
    public $id;
    public $file;
    public $alt;
    public $date_created;

    public function insertIntoDb(sys\Libraries\Database $db)
    {
        $query = "INSERT INTO picture (file,alt) values ('$this->file', '$this->alt');";
        return $db->executeQuery($query);
    }

    public function deleteFromDb(sys\Libraries\Database $db)
    {
        return $db->executeQuery("DELETE FROM picture WHERE id = $this->id;");
    }

    public function updateInDb(sys\Libraries\Database $db)
    {
        if ($this->file) {
            $query = "UPDATE Picture SET file = '$this->file', alt = '$this->alt'
                      WHERE id = $this->id;";
        } else {
            $query = "UPDATE Picture SET alt = '$this->alt'
                    WHERE id = $this->id;";
        }
        return $db->executeQuery($query);
    }
}
