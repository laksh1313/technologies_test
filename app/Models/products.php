<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
	
    //Primary key for table
    protected $primaryKey = 'id';
	//Table name 
    protected $table = 'products';
}
