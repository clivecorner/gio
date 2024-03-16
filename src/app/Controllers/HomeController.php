<?php

namespace App\Controllers;

use App\Models\Invoice;
use App\Models\SignUp;
use App\Models\User;
use App\View;

class HomeController
{

    public function index(): string
    {

        $email = "lynnforsyth@gmail.com";
        $name = "Lynn Corner";
        $amount = 25;

        $userModel = new User();
        $invoiceModel = new Invoice();

        $invoiceId = (new SignUp($userModel, $invoiceModel))->register(

            [
                'email' => $email,
                'name' => $name,
            ],
            [
                'amount' => $amount,
            ]

        );
        //original syntax:  return (new View('index'))->render();
        return (string) View::make('index', ['invoice' => $invoiceModel->find($invoiceId)]);

    }

    public function upload()
    {
        //This works for single files not arrays
        $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];
        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

        header('Location: /');
    }
}
