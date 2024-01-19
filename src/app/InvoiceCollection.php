<?php
declare(strict_types=1);

namespace App;

class InvoiceCollection implements \Iterator
{

  public function __construct(public array $invoices)
  {

  }

  public function current()
  {
    echo __METHOD__ . PHP_EOL;
    return current($this->invoices);
  }

  public function key()
  {
    echo __METHOD__ . PHP_EOL;
    return key($this->invoices);
  }

  public function next()
  {
    echo __METHOD__ . PHP_EOL;
    next($this->invoices);
  }

  public function rewind()
  {
    echo __METHOD__ . PHP_EOL;
    reset($this->invoices);
  }

  public function valid()
  {
    echo __METHOD__ . PHP_EOL;
    return current($this->invoices) !== false;

  }
}