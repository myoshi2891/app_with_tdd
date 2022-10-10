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
                    <div class="bg-white p-5 rounded-lg shadow mb-3">Lorem ipsum dolor sit amet.</div>
                    <div class="bg-white p-5 rounded-lg shadow mb-3">Lorem ipsum dolor sit amet.</div>
                    <div class="bg-white p-5 rounded-lg shadow mb-3">Lorem ipsum dolor sit amet.</div>
                    <div class="bg-white p-5 rounded-lg shadow">Lorem ipsum dolor sit amet.</div>
                </div>
                <div>
                    <h2 class="text-lg text-gray-400 font-normal mb-3">General Notes</h2>

                    <textarea class="bg-white rounded-lg shadow min-h-full w-full p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Cupiditate, natus.</textarea>
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
