<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $item->title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
            background-color: #f3f4f6;
        }
        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .image {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        .content {
            padding: 20px;
        }
        h1 {
            margin: 0 0 10px;
        }
        .tags {
            margin-top: 10px;
            color: #888;
            font-size: 14px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <img class="image" src="{{ $item->image }}" alt="{{ $item->title }}">
        <div class="content">
            <h1>{{ $item->title }}</h1>
            <p>{{ $item->description }}</p>
            <div class="tags">Etiquetas: {{ $item->tags }}</div>
            <a href="{{ route('items.index') }}">← Volver a la lista</a>
        </div>
    </div>
</body>
</html>
