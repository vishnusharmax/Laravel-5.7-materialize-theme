<?php

namespace App\Http\Controllers;

use App\Smslog;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public $json;

    /**
     * Create new instance.
     *
     * @return void
     */
    public function __construct()
    {
        // parse json file
        $file = public_path() . '/website/js/contact.json';
        $this->json = json_decode(file_get_contents($file), true);
    }

    /**
     * Show the website home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $contact_array = array();
            $sms_log_array = array();
            $color_array = ["green", "red", "purple", "blue", "pink", "indigo", "teal", "cyan", "amber"];
            if (!empty($this->json['contact_list'])) {
                foreach ($this->json['contact_list'] as $value) {
                    $random = array_random($color_array);
                    // push values to contact_array
                    array_push($contact_array, ['short_code' => substr($value['contactName'], 0, 1), 'name' => $value['contactName'], 'phoneNumber' => $value['contactNumber'], "color" => $random]);
                }
            }
            $sms_log = Smslog::orderBy('created_at', 'desc')->get();
            if (!empty($sms_log)) {
                foreach ($sms_log as $data) {
                    $random_color = array_random($color_array);
                    // push values to sms_log_array
                    array_push($sms_log_array, ['short_code' => substr($data->name, 0, 1), 'name' => $data->name, 'phoneNumber' => $data->mobile, "color" => $random_color, 'message' => $data->message, 'date_string' => $data->created_at]);
                }
            }
            return view('pages.home_page', ['contact_array' => $contact_array, 'sms_log_array' => $sms_log_array]);

        } catch (\Exception $e) {

            return view('errors.404', ['error_message' => $e->getMessage()]);

        }
    }

    /**
     * Display send sms page by passing
     * mobile number and name.
     * @return \Illuminate\Http\Response
     */
    public function sendMessagePage($mobile, $name)
    {
        try {

            $message = 'Hi, Your OTP is: ' . mt_rand(1000, 9999);;
            return view('pages.send_sms', ['mobile' => $mobile, 'message' => $message, 'name' => $name]);

        } catch (\Exception $e) {

            return view('errors.404', ['error_message' => $e->getMessage()]);

        }
    }
}
