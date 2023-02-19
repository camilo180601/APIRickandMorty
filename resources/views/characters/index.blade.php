@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of Characters</h1>
        <a class="btn btn-primary" href="{{ route('characters.store') }}" role="button">Guardar Datos en DB</a>
        <table class="table">
            <thead>
                <h1>Datos en API</h1>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Species</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($characters as $character)
                    <tr>
                        <td>{{ $character['id'] }}</td>
                        <td>{{ $character['name'] }}</td>
                        <td>{{ $character['status'] }}</td>
                        <td>{{ $character['species'] }}</td>
                        <td>
                            <a href="{{ route('characters.show', $character['id']) }}" class="btn btn-info">View</a>
                            <a href="{{ route('characters.edit', $character['id']) }}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
