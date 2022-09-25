<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //declare table name
    public $table ='detail_user';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates =[
        'created_at', 
        'updated_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'user_id',
        'type_user_id',
        'nomer_karyawan',
        'photo',
        'created_at', 
        'updated_at',
        'deleted_at',
    ];
    //one to many
    public function type_user()
    {
    // 3 paramters(path models, field foreign keys, primary key from table hasMany)
    return $this->belongsTo('App\Models\MasterData\TypeUser','type_user_id','id');
    }

    
    //one to many
    public function user()
    {
    // 3 paramters(path models, field foreign keys, primary key from table hasMany)
    return $this->belongsTo('App\Models\User','user_id','id');
    }

}
