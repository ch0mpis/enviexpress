<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Guia;

class UpdateGuiaRequest extends FormRequest
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
            'numero_guia'     => 'required|string|max:10|unique:guias,numero_guia,',
            'qr_code'         => 'nullable|string|max:50',
            'tipo_servicio'   => 'required|string|max:20',
            'id_remitente'    => 'required|integer|exists:clientes,id_cliente',
            'id_destinatario' => 'required|integer|exists:clientes,id_cliente',
            'peso_total_kg'   => 'required|numeric|min:0',
            'valor_declarado' => 'required|numeric|min:0',
            'fecha_creacion'  => 'required|date',
            'estado_actual'   => 'required|string|max:50',
            'observaciones'   => 'nullable|string',
        ];
    }

        public function messages(): array
    {
        return [
            'numero_guia.required'     => 'El número de guía es obligatorio.',
            'numero_guia.string'       => 'El número de guía debe ser un texto.',
            'numero_guia.max'          => 'El número de guía no puede superar los 10 caracteres.',
            'numero_guia.unique'       => 'El número de guía ya está registrado.',

            'qr_code.string'           => 'El código QR debe ser un texto.',
            'qr_code.max'              => 'El código QR no puede superar los 50 caracteres.',

            'tipo_servicio.required'   => 'El tipo de servicio es obligatorio.',
            'tipo_servicio.string'     => 'El tipo de servicio debe ser un texto.',
            'tipo_servicio.max'        => 'El tipo de servicio no puede superar los 20 caracteres.',

            'id_remitente.required'    => 'Debe seleccionar un remitente.',
            'id_remitente.integer'     => 'El remitente debe ser un valor numérico.',
            'id_remitente.exists'      => 'El remitente seleccionado no existe en la base de datos.',

            'id_destinatario.required' => 'Debe seleccionar un destinatario.',
            'id_destinatario.integer'  => 'El destinatario debe ser un valor numérico.',
            'id_destinatario.exists'   => 'El destinatario seleccionado no existe en la base de datos.',

            'peso_total_kg.required'   => 'El peso total es obligatorio.',
            'peso_total_kg.numeric'    => 'El peso total debe ser un número.',
            'peso_total_kg.min'        => 'El peso total no puede ser negativo.',

            'valor_declarado.required' => 'El valor declarado es obligatorio.',
            'valor_declarado.numeric'  => 'El valor declarado debe ser un número.',
            'valor_declarado.min'      => 'El valor declarado no puede ser negativo.',

            'fecha_creacion.required'  => 'La fecha de creación es obligatoria.',
            'fecha_creacion.date'      => 'La fecha de creación debe tener un formato válido.',

            'estado_actual.required'   => 'El estado actual es obligatorio.',
            'estado_actual.string'     => 'El estado actual debe ser un texto.',
            'estado_actual.max'        => 'El estado actual no puede superar los 50 caracteres.',

            'observaciones.string'     => 'Las observaciones deben ser un texto válido.',
        ];
    }
}
