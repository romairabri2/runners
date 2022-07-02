<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Runner
 * @package App\Models
 * @version July 1, 2022, 11:07 pm UTC
 *
 * @property integer $user_id
 * @property string $name
 * @property string $apellido
 * @property string $telefono
 * @property string $foto
 * @property string $antecedentes
 */
class Runner extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'runners';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'name',
        'apellido',
        'telefono',
        'foto',
        'antecedentes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'name' => 'string',
        'apellido' => 'string',
        'telefono' => 'string',
        'foto' => 'string',
        'antecedentes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'name' => 'required|string|min:2|max:20',
        'apellido' => 'required|string|min:2|max:20',
        'telefono' => 'string|max:255',
        'foto' => 'required|string|max:100',
        'antecedentes' => 'required|string|max:2000',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
