<x-app>
   <div >
        @foreach($requireUser->requirements as $requirement)

        <h5 class="font-bold mb-2">
                {{ $requirement->title }} 
        </h5>

        <p class="text-sm mb-3">
                {{ $requirement->body }} 
        </p>
        
        
        @endforeach

        
        </a>

</div>



</x-app>
