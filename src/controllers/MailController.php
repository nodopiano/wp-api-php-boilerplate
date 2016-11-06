<?php
Namespace App\Controllers;

use App\Core\Controller;
use App\Core\Mail;

/**
 *
 */
class MailController extends Controller
{

    public function send() 
    {
       return Mail::send($_POST['from'],$_POST['message']);
    }
}
