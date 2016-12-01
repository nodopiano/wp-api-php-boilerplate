<?php
Namespace App\Controllers;

use Nodopiano\Corda\Controller;
use Nodopiano\Corda\Mail;
use Nodopiano\Corda\NewsLetter;
use Nodopiano\Corda\Csv;

/**
 *
 */
class MailController extends Controller
{

    public function send()
    {
      // Csv::export(array($_POST['from'],$_POST['message']));
      // NewsLetter::subscribe('38e73a2904',array('email' => $_POST['from']));
      return json(Mail::send($_POST['from'],$_POST['message']));
    }
}
