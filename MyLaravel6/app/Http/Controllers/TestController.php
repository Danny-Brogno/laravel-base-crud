<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;



class TestController extends Controller {
  // QUI SI RITORNA SEMPRE QUALCOSA CHE STA DENTRO PAGES, MAI LE COSE CHE STANNO DENTRO LAYOUTS O COMPONENTS

  public function home() {

    return view('pages.home');

  } // END OF HOME FUNCTION

} // END OF TESTCONTROLLER
