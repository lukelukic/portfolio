<?php

namespace portfolio\system;


/*
 Klasa koju nasledjuje svaka stranica, sadrzi metod za ucitavanje view-a
 */
abstract class MainController
{
    public function __construct()
    {
    }

    //Metoda u kojoj se ucitava trazeni fajl, na osnovu imena iz foldera Views
    //Takodje, podaci mu se prosledjuju u vidu asocijativnog niza, koji se
    //Razbija i od svakog elementa se dobija nova promenjiva
    public function loadView($view,$data=null)
    {
        $file = $_SERVER["DOCUMENT_ROOT"] . '/roughlycoding/portfolio/app/Views/' . $view . '.php';
        if (file_exists($file)) {
            if ($data)
                extract($data);
            require_once $file;
        } else {
            echo "Requested view doesent exist.";
        }
    }


}
