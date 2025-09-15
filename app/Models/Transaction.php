<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'drug_id', 'type', 'quantity', 'price', 'transaction_date'
    ];

    public function drug() {
        return $this->belongsTo(Drug::class);
    }
}
