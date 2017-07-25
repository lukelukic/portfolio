<?php

namespace portfolio\system\Libraries;

/*
Regularni ;
   username - mala i velika slova, brojevi, - _, mora da pocne slovom
   password - bar 1 broj, 1 slovo, mogu specijalni karakteri
 */
class FormValidation
{
    private $regexes = array(
      'email' => "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",
      'username' =>  "/^[A-z][A-z\_\-0-9\.]{2,20}$/",
      'password' => "/^(?=.*[0-9])(?=.*[a-z])(\S+)$/i",
      'url' => "^(?:https?://)?(?:[a-z0-9-]+\.)*((?:[a-z0-9-]+\.)[a-z]+)",
      'ip' => '/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\z/',
      'name' => "/^[A-Z][a-z]{1,15}$/",
      'image' => "/^.*\.(jpg|jpeg|png|gif)$/",
      'fullName' => '/^[A-Z][a-z]{3,15}(\s[A-Z][a-z]{3,15})*$/'
      );
    private $validationErrors = array();
    private $valid = true;

    public function __construct()
    {
    }

    //Proverava validnost vrednosti iz niza postojecih, na osnovu vrednosti
    //Ukoliko dodje do greske, u polje validationErrors upisuje prosledjeni errorMessage
    public function checkCommon($type, $value, $errorMessage)
    {
        switch ($type) {
            case 'name':
                if (!preg_match($this->regexes['name'], $value)) {
                array_push($this->validationErrors, $errorMessage);
                }
                break;
            case 'fullName':
                if (!preg_match($this->regexes['fullName'], $value)) {
                array_push($this->validationErrors, $errorMessage);
                }
                break;
            case 'image':
                if (!preg_match($this->regexes['image'], $value)) {
                array_push($this->validationErrors, $errorMessage);
                }
                break;
            case 'email':
                 if (!preg_match($this->regexes['email'], $value)) {
                     array_push($this->validationErrors, $errorMessage);
                 }
                break;
            case 'username':
                if (!preg_match($this->regexes['username'], $value)) {
                    array_push($this->validationErrors, $errorMessage);
                }
                break;
            case 'password':
                if (!preg_match($this->regexes['password'], $value)) {
                    array_push($this->validationErrors, $errorMessage);
                }
                break;
            case 'url':
                if (!preg_match($this->regexes['url'], $value)) {
                    array_push($this->validationErrors, $errorMessage);
                }
                break;
            case 'ip':
                if (!preg_match($this->regexes['ip'], $value)) {
                    array_push($this->validationErrors, $errorMessage);
                }
                break;
            default:
                throw new Exception("Requested type not recognized.");
                break;
      }
    }
    //Validacija vrednosti na osnovu prosledjenog regexa
    //Ukoliko vrednost ne prodje, errorMessage se dodaje u niz validationErrors
    public function checkRegex($regex, $value, $errorMessage)
    {
        if (!preg_match($regex, $value)) {
            array_push($this->validationErrors, $errorMessage);
        }
    }
    //Vraca true ili false u zavisnosti od toga da li su prosledjeni podaci validni ili ne
    public function isValid()
    {
        return count($this->validationErrors) == 0;
    }
    //Vraca sve trenutne errore
    public function getErrorMessages()
    {
        return $this->validationErrors;
    }
    //Cisti niz validationErrors
    public function clearErrors()
    {
        $this->validationErrors = array();
    }

    //Proverava vise vrednost, na osnovu postojecih regularnih izraza, moguca je i required obrada
    public function checkCommonBatch($inputs)
    {
        foreach ($inputs as $input) {
            if (isset($input['required'])) {
                if ($input['value']!="") {
                    $this->checkCommon($input['type'], $input['value'], $input['message']);
                } else {
                    array_push($this->validationErrors, $input["name"] . " field is required.");
                }
            } else {
                $this->checkCommon($input['type'], $input['value'], $input['message']);
            }
        }
    }
}
