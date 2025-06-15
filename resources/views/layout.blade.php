<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="icon"
      href="resources/favicon.ico"
      type="image/x-icon"
      sizes="96x96"
    />
    
    @include('links.styles')

    <title>@yield('title')</title>

  </head>
  <body>
    @include('partials.navbar')

    @yield('content')

    @include('links.scripts')
</html>
