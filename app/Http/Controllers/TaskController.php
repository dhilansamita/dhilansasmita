<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        $datas = Task::paginate();

        return response()->json($datas, 200);
    }

    public function show(int $id) {
        $data = Task::FindOrfail($id);
        
        return response()->json($data, 200);
    }

    public function store(request $request) {
        $data = Task::create($request->all());

        return response()->json($data, 200);
    }

    public function update($id,request $request) {
        $data = Task::Findorfail($id);
        $data->update($request->all());

        return response()->json($Task);
    }

    public function destroy($id) {
        data::Fidorfail($id)->delete();

        return response(null, 200);
    }
}
