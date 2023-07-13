<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\m_persona;
class C_persona extends Controller{

    public function index()
    {

        $per = new m_persona();
        $datos['personas']=$per->findAll();
        return view('welcome_message',$datos);
    }

    public function agregar()
    {

        
        return view('agregar');
    }
    public function insertar()
    {
       
        $per = new m_persona();

        $data=[
            'Nombre' => $_POST['Nombre'],
            'Clase' => $_POST['Clase'],
            'Rol' => $_POST['Rol'],
        ];

        $per->insert($data);
        return redirect()->to(base_url());
       
        

        
    }
    public function eliminar($Rango=null)
    {
        
      

       $per = new m_persona();
        $per->delete($Rango);

        
        return redirect()->to(base_url());
    }
    public function editar($Rango = null)
    {

        $per = new m_persona();
        $registro['persona']= $per->find($Rango);

      return view('actualizando',$registro);
     


       // return redirect()->to(base_url());
    }
    public function factualizar()
    {

        $per = new m_persona();
        $Rango= $_POST['Rango'];

        $data=[
            'Nombre' => $_POST['Nombre'],
            'Clase' => $_POST['Clase'],
            'Rol' => $_POST['Rol'],
        ];
        $per->update($Rango,$data);

        



       return redirect()->to(base_url());
    }





}