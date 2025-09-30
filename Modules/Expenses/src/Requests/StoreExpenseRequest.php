<?php

namespace Modules\Expenses\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExpenseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'amount' => 'required|numeric',
            'category' => 'required|in:food,travel,utilities,other',
            'expense_date' => 'required|date',
            'notes' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'amount.required' => 'Please enter the expense title',
            'category.required' => 'Please enter the category from these food,travel,utilities and other',
            'expense_date.required' => 'Please select a date',
        ];
    }
   
}
