<?php

namespace Modules\Expenses\Services;

use Modules\Expenses\Repositories\ExpenseRepository;
use Modules\Expenses\Events\ExpenseCreated;

class ExpenseService
{
    protected ExpenseRepository $repository;

    public function __construct(ExpenseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function listExpenses(array $filters = [])
    {
        return $this->repository->all($filters);
    }

    public function createExpense(array $data)
    {
        $expense = $this->repository->create($data);
        return $expense;
    }

    public function updateExpense($expense, array $data)
    {
        return $this->repository->update($expense, $data);
    }

    public function deleteExpense($expense)
    {
        $this->repository->delete($expense);
    }
}
