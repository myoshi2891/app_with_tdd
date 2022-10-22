<div>
    <div class="flex flex-col bg-white p-5 rounded-lg shadow mt-3">

        <h3 class="font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-blue-400 pl-4">
            Invite a User
        </h3>
        <form method="POST" action="{{ $project->path() . '/invitations' }}">
            @csrf
            <div class="mb-3">
                <input type="email" name="email" class="border border-gray-300 rounded w-full py-2 px-3"
                    placeholder="Email address">
            </div>
            <button type="submit"
                class="bg-blue-400 text-white text-sm no-underline rounded-lg shadow-md py-2 px-5">invite</button>
        </form>
        @include ('errors', ['bag' => 'invitations'])
    </div>
</div>
