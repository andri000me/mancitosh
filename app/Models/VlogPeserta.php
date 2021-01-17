<?php
namespace App\Models;

use CodeIgniter\Model;

class VlogPeserta extends Model
{
  protected $table      = 'vlog_peserta';
  protected $primaryKey = 'id';

  protected $returnType = 'object';

  protected $allowedFields = ['ketua', 'telepon', 'sekolah', 'anggota'];

  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
}
