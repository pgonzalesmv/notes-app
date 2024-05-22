@extends('layouts.app')
@section('content')
<a class="btn-large deep-orange lighten-4 black-text" href="{{ route('note.index') }}">Back</a>
<hr/>
<form action="{{ route('note.update', $note->id) }}" method="POST">
    @method('PUT')
    @csrf
    <label for="">Title</label>
    <input type="text" name="title" value="{{ $note->title }}" />

    <label for="">Description</label>
    <input type="text" name="description" value="{{ $note->description }}" />

    <input type="submit" value="Update" class="btn-large indigo darken-2">
</form>
@endsection