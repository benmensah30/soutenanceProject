<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ URL::asset('css/auth.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/fontawesome/css/all.min.css') }}">
    <title>Inscription et connexion</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <form action="{{ route('login') }}" class="sign-in-form" method="POST">

                    @if ($message = Session::get('success'))
                        <ul class="alert alert-success">
                            <li>{{ $message }}</li>
                        </ul>
                    @endif

                    @if ($message = Session::get('error'))
                        <ul class="alert alert-danger">
                            <li>{{ $message }}</li>
                        </ul>
                    @endif

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            {!! implode('', $errors->all('<li>:message</li>')) !!}
                        </ul>
                    @endif

                    @csrf
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" name="email" id="email-old" placeholder="Adresse email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password_old" placeholder="Password" />
                    </div>
                    <button type="submit" class="btn solid">Se connecter</button>
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>


                <form action="{{ route('auth.store') }}" class="sign-up-form" method="POST">
                    @csrf
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" id="username_new" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email_new" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password_new" placeholder="Password" />
                    </div>
                    <button type="submit" class="btn">S'inscrire</button>
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="{{ URL::asset('assets/images/log.svg') }}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="{{ URL::asset('assets/images/register.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/auth.js') }}"></script>
</body>

</html>
