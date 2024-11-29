<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
  protected $table      = 'board';
  protected $primaryKey = 'bid';

  protected $useAutoIncrement = true;

  protected $returnType     = 'object';

  protected $allowedFields = [
    'userid', 'subject', 'content', 'regdate'
  ];
}