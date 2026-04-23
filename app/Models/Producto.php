<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model {
    protected $table = 'productos';
    protected $primaryKey = 'productoID';
    public $timestamps = false;
    protected $fillable = ['nombre', 'album', 'precio', 'stock', 'fechaLanzamiento', 'artistaID', 'generoID', 'tipoProductoID'];

    public function artista() {
        return $this->belongsTo(Artista::class, 'artistaID');
    }
    public function genero() {
        return $this->belongsTo(Genero::class, 'generoID');
    }
    public function tipoProducto() {
        return $this->belongsTo(TipoProducto::class, 'tipoProductoID');
    }
}