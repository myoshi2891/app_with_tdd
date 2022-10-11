    @csrf

    <div class="field mb-6">
        <label for="title" class="label text-sm mb-2 block">title</label>

        <div class="control">
            <input type="text"
                class="input bg-transparent border border-gray-400 p-2 text-xs w-full rounded-lg shadow mb-3"
                name="title" placeholder="Title" required value="{{ $project->title }}">
        </div>
    </div>

    <div class="field">
        <label for="description" class="label text-sm mb-2 block">Description</label>

        <div class="control">
            <textarea class="textarea bg-transparent border border-gray-400 p-2 text-xs w-full rounded-lg shadow mb-3"
                name="description" rows="10" placeholder="I should start learning piano" required>
                  {{ $project->description }}
                  </textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit"
                class="button is-link bg-blue-400 text-white text-sm no-underline rounded-lg shadow-md py-2 px-5">
                {{ $buttonText }}</button>
            <a href="{{ $project->path() }}">Cancel</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="field mt-6">
            @foreach ($errors->all() as $error)
                <li class="text-sm text-red-500">{{ $error }}</li>
            @endforeach
        </div>
    @endif
