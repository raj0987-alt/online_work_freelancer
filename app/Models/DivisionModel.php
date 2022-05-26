<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisionModel extends Model
{
    public $table='division';
        public $primaryKey='id';
        public $incrementing=true;
        public $keyType='int';
        public  $timestamps=false;
}
