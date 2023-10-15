@extends('layout.app')

@section('title', 'The list of tasks')

@section('content')
    <nav class="mb-4">
        <a class="link" href="{{ route('tasks.create') }}">Add task</a>
    </nav>
    <ul>
        @forelse ($tasks as $task)
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}">
                <li @class([ 'line-through' => $task->completed])>{{ $task->title }}</li>
            </a>
        @empty
            <div>There are no tasks!</div>
        @endforelse
    </ul>
    @if ($tasks->count())
        <nav class='mt-4'>
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
