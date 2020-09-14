<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
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
        </h5>     


        <p class="text-sm mb-3">
            <a class="hover:bg-blue-200" href="/tweets/{{$tweet->id}}">
                {{ $tweet->body }}
            </a>
        </p>

        <div class="flex items-center">
            <p class="text-sm text-green-500"> {{ $tweet->created_at->toDayDateTimeString() }}</p>  
            
            <p class="text-sm text-blue-500 ml-2"> - 
                <a href="/tweets/{{$tweet->id}}"> {{ $tweet->replies->count() }} comment(s).</a>
            </p>

                <form method="POST" action="/tweets/{{$tweet->id}}" class="ml-5">
                @method('DELETE')
                @csrf
                <button type="submit" class="text-xs text-red-700">Delete</button>
            </form>

        </div>
        


    </div>
</div>

