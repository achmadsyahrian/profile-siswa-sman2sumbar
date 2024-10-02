<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login | {{ env('APP_NAME') }}</title>
    <!-- CSS files -->
    <link rel="shortcut icon" href="{{ asset('dist/img/logo/logosekolah.png') }}" type="image/x-icon">

    <link href="{{ asset('dist/css/tabler.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-flags.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-payments.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-vendors.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/demo.min.css?1684106062') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img
                        src="{{ asset('dist/img/logo/logosekolah.png') }}" height="100" alt=""></a>
                <h2>SMA Negeri 2 Sumatera Barat</h2>
            </div>
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @elseif (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form class="card card-md" action="{{route('login.auth')}}" method="post" autocomplete="off" novalidate>
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Masuk ke akunmu</h2>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="Masukkan email">
                        @error('email')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIK</label>
                        <input type="string" id="password" value="{{old('nik')}}" name="nik" class="form-control @error('nik') is-invalid @enderror" placeholder="Masukkan NIK"
                            autocomplete="off">
                        @error('nik')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-success w-100">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('dist/js/tabler.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('dist/js/demo.min.js?1684106062') }}" defer></script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const passwordInput = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // Prevent default anchor behavior
            e.preventDefault();

            // Toggle the type attribute
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the eye icon (optional)
            this.querySelector('svg').classList.toggle('icon-eye-off');
        });
    </script>

</body>

</html>
