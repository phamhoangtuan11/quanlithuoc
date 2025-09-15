<?php
namespace App\Http\Controllers;

use App\Models\Drug;
use App\Http\Requests\DrugRequest;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    public function index() {
        return response()->json(Drug::all());
    }

    public function store(DrugRequest $request) {
        $drug = Drug::create($request->validated());
        return response()->json($drug, 201);
    }

    public function show($id) {
        return response()->json(Drug::findOrFail($id));
    }

    public function update(DrugRequest $request, $id) {
        $drug = Drug::findOrFail($id);
        $drug->update($request->validated());
        return response()->json($drug);
    }

    public function destroy($id) {
        Drug::destroy($id);
        return response()->json(null, 204);
    }
}
