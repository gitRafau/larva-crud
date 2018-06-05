<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrudRequest;
use Illuminate\Http\Request;
use App\Crud;

class CrudController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $crud = Crud::latest('id', 'DESC')->get();


        return view('crud.index', compact('crud'));
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(CrudRequest $request)
    {
        $crud = new Crud;

        $crud->title = request('title');
        $crud->body = request('body');
        $crud->save();

        return redirect('crud');
    }

    public function edit(Crud $crud)
    {

        //return $crud;
        return view('crud.edit', compact('crud'));
    }

    public function update(CrudRequest $request, Crud $crud)
    {
        $crud->update($request->all());
        return redirect()->route('crud');
    }

    public function destroy(Crud $crud)
    {
        $crud->delete();
        return redirect()->route('crud');
    }
}
