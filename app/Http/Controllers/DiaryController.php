<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index()
    {
        $getDiaryRecord = Diary::all();
        return response()->json($getDiaryRecord);
    }

    public function store(Request $request)
    {
        $data = Diary::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return response()->json($data, 201);
    }

    public function show($id)
    {
        return Diary::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $data = Diary::findOrFail($id);

        // Set the attributes individually
        $data->title = $request->title;
        $data->description = $request->description;

        // Save the changes
        $data->save();

        return response()->json($data, 200);
    }


    public function destroy($id)
    {
        $data = Diary::findOrFail($id);
        $data->delete();
        return response()->json(null, 204);
    }
}
