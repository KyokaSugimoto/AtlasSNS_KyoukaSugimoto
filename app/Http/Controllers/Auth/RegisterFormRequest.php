<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

// class AtlasFormRequest extends FormRequest
// {
//     /**
//      * Determine if the user is authorized to make this request.
//      *
//      * @return bool
//      */
//     public function authorize()
//     {
//         return true;
//     }

//     /**
//      * Get the validation rules that apply to the request.
//      *
//      * @return array
//      */
//     public function rules()
//     {
//         return [
//                 'username'=>['required','min:2','max:12'],
//                 'mail'=>['required','min:5','max:50','unique','email'],
//                 'password'=>['required','alpha_num','between:8,20','confirmed'],
//                 'password_confirmation'=>['required','alpha_num','between:8,20'],
//             //
//         ];
//     }
// }
