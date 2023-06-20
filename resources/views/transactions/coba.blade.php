<!DOCTYPE html>
<html>
<head>
    <title>Exchange Rate Converter</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Exchange Rate Converter</h1>
    <input type="number" id="amount" value="100000">
    <button onclick="convertToIDR()">To IDR</button>
    <button onclick="convertToUSD()">To USD</button>
    <p id="result">IDR 100,000</p>

    <script>
        function getExchangeRate(callback) {
            $.ajax({
                url: "https://data.fixer.io/api/latest",
                data: {
                    access_key: "0719dfabcdba9f85af875a9ad221eb6b",
                    symbols: "USD,IDR"
                },
                success: function(response) {
                    console.log(response);
                    // var exchangeRate = response.rates.IDR / response.rates.USD;
                    callback(exchangeRate);
                }
            });
        }

        function convertToIDR() {
            var amount = $("#amount").val();
            getExchangeRate(function(exchangeRate) {
                var result = amount * exchangeRate;
                $("#result").html("IDR " + result.toLocaleString());
            });
        }

        function convertToUSD() {
            var amount = $("#amount").val();
            getExchangeRate(function(exchangeRate) {
                var result = amount / exchangeRate;
                $("#result").html("$ " + result.toLocaleString());
            });
        }

        setInterval(function() {
            getExchangeRate(function(exchangeRate) {
                var exchangeRateIDR = exchangeRate.toLocaleString(undefined, { minimumFractionDigits: 2 });
                var exchangeRateUSD = (1 / exchangeRate).toLocaleString(undefined, { minimumFractionDigits: 2 });
                $("#exchangeRateIDR").html("1 USD = " + exchangeRateIDR + " IDR");
                $("#exchangeRateUSD").html("1 IDR = " + exchangeRateUSD + " USD");
            });
        }, 300000); // setiap 5 menit
    </script>

    <p id="exchangeRateIDR"></p>
    <p id="exchangeRateUSD"></p>
</body>
</html>