<?php

namespace App\Http\Requests\PortOfOrigin;

use App\Models\MasterData\PortOfOrigin;
//use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;
//this rule only at update requests
use Illuminate\Validation\Rule;

class StorePortOfOriginRequest extends FormRequest
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
            'country' => [
                'required','email','max:255','unique:port_of_origin'
            ],
        ];
    }
}
