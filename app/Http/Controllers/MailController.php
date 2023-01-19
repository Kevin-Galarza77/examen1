<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function getMail(){
        $data = ['name' => ', se a creado un nuevo producto al CRUD Laravel!!'];
        Mail::to('jimenezkevin1040@gmail.com')->send(new TestMail($data));

        return redirect('/producto');
    }

    public function editMail(){
        $data = ['name' => ', se a editado un producto del CRUD Laravel!!'];
        Mail::to('jimenezkevin1040@gmail.com')->send(new TestMail($data));

        return redirect('/producto');
    }

    public function deleteMail(){
        $data = ['name' => ', se a eliminado un producto del CRUD Laravel!!'];
        Mail::to('jimenezkevin1040@gmail.com')->send(new TestMail($data));

        return redirect('/producto');
    }

}
