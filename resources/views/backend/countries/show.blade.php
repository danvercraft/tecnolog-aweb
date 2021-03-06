@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                {{ $country->name }}
            </h6>
            <div class="ml-auto">
                <a href="{{ route('admin.countries.index') }}" class="btn btn-primary">
                    <span class="text">Volver a Paises</span>
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $country->name }}</td>
                    <td>{{ $country->status }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
