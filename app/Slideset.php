<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Slideset
 *
 * @package App
 * @property string $imagem
*/
class Slideset extends Model
{
    use SoftDeletes;

    protected $fillable = ['imagem'];
    
    
    public static function boot()
    {
        parent::boot();

        Slideset::observe(new \App\Observers\UserActionsObserver);
    }
    
}
