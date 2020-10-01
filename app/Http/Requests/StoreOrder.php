<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrder extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'bail|required|alpha_num|max:32|min:1',
            'last_name' => 'bail|alpha_num|max:32|min:1',
            'email' => 'max:80|email',
            'phone' => 'required|max:20|regex:/\+[0-9]{1,2}\s\([0-9]{3}\)\s[0-9]{3}-[0-9]{4}/',
            'schedule_date' => 'required|date',
            'street_address' => 'required|max:200',
            'city' => 'required|max:100',
            'province' => 'required|max:100',
            'postal' => 'max:10|regex:/[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]/',
            'country' => 'required|max:100',
        ];
    }

    /**
     * User default messages
     */
    public function messages()
    {
        return [
        ];
    }
}
