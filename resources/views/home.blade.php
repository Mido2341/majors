<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .color{
            background: rgb(32, 131, 42)
        }
    </style>
</head>
<body>
    <table>
        <thead>
        <th>id</th>
        <th>uesr_name</th>
        <th>salary</th>
        <th>email</th>
        <th>phone</th>
        <th>gender</th>
        <th>created_at</th>
        <th>updated_at</th>
        </thead>
        <tbody>
             @foreach ($users as $user)
            <tr class="{{$loop->first ?: 'color'}} ">
            <td> {{$user['id']}}</td>
            <td> {{$user['user_name']}}</td>
            <td> {{$user['salary']}}</td>
            <td> {{$user['email']}}</td>
            <td> {{$user['phone']}}</td>
            <td> {{$user['gender']}}</td>
            <td> {{$user['created_at']}}</td>
            <td> {{$user['updated_at']}}</td>
            </tr>
                @endforeach

        </tbody>

    </table>
</body>
</html>
