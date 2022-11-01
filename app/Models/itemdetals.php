<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\item;

class itemdetals extends Model
{
    use HasFactory;
    protected $fillable = ['item_id','filename'];

    public function item()  
        {  
             return $this->belongsTo('App\model\item');  
        }  
}
