@extends('layouts.user')
@section('content')
    <div id="particles-js">
        <div id="pseudo-bg"></div>
        <div class="centering card-login-outer">
            <h1>Register</h1>
            <div class="card-login">
                <form action="{{ route('register') }}" id="form-login" method="POST" class="d-flex flex-column mb-3">
                    @csrf
                    <input type="text" placeholder="Name" name="name">
                    <input type="email" placeholder="Email" name="email">
                    <input type="number" name="phone" placeholder="Phone Number">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required
                        autocomplete="new-password">
                    <button class="submit-button" type="submit">Sign Up</button>
                </form>


                {{-- <div class="mb-2">
                    @if (Route::has('password.request'))
                        <a class=" underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                </div> --}}
                <a href="{{ route('login') }}" class="text-center">Already registered?</a>

            </div>
        </div>
    </div>




    <!-- Vendor JS Files -->
    <script src="{{ asset('/user/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('/user/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/user/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/user/assets/js/main.js') }}"></script>

    {{-- Custom JS --}}
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="{{ asset('/user/assets/js/custom.js') }}"></script>
@endsection
