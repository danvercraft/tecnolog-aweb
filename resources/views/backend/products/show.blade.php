@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                {{ $product->name }}
            </h6>
            <div class="ml-auto">
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary">
                    <span class="text">Volver a Zonas</span>
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>Nombre de la Zona</th>
                    <td>{{ $product->name }}</td>
                    <th>Precio</th>
                    <td>{{ $product->price }}</td>
                </tr>
                <tr>
                    <th>Cantidad</th>
                    <td>{{ $product->quantity }}</td>
                    <th>Estado</th>
                    <td>{{ $product->status }}</td>
                </tr>
                <tr>
                    <td>Validado</td>
                    <td>{{ $product->featured }}</td>
                    <td>Concierto</td>
                    <td>{{ $product->category->name }}</td>
                </tr>
                <tr>
                    <td>Fecha de Creación</td>
                    <td>{{ $product->created_at ? $product->created_at->format('Y-m-d') : "Undefined" }}</td>
                    <td>Fecha de Actualización</td>
                    <td>{{ $product->updated_at ? $product->updated_at->format('Y-m-d') : "Undefined" }}</td>
                </tr>

                <tr>
                    <th>Descripcion</th>
                    <td colspan="3">{{ $product->description }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
