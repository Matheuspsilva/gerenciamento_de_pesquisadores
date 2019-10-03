<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PesquisadorRequest extends FormRequest
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
            'nome' => 'required',
            'cpf' =>  'required',
            'area_formacao' => 'required',
            'link_lattes' => 'required'
        ];
    }

    public function messages(){
        return[
            'nome.required' => 'Campo nome é obrigatório',
            'cpf.required' => 'Campo cpf é obrigatório',
            'area_formacao.required' => 'Campo endereço é obrigatório',
            'link_lattes.required' => 'Campo link lattes é obrigatório'

        ];
    }

}
