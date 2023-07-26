<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Website extends Controller
{
    public function index(Request $request){
		$data['country']=DB::table('country')->orderBy('country','asc')->get();
		return view('index',$data);
	}
	
	public function getState(Request $request){
		$cid=$request->post('cid');
		$state=DB::table('state')->where('country',$cid)->orderBy('state','asc')->get();
		$html='<option value="">Select State</option>';
		foreach($state as $list){
			$html.='<option value="'.$list->id.'">'.$list->state.'</option>';
		}
		echo $html;
	}
	
	public function getCity(Request $request){
		$sid=$request->post('sid');
		$city=DB::table('city')->where('state',$sid)->orderBy('city','asc')->get();
		$html='<option value="">Select City</option>';
		foreach($city as $list){
			$html.='<option value="'.$list->city.'">'.$list->city.'</option>';
		}
		echo $html;
	}
}
