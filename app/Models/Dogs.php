<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dogs extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name'];
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('age', function (Builder $builder) {
            $builder->where('age', '>', 8);
        });
    }

    function scopeAgeGreaterThan($query, $age) {
        return $query->where('age', '>', $age);
    }

    function scopeAtAge($q, $a) {
        return $q->where('age', '=', $a);
    }

    function dogsRequiringAntiRabbitBiteShot(){
        return $this->ageGreaterThan(6);
    }

}
