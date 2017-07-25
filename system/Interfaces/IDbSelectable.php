<?php

namespace portfolio\system\Interfaces;

use portfolio\system\Libraries\Database;

/*
  Interfejs koji obavezuje definisanje logike za selektovanje zapisa iz baze, na osnovu
  prosledjene baze i upita
*/

interface IDbSelectable
{
    public function selectItemsFromDb(Database $db, $selectQuery);
}
