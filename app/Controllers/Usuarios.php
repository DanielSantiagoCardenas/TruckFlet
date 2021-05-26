<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Registrar_cliente;
use App\Models\Registrar_Conductor;
use App\Models\Iniciar_sesion;

class Usuarios extends BaseController{
	


	public function registrarCliente(){
		$obtener = \Config\Services::request();

		$nom = $obtener->getPost("nombres_cliente");
		$ape = $obtener->getPost("apellidos_cliente");
		$ide = $obtener->getPost("identificacion_cliente");
		$ema = $obtener->getPost("email_cliente");
		$tel = $obtener->getPost("telefono_cliente");
		$con = sha1($obtener->getPost("password_cliente2"));
		$tip = 'Cliente';

		$obj_registar = new Registrar_cliente();

		// $respuesta = $obj_registar->guardar_cliente($nom, $ape,$ide,$ema,$tel,$con,$tip);

		$respuesta = $obj_registar->almacenar_Usuario($nom, $ape,$ide,$ema,$tel,$con,$tip);

		
		if ($respuesta){
			$data["mensaje"]="ok";
			return json_encode($data);
		}else{
			$data['mensaje']="error";
			return json_encode($data);
		}
		
 
	}

	public function registrarConductor(){
		$obtener = \Config\Services::request();

		$nom = $obtener->getPost("nombres_conductor");
		$ape = $obtener->getPost("apellidos_conductor");
		$ide = $obtener->getPost("identificacion_conductor");
		$ema = $obtener->getPost("email_conductor");
		$tel = $obtener->getPost("telefono_conductor");
		$con = sha1($obtener->getPost("password_conductor2"));
		$lic = $obtener->getPost("licencia");
		$tip = 'Conductor';


		$obj_registar = new Registrar_Conductor();


		$respuesta = $obj_registar->guardar_conductor($nom, $ape, $ide, $ema, $tel, $con, $lic, $tip);

		
		if ($respuesta){
			$data["mensaje"]="ok";
			return json_encode($data);
		}else{
			$data['mensaje']="error";
			return json_encode($data);
		}
		
 
	}
	public function usuarios_admin()
	{
		if (session('is_logged')) {
			$data = [
					'titulo' => 'Usuarios',
					'graficas' => false,
					'archivo_js' => 'usuarios.js'
				];

			echo view('cabecera');
			echo view('usuarios/usuarios_admin', $data);
			echo view('pie');
			echo view('script_standar', $data);
		}else{
			return redirect()->route('/');
		}
		


	}
	public function validar_user()
	{
		$obtener = \Config\Services::request();

		$user = $obtener->getPost('campo_correo');
		$pass = sha1($obtener->getPost('campo_password'));


		$obj_usuario = new Iniciar_Sesion();
		$usuario = $obj_usuario->getUser('email',$user);

		if (!$usuario) {
			return "No existe usuario";
		}
		if ($usuario['estado'] == 'Activo') {
			if ($pass == $usuario['contrasena']) {
			session()->set([
							'id_registro' =>$usuario['id_registro'],
							'nombres' =>$usuario['nombres'],
							'apellidos' =>$usuario['apellidos'],
							'identificacion' =>$usuario['identificacion'],
							'email' =>$usuario['email'],
							'telefono' =>$usuario['telefono'],
							'licencia_categoria' =>$usuario['licencia_categoria'],
							'is_logged' => true
							]);

			return redirect()->route('panel-control');
		} else {
			return redirect()->with('msg',[	'type' => 'warning','body' => 'Contrasenia incorrecta']);
		}

		} else {
			return redirect()->with('msg',[	'type' => 'info','body' => 'El usuario esta Bloqueado']);
		}
		echo "si llegue aqui ";

	}

	public function cerrar_sesion()
	{
		session()->destroy();
		return redirect()->route('/');
	}

}