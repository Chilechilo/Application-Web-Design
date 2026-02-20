<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma Simple</title>
</head>
<body>
    <h1>Suma Simple</h1>
    <form method="get" action="{{ url('/suma') }}">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <button type="submit">Sumar</button>
    </form>
    @if(request()->has('num1') && request()->has('num2'))
        <p>Resultado: {{ request('num1') + request('num2') }}</p>
    @endif
</body>
</html>
