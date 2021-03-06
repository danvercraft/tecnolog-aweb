@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                {{ $category->name }}
            </h6>
            <div class="ml-auto">
                <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">
                    <span class="text">Volver a Conciertos</span>
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Parentesco</th>
                    <th>Descripcion</th>
                    <th>Stado</th>
                    <th>Creado el</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->parent->name ?? '' }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->status }}</td>
                    <td>{{ $category->created_at }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
