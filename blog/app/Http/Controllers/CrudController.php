<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Session;

class CrudController extends Controller
{
    public function showData()
    {
        $showData = Crud::simplePaginate(4);
        return view('showData', compact('showData'));
    }

    public function storeData()
    {
        return view('storeData');
    }

    public function insertData(Request $request)
    {

        $rules = [
            'name' =>'required|max:10',
            'email'=>'required|email'

        ];
        $this->validate($request, $rules);

        $crud = new Crud();
        $crud->name  = $request->name;
        $crud->email = $request->email;

        $crud->save();
        Session::flash('msg', 'successfully data added');
        return redirect('/');

    }

    public function editData($id = null)
    {
        $editData = Crud::find($id);
        return view('edit_data', compact('editData'));

    }

    public function updateData(Request $request, $id)
    {

        $rules = [
            'name' =>'required|max:10',
            'email'=>'required|email'

        ];
        $this->validate($request, $rules);

        $crud = Crud::find($id);
        $crud->name  = $request->name;
        $crud->email = $request->email;

        $crud->save();
        Session::flash('msg', 'successfully data updated');
        return redirect('/');

    }

    public function deleteData($id=null)
    {
        $deleteData = Crud::find($id);
        $deleteData->delete($id);

        Session::flash('msg', 'successfully data deleted');
        return redirect('/');


    }
}
