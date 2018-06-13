<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Metodologium
 *
 * @package App
 * @property string $titulo
 * @property text $conteudo
 * @property string $imagem
*/
class Metodologium extends Model
{
    use SoftDeletes;

    protected $fillable = ['titulo', 'conteudo', 'imagem'];
    protected $table = 'metodologias';
    
    public static function boot()
    {
        parent::boot();

        Metodologium::observe(new \App\Observers\UserActionsObserver);
    }
    
}
