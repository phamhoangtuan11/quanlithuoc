<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $fillable = [
        'name', 'product_code', 'ingredients',
        'expiration_date', 'manufacturer', 'price'
    ];

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}
