@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Detalles del personaje {{ $character['name'] }}</h2>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $character['id'] }}</td>
                                </tr>
                                <tr>
                                    <td>Nombre</td>
                                    <td>{{ $character['name'] }}</td>
                                </tr>
                                <tr>
                                    <td>Estado</td>
                                    <td>{{ $character['status'] }}</td>
                                </tr>
                                <tr>
                                    <td>Especie</td>
                                    <td>{{ $character['species'] }}</td>
                                </tr>
                                <tr>
                                    <td>Tipo</td>
                                    <td>{{ $character['type'] }}</td>
                                </tr>
                                <tr>
                                    <td>Género</td>
                                    <td>{{ $character['gender'] }}</td>
                                </tr>
                                <tr>
                                    <td>Origen</td>
                                    <td>{{ $character['origin']['name'] }}</td>
                                </tr>
                                <tr>
                                    <td>URL de origen</td>
                                    <td><a href="{{ $character['origin']['url'] }}">{{ $character['origin']['url'] }}</a></td>
                                </tr>
                                <tr>
                                    <td>Imagen</td>
                                    <td><img src="{{ $character['image'] }}" alt="{{ $character['name'] }}" class="img-responsive"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
