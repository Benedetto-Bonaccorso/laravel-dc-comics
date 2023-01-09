<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <a href="{{route('comics.create')}}" class="btn">crea elementi</a>
    </div>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">titolo</th>
                    <th scope="col">descrizione</th>
                    <th scope="col">immagine</th>
                    <th scope="col">prezzo</th>
                    <th scope="col">serie</th>
                    <th scope="col">uscita</th>
                    <th scope="col">tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comics as $comic)
                    <tr class="">
                        <td scope="row">{{$comic->id}}</td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->description}}</td>
                        <td>{{$comic->thumb}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                        <td>View <a href="{{route('comics.edit', $comic->id)}}">Edit</a> Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    

</body>
</html>