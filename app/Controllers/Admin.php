<?php

namespace portfolio\app\Controllers;

use portfolio\system as sys;
use portfolio\app\Models as Models;

class Admin extends sys\MainController
{
    public function index($data = null)
    {
        $tm = new Models\Team_Member();
        $coll = new Models\Team_Members_Collection();
        $db = new sys\Libraries\Database();
        $coll->selectItemsFromDb($db, "SELECT * FROM team_members;");
        $data['team_members'] = $coll->getItems();
        $this->loadView("Admin/navigation");
        $this->loadView("Admin/users", $data);
    }

    //Stranica za administriranje projekata
    public function projects($data = null)
    {
        $this->loadView("Admin/navigation");
        $this->loadView("Admin/users", $data);
    }

    //Brisanje clana tima
    public function deleteMember()
    {
        if (isset($_REQUEST['id'])) {
            //Dohvatanje korisnika iz baze i postavljanje id-a
            $member = new Models\Team_Member();
            $member->id = $_REQUEST['id'];

            //Dohvatanje slike korisnika za brisanje
            $coll = new Models\Team_Members_Collection();
            $db = new sys\Libraries\Database();
            $coll->selectItemsFromDb($db, "SELECT * FROM team_members WHERE id =" . $_REQUEST['id'] . ";");
            $picture = $coll->getItems()[0]->picture;

            if ($member->deleteFromDb(new sys\Libraries\Database())) {
                //Ako je brisanje uspesno, brise se i slika
                unlink($_SERVER['DOCUMENT_ROOT'] . "/portfolio/files/images/" . $picture);
                $_SESSION['flash']['delSuccess'] = "User successfully deleted.";
                redirect("admin");
            } else {
                $_SESSION['flash']['delError'] = "Problem with deleting.";
                redirect("admin");
            }
        } else {
            $_SESSION['flash']['delError'] = "No user selected.";
            redirect("admin");
        }
    }
    //Potvrda izmene clana tima
    public function doEdit()
    {
        if (isset($_REQUEST['btnSubmit'])) {
            $validation = new sys\Libraries\FormValidation();
            $validationData = array(
            array(
              'required' => true,
              'type' => 'name',
              'name' => "First Name",
              'message' => 'Fist name must begin with Capital letter, contains only letters',
              'value' => $_REQUEST['tbFirstName']
            ),
            array(
              'required' => true,
              'type' => 'name',
              'name' => "Last Name",
              'message' => 'Last name must begin with Capital letter, contains only letters',
              'value' => $_REQUEST['tbLastName']
            ),
            array(
              'required' => true,
              'name' => "Position",
              'type' => 'fullName',
              'message' => 'Position name must begin with Capital letter, contains only letters',
              'value' => $_REQUEST['tbPosition']
            )
          );

            $team_member = new Models\Team_Member();
            $team_member->id = $_REQUEST['hiddenId'];
            $team_member->firstName = $_REQUEST['tbFirstName'];
            $team_member->lastName = $_REQUEST['tbLastName'];
            $team_member->position = $_REQUEST['tbPosition'];
            if (isset($_FILES['tbPicture']['name'])) {
                $team_member->picture = $_FILES['tbPicture']['name'];
            }
            $team_member->alt = $_REQUEST['tbAlt'];

            if ($_REQUEST['tbTwitter']) {
                $validation->checkRegex('/^[A-Za-z0-9_]{1,15}$/', $_REQUEST['tbTwitter'], "Invalid Twitter username format.");
                $team_member->twitter = $_REQUEST['tbTwitter'];
            }

            if ($_REQUEST['tbFacebook']) {
                $validation->checkRegex('/^[a-z\d.]{5,}$/i', $_REQUEST['tbFacebook'], "Invalid Facebook username format.");
                $team_member->facebook = $_REQUEST['tbFacebook'];
            }

            if ($_REQUEST['tbInstagram']) {
                $validation->checkRegex('/^[a-zA-Z0-9._]+$/', $_REQUEST['tbInstagram'], "Invalid Instagram username format.");
                $team_member->instagram = $_REQUEST['tbInstagram'];
            }

            if ($_REQUEST['tbLinkedIn']) {
                $validation->checkRegex('/^[a-z\d.]{5,}$/i', $_REQUEST['tbLinkedIn'], "Invalid LinkedIn username format.");
                $team_member->linkedIn = $_REQUEST['tbLinkedIn'];
            }

            $validation->checkRegex("/^[A-z0-9\_\-]{2,25}(\s[A-z0-9\_\-]{2,25})*$/", $_REQUEST['tbAlt'], "Invalid picture alt format");

            $validation->checkCommonBatch($validationData);

            if (isset($_REQUEST['tbPicture'])) {
                $validation->checkCommon('image', $_REQUEST['tbPicture'], "Invalid upload image format.");
            }

            if (!$validation->isValid()) {
                $_SESSION['flash']['errors'] = $validation->getErrorMessages();
                redirect('admin');
            } else {
                $db = new sys\Libraries\Database();
                //Ako je prosledjena nova slika
                if ($_FILES['tbPicture']['name']) {
                    $fupload = new sys\Libraries\FileUpload();
                    $fupload->fileTypes = array('image/png', 'image/jpeg', 'image/gif');
                    $fupload->fileToUpload = $_FILES['tbPicture'];
                    $fupload->uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . "/portfolio/files/images";
                    unlink($_SERVER['DOCUMENT_ROOT'] . "/portfolio/files/images/" . $_REQUEST['hiddenPicture']);
                    if ($fupload->upload()) {
                        if ($team_member->updateInDb($db)) {
                            $_SESSION['flash']['success'] = "Member successfully edited!";
                            redirect('admin');
                        } else {
                        }
                    } else {
                        $_SESSION['flash']['errors'] = $fupload->getErrorMessages();
                        redirect("admin");
                    }
                } else {
                    //Ako slika nije prosledjena
                    if ($team_member->updateInDb($db)) {
                        $_SESSION['flash']['success'] = "Member successfully edited!";
                        redirect('admin');
                    } else {
                    }
                }
            }
        } else {
            redirect("admin");
        }
    }
    //Prosledjivanje podataka za edit
    public function editMember()
    {
        if (isset($_REQUEST['id'])) {
            $col = new Models\Team_Members_Collection();
            $db = new sys\Libraries\Database();
            $query = "SELECT * FROM team_members WHERE id = " . $_REQUEST['id'] . ";";
            $col->selectItemsFromDb($db, $query);
            $data['member'] = $col->getItems()[0];
            count($data['member']) ? $this->index($data) : redirect("admin");
        } else {
            redirect("admin");
        }
    }

