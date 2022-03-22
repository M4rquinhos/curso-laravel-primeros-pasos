<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear post</title>
</head>
<body>
    <h1>Crear post</h1>

    <form action="{{ route('post.store') }}" method="post">
        @csrf

        <label for="title">Titulo</label>
        <input type="text" name="title" id="">

        <label for="">Description</label>
        <textarea name="description"></textarea>

        <label for="title">Slug</label>
        <input type="text" name="slug" id="">

        <label for="">Categoria</label>
        <select name="category_id" id="">
            <option value=""></option>
            @foreach ($categories as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>

        <label for="">Posteado?</label>
        <select name="posted" id="">
            <option value="not">no</option>
            <option value="yes">si</option>
        </select>

        <label for="">Contenido</label>
        <textarea name="content"></textarea>

        <button type="submit">Enviar</button>

    </form>

</body>
</html>
