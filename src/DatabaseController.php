<?php

namespace afiqhamzah\dbanalyzer;

use afiqhamzah\dbanalyzer\UtilClass\table;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $database = env('DB_DATABASE');

        $getTableName = "Tables_in_".$database;

        $TableCollections = array();

        $tables = DB::connection()->select("SHOW TABLES");

        foreach ($tables as $table) {

            $groupTable = new table();

            $table =  $table -> {$getTableName};
            $columns = DB::getSchemaBuilder()->getColumnListing($table);
            $groupTable->set_tableName($table);    
            foreach ($columns as $column) {
                    $groupTable->add_columnNames($column);
            }

            array_push($TableCollections, $groupTable);
        }

        return response()->json($TableCollections);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
