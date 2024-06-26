<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank_account extends Model
{
    use HasFactory;
    protected $table = 'bank_accounts';
    protected $fillable = [
        'IBAN',
        'money',
        'bank'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
