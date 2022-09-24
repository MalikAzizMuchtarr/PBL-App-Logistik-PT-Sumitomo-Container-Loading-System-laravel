<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
                            //use HasFactory;
                            use SoftDeletes;

                            //declare table name
                            public $table ='appointment';
                        
                            //this field must type date yyyy-mm-dd hh:mm:ss
                            protected $dates =[
                                'created_at', 
                                'updated_at',
                                'deleted_at',
                            ];
                        
                            //declare fillable
                            protected $fillable = [
                                'user_id',
                                'eta_sin',
                                'eta_btm',
                                'ata_sbi',
                                'nomer_container',
                                'size',
                                'port_of_origin_id',
                                'forwarder',
                                'place_lot',
                                'free_charge_detention',
                                'free_charge_demurrage',
                                'fee_detention',
                                'fee_demurrage',
                                'subtotal_detention',
                                'subtotal_demurrage',
                                'total_stay',
                                'total_charge',                                
                                'created_at', 
                                'updated_at',
                                'deleted_at',
                            ];
}
