<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Smslog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;

class MessageController extends Controller
{
    /**
     * Get new otp request from website.
     *
     */
    public function validateNewRequest(Request $request)
    {

        try {
            // putting some validation rules for User input
            $validator = Validator::make($request->all(), [
                'mobile' => 'required|min:10|max:13',
                'name' => 'required|min:5|max:20',
                'message' => 'required|min:15|max:100',
            ]);

            if ($validator->fails()) {
                return back()->with('error', 'Invalid inputs');
            }
            // Call sendmessage funcation from helper class
            Helpers\Helpers::sendmessage($request->input('mobile'), $request->input('message'));
            // save record to sqllite sms log table
            Smslog::saveSmsLog(['name' => $request->input('name'), 'mobile' => $request->input('mobile'), 'message' => $request->input('message')]);
            return back()->with('success', 'Sms send successful.');

        } catch (\Exception $e) {
            return view('errors.404', ['error_message' => $e->getMessage()]);
        }
    }
}
