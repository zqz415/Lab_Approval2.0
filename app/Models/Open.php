<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Open extends Model
{

    protected  $table = 'open';
    public $timestamps = true ;
    protected $primaryKey = 'id';
    protected $guarded = [];
}
