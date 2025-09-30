<?php

namespace Modules\Expenses\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExpenseRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'sometimes|string',
            'amount' => 'sometimes|numeric',
            'category' => 'sometimes|in:food,travel,utilities,other',
            'expense_date' => 'sometimes|date',
            'notes' => 'nullable|string',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
