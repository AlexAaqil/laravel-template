<footer>
    <div class="container">
        <section class="branding">
            <div class="image">
                <x-app-logo />
            </div>
            <p class="app_name">{{ config('globals.app_name') }}</p>
            <p>Some cool slogan.</p>
        </section>

        <section class="links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('contact') }}">Contact</a>
        </section>

        <section class="contacts">
            <div class="details">
                <p>{{ config('globals.app_phone_main') }}</p>
                <p>{{ config('globals.app_email') }}</p>
            </div>

            <div class="socials">
                <a href="https://wa.me/{{config('globals.app_whatsapp_number')}}">
                    <img src="{{ asset('assets/images/whatsapp.png') }}" alt="{{ config('globals.app_name') }} Whatsapp">
                </a>

                <a href="#">
                    <img src="{{ asset('assets/images/instagram.png') }}" alt="{{ config('globals.app_name') }} Instagram">
                </a>
            </div>
        </section>
    </div>

    <p class="copyright">&copy; 2024 | All rights reserved</p>
</footer>