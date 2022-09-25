<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class RoleUser extends Model
{
                    //use HasFactory;
                    use SoftDeletes;

                    //declare table name
                    public $table ='role_user';
                
                    //this field must type date yyyy-mm-dd hh:mm:ss
                    protected $dates =[
                        'created_at', 
                        'updated_at',
                        'deleted_at',
                    ];
                
                    //declare fillable
                    protected $fillable = [
                        'role_id',
                        'user_id',
                        'created_at', 
                        'updated_at',
                        'deleted_at',
                    ];
                    
                    //one to many
                    public function users()
                    {
                    // 3 paramters(path models, field foreign keys, primary key from table hasMany/hasOne)
                    return $this->belongsTo('App\Models\User','user_id','id');
                    }

                    //one to many
                    public function role()
                    {
                    // 3 paramters(path models, field foreign keys, primary key from table hasMany/hasOne)
                    return $this->belongsTo('App\Models\ManagementAccess\Role','role_id','id');
                    }
}
