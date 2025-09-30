<?php

namespace Modules\Expenses\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Expenses\Requests\StoreExpenseRequest;
use Modules\Expenses\Requests\UpdateExpenseRequest;
use Modules\Expenses\Services\ExpenseService;
use Modules\Expenses\Resources\ExpenseResource;

class ExpenseController extends Controller
{
    protected ExpenseService $service;

    public function __construct(ExpenseService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $expenses = $this->service->listExpenses(request()->only(['category','from','to']));
        return ExpenseResource::collection($expenses);
    }

    public function store(StoreExpenseRequest $request)
    {
        $expense = $this->service->createExpense($request->validated());

        return (new ExpenseResource($expense))
        ->additional([
            'message' => 'Expense created successfully'
        ]);
        
    }

    public function show($id)
    {
      
    }

    public function update(UpdateExpenseRequest $request, $id)
    {
        $expense = $this->service->listExpenses(['id'=>$id])->firstOrFail();
        $updated = $this->service->updateExpense($expense, $request->validated());
        return (new ExpenseResource($expense))
        ->additional([
            'message' => 'Expense updated successfully'
        ]);
    }

    public function destroy($id)
    {
        $expense = $this->service->listExpenses(['id'=>$id])->firstOrFail();
        $this->service->deleteExpense($expense);

        return response()->json([
        'message' => 'Expense deleted successfully'
        ], 200);
    }
}
