<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Ospite;



class TestController extends Controller {
  // QUI SI RITORNA SEMPRE QUALCOSA CHE STA DENTRO PAGES, MAI LE COSE CHE STANNO DENTRO LAYOUTS O COMPONENTS

  public function home() {

    $ospiti = Ospite::all();
    return view('pages.home', compact("ospiti"));

  } // END OF HOME FUNCTION

} // END OF TESTCONTROLLER