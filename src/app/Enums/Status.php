<?php 
declare(strict_types=1);

namespace App\Enums;

class Status
{
  public const PENDING = 'Pending';
  public const PAID = 'Paid';
  public const DECLINED = 'Declined';

  public const ALL_STATUSES = [
    self::PENDING => 'Pending',
    self::PAID => 'Paid',
    self::DECLINED => 'Declined',
  ];

}