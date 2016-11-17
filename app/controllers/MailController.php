<?php
Namespace App\Controllers;

use Nodopiano\Corda\Controller;
use Nodopiano\Corda\Mail;

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
