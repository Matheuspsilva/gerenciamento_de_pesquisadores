<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicacaoRequest extends FormRequest
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
            'pesquisador_id' => 'required',
            'titulo' => 'required',
            'periodico' => 'required',
            'issn' => 'required',
            'ano' => 'required'


        ];
    }

    public function messages()
    {
        return[
            'pesquisador_id.required' => 'Campo pesquisador_id é obrigatório',
            'titulo.required' => 'Campo titulo é obrigatório',
            'periodico.required' => 'Campo periódico é obrigatório',
            'issn.required' => 'Campo Issn é obrigatório',
            'ano.required' => 'Campo ano é obrigatório'


        ];
    }
}
