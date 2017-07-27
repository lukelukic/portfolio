<?php

namespace portfolio\app\Models;

use portfolio\system as sys;

class Team_Member implements sys\Interfaces\IDbItem
{
    public $id;
    public $firstName;
    public $lastName;
    public $position;
    public $facebook;
    public $instagram;
    public $linkedIn;
    public $twitter;
    public $picture;
    public $alt;

    public function insertIntoDb(sys\Libraries\Database $db)
    {
        $query = "INSERT INTO team_members (first_name,last_name,position,
                  linkedin,facebook,twitter,instagram,picture,picture_alt)
                  VALUES ('$this->firstName','$this->lastName', '$this->position',
                  '$this->linkedIn', '$this->facebook', '$this->twitter',
                  '$this->instagram', '$this->picture', '$this->alt');";
        return $db->executeQuery($query);
    }
    public function deleteFromDb(sys\Libraries\Database $db)
    {
        $query = "DELETE FROM team_members WHERE id = $this->id;";
        return $db->executeQuery($query);
    }
    public function updateInDb(sys\Libraries\Database $db)
    {
        if($this->picture) {
          $query = "UPDATE team_members set first_name = '$this->firstName',
                    last_name = '$this->lastName', position = '$this->position',
                    linkedin = '$this->linkedIn', facebook = '$this->facebook',
                    twitter = '$this->twitter', instagram = '$this->instagram',
                    picture = '$this->picture', picture_alt = '$this->alt' WHERE id = $this->id;";
        } else {
          $query = "UPDATE team_members set first_name = '$this->firstName',
                    last_name = '$this->lastName', position = '$this->position',
                    linkedin = '$this->linkedIn', facebook = '$this->facebook',
                    twitter = '$this->twitter', instagram = '$this->instagram',
                    picture_alt = '$this->alt' WHERE id = $this->id;";
        }
        return $db->executeQuery($query);
    }
}
