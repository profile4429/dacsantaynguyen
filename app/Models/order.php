<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table ='order';
    protected $fillable = ['user_id', 'fullname', 'email', 'phone_number', 'address', 'desc', 'order_date', 'status', 'total_money'];
    public function user_client()
    {
        return $this->belongsTo(user_client::class, 'user_id');
    }

    public function order_detail()
    {
        return $this->hasMany(order_detail::class, 'order_id');
    }
}
