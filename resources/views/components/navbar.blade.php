<div class="navbar bg-base-200">
    <div class="flex-1">
        <a href="{{ route('amicis.index') }}" class="text-xl btn btn-ghost">
            Amici
        </a>
    </div>
    <div class="flex-none">
        <ul class="px-1 menu menu-horizontal">
            <li>
                <a href="{{ route('amicis.create') }}" class="{{ request()->routeIs('amicis.create') ? 'active' : '' }}">
                    Create
                </a>
            </li>
            <li class="mr-3 ">
                <details>
                    <summary>User</summary>
                    <ul class="rounded-t-none p2 bg-base-100">
                        <li><a>Logout</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
</div>
