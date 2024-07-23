<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataTindakanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Sesuaikan dengan kebutuhan otorisasi Anda
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_tindakan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'biaya' => 'required|numeric',
        ];
    }
}
