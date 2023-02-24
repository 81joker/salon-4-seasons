<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Facades\Vonage;

class SendMessageController extends Controller
{
    public function index(Request $request)
    {
        $input = $request->all();
        $basic  = new \Vonage\Client\Credentials\Basic("e60dde7e", "aHqTugjFVIdX7EhF");
        $client = new \Vonage\Client($basic);
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS('00436766052357', $input['name'], $input['message'])
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            return redirect()->route('contact')->with('success', "Danke " .  $input['name'] . " Ihre Nachricht wurde gesendet .");
        } else {
            return redirect()->route('contact')->with('error',  "Sorry " . $input['name'] . ", it seems that our mail server is not responding. Please try again later!");
        }
    }
}
