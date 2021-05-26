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

  public function show($id) {

    $ospite = Ospite::find($id);
    return view("pages.ospite", compact("ospite"));
  } // END OF SHOW FUNCTION

  public function create() {

    return view("pages.ospiti-form");

  } // END OF create FUNCTION

  public function newOspiti(Request $request) {

    // dd($request -> all());
    $validate = $request -> validate([
      'name' => 'nullable|max:100',
      'lastname' => 'nullable|max:100',
      'date_of_birth' => 'nullable|date',
      'document_type' => 'nullable|max:20',
      'document_number' => 'nullable|numeric'
    ]);

    $ospite = Ospite::create($validate);
    return redirect() -> route('show-ospite', $ospite -> id);
  }
} // END OF TESTCONTROLLER
