<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller as BaseController;
use View;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Contact;

class Api extends BaseController{
  
  public function retrieve($id){
    $data=Contact::get_by_id($id);
    return  response()->json($data);
  }

  public function generate(){
    $data=Contact::generate();
    return response()->json($data);
  }
}
