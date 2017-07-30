<?php

namespace portfolio\system\Interfaces;

use portfolio\system\Libraries\Database;

/*
  Interfejs koji obavezuje definisanje logike za insert/update/delete zapisa iz baze klase koja ga implementira
*/

interface IDbItem
{
    public function insertIntoDb(Database $db);
    public function deleteFromDb(Database $db);
    public function updateInDb(Database $db);
}
