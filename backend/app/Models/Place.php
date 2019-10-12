<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Place
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $open_week_at
 * @property string $open_weekend_at
 * @property float|null $lat
 * @property float|null $lng
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $amenity
 * @property string $popup_content
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Place newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Place newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Place query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Place whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Place whereAmenity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Place whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Place whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Place whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Place whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Place whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Place whereOpenWeekAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Place whereOpenWeekendAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Place wherePopupContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Place whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Place extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'places';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
