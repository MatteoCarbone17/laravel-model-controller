<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col p-3">
                    <h1>
                        Movies
                    </h1>
                </div>
            </div>
        </div>
    </header>
    {{-- "id" => 1
            "title" => "Il Padrino"
            "original_title" => "The Godfather"
            "nationality" => "american"              
            "date" => "1972-03-24"
            "vote" => 9.2
           --}}
    <main>
        <div class="container">
            <div class="row">
                    @forelse ($movies as $movie)
                    <div class="card me-5 mb-5" style="width: 15rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{ $movie['title'] }}</h5>
                          <h6 class="">{{ $movie['original_title'] }}</h5>
                          <p class="card-text"> {{ $movie['nationality'] }}</p>
                          <span>
                            {{  $movie['date'] }}
                          </span>
                          <span>
                            {{  $movie['vote'] }}
                          </span>
                        </div>
                    </div>
                    @empty
                        <p>Mi disp non ci sono film da mostrare</p>
                    @endforelse
            </div>
        </div>
    </main>
</body>
</html>
