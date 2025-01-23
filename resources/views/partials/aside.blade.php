<aside>
    <div class="brand">
        <div class="profile">
            <div class="image">
                <a href="{{ route('profile.edit') }}">
                    <img src="{{ asset('assets/images/default_profile.jpg') }}" alt="Profile Image">
                </a>
            </div>

            <div class="text">
                <a href="{{ route('profile.edit') }}">
                    {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                </a>
                <span>{{ Auth::user()->email }}</span>
            </div>
        </div>
    </div>

    <ul class="links">
        @php
            $navLinks = [
                ['route' => 'admin.dashboard', 'icon' => 'fas fa-home', 'text' => 'Dashboard'],
                ['route' => 'users.index', 'icon' => 'fas fa-users', 'text' => 'Users'],
                ['route' => 'blogs.index', 'icon' => 'fas fa-blog', 'text' => 'Blogs'],
                ['route' => 'user-messages.index', 'icon' => 'fas fa-comment', 'text' => 'Messages'],
            ];
        @endphp

        @foreach($navLinks as $link)
            <li class="link {{ Route::currentRouteName() === $link['route'] ? 'active' : '' }}">
                <a href="{{ $link['route'] ? route($link['route']) : '#' }}">
                    <i class="{{ $link['icon'] }}"></i>
                    <span class="text">{{ $link['text'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>

    <div class="footer">
        <div class="logout">
            <form action="{{ route('logout') }}" method="post">
                @csrf

                <button type="submit">
                    <span class="text">Logout</span>
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </form>
        </div>
    </div>
</aside>