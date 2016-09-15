<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ArticleController extends Controller
{
    
    public function index()
    {
    	$data['article'] = \App\article::paginate(10);
    	return view('article.all')->with($data);
    }

    public function add()
    {
    	return view('article.add');
    }

    public function save()
    {
    	$a = new \App\article;
    	$a->title = Input::get('title');
    	$a->contents = Input::get('contents');
    	$a->user_id = 1;
    	$a->save();	

    	return redirect(url('article'));

    }

    public function edit($id)
    {
    	$data['article'] = \App\article::find($id);
    	return view('article.edit')->with($data);
    }

    public function update()
    {
    	$a = \App\article::find(Input::get('id'));
    	$a->title = Input::get('title');
    	$a->contents = Input::get('contents');
    	$a->user_id = 1;
    	$a->save();
    	
    	return redirect(url('article'));
    }

    public function delete($id)
    {
    	$a = \App\article::find($id);
    	$a->delete();

    	return redirect(url('article'));
    }
}
