<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
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
     * @return array<string, mixed>
     */

    protected function prepareForValidation()
    {
        // If contratado is null, set it to 0
        $this->merge([
            'contratado' => $this->contratado ?? 0,
        ]);
    }

    public function rules()
    {
        return [
            'nome' => ['required', 'string'],
            'descricao' => ['max:3000'],
            'imagem' => ['image', 'nullable'],
            'contratado' => ['boolean', 'nullable'],
            'curso_id' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => "O campo deve ser informado.",
            'nome.max' => "O campo deve ter no máximo 100 caracteres",
            'descricao.max' => "O campo deve ter no máximo 3000 caracteres",
            'imagem.image' => 'A imagem precisa ser dos tipos PNG, JPEG, JGP, etc..'
        ];
    }
}
