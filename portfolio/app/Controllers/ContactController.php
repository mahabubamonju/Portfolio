<?php 

namespace App\Controllers;

class ContactController 
{
    public $contact = 'pages/contact.php';

    public function loadContactPage(){
       return $this->contact;
    }
}