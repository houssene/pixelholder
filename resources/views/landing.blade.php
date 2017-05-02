@extends('layout')
@section('title', 'Resources for coding')

@section('content')
    <!-- home section -->
    <section id="home">
        <div class="container fluid">
            {{-- Nav Menu--}}
            <nav class="menu">
                <div class="brand">
                    <a href="#home">
                        <img src="/img/logo.png" alt="logo pixel holder">
                    </a>
                </div>
                <div class="right-menu">
                    <a href="#example" class="js-scrollTo">Get Started</a>
                    <a href="#utilities" class="js-scrollTo">Utilities</a>
                    <a href="#documentation" class="js-scrollTo no-border-right">Documentation</a>
                </div>
            </nav>

            {{-- Descriptions --}}
            <div class="desc">
                <h3>How does it work?</h3>
                <p>Become a better digital designer in just minutes a day.</p>
                <a href="#example" class="go js-scrollTo">Get started</a>
            </div>

            {{-- SVG --}}
            <svg class="headercurve" viewBox="170 0 1000 80" preserveAspectRatio="none">
                <path d="M1280 3.9V110H0C194 71.33 662-19.9 1280 3.9z"></path>
            </svg>
            <svg class="headercurve2" viewBox="170 -20 1000 100" preserveAspectRatio="none">
                <path d="M1280 3.9V110H0C194 71.33 662-19.9 1280 3.9z"></path>
            </svg>

            {{-- Arrow animation --}}
            <a href="#example" class="arrow js-scrollTo">
                <img src="/img/down-arrow.png" alt="">
            </a>
        </div>
    </section>
    <!-- example section -->
    <section id="example">
        <div class="container">

            <div class="info">
                <h3>Copy and Paste</h3>
                <p>the following code into <strong>src</strong> of your <strong>img</strong> tag and adjust width or height, according to your convenience</p>
                <code>{{ route('canvas', ['width' => 300, 'height' => 200]) }}</code>
            </div>

            <div id="grid">
                <div class="grid-item">
                    <img src="{{ route('canvas', ['width' => 350, 'height' => 200]) }}" class="grid-img" width="350" height="200" alt="pixel holder">
                    <div class="overlay">
                        <span>click to copied</span>
                    </div>
                </div>
                <div class="grid-item">
                    <img src="{{ route('canvas', ['width' => 350, 'height' => 170]) }}" class="grid-img" width="350" height="170" alt="pixel holder">
                    <div class="overlay">
                        <span>click to copied</span>
                    </div>
                </div>
                <div class="grid-item">
                    <img src="{{ route('canvas', ['width' => 350, 'height' => 250]) }}" class="grid-img" width="350" height="250" alt="pixel holder">
                    <div class="overlay">
                        <span>click to copied</span>
                    </div>
                </div>
                <div class="grid-item">
                    <img src="{{ route('canvas', ['width' => 350, 'height' => 300]) }}" class="grid-img" width="350" height="300" alt="pixel holder">
                    <div class="overlay">
                        <span>click to copied</span>
                    </div>
                </div>
                <div class="grid-item">
                    <img src="{{ route('canvas', ['width' => 350, 'height' => 160]) }}" class="grid-img" width="350" height="160" alt="pixel holder">
                    <div class="overlay">
                        <span>click to copied</span>
                    </div>
                </div>
                <div class="grid-item">
                    <img src="{{ route('canvas', ['width' => 350, 'height' => 260]) }}" class="grid-img" width="350" height="260" alt="pixel holder">
                    <div class="overlay">
                        <span>click to copied</span>
                    </div>
                </div>
                <div class="grid-item">
                    <img src="{{ route('canvas', ['width' => 350, 'height' => 350]) }}" class="grid-img" width="350" height="350" alt="pixel holder 350x400">
                    <div class="overlay">
                        <span>click to copied</span>
                    </div>
                </div>
                <div class="grid-item">
                    <img src="{{ route('canvas', ['width' => 350, 'height' => 240]) }}" class="grid-img" width="350" height="240" alt="pixel holder">
                    <div class="overlay">
                        <span>click to copied</span>
                    </div>
                </div>
                <div class="grid-item">
                    <img src="{{ route('canvas', ['width' => 350, 'height' => 200]) }}" class="grid-img" width="350" height="200" alt="pixel holder">
                    <div class="overlay">
                        <span>click to copied</span>
                    </div>
                </div>
            </div>
    </section>

    <!-- animated copied -->
    <div class="copied animated">
        <div class="content">
            <h3 class="title animated">copied</h3>
        </div>
    </div>

    <!-- footer section -->
    <footer id="footer">
        <div class="container">
            <span>Copyright tous les droits réservés 2017</span>
            <span class="pull-right">
                Powered by <a href="//themartiansgeeks.com">The Martians Geeks</a>
            </span>
        </div>
    </footer>
@endsection