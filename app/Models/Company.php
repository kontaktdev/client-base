<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'vat',
        'address',
        'city',
        'zipcode',
        'country',
        'phone',
        'mobile',
        'email',
        'website',
        'description',
    ];

    protected $table = 'companies';

    public function employees(): HasMany {
        return $this->hasMany(Employee::class);
    }
}
