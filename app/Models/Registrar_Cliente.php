<?php 
namespace app\Models;

use CodeIgniter\Model;

class Registrar_Cliente extends Model
{
	
	protected $table      = 'registro';
    protected $primaryKey = 'id_registro';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombres','apellidos','identificacion','email','telefono','contrasena','licencia_categoria','estado','tipo'];
	public function guardar_cliente($nom, $ape,$ide,$ema,$tel,$con,$tip)
	{
		$nombre = $this->escapeString($nom);
		$apellido = $this->escapeString($ape);
		$ident = $this->escapeString($ide);
		$email = $this->escapeString($ema);
		$telefono = $this->escapeString($tel);
		$contra = $this->escapeString($con);
		$tipo = $this->escapeString($tip);

		$sql = "INSERT INTO registro(nombres,apellidos,identificacion,email,telefono,contrasena,tipo) values(?,?,?,?,?,?,?) ";

		$insertar = $this->db->query($sql, [$nombre, $apellido, $ident,$email, $telefono, $contra, $tipo]);

		if ($insertar) {
			return true;
		} else {
			return false;
		}

	}

	function almacenar_Usuario($nom, $ape,$ide,$ema,$tel,$con,$tip){
		$data = array(
						'nombres' => $this->escapeString($nom),
						'apellidos' =>	$this->escapeString($ape),
						'identificacion' =>	$this->escapeString($ide),
						'email' =>	$this->escapeString($ema),
						'telefono' => $this->escapeString($tel),
						'contrasena' =>	$this->escapeString($con),
						'tipo' => $this->escapeString($tip)
						

					);

		return $this->insert($data);
	}

	
}
