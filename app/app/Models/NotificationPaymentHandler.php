<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NotificationPaymentHandler extends Model
{
    use HasFactory, Searchable;
    public $table = "notification_payments";
    protected $casts = [
        'va_numbers' => 'array',
        // 'va_numbers' =>  AsArrayObject::class,
        // 'payment_amounts' =>  AsArrayObject::class
        'payment_amounts' =>  'array'
    ];
    
    protected $fillable = ['transaction_time','transaction_status','transaction_id',
    'store','status_message','status_code','signature_key','payment_type','payment_code',
    'order_id','merchant_id','gross_amount','currency','approval_code','settlement_time',
    'fraud_status','biller_code','bill_key','va_numbers','payment_amounts'];

 
    public function searchableAs()
    {
        return 'notification_payments';
    }
    
}
