<?php
namespace App\Models;

use CodeIgniter\Model;

class RobotPeserta extends Model
{
  protected $table      = 'robot_peserta';
  protected $primaryKey = 'id';

  protected $returnType = 'object';

  protected $allowedFields = ['ketua', 'telepon', 'guru', 'sekolah', 'anggota'];

  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
}
