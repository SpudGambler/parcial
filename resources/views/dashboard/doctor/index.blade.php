@extends('dashboard.master')
@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">R.U.T</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Email</th>
                <th scope="col">Direccion</th>
                <th scope="col">Especialidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
                <tr>
                    <th scope="row">{{ $doctor->id }}</th>
                    <td>{{ $doctor->rut }}</td>
                    <td>{{ $doctor->doctor_names }}</td>
                    <td>{{ $doctor->doctor_lastnames }}</td>
                    <td>{{ $doctor->email }}</td>
                    <td>{{ $doctor->direccion }}</td>
                    <td>{{ $doctor->especialidad }}</td>
                    <td>
                        <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-info btn-sm">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mb-3">
        <a href="{{ route('doctor.create') }}" class="btn btn-info btn-sm mb-3">Añadir Doctor</a>
    </div>
@endsection
