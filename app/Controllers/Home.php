<?php namespace App\Controllers;
    use App\Models\Usuarios;
    use App\Models\InventarioModel;
    use App\Models\Employee;
    use App\Models\TareaModel;
class Home extends BaseController
{

    public function __construct(){
        helper('url');
        $this->encypter = \Config\Services::encrypter();
    }

    public function index()
    {
        $mensaje = session('mensaje');
        return view('login', ["mensaje" => $mensaje]);
        

    }

    public function inicio(){
        return view('inicio'); 
    }
    public function vender(){
        return view('vender'); 
    }

    public function bodega(){

        $crud = new InventarioModel();
        $datos = $crud->listadoproducto();
        $data = [
            "datos" => $datos
        ];

        return view('/bodega', $data);
    }

    public function login(){
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');
        $Usuario = new Usuarios();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

        if (count($datosUsuario) > 0 &&
        password_verify($password, $datosUsuario[0]['password'])) {
            $data = [
                         "usuario" => $datosUsuario[0]['usuario'],
                         "type"    => $datosUsuario[0]['type']
            ];
            $session = session();
            $session->set($data);

            return redirect()->to(base_url('/inicio'))->with('mensaje','1');
        }else {
            return redirect()->to(base_url('/'))->with('mensaje','0');
        }
    }

    public function salir() {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    public function crear_usuario(){
        return view('crear_usuario');
    }


    function guardar_usuario(){
        $usuario = new Usuarios();
        $data = [
            'usuario' => $this->request->getPost('usuario'),
            'password' => $this->request->getPost('password'),
             'type'  => $this->request->getPost('type')
         ];
 
        $usuario->save($data);
 
        return redirect()->to(base_url('inicio'))->with('msg','Producto Guardado.');
            
        }

    


    public function crear(){
        return view('crear');

    }


   public function store(){
       $employee = new Employee();
       $data = [
           'nombre' => $this->request->getPost('nombre'),
           'Código'  => $this->request->getPost('Código'),
           'descripcion' => $this->request->getPost('descripcion'),
           'cantidad'  => $this->request->getPost('cantidad')
        ];

       $employee->save($data);

       return redirect()->to(base_url('/bodega'))->with('msg','Producto Guardado.');
   }



    public function editar(){
        return view('editar');
        // $model = new InventarioModel();
        // $request = \Config\Services::request();
        // $id_producto = $request->getPost('id_producto');
        // $data = [
        //     "id_producto"  => $request->getPost('id_producto'),
        //     "nombre"  =>  $request->getPost('nombre'),
        //     "descripcion"  =>  $request->getPost('descripcion'),
        //     "cantidad"  =>  $request->getPost('cantidad')  
        // ];
        // $res = $model->update($id_producto, $data);
        // echo json_encode(["msg"=>$res]);
    }
    public function obtenerproducto(){

    }
    public function eliminar($id){
        // $model = new InventarioModel();
        // $request = \Config\Services::request();
        // $id_producto = $request->getPost('id_producto');
        // $res = $model->delete('id_producto');

        // echo json_encode(["msg"=>$res]);
        $producto= new Employee();
        $producto->delete($id);

    
        return redirect()->to(base_url('bodega'));
        
    }

    public function buscar(){
        $model = new InventarioModel();
        $request = \Config\Services::request();
        $id_producto = $request->getPost('id_producto');
        echo json_encode($model->find($id_producto));
    }


}
