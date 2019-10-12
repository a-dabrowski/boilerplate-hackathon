<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Place
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Place newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Place newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Place query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Place whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Place whereAmenity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Place whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Place whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Place whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Place whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Place whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Place whereOpenWeekAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Place whereOpenWeekendAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Place wherePopupContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Place whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Place extends Model
{
    protected $fillable =[
        "popup_content",
        "amenity",
        "name",
        "address",
        "open_week_at",
        "open_weekend_at",
        "lat",
        "lng",
    ];

    public function isInArea(array $boundaries):bool{
        if($this->lat >= $boundaries[0][0] ){
            if($this->lat <= $boundaries[1][0]){
                if($this->lng >= $boundaries[0][1] ){
                    if($this->lng <= $boundaries[1][1]){
                        return true;
                    }
                }
            }
        }

        return false;
    }
}
