<?php

namespace App\Controllers;

use App\View;

class InvoiceController
{
  public function index():View
  {
   return  View::make('invoices/index');
  }

  public function create():View
  {
   return  View::make('invoices/create');
  }

  public function store():View
  {
    return  View::make('invoices/store');
  }
}
