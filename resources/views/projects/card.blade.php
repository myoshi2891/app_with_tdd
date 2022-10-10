<div class="bg-white p-5 rounded-lg shadow min-h-fit">
    <h3 class="font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-blue-400 pl-4">
        <a href="{{ $project->path() }}">{{ $project->title }}</a>
    </h3>
    <div class="text-gray-400">{{ Str::limit($project->description, 100) }}</div>
</div>
