<?php

namespace portfolio\app\Models;

use portfolio\system as sys;

class Work_Collection extends sys\DbCollection
{
    public function selectItemsFromDb(sys\Libraries\Database $db, $selectQuery)
    {
        $works = $db->executeQuery($selectQuery);
        if ($works) {
            foreach ($works as $work) {
                $item = new Work();
                $item->id = $work['id'];
                $item->name = $work['name'];
                $item->link = $work['link'];
                $item->picture = new Picture();
                $item->picture->file = $work['file'];
                $item->picture->alt = $work['alt'];
                array_push($this->items,$item);
            }
        }
    }

    public function selectAllFromDb(sys\Libraries\Database $db)
    {
      $query = "SELECT DISTINCT * FROM works INNER JOIN work_to_picture ON work_to_picture.work_id = works.id
                INNER JOIN picture ON picture.id = work_to_picture.picture_id ORDER BY picture.date_created DESC;";
      $works = $db->executeQuery($query);
      if($works) {
          foreach ($works as $key => $work) {
              $item = new Work();
              $item->id = $work['id'];
              $item->name = $work['name'];
              $item->link = $work['link'];
              $item->picture = new Picture();
              $item->picture->file = $work['file'];
              $item->picture->alt = $work['alt'];
              array_push($this->items,$item);
          }
      }
    }
}
