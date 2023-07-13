<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_persona extends Model{
    protected $table      = 'champ';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'Rango';

    protected $allowedFields = ['Nombre','Clase','Rol'];
}