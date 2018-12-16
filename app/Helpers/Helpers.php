<?php

namespace App\Helpers;

class Helpers
{


    //send otp message
    public static function sendmessage($mobile, $message)
    {
        $message = urlencode($message);
        $url = sprintf("http://api.msg91.com/api/v2/sendsms?authkey=%s&mobiles=%s&message=%s&sender=%s&route=%s",
            env('MSG91_AUTH_KEY'), $mobile, $message, env('MSG91_SENDER_ID'), env('MSG91_ROUTE'));
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }



}