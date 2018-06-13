<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Depoimento
 *
 * @package App
 * @property string $foto
 * @property string $nome
 * @property text $depoimento
*/
class Depoimento extends Model
{
    use SoftDeletes;

    protected $fillable = ['foto', 'nome', 'depoimento', 'responsavel', 'endereco', 'complemento', 'cep', 'telefone', 'email'];
    
    
    public static function boot()
    {
        parent::boot();

        Depoimento::observe(new \App\Observers\UserActionsObserver);
    }
    
}
            