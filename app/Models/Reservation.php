<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'table_id',
        "date",
        "timeStart",
        "timeEnd",
    ];

    /**
     * A Reservation belongs to a User (One-to-Many relationship).
      */
    public function user()
    {
        return $this->belongsTo(User::class); // Replace 'Client::class' with 'User::class'
    }

    /**
     * A Reservation belongs to a Table (One-to-Many relationship).
      */
    public function table()
    {
        return $this->belongsTo(Table::class);
    }

}
