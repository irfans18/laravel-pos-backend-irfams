<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
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
         'question' => 'required|max:255',
         'category' => 'required|in:Numeric,Verbal,Logika',
         'option_a' => 'required|max:255',
         'option_b' => 'required|max:255',
         'option_c' => 'required|max:255',
         'option_d' => 'required|max:255',
         'key' => 'required|in:a,b,c,d',
      ];
   }
}
