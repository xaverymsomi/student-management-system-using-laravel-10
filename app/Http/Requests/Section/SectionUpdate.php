<?php

namespace App\Http\Requests\Section;

use App\Helpers\Qs;
use Illuminate\Foundation\Http\FormRequest;

class SectionUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'teacher_id' => 'sometimes|nullable|exists:users,id',
        ];
    }

    public function attributes()
    {
        return  [
            'teacher_id' => 'Teacher',
        ];
    }

    protected function getValidatorInstance()
    {
        $input = $this->all();

        $input['teacher_id'] = $input['teacher_id'] ? Qs::decodeHash($input['teacher_id']) : NULL;

        $this->getInputSource()->replace($input);

        return parent::getValidatorInstance();
    }
}
