@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Character</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="{{ route('characters.update', $character->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $character->name }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="alive" {{ $character->status == 'alive' ? 'selected' : '' }}>Alive</option>
                            <option value="dead" {{ $character->status == 'dead' ? 'selected' : '' }}>Dead</option>
                            <option value="unknown" {{ $character->status == 'unknown' ? 'selected' : '' }}>Unknown</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="species">Species</label>
                        <input type="text" class="form-control" id="species" name="species" value="{{ $character->species }}">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ $character->type }}">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="male" {{ $character->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ $character->gender == 'female' ? 'selected' : '' }}>Female</option>
                            <option value="genderless" {{ $character->gender == 'genderless' ? 'selected' : '' }}>Genderless</option>
                            <option value="unknown" {{ $character->gender == 'unknown' ? 'selected' : '' }}>Unknown</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="origin_name">Origin Name</label>
                        <input type="text" class="form-control" id="origin_name" name="origin_name" value="{{ $character->origin_name }}">
                    </div>
                    <div class="form-group">
                        <label for="origin_url">Origin URL</label>
                        <input type="text" class="form-control" id="origin_url" name="origin_url" value="{{ $character->origin_url }}">
                    </div>
                    <div class="form-group">
                        <label for="image">Image URL</label>
                        <input type="text" class="form-control" id="image" name="image" value="{{ $character->image }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
