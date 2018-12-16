<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smslog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sms_log';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'mobile', 'message'
    ];

    public static function saveSmsLog($input)
    {
        self::create(
            $input
        );
    }
}
