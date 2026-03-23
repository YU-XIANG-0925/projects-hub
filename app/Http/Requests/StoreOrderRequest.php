<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'username' => 'required|string|max:8',
            'pname' => 'required|string|max:8',
            'pnum' => 'required|integer|min:1|max:10',
        ];
    }
    public function messages(): array
    {
        return [
            'username.required' => '訂購者名稱為必填項目。',
            'username.max'      => '訂購者名稱最多不能超過 8 個字元。',
            'pname.required'    => '品名為必填項目。',
            'pname.max'         => '品名最多不能超過 8 個字元。',
            'pnum.required'     => '數量為必填項目。',
            'pnum.integer'      => '數量必須是整數數字。',
            'pnum.min'          => '數量最少需為 1。',
            'pnum.max'          => '數量最多不能超過 10。',
        ];
    }
}
