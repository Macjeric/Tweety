<x-app>
<div >
        @foreach($requireUser->requirements as $requirement)

        <h5 class="font-bold mb-2">
                {{ $requirement->title }} 
        </h5>

        <p class="text-sm mb-3">
                {{ $requirement->body }} 
        </p>
        
        <a href="{{ current_user()->path() }}/requirements/edit">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
                Edit
            </button>
        </a>
        @endforeach

        
        </a>

</div>

</x-app>
