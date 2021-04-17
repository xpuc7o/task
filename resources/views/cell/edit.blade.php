@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="w-50">
            <form method="post" action="{{ route('cell.update', $cell) }}">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="url">Link</label>
                    <input type="text"
                           name="url"
                           value="{{ old('url', $cell->url) }}"
                           id="url"
                           class="form-control"
                           placeholder="Enter valid url e.g. http://google.com">
                    @include('components.errors')
                </div>

                <color-select :colors='@json($cell::COLORS)' selected-color="{{ old('color', $cell->color) }}"></color-select>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

@endsection
