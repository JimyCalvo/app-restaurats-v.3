<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plato
 *
 * @property $id
 * @property $categoria_id
 * @property $nombre
 * @property $caracteristicas
 * @property $Foto
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Plato extends Model
{
    
    static $rules = [
		'categoria_id' => 'required',
		'nombre' => 'required',
		'caracteristicas' => 'required',
		'Foto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria_id','nombre','caracteristicas','Foto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    

}
