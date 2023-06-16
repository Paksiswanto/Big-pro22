<!DOCTYPE html>
<html>

<head>
    <title>Currency Conversion</title>
</head>

<body>
    <h1>Currency Conversion Result</h1>

    <p>{{ $amount }} {{ $baseCurrency }} = {{ $amount1 }} {{ $targetCurrency }}</p>

    <script src="https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies/eur.json" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
            (document).ready(function() {
            $.ajax({
                method: 'GET',
                url: "https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@{apiVersion}/{date}/{endpoint}",
                success: function(e) {
                    console.log(e)
                }
            })
        })
    </script>
</body>

</html>