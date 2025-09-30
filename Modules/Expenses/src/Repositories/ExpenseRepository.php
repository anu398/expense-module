<?php

namespace Modules\Expenses\Repositories;

use Modules\Expenses\Models\Expense;

class ExpenseRepository
{
    public function all($filters = [])
    {
        $query = Expense::query();

        return $query->get();
    }

    public function find($id)
    {
        return Expense::findOrFail($id);
    }

    public function create(array $data)
    {
        return Expense::create($data);
    }

    public function update($expense, array $data)
    {
        $expense->update($data);
        return $expense;
    }

    public function delete($expense)
    {
        $expense->delete();
    }
}
