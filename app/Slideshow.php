<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Slideshow
 *
 * @package App
 * @property string $titulo
 * @property text $chamada
 * @property string $imagem
*/
class Slideshow extends Model
{
    use SoftDeletes;

    protected $fillable = ['titulo', 'chamada', 'imagem'];
    
    
    public static function boot()
    {
        parent::boot();

        Slideshow::observe(new \App\Observers\UserActionsObserver);
    }
    
}
