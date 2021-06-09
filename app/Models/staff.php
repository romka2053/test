<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class staff extends Model
{

    use HasFactory;
    protected $table = 'staff';

    public function chief()
    {
        return $this->hasMany(staff::class,'parent_id','id');
    }

        public function  childrenstaff()
        {
            return $this->hasMany(staff::class,'parent_id')->with('chief');

        }



}
