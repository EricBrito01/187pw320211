<?php
// https://codeigniter.com/user_guide/models/model.html
// https://codeigniter.com/user_guide/models/model.html#configuring-your-model


namespace App\Models;

use CodeIgniter\Model;

class ModelBhaskara extends Model
{
    protected $table      = 'bhaskara'; // NOME DA TABELA NO BANCO
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['a',
                                'b',
                                'c',
                                'delta',
                                'x1',
                                'x2'
                            ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}


?>
