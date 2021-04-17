@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @foreach(auth()->user()->cells->chunk(3) as $row)
            <div class="cells-row">
                @foreach($row as $cell)
                    <cell url="{{ $cell->buttonUrl() }}" edit-url="{{ route('cell.edit', $cell) }}" color="{{ $cell->color }}"></cell>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
