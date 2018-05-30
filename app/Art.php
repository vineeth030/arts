<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    public function departmentName($value='')
    {
    	return $this->belongsTo('\App\Department', 'department_id');
    }

    public function createdBy($value='')
    {
    	return $this->belongsTo('\App\User', 'user_id');
    }
}
