<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function addInventory(Request $request){
      // $incomingFields = $request -> validate([
      //   'item_name' => 'required',
      //   'category' => 'required',
      //   'tag' => 'required',
      //   'asset_status'=> 'required',
      //   'asset_id'=>'required',
      // ]);

      dd($request);
    }
}
?>
