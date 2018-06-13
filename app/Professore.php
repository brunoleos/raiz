<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Professore
 *
 * @package App
 * @property string $nome
 * @property string $escola
 * @property string $materias
 * @property string $turmas
*/
class Professore extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'materias', 'turmas', 'escola_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Professore::observe(new \App\Observers\UserActionsObserver);
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
