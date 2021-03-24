<?php
// https://codeigniter.com/user_guide/models/model.html#configuring-your-model

namespace App\Models;

use CodeIgniter\Model;

class ModelFontes extends Model
{
    protected $table      = 'fontes';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
                                'nome',
                                'url',
                                'comentario',
                                'horario',
                                'ativado',
                                'ultimoUsuario',
                            ];

    protected $useTimestamps = true;
    protected $createdField  = 'dataCriado';
    protected $updatedField  = 'dataEditado';
    protected $deletedField  = 'dataExcluido';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

 ?>
