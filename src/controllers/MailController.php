<?php
Namespace App\Controllers;

use App\Core\Controller;
use App\Core\Mail;

/**
 *
 */
class MailController extends Controller
{

    public function show() 
    {
       return Mail::send('test@example.com','this is a test');
    }
}
