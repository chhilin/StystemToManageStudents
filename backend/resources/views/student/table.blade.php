<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Table Styling</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            text-align: center;
        }
        .table-container {
            display: inline-block;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
        }
        .table-custom {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #dddddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            margin: 0 auto; /* Center the table */
        }
        .table-custom th,
        .table-custom td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        .table-custom th {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>

<div class="table-container">
    <table class="table table-striped table-dark table-custom">
        <thead>
            <tr>
                <th>N.o</th>
                <th>Student Name</th>
                <th>Stories</th>
                <th>Image</th>
                <th>Social</th>
                <th>Link</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($students as $ss)
            <tr>
                <td>1</td>
                <td>{{$ss->student_name}}</td>
                <td>{{$ss->stories_id}}</td>
                <td>{{$ss->media_id}}</td>
                <td>{{$ss->social_id}}</td>
                <td>{{$ss->link_id}}</td>
                <td>{{$ss->comment_id}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
