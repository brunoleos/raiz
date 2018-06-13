<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class About
 *
 * @package App
 * @property string $titulo
 * @property string $subtitulo
 * @property text $conteudo
 * @property string $imagem
 * @property string $numero
 * @property string $chamada
 * @property text $beneficios
*/
class About extends Model
{
    use SoftDeletes;

    protected $fillable = ['titulo', 'subtitulo', 'conteudo', 'imagem', 'numero', 'chamada', 'beneficios'];
    
    
    public static function boot()
    {
        parent::boot();

        About::observe(new \App\Observers\UserActionsObserver);
    }
    
}
