<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cruds extends Model
{
    protected $fillable =['name', 'email', 'mobile', 'gender', 'os'];
}
