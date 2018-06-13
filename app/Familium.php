<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Familium
 *
 * @package App
 * @property string $nome
 * @property string $funcao
 * @property text $descricao
 * @property string $facebook
 * @property string $twitter
 * @property string $email
 * @property string $foto
*/
class Familium extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'funcao', 'descricao', 'facebook', 'twitter', 'email', 'foto'];
    protected $table = 'familias';
    
    
    public static function boot()
    {
        parent::boot();

        Familium::observe(new \App\Observers\UserActionsObserver);
    }
    
}
