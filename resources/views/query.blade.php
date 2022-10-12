<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
<div class="content">
<table class="table">
    <thead>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Birth Date</th>
    </tr>
    </thead>
    <tbody>
        @forelse($guardians as $item)
            <tr>
                <td>{{  $item->first_name }}</td>
                <td>{{  $item->last_name }}</td>
                <td>{{  $item->gender }}</td>
                <td>{{  $item->birth_date }}</td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
</div>
</body>
</html>
