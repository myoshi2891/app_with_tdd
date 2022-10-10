@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <h2 class="text-gray-400 text-sm font-normal">My Projects</h2>
            <a href="/projects/create" class="bg-blue-400 text-white text-sm no-underline rounded-lg shadow-md py-2 px-5">New
                Project</a>
        </div>
    </header>

    <div class="lg:flex lg:flex-wrap -mx-3">
        @forelse ($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                @include('projects.card')
            </div>
        @empty
            <div>No projects yet.</div>
        @endforelse
    </div>
@endsection
