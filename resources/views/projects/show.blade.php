@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-gray-400 text-sm font-normal">
                <a href="/projects">My Projects</a> / {{ $project->title }}
            </p>
            <a href="/projects/create" class="bg-blue-400 text-white text-sm no-underline rounded-lg shadow-md py-2 px-5">New
                Project</a>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-lg text-gray-400 font-normal mb-3">Tasks</h2>

                    @foreach ($project->tasks as $task)
                        <div class="bg-white p-5 rounded-lg shadow mb-3">
                            <form method="POST" action="{{ $task->path() }}">
                                @method('PATCH')
                                @csrf
                                <div class="flex">
                                    <input name="body" value="{{ $task->body }}"
                                        class="w-full {{ $task->completed ? 'text-gray-400' : '' }}">
                                    <input name="completed" type="checkbox" onchange="this.form.submit()"
                                        {{ $task->completed ? 'checked' : '' }}>
                                </div>
                            </form>
                        </div>
                    @endforeach

                    <div class="bg-white p-5 rounded-lg shadow mb-3">
                        <form action="{{ $project->path() . '/tasks' }}" method="POST">
                            @csrf
                            <input placeholder="Add a new task." class="w-full" name="body">
                        </form>

                    </div>
                    <div>
                        <h2 class="text-lg text-gray-400 font-normal mb-3">General Notes</h2>
                        <form method="POST" action="{{ $project->path() }}">
                            @csrf
                            @method('PATCH')
                            <textarea name="notes" class="bg-white rounded-lg shadow min-h-full w-full p-5 mb-4"
                                placeholder="Anything special that you want to make a note of?">
                            {{ $project->notes }}
                        </textarea>
                            <button type="submit"
                                class="bg-blue-400 text-white text-sm no-underline rounded-lg shadow-md py-2 px-5">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/4 px-3">
                @include('projects.card')
                {{-- <div class="bg-white p-5 rounded-lg shadow">
                    <h1>{{ $project->title }}</h1>
                    <div>{{ $project->description }}</div>
                    <a href="/projects">Go Back</a>
                </div> --}}
            </div>
        </div>
    </main>
@endsection
