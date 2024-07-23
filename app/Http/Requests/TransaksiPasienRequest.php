<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransaksiPasienRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Sesuaikan jika perlu
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pasien_id' => 'required|exists:wilayah,id',
            'pelayanan_id' => 'required|exists:data_tindakan,id',
            'obat_id' => 'required|exists:data_obat,id',
            'tanggal' => 'required|date',
            'total_biaya' => 'required|numeric|min:0',
        ];
    }

    /**
     * Customize the error messages for validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'pasien_id.required' => 'Pilih pasien terlebih dahulu.',
            'pasien_id.exists' => 'Pasien yang dipilih tidak ditemukan.',
            'tanggal.required' => 'Tanggal transaksi harus diisi.',
            'tanggal.date' => 'Tanggal transaksi harus berupa tanggal yang valid.',
            'total_biaya.required' => 'Total biaya harus diisi.',
            'total_biaya.numeric' => 'Total biaya harus berupa angka.',
            'total_biaya.min' => 'Total biaya tidak boleh kurang dari 0.',
            'data_tindakan_id.required' => 'Pilih tindakan terlebih dahulu.',
            'data_tindakan_id.array' => 'Data tindakan harus diisi.',
            'data_tindakan_id.*.exists' => 'Tindakan yang dipilih tidak ditemukan.',
        ];
    }
}
