<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Qr
 *
 * @property int $id
 * @property string $string
 * @property int $points
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Qr newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Qr newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Qr query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Qr whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Qr whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Qr wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Qr whereString($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Qr whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Qr extends Model
{
    protected $fillable = [
        "string",
        "points",
    ];

    static function generateString(int $length = 64)
    {
        return substr(md5(mt_rand()), 0, $length);
    }
}
