<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Algorithmia;

class SpamController extends Controller
{
	
	public function __construct()
	{
		ini_set('max_execution_time', 300);
	}

  // show form to write the sms message
	public function show_form()
	{
		return view('sms_spam_form');
	}

    // perform spam detection
	public function detect(Request $request){

       // valaidate the input
		$this->validate($request, [
			'message' => 'required|string|min:25',
		]);

		//collect the message
		$message = $request["message"];

       // Add client and call the API
		$client = Algorithmia::client("simf0SIAPK6iySIyJXrGqsFPXBF1");
		$algo = $client->algo("Davis/spam_detection/0.2.0");
		
		// perform prediction and save result
		$result = $algo->pipe($message)->result;

		return view('sms_spam_result',compact(['message','result']));
	}

}
