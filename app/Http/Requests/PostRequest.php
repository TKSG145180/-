<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    
    public function rules()
    {
        return [
            'shifts.start_time' => 'required',
            'shifts.end_time' => 'required',
            'month' => 'required'
        ];
    }
}
