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
                <th style="width: 100px;">name</th>
                {{-- <th style="width: 150px;">parent</th> --}}
                <th style="width: 80px;">color</th>
                <th style="width: 125px;">category_type_id</th>
                <th style="width: 100px;">company_id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $categories)
                <tr>
                    <td>{{ $categories->name }}</td>
                    {{-- <td>{{ $categories->parent }}</td> --}}
                    <td>{{ $categories->color }}</td>
                    <td>{{ $categories->categoryType->name }}</td>
                    <td>{{ $categories->company_id }}</td> <!-- Menampilkan nama company -->
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
