<?php
namespace App\Http\Controllers;
 
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Contact;
 
class ContactsController extends Controller
{
    public function index()
    {
        return view('settei.index');
    }
}