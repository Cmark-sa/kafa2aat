<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentTransaction extends Model
{
    protected $table = "payment_transactions";
    protected $fillable = ['user_id' , 'course_id' , 'payment'];
}
