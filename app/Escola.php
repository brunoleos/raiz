<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Escola
 *
 * @package App
 * @property string $razao_social
 * @property string $nome_fantasia
 * @property string $cnpj
 * @property string $endereco
 * @property string $logo
 * @property string $telefone
 * @property string $responsavel
*/
class Escola extends Model
{
    use SoftDeletes;

    protected $fillable = ['razao_social', 'nome_fantasia', 'cnpj', 'endereco', 'logo', 'telefone', 'responsavel'];
    
    
    public static function boot()
    {
        parent::boot();

        Escola::observe(new \App\Observers\UserActionsObserver);
    }
    
}
