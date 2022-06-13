<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel Movies</title>
</head>
<body>
   
    <h1 class="text-center">Programmazione Della Settimana</i></h1>
    <div class="container">
        <div class="row">
            @foreach ($movies as $key => $movie) 
            <div class="col-6 col-md-4 col-lg-3">
                <a href="route('detail', $movie->id)">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{$movie->cover}}" alt="{{$movie->title}}">
                        <div class="card-body">
                        <h5 class="card-title">Titolo: {{$movie->title}}</h5>
                        <p class="card-text">Titolo Originale: {{$movie->original_title}}</p>
                        <p class="card-text">Data di uscita: {{$date[$key]}}</p>
                        <p class="card-text">Voto: {{$movie->vote}}</p>
                        <a href="#" class="btn btn-primary">Prenota</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
   
    
</body>
</html>