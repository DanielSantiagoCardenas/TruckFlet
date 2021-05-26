<?php 
namespace app\Models;

use CodeIgniter\Model;

class Registrar_Conductor extends Model
{

	protected $table      = 'registro';
    protected $primaryKey = 'id_registro';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombres','apellidos','identificacion','email','telefono','contrasena','licencia_categoria','estado','tipo'];
	public function guardar_conductor($nom, $ape,$ide,$ema,$tel,$con,$lic,$tip)
	{

		$nombre = $this->escapeString($nom);
		$apellido = $this->escapeString($ape);
		$ident = $this->escapeString($ide);
		$email = $this->escapeString($ema);
		$telefono = $this->escapeString($tel);
		$contra = $this->escapeString($con);
		$tipo = $this->escapeString($tip);
		$licen = $this->escapeString($lic);

		$sql = "INSERT INTO registro(nombres,apellidos,identificacion,email,telefono,contrasena,tipo,licencia_categoria) values(?,?,?,?,?,?,?,?) ";

		$insertar = $this->db->query($sql, [$nombre, $apellido, $ident,$email, $telefono, $contra, $tipo, $licen]);

		if ($insertar) {
			return true;
		} else {
			return false;
		}
		// $data = array(
		// 				'nombres_conductor' => $this->escapeString($nom),
		// 				'apellidos_conductor' => $this->escapeString($ape),
		// 				'identificacion_conductor' => $this->escapeString($ide),
		// 				'telefono_conductor' => $this->escapeString($tel),
		// 				'email_conductor' => $this->escapeString($ema),
		// 				'password_conductor2' => $this->escapeString($con),
		// 				'tipo' => $this->escapeString($tip),
		// 				'licencia' => $this->escapeString($lic)
						
		// 			);

		// return $this->insert($data);

		// $sql = "INSERT INTO registro(nombres,apellidos,identificacion,email,telefono,contrasena,tipo) values(?,?,?,?,?,?,?) ";

		// $insertar = $this->db->query($sql, [$nombre, $apellido, $ident,$email, $telefono, $contra, $tipo]);

		// if ($insertar) {
		// 	return true;
		// } else {
		// 	return false;
		// }

		// $sql = "INSERT INTO registro(nombres,apellidos,identificacion,email,telefono,contrasena,licencia_categoria,tipo) values(?,?,?,?,?,?,?) ";

		// $insertar = $this->db->query($sql, [$nombre, $apellido, $ident,$email, $telefono, $contra,$licencia, $tipo]);

		// if ($insertar) {
		// 	return true;
		// } else {
		// 	return false;
		// }

	}

	
}
