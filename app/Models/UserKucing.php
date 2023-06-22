<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserKucing extends Model
{
    use HasFactory;
    protected $table = 'user_kucings';
    protected $fillable = [
        'user_id', 'kucing_id'];
}
