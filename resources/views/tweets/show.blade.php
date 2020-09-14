<x-app>
<div class="flex p-4">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
            <img
                src="{{ $tweet->user->avatar }}"
                alt=""
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-2">
            <a href="{{ $tweet->user->path() }}">
                {{ $tweet->user->name }} 
            </a>
            <!-- <p class="text-sm"> . {{ $tweet->created_at->toDayDateTimeString() }}</p> -->
        </h5>

        <p class="text-sm mb-3">
                {{ $tweet->body }} 

        </p>

                <a href="/{{$tweet->document}}">
                    <img class="mt-2"  src="/images/pdf-img.svg" width="30" height="30"></img>
                </a>

       
    </div>
</div>

@foreach($tweet->replies as $reply)
    @include ('_replies-panel')
@endforeach


<!-- Reply form -->
<div>
	<form method="POST" action="/tweets/{{$tweet->id}}/replies">
        @csrf

        <textarea
            name="body"
            class="w-full"
            placeholder="Have a Reply?"
            rows=10
            required
            autofocus
        ></textarea>

        <hr class="my-4">

        

            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-10 text-sm text-white h-10"
            >
                Reply
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>

</x-app>
