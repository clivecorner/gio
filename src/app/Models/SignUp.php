<?php

namespace App\Models;

use App\Models\Invoice;
use App\Models\User;
use App\App;
use App\Model;

class SignUp extends Model
{

  public function __construct(private User $userModel,private Invoice $invoiceModel)
  {
    parent::__construct();
  }

  public function register(array $userInfo,array $invoiceInfo): int
  {
    

    try {
      $this->db->beginTransaction();  

      $userId = $this->userModel->create($userInfo['email'], $userInfo['name']);
      $invoiceId = $this->invoiceModel->create($invoiceInfo['amount'], $userId);

      $this->db->commit();
    } catch (\PDOException $e) {
      echo 'Database error';

        if ($this->db->inTransaction()) {
        $this->db->rollBack();

      }
      throw $e;
    }
    return (int) $invoiceId;
  }
}
