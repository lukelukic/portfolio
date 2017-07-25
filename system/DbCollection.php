<?php

namespace portfolio\system;

/*
  Klasa koju nasledjuju sve klase koje treba da sadrze kolekcije dohvacene iz baze.
  Implementira IDbSelectable koji je obavezuje da redefinise metod za dohvatanje svih zapisa iz baze
  i Iterator koji je obavezuje da redefinise metode za iteraciju kroz dohvacene elemente
 */

use portfolio\system\Interfaces\IDbSelectable;
use portfolio\system\Libraries\Database;

abstract class DbCollection implements \Iterator, IDbSelectable
{
    protected $items = [];
    protected $position = 0;

    public function __construct()
    {
        $this->position = 0;
    }


    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->position;
    }

    public function next()
    {
        return ++$this->position;
    }

    public function key()
    {
        return $this->items[$this->position];
    }

    public function valid()
    {
        return isset($this->array[$this->position]);
    }

    public function getItems()
    {
        return $this->items;
    }

    abstract public function selectItemsFromDb(Database $db, $selectQuery);
}
