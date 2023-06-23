<?php

namespace App\Models;

use App\Jobs\SendEnquiryEmailJob;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $table="enquiries";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'ip',
        'message',
    ];

    public static function boot()
    {
        parent::boot();
        self::created(function ($model) {
            $details['name'] = $model->name;
            $details['email'] = $model->email;
            $details['phone'] = $model->phone;
            $details['message'] = $model->message;

            dispatch(new SendEnquiryEmailJob($details));
        });
    }
}
