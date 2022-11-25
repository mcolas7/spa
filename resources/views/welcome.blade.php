<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SPA</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <div class="collapse navbar-collapse">
                        <ul>
                            <li class="nav-item">
                                <a href="#" class="nav-Link">Dogs List</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-Link">Add new Dog</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
            <main class="py-4">
                <div class="container">
                    <dogs-index></dogs-index>
                </div>
            </main>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
