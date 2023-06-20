<!DOCTYPE html>
<html>
<head>
    <title>Exchange Rate Converter</title>
</head>
<body>
    <h1>Exchange Rate Converter</h1>
    <input type="number" id="amount" value="100000">
    <button onclick="convertToIDR()">To IDR</button>
    <button onclick="convertToUSD()">To USD</button>
    <p id="result">IDR 100,000</p>

    <script>
        function getExchangeRate(callback) {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "http://data.fixer.io/api/latest?access_key=YOUR_ACCESS_KEY&symbols=USD,IDR");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    var exchangeRate = response.rates.IDR / response.rates.USD;
                    callback(exchangeRate);
                }
            }
            xhr.send();
        }

        function convertToIDR() {
            var amount = document.getElementById("amount").value;
            getExchangeRate(function(exchangeRate) {
                var result = amount * exchangeRate;
                document.getElementById("result").innerHTML = "IDR " + result.toLocaleString();
            });
        }

        function convertToUSD() {
            var amount = document.getElementById("amount").value;
            getExchangeRate(function(exchangeRate) {
                var result = amount / exchangeRate;
                document.getElementById("result").innerHTML = "$ " + result.toLocaleString();
            });
        }
    </script>
</body>
</html>