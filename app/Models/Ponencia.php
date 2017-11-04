<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ponencia
 * @package App\Models
 * @version November 3, 2017, 11:09 pm -05
 */
class Ponencia extends Model
{
    use SoftDeletes;

    public $table = 'ponencias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'ponente_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'ponente_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function ponente()
    {
        return $this->belongsTo('App\Models\Ponente');
    }

    public function asistentes()
    {
        return $this->hasMany('App\Models\Asistente');
    }
    
}
