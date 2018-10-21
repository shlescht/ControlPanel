<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Blog
 * @package App\Models
 * @version October 21, 2018, 9:52 pm UTC
 *
 * @property \App\Models\Person person
 * @property \Illuminate\Database\Eloquent\Collection persons
 * @property integer IDPn
 * @property string img_1
 * @property string img_2
 * @property string img_3
 * @property boolean acepted
 * @property string note
 * @property string Title
 * @property string bBody
 */
class Blog extends Model
{
    use SoftDeletes;

    public $table = 'blog';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'IDBg';
    protected $dates = ['deleted_at'];


    public $fillable = [
        'IDPn',
        'img_1',
        'img_2',
        'img_3',
        'acepted',
        'note',
        'Title',
        'bBody'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'IDBg' => 'integer',
        'IDPn' => 'integer',
        'img_1' => 'string',
        'img_2' => 'string',
        'img_3' => 'string',
        'acepted' => 'boolean',
        'note' => 'string',
        'Title' => 'string',
        'bBody' => 'string'
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
    public function person()
    {
        return $this->belongsTo(\App\Models\Person::class);
    }
}
