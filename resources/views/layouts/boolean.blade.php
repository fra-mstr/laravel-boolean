<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
    <header>
      <div class="left">
        <img src="img/logo.png" alt="boolean-logo">
      </div>
      <div class="right">
        <ul>
          @foreach (config('paths.routes') as $route)
            <li>
              <a
                href="{{ $route['id'] }}"
              >
                  {{ $route['name'] }}
              </a>
            </li>
          @endforeach

          <!-- <li>
            <a href="#">Home</a>
          </li>
          <li>
            <a href="#">Corso</a>
          </li>
          <li>
            <a href="#">Dopo Il Corso</a>
          </li>
          <li>
            <a href="#">Camp Gratuito</a>
          </li> -->
        </ul>
      </div>
    </header>

    <section>
      @yield('content')
    </section>
  </body>
</html>
