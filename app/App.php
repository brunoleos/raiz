<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class App
 *
 * @package App
 * @property string $aluno
 * @property string $escola
 * @property string $personagem
 * @property string $pontuacaomax
 * @property string $itemcabeca
 * @property string $itemtorso
 * @property string $itemperna
 * @property string $runas
*/
class App extends Model
{
    use SoftDeletes;

    protected $fillable = ['personagem', 'pontuacaomax', 'itemcabeca', 'itemtorso', 'itemperna', 'runas', 'aluno_id', 'escola_id'];
    
    
    public static function boot()
    {
        parent::boot();

        App::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setAlunoIdAttribute($input)
    {
        $this->attributes['aluno_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEscolaIdAttribute($input)
    {
        $this->attributes['escola_id'] = $input ? $input : null;
    }
    
    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'aluno_id')->withTrashed();
    }
    
    public function escola()
    {
        return $this->belongsTo(Escola::class, 'escola_id')->withTrashed();
    }
    
}
