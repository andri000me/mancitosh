<?php namespace App\Models;

use CodeIgniter\Model;

class Berkas extends Model
{
    protected $table      = 'berkas';
    protected $primaryKey = 'id';

    protected $returnType = 'object';

    protected $allowedFields = ['kategori', 'telepon', 'judul', 'deskripsi', 'video', 'cover'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}