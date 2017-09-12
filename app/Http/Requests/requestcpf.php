<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestcpf extends FormRequest
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
            //Regras
$rules = array(
    'cpf' => 'required|cpf',
    
);
 
//Mensagens
$mensagens = array(
    'cpf_cpf' => 'O campo cpf é inválido',

);
 
//ou adicionar aos arquivos da pasta Languages.
'cpf' => 'O campo :attribute é inválido',
        ];
    }
}
