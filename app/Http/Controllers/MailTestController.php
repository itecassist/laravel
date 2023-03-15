<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webklex\PHPIMAP\Client;
class MailTestController extends Controller
{

    public function __construct()
    {

    }

    public function getFolders()
    {
        $oClient = \Webklex\IMAP\Facades\Client::account('default');
        $oClient->connect();
        $folders = $oClient->getFolders(true);

        foreach ($folders as $folder)
        {
            $messages = $folder->messages()->all()->get();

            /** @var \Webklex\PHPIMAP\Message $message */
            foreach($messages as $message){
                echo $message->getSubject().'<br />';
                echo 'Attachments: '.$message->getAttachments()->count().'<br />';
                echo $message->getHTMLBody();

                //Move the current Message to 'INBOX.read'
                /*
                if($message->move('INBOX.read') == true){
                    echo 'Message has ben moved';
                }else{
                    echo 'Message could not be moved';
                }*/
            }
        }
    }
}
