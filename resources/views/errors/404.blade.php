<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
  <link rel="icon" href="{{ asset('assets/images/logo.svg') }}" type="image/svg">
  <title>{{ __('Page Not Found') }}</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      color: #343a40;
      text-align: center;
      padding: 50px;
    }

    .console {
      font-family: 'Poppins', sans-serif;
      padding: 0.5rem;
      max-width: fit-content;
      font-weight: bold;
      color: #000;
      margin-left: .15em;
      padding-right: 0;
    }

    .error404 {
      color: #267eb2;
      font-weight: 900;
      font-size: 2rem;
    }

    .typewriter h1 {
      color: hsla(0.00, 0.00%, 0.00%, 100%);
      font-family: monospace;
      overflow: hidden;
      border-right: .15em solid hsl(4, 100%, 68%);
      white-space: nowrap;
      margin: 0 auto;
      letter-spacing: .15em;
      animation:
        typing 1s steps(30, end),
        blink-caret .5s step-end infinite;
    }


    @keyframes typing {
      from {
        width: 0
      }

      to {
        width: 100%
      }
    }

    @keyframes blink-caret {

      from,
      to {
        border-color: transparent
      }

      50% {
        border-color: #267eb2;
      }
    }

    .button {
      line-height: 1;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: .75rem;
      background-color: #267eb2;
      color: #fff;
      border-radius: 10rem;
      font-weight: 600;
      padding: .75rem 1.5rem;
      padding-left: 20px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      transition: background-color .3s;
    }

    .button__icon-wrapper {
      flex-shrink: 0;
      width: 25px;
      height: 25px;
      position: relative;
      color: #267eb2;
      background-color: #fff;
      border-radius: 50%;
      display: grid;
      place-items: center;
      overflow: hidden;
    }

    .button:hover {
      background-color: #154e7a;
    }

    .button:hover .button__icon-wrapper {
      color: #154e7a;
    }

    .button__icon-svg--copy {
      position: absolute;
      transform: translate(-150%, 150%);
    }

    .button:hover .button__icon-svg:first-child {
      transition: transform .3s ease-in-out;
      transform: translate(150%, -150%);
    }

    .button:hover .button__icon-svg--copy {
      transition: transform .3s ease-in-out .1s;
      transform: translate(0);
    }
  </style>
</head>

<body>
  <div class="typewriter">
    <h1 class="console">console.log("<span class="error404">404</span>");</h1>
  </div>
  <p>{{ __('Either there’s a tear in the matrix or the page you’re looking for no longer exists.') }}</p>

  <a style="--clr: #7808d0" class="button" href="{{ url('/') }}">
    <span class="button__icon-wrapper">
      <svg width="10" class="button__icon-svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15">
        <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
      </svg>

      <svg class="button__icon-svg  button__icon-svg--copy" xmlns="http://www.w3.org/2000/svg" width="10" fill="none" viewBox="0 0 14 15">
        <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
      </svg>
    </span>
    {{ __('Back to dashboard') }}
  </a>
</body>

</html>