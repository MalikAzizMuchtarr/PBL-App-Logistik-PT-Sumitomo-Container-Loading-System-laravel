<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
            //use HasFactory;
            use SoftDeletes;

            //declare table name
            public $table ='role';
        
            //this field must type date yyyy-mm-dd hh:mm:ss
            protected $dates =[
                'created_at', 
                'updated_at',
                'deleted_at',
            ];
        
            //declare fillable
            protected $fillable = [
                'title',
                'created_at', 
                'updated_at',
                'deleted_at',
            ];


            public function role_user()
            {
                // 2 paramters(path models, field foreign keys)
                return $this->hasMany('App\Models\ManagementAccess\Role','role_id');
            }
}
