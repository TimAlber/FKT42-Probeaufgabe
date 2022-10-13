<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitarbeiter extends Model
{
    use HasFactory;
    /**
	 * @var array
	 */
	protected $fillable = ['firmen_id', 'vorname', 'nachname', 'email'];
}
