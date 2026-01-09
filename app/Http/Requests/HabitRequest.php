<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HabitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'max:255',
                'string',
                Rule::unique('habits')
                    ->where(fn (Builder $query) => $query->where('user_id', $this->user()->id))
                    ->ignore($this->route('habit')->id),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo é obrigatorio',
            'name.max' => 'Deve ter no máximo 255 caracteres',
            'name.string' => 'Deve ser texto',
            'name.unique' => 'Você já possui um hábito com esse nome',
        ];
    }
}
