<?php

namespace App\Http\Requests\Role;

use App\Models\ManagementAccess\Role;
//use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

//this rule only at update requests
use Illuminate\Validation\Rule;

class UpdateRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //create middleware fromkernel at here
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
            //
            'country' => [
                'required','string','max:255',Rule::unique('role')->ignore($this->role),
                //rule unique only works for other record id
            ],
        ];
    }
}
