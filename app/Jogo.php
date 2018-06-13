<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Jogo
 *
 * @package App
 * @property string $titulo
 * @property text $conteudo
 * @property string $imagem
 * @property string $posicao
*/
class Jogo extends Model
{
    use SoftDeletes;

    protected $fillable = ['titulo', 'conteudo', 'imagem', 'posicao'];
    
    
    public static function boot()
    {
        parent::boot();

        Jogo::observe(new \App\Observers\UserActionsObserver);
    }
    
}
