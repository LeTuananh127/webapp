<!-- resources/views/students/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Sinh viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #28a745;
            color: white;
        }
        td {
            background-color: #f1f1f1;
        }
        .button {
            padding: 5px 10px;
            margin: 0 5px;
            cursor: pointer;
            border-radius: 5px;
        }
        .edit-button {
            background-color: #ffc107;
            border: none;
        }
        .delete-button {
            background-color: #dc3545;
            color: white;
            border: none;
        }
        .search-container {
            margin-bottom: 20px;
        }
        .search-container input {
            padding: 5px 10px;
            margin-right: 10px;
        }
        .search-container button {
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Danh sách Sinh viên</h1>

    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Tìm kiếm...">
        <button onclick="search()">Tìm kiếm</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->firstname }}</td>
                <td>{{ $student->lastname }}</td>
                <td>{{ $student->dob }}</td>
                <td>{{ $student->address }}</td>
                <td>
                    <button class="button edit-button">Edit</button>
                    <button class="button delete-button">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        function search() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById('searchInput');
            filter = input.value.toUpperCase();
            table = document.querySelector('table');
            tr = table.getElementsByTagName('tr');

            for (i = 1; i < tr.length; i++) {
                td = tr[i].getElementsByTagName('td')[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
</html>
