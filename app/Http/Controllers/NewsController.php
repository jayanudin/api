<?php
 
namespace App\Http\Controllers;
 
use App\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class NewsController extends Controller{

    public function index(){
 
        $news  = News::all();
        return $news;
 
    }
 
	public function post(Request $request){
 
    	$news = News::create($request->all());
 
    	return $news;
 
	}

	public function delete($id){
    	$news  = News::find($id);
    	$news->delete();
 
    	return response()->json('Removed successfully.');
	}
 
}