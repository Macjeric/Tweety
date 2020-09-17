@can('super_admin')
<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Connections</h3>

    <ul>
        @forelse (current_user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-4' }}">
                <div>
                    <a href="{{ $user->path() }}" class="flex items-center text-sm">
                        <img
                            src="{{ $user->avatar }}"
                            alt=""
                            class="rounded-full mr-2"
                            width="40"
                            height="40"
                        >

                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
            <li>No friends yet!</li>
        @endforelse
    </ul>
</div>
@endcan

<!-- Universty Users view -->
@can('uni_users')
<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">How To</h3>
    
        <a href="/" class="text-green-500 hover:bg-green-700 flex items-center text-sm mb-2">
              Using Instruction          
        </a>

        <a href="/" class="text-green-500 hover:bg-green-700 flex items-center text-sm mb-2">
              Check the Requirements needed          
        </a>

        <a href="/" class="text-green-500 hover:bg-green-700 flex items-center text-sm mb-2">
              Contact the Department          
        </a>
                
</div>
@endcan
