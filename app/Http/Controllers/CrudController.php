<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Crud\LanguageClass;
use App\Http\Controllers\Crud\LivewireController;
use App\Http\Controllers\Crud\LivewireView;
use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function index()
    {
        $tables = DB::getSchemaBuilder()->getAllTables();
        $ex = Crud::all()->groupBy('table_name')->toArray();
        $existing = [];
        foreach ($ex as $k=>$v)
        {
            $existing[]=$k;
        }
        return view('crud.index', compact('tables', 'existing'));
    }

    public function tableFields($tbl)
    {
        return DB::select("DESCRIBE $tbl");
    }

    public function saveTable(Request $request): string
    {
        $table = $request->input('tbl');
        $sel = $request->input('sel');
        $name = $request->input('name');
        $description = $request->input('description');
        $null = $request->input('null');
        $data ="";
        // Delete if exists
        $count = Crud::where('table_name', $table)->count();
        if($count > 0)
        {
            Crud::where('table_name', $table)->delete();
        }
        for($i=0; $i<count($sel); $i++){
            $data = [
                'table_name' => $table,
                'field' => $name[$i],
                'type' => $sel[$i],
                'null' => $null[$i],
            ];
            Crud::insert($data);
        }
        // Crud
        new LanguageClass($name, $description, $table);
        new LivewireView($name, $null, $sel, $table);
        new LivewireController($table, $name);
        return response($data);
    }
}
