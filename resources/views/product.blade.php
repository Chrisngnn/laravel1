<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>

        <tbody>
            @foreach($rs_product as $rs)
            <tr>
                <td>{{$rs->id}}</td>
                <td>{{$rs->name}}</td>
                <td>{{$rs->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>