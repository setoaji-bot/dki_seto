<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil data umkm</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Tampil data umkm</h1>
        @if(!empty($feedData))
            <ul class="list-group">
                @foreach($feedData as $item)
                    <li class="list-group-item">
                        <h5>{{ $item['title'] }}</h5>
                        <p>{{ $item['description'] }}</p>
                        <a href="{{ $item['link'] }}" target="_blank">Read more</a>
                    </li>
                @endforeach
            </ul>
        @else
            <p>data kosong</p>
        @endif
    </div>
</body>
</html>
