<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Person
 * @package App\Models
 * @version October 21, 2018, 7:16 pm UTC
 *
 * @property \App\Models\Role role
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection Blog
 * @property integer IDUr
 * @property integer IDRl
 * @property string p_name
 * @property string ap_ma
 * @property string ap_pa
 */
class Person extends Model
{
    use SoftDeletes;

    public $table = 'persons';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $primaryKey = 'IDPn';
    protected $dates = ['deleted_at'];


    public $fillable = [
        'IDUr',
        'IDRl',
        'p_name',
        'ap_ma',
        'ap_pa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'IDPn' => 'integer',
        'IDUr' => 'integer',
        'IDRl' => 'integer',
        'p_name' => 'string',
        'ap_ma' => 'string',
        'ap_pa' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function blogs()
    {
        return $this->hasMany(\App\Models\Blog::class);
    }

    public static function getIDPn($IDUr){
      return Person::where('IDUr', '=', $IDUr)->select('IDPn')->get();
    }

    public static function getPName($IDUr){
      return Person::where('IDUr', '=', $IDUr)->select('p_name', 'ap_pa', 'ap_ma')->get();
    }
}
