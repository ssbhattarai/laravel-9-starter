<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-sm fixed-top bg-white text-primary navbar-dark">
        <div class="container d-flex justify-between">
          <img class="navbar-brand text-primary" src="{{ asset('personally-logo.png')}}">
          <ul class="d-flex font-weight-light">
            <li class="nav-item nav-link d-flex justify-center align-items-center">
                Daily Digest
            </li>

            <li class="nav-item nav-link d-flex justify-center align-items-center">
                Design Tools
            </li>
            <li class="nav-item nav-link d-flex justify-center align-items-center">
                Tutorials
            </li>
            <li class="nav-item nav-link d-flex justify-center align-items-center">
                <button type="button" class="btn btn-primary">Subscribe</button>
            </li>
          </ul>
        </div>
      </nav>

      {{-- banner/main section section --}}
      <section class="title-section bg-white text-center">
        <div class="d-flex flex-column justify-center align-content-center align-items-center title-items container">
            <div>
                <button type="button" class="btn btn-gray">👋 Meet Personally</button>
            </div>
            <h1>Minimal blog template for creative expressions</h1>
            <p>100% customisable and SEO-friendly blog template for personal and commercial purposes.</p>
        </div>
      </section>

      {{-- blog listing  --}}
      <section class="blog-listing bg-gray">
        <div class="container">

            <div class="first-category">
                <div class="d-flex justify-content-between">
                    <p class="text-primary">Daily Digest</p>
                    <p class="text-primary bg-white p-1 rounded cursor-pointer">View All</p>
                </div>
            </div>
        </div>
      </section>
</body>

</html>
