<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Trivial</title>
    </head>
    <body>
       <div class="rounded min-h-screen">
           <div class="bg-teal-400 min-h-screen-3/4 text-center flex justify-center rounded">
                <h1 class="m-auto text-white font-bold text-8xl">Hola mi Amigo!</h5>
           </div>
           <div class="flex justify-center -mt-24">
                <a href='/trivia' class="hover:bg-teal-700 border-8 text-center h-40 w-64 rounded-full text-black text-6xl bg-teal-900"
                    >Begin
                </a>
           </div>
       </div>
        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
