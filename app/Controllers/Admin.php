<?php

namespace portfolio\app\Controllers;

use portfolio\system as sys;
use portfolio\app\Models as Models;

class Admin extends sys\MainController
{
    public function index()
    {
        $tm = new Models\Team_Member();
        $coll = new Models\Team_Members_Collection();

        $this->loadView("Admin/navigation");
        $this->loadView("Admin/users");
    }

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
            $team_member->Position = $_REQUEST['tbPosition'];
            $team_member->Picture = $_FILES['tbPicture']['name'];
            $team_member->alt = $_REQUEST['tbAlt'];

            if ($_REQUEST['tbTwitter']) {
                $validation->checkRegex('/^[A-Za-z0-9_]{1,15}$/', $_REQUEST['tbTwitter'], "Invalid Twitter username format.");
                $team_member->Twitter = $_REQUEST['tbTwitter'];
            }

            if ($_REQUEST['tbFacebook']) {
                $validation->checkRegex('/^[a-z\d.]{5,}$/i', $_REQUEST['tbFacebook'], "Invalid Facebook username format.");
                $team_member->Facebook = $_REQUEST['tbFacebook'];
            }

            if ($_REQUEST['tbInstagram']) {
                $validation->checkRegex('/^[a-zA-Z0-9._]+$/', $_REQUEST['tbInstagram'], "Invalid Instagram username format.");
                $team_member->Instagram = $_REQUEST['tbInstagram'];
            }

            if ($_REQUEST['tbLinkedIn']) {
                $validation->checkRegex('/^[a-z\d.]{5,}$/i', $_REQUEST['tbLinkedIn'], "Invalid LinkedIn username format.");
                $team_member->LinkedIn = $_REQUEST['tbLinkedIn'];
            }

            $validation->checkRegex("/^[A-z0-9\_\-]{2,25}(\s[A-z0-9\_\-]{2,25})*$/", $_REQUEST['tbAlt'], "Invalid picture alt format");

            $validation->checkCommonBatch($validationData);

            if (!$validation->isValid()) {
                var_dump($validation->getErrorMessages());
            } else {
                $fupload = new sys\Libraries\FileUpload();
                $fupload->fileTypes = array('image/png', 'image/jpeg', 'image/gif');
                $fupload->fileToUpload = $_FILES['tbPicture'];
                $fupload->uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . "/portfolio/files/images";

                if ($fupload->upload()) {
                    echo "Uspesan upload";
                } else {
                    
                }
            }
        } else {
            redirect("admin");
        }
    }
}
