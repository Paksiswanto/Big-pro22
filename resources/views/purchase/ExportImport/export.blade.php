<!DOCTYPE html>
<html>
<head>
    <title>Dataset</title>
    <style>
        table.timecard thead th {
            padding: 8px;
            vertical-align: middle;
            background-color: #fde9d9;
        }

        table.daftar,
        table.daftar th,
        table.daftar td {
            padding: 3px;
            border: 1px solid black;
            border-collapse: collapse;
        }

        table.daftar th {
            white-space: nowrap; /* Menghindari pemotongan teks */
            overflow: hidden; /* Menghindari pemotongan teks */
            text-overflow: ellipsis; /* Menampilkan ellipsis jika teks terlalu panjang */
        }
    </style>
    <script>
        // Kode JavaScript untuk menghasilkan dropdown options
        // ...
    </script>
</head>
<body>
    <table class="daftar" width="986">
        <thead>
            <tr>
                <th style="width: 65px;">name</th>
                <th style="width: 70px;">email</th>
                <th style="width: 80px;">website</th>
                <th style="width: 100px;">reference</th>
                <th style="width: 65px;">npwp</th>
                <th style="width: 90px;">address</th>
                <th style="width: 65px;">city</th>
                <th style="width: 100px;">province</th>
                <th style="width: 90px;">country</th>
                <th style="width: 100px;">currency</th>
                <th style="width: 120px;">postal_code</th>
                <th style="width: 70px;">photo</th>
                <th style="width: 125px;">phone_number</th>
                <th style="width: 100px;">company_id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($supplier as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->website }}</td>
                <td>{{ $data->reference}}</td>
                <td>{{ $data->npwp}}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->city }}</td>
                <td>{{ $data->province }}</td>
                <td>{{ $data->country }}</td>
                <td>{{ $data->currency }}</td>
                <td>{{ $data->postal_code }}</td>
                <td>{{ $data->photo }}</td>
                <td>{{ $data->phone_number }}</td>
                <td>{{ $data->company->name }}</td> <!-- Menampilkan nama company -->
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        // Kode JavaScript untuk mengisi dropdown options
        // ...
    </script>
</body>
</html>
