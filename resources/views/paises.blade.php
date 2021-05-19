<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" >

    <title>Document</title>
</head>
<body>

     <div class="container">
        <h1> Lista de paises</h1>
    <table class="table table-hover">
        <tr>
            <th class="text-danger"> Nombre </th>
            <th class="text-danger">Capital </th>
            <th class="text-danger"> Moneda </th>
            <th class="text-info"> Poblacion </th>


        </tr>
        @foreach ($naciones as $nombre=>$nacion)
            <tr>
                <td class="text-primary"> {{ $nombre }}</td>
                <td class="text-primary"> {{ $nacion ["Capital"]}}</td>
                <td class="text-primary"> {{ $nacion ["Moneda"]}}</td>
                <td class="text-info"> {{ $nacion ["Poblacion"]}}</td>

            </tr>
        @endforeach
    </div>
    </table>
</body>
</html>
