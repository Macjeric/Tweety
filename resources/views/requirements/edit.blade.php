<x-app>
    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        @foreach($requireUser->requirements as $requirement)
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="name"
            >
                Title
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="text"
                   name="title"
                   id="title"
                   value="{{ $requirement->title }}"
                   required
            >

            @error('title')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="body">
                Body
            </label>
        <textarea
            name="body"
            class="w-full"
            rows=10
            required
            autofocus
        >{{ $requirement->body }}</textarea>

@endforeach
      </form>


</x-app>

