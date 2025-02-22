<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Test</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>

    <div class="card m-4">
        <div class="card-header">Prime Numbers</div>
        <div class="card-body">
            @foreach (range(1, 100) as $i)
                @php
                    $isPrime = $i > 1; // Assume it's prime unless proven otherwise
                    if ($i == 2) {
                        $isPrime = true; // 2 is the only even prime number
                    } elseif ($i % 2 == 0) {
                        $isPrime = false; // Exclude even numbers > 2
                    } else {
                        for ($k = 3; $k <= sqrt($i); $k += 2) { // Check only odd numbers
                            if ($i % $k == 0) {
                                $isPrime = false;
                                break;
                            }
                        }
                    }
                @endphp

                @if($isPrime)
                    <span class="badge bg-primary">{{ $i }}</span>
                @else
                    <span class="badge bg-secondary">{{ $i }}</span>
                @endif
            @endforeach
        </div>
    </div>

</body>
</html>
