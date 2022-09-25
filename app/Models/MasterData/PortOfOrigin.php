<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PortOfOrigin extends Model
{
                    //use HasFactory;
                    use SoftDeletes;

                    //declare table name
                    public $table ='port_of_origin';
                
                    //this field must type date yyyy-mm-dd hh:mm:ss
                    protected $dates =[
                        'created_at', 
                        'updated_at',
                        'deleted_at',
                    ];
                
                    //declare fillable
                    protected $fillable = [
                        'country',
                        'subtotal',
                        'created_at', 
                        'updated_at',
                        'deleted_at',
                    ];

                    //one to many
                    public function appointment()
                    {
                        // 2 paramters(path models, field foreign keys)
                        return $this->hasMany('App\Models\Operational\Appointment','port_of_origin_id');
                    }
}
