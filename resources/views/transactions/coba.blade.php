<!DOCTYPE html>
<html>
<head>
    <title>Convert Currency</title>
</head>
<body>
    <h1>Convert Currency</h1>
    
    <form action="/convertCurrency" method="POST">
        @csrf
        <label for="amount">Amount (IDR):</label>
        <input type="number" name="amount" id="amount" required>
        <button type="submit">Convert</button>
    </form>
    
    <h2>Conversion Result</h2>
    @foreach($result as $row)
        <p>Original Amount: {{ '$row->original_amount' }} IDR</p>
        <p>Converted Amount: {{ '$row->converted_amount' }} USD</p>
        <p>Exchange Rate: 1 USD = {{ '$row->exchange_rate' }} IDR</p>
    @endforeach
</body>
</html>
