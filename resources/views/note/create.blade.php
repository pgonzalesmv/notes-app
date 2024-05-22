@extends('layouts.app')
@section('content')
<a class="btn-large deep-orange lighten-4 black-text" href="{{ route('note.index') }}">Back</a>
<hr/>
<form method="POST" action="{{ route('note.store') }}">
    @csrf
    <label for="">Title:</label>
    <input type="text" name="title" />
    @error('title')
        <p style="color:red;">{{ $message }}</p>
    @enderror

    <label for="">Description:</label>
    <input type="text" name="description" />
    @error('description')
        <p style="color:red;">{{ $message }}</p>
    @enderror

    <input type="submit" value="Create" class="btn-large indigo darken-2">
</form>
@endsection