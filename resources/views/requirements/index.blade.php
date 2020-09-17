<x-app>
    @foreach($requirements as $tweet)
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
            <h5 class="font-bold mt-3">
                <a href="{{ $tweet->user->path() }}">
                    {{ $tweet->user->name }} 
                </a>
            </h5>     
        </div>
    @endforeach

    </div>

        @foreach($requirements as $requirement)

        <h5 class="font-bold mb-2">
                The Requirements proposed by our Department. 
        </h5>

        <p class="text-sm mb-3">
                {{ $requirement->body }} 
        </p>

        @endforeach



</x-app>
