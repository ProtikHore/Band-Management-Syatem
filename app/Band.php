<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    // want to change table name, but default table is the plural name of the class
    protected $primaryKey = 'bandId';
    public $timestamps = false;
}
