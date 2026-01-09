<?php

namespace App\Http\Requests;

use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateHabitRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        $habitId = $this->route('habit')->id;

        return [
            'name' => [
                'required',
                'max:255',
                'string',
                Rule::unique('habits')
                    ->where(fn (Builder $query) => $query->where('user_id', $this->user()->id))
                    ->ignore($habitId),
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
