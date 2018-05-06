<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    public function departmentName($value='')
    {
    	return $this->belongsTo('\App\Department', 'department_id');
    }
}
