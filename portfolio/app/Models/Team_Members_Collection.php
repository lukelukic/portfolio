<?php

namespace portfolio\app\Models;

use portfolio\system as sys;

class Team_Members_Collection extends sys\DbCollection
{
    public function selectItemsFromDb(sys\Libraries\Database $db, $selectQuery)
    {
        $team_members = $db->executeQuery($selectQuery);
        if ($team_members) {
            foreach ($team_members as $tm) {
                $team_member = new Team_Member();
                $team_member->id = $tm['id'];
                $team_member->firstName = $tm['first_name'];
                $team_member->lastName = $tm['last_name'];
                $team_member->position = $tm['position'];
                $team_member->facebook = $tm['facebook'];
                $team_member->instagram = $tm['instagram'];
                $team_member->linkedIn = $tm['linkedin'];
                $team_member->twitter = $tm['twitter'];
                $team_member->picture = $tm['picture'];
                $team_member->alt = $tm['picture_alt'];
                array_push($this->items,$team_member);
            }
        }
    }
}
