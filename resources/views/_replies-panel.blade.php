<div class="flex p-4">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $reply->owner->path() }}">
            <img
                src="{{ $reply->owner->avatar }}"
                alt=""
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-2">
            <a href="{{ $reply->owner->path() }}">
                {{ $reply->owner->name }} 
            </a>
            <!-- <p class="text-sm"> . {{ $tweet->created_at->toDayDateTimeString() }}</p> -->
        </h5>

        <p class="text-sm mb-3">
                {{ $reply->body }}
        </p>
        <p class="text-sm text-green-500"> {{ $reply->created_at->toDayDateTimeString() }}</p>  
       
    </div>
</div>