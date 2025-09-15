<?php
namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\TransactionRequest;

class TransactionController extends Controller
{
    public function index() {
        return response()->json(Transaction::with('drug')->get());
    }

    public function store(TransactionRequest $request) {
        $transaction = Transaction::create($request->validated());
        return response()->json($transaction, 201);
    }

    public function show($id) {
        return response()->json(Transaction::with('drug')->findOrFail($id));
    }

    public function update(TransactionRequest $request, $id) {
        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->validated());
        return response()->json($transaction);
    }

    public function destroy($id) {
        Transaction::destroy($id);
        return response()->json(null, 204);
    }
}
