<?php

namespace App\Classes;

class Invoice
{
  public function index():string
  {
    return 'Invoice';
  }

  public function create():string
  {

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    return
<<<FORM
<form action="/invoice/create"  method="post">
  <ul> 
    <li>
      <label for="amount">Amount:</label>
      <input type="text" id="amount" name="amount" />
    </li>
    <li class="button">
  <button type="submit">Click to submit</button>
    </li>
  </ul>
</form>
FORM;

  }

  public function store(){
    echo $_POST['amount'];
  
  }
}
