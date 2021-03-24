<?php
// https://codeigniter.com/user_guide/models/model.html#configuring-your-model

namespace App\Models;

use CodeIgniter\Model;

class ModelNoticias extends Model
{
    protected $table      = 'noticias';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;






    protected $allowedFields = [
                                "title",
                                "link",
                                "description",
                                "language",
                                "pubDate",
                                "image",
                                "imageUrl",
                                "imageTitle",
                                "imageLink",
                                "body",
                                "ultimoUsuario"
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
