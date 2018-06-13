<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Aluno
 *
 * @package App
 * @property string $nome
 * @property string $escola
 * @property string $idade
 * @property string $serie
 * @property string $turma
 * @property string $turno
 * @property string $endereco
 * @property string $nome_do_responsavel
 * @property string $cpf_do_responsavel
 * @property string $telefone_do_responsavel
 * @property string $email_do_responsavel
*/
class Aluno extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'idade', 'serie', 'turma', 'turno', 'endereco', 'nome_do_responsavel', 'cpf_do_responsavel', 'telefone_do_responsavel', 'email_do_responsavel', 'escola_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Aluno::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEscolaIdAttribute($input)
    {
        $this->attributes['escola_id'] = $input ? $input : null;
    }
    
    public function escola()
    {
        return $this->belongsTo(Escola::class, 'escola_id')->withTrashed();
    }
    
}
