<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Items</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
            background-color: #f3f4f6;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .card {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            color: inherit;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.02);
        }
        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .card-content {
            padding: 15px;
        }
        .card-title {
            font-size: 18px;
            margin: 0 0 10px;
        }
        .card-description {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Lista de Items</h1>
    <h1>Lista de Items</h1>

@if($allTags->count())
    <div style="margin-bottom: 20px; text-align: center;">
        <strong>Filtrar por etiqueta:</strong><br><br>
        @foreach($allTags as $et)
            <a href="{{ route('items.index', ['tag' => $et]) }}"
               style="padding: 8px 12px; margin: 4px; background-color: {{ $tag == $et ? '#007bff' : '#e2e8f0' }}; color: {{ $tag == $et ? '#fff' : '#333' }}; border-radius: 8px; text-decoration: none; display: inline-block;">
                {{ $et }}
            </a>
        @endforeach

        @if($tag)
            <br><br><a href="{{ route('items.index') }}">🔄 Ver todos</a>
        @endif
    </div>
@endif

    <div class="grid">
        @foreach($items as $item)
            <a href="{{ route('items.show', $item->id) }}" class="card">
                <img src="{{ $item->image }}" alt="{{ $item->title }}">
                <div class="card-content">
                    <h2 class="card-title">{{ $item->title }}</h2>
                    <p class="card-description">{{ Str::limit($item->description, 80) }}</p>
                </div>
            </a>
        @endforeach
    </div>
</body>
</html>
