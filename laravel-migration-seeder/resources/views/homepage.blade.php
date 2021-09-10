<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenzia Viaggi</title>
</head>
<body>
    
    @foreach ($allTravels as $travel)
        <div>
            <img src="{{$travel->cover}}" alt="Foto Location: {{$travel->location}}">
            <h3>{{$travel->location}}</h3>
            <h3>{{$travel->hotel}}</h3>
            <h4>{{$travel->description}}</h4>
            <h3>{{$travel->duration}} Giorni</h3>
            <h3>{{$travel->departure}}</h3>
            <h3>{{$travel->arrive}}</h3>
            <h2>{{$travel->boarding_airport}}</h2>
        </div>
    @endforeach

    <hr>

    @dump($travelFiltrati)
    
</body>
</html>