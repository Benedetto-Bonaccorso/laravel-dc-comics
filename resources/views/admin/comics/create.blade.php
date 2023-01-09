<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <label for="title">title</label>
        <input type="text" title="title" id="title" name="title" value="{{old('title')}}">
        <label for="description">description</label>
        <input type="text" title="description" id="description" name="description" value="{{old('description')}}">
        <label for="thumb">thumb</label>
        <input type="text" title="thumb" id="thumb" name="thumb" value="{{old('thumb')}}">
        <label for="price">price</label>
        <input type="text" title="price" id="price" name="price" value="{{old('price')}}">
        <label for="series">series</label>
        <input type="text" title="series" id="series" name="series" value="{{old('series')}}">
        <label for="sale_date">sale_date</label>
        <input type="text" title="sale_date" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
        <label for="type">type</label>
        <input type="text" title="type" id="type" name="type" value="{{old('type')}}">

        <button type="submit">send</button>
    </form>
</body>
</html>