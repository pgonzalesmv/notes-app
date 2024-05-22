@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col s12">
        <a class="waves-effect waves-light btn-large indigo darken-2" href="{{ route('note.create') }}">Create new note</a>
    </div>
</div>
<div class="row">
        <div class="col s12">
            <table class="responsive-table striped highlight">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($notes as $note)
                        <tr>
                            <td>
                                <a href="{{ route('note.show', $note->id) }}">{{ $note->title }}</a>
                            </td>
                            <td>
                                <a href="{{ route('note.edit', $note->id) }}" class="btn-small">EDIT</a>
                                <form method="POST" action="{{ route('note.destroy', $note->id) }}" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-small red">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="center-align">No data.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection