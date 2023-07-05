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
                <th style="width: 100px;">from_account</th>
                <th style="width: 100px;">to_account</th>
                <th style="width: 100px;">user_id</th>
                <th style="width: 100px;">company_id</th>
                <th style="width: 100px;">date</th>
                <th style="width: 100px;">ammount</th>
                <th style="width: 100px;">description</th>
                <th style="width: 140px;">payment_method</th>
                <th style="width: 100px;">reference</th>
                <th style="width: 100px;">attachment</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transfer as $data)
            <tr>
                <td>{{$data->fromAccount->name}}</td>
                <td>{{$data->toAccount->name}}</td>
                <td>{{$data->user->name}}</td>
                <td>{{$data->company->name}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->ammount}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->payment_method}}</td>
                <td>{{$data->reference}}</td>
                <td>{{$data->attachmet}}</td>
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
