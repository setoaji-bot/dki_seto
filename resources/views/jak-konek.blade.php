<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jak Konek Data</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Jak Konek Data</h2>
        @if(isset($error))
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @elseif($data)
            <pre>{{ json_encode($data, JSON_PRETTY_PRINT) }}</pre>
            @foreach($data as $item)
                    <li class="list-group-item">
                        <h5>{{ $item['title'] }}</h5>
                        <p>{{ $item['description'] }}</p>
                        <a href="{{ $item['link'] }}" target="_blank">Read more</a>
                    </li>
                @endforeach
        @else
            <p>No data available.</p>
        @endif
    </div>
</body>
</html>
