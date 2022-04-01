<?php
            
namespace Controllers;

use QB;
use Rakit\Validation\Validator;
use Laminas\Diactoros\ServerRequest AS Request;

class Test
{

    public function index()
    { 

        $data = QB::table('table_name')->get();

        view('path/data', compact('data'));

    }

    public function create()
    {

        view('path/form');

    }

    public function store(Request $request)
    {

        QB::table('table_name')->insert([

            'column' => $request->data

        ]);

        redirect('url');

    }

    public function edit($id)
    {
        
        $data = QB::table('table_name')->where('id', $id)->first();

        view('path/data', compact('data'));

    }

    public function update(Request $request, $id)
    {

        QB::table('table_name')->where('id', $id)->update([
            
            'column' => $request->data

        ]);

        redirect('url');

    }

    public function delete($id)
    {
        
        QB::table('table_name')->where('id', $id)->delete();

        redirect('url');

    }

}