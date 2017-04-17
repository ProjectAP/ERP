<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class DataController extends Controller
{
    public function index(){
    	// var_dump();
    	$items = DB::table('tbl_item as a')
    			->join('tbl_fabric_type as b','b.id', '=', 'a.type')
    			->join('tbl_item_type as c','c.id', '=', 'a.type_item')
    			->join('tbl_weave_type as d','d.id', '=', 'a.weave')
    			->join('tbl_yarn_type as e','e.id', '=', 'a.tp_lusi')
    			->join('tbl_yarn_type as f','f.id', '=', 'a.tp_pakan')
    			->select('a.code as code','b.name as type','c.name as item_type','d.name as weave','e.name as tp_lusi','f.name as tp_pakan', 'a.no_lusi as no_lusi', 'a.no_pakan as no_pakan', 'a.cotton as cotton', 'a.poly as poly', 'a.l_finish as l_finish')
    			->get();
    	return view('item')->with('items', $items);
    }
}