    //Dodavanje clana tima
    public function addMember()
    {
        if (isset($_REQUEST['btnSubmit'])) {
            $validation = new sys\Libraries\FormValidation();
            $validationData = array(
              array(
                'required' => true,
                'type' => 'name',
                'name' => "First Name",
                'message' => 'Fist name must begin with Capital letter, contains only letters',
                'value' => $_REQUEST['tbFirstName']
              ),
              array(
                'required' => true,
                'type' => 'name',
                'name' => "Last Name",
                'message' => 'Last name must begin with Capital letter, contains only letters',
                'value' => $_REQUEST['tbLastName']
              ),
              array(
                'required' => true,
                'name' => "Position",
                'type' => 'fullName',
                'message' => 'Position name must begin with Capital letter, contains only letters',
                'value' => $_REQUEST['tbPosition']
              ),

              array(
                'required' => true,
                'name' => "Picture",
                'type' => 'image',
                'message' => 'Invalid upload image format.',
                'value' => $_FILES['tbPicture']['name']
              ),
            );

            $team_member = new Models\Team_Member();
            $team_member->firstName = $_REQUEST['tbFirstName'];
            $team_member->lastName = $_REQUEST['tbLastName'];
            $team_member->position = $_REQUEST['tbPosition'];
            $team_member->picture = $_FILES['tbPicture']['name'];
            $team_member->alt = $_REQUEST['tbAlt'];

            if ($_REQUEST['tbTwitter']) {
                $validation->checkRegex('/^[A-Za-z0-9_]{1,15}$/', $_REQUEST['tbTwitter'], "Invalid Twitter username format.");
                $team_member->twitter = $_REQUEST['tbTwitter'];
            }

            if ($_REQUEST['tbFacebook']) {
                $validation->checkRegex('/^[a-z\d.]{5,}$/i', $_REQUEST['tbFacebook'], "Invalid Facebook username format.");
                $team_member->facebook = $_REQUEST['tbFacebook'];
            }

            if ($_REQUEST['tbInstagram']) {
                $validation->checkRegex('/^[a-zA-Z0-9._]+$/', $_REQUEST['tbInstagram'], "Invalid Instagram username format.");
                $team_member->instagram = $_REQUEST['tbInstagram'];
            }

            if ($_REQUEST['tbLinkedIn']) {
                $validation->checkRegex('/^[a-z\d.]{5,}$/i', $_REQUEST['tbLinkedIn'], "Invalid LinkedIn username format.");
                $team_member->linkedIn = $_REQUEST['tbLinkedIn'];
            }

            $validation->checkRegex("/^[A-z0-9\_\-]{2,25}(\s[A-z0-9\_\-]{2,25})*$/", $_REQUEST['tbAlt'], "Invalid picture alt format");

            $validation->checkCommonBatch($validationData);

            if (!$validation->isValid()) {
                $_SESSION['flash']['errors'] = $validation->getErrorMessages();
                redirect('admin');
            } else {
                $fupload = new sys\Libraries\FileUpload();
                $fupload->fileTypes = array('image/png', 'image/jpeg', 'image/gif');
                $fupload->fileToUpload = $_FILES['tbPicture'];
                $fupload->uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . "/portfolio/files/images";

                if ($fupload->upload()) {
                    $db = new sys\Libraries\Database();
                    if ($team_member->insertIntoDb($db)) {
                        $_SESSION['flash']['success'] = "Member successfully added!";
                        redirect('admin');
                    } else {
                    }
                } else {
                    $_SESSION['flash']['errors'] = $fupload->getErrorMessages();
                    redirect("admin");
                }
            }
        } else {
            redirect("admin");
        }
    }
}
