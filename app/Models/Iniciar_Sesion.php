<?php 
 namespace app\Models;

 use CodeIgniter\Model;

 class Iniciar_Sesion extends Model
 {
 	
 	protected $table      = 'registro';
     protected $primaryKey = 'id_registro';

     protected $useAutoIncrement = true;

     protected $returnType     = 'array';
     protected $useSoftDeletes = false;

     protected $allowedFields = ['nombres','apellidos','identificacion','email','telefono','contrasena','licencia_categoria','estado','tipo'];
 	public function getUser($columna,$valor)
    {
        
        return $this->where($columna, $valor)->first();
    }

}
