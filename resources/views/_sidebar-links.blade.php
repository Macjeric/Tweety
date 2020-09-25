<ul>
    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="{{ route('home') }}"
        >
            Home
        </a>
    </li>

@can('super_admin')
    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="/explore"
        >
            Explore
        </a>
    </li>
@endcan

    @auth
        <li>
            <a
                class="font-bold text-lg mb-4 block"
                href="{{ current_user()->path() }}"
            >
                Profile
            </a>
        </li>

@can('super_admin')
<li>
        <a
            class="font-bold text-lg mb-4 block"
            href="/requirements/show"
        >
            Requirements
        </a>
    </li>
@endcan

        <li>
            <form method="POST" action="/logout">
                @csrf

                <button class="font-bold text-lg">Logout</button>
            </form>
        </li>
    @endauth
</ul>
