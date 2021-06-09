<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
<div class="container">

    <h1 align="center" >@yield('title')</h1>

    <table class="table">
        <thead class="thead-inverse">
        <tr>
            <th>id</th>
            <th>ФИО</th>
            <th>Должность</th>
            <th>Дата устройства</th>
            <th>Зарплата</th>
            <th>Начальник</th>
        </tr>
        </thead>
        <tbody>
        @foreach($staff as $staf)
        <tr>

            <td>{{$staf->id}}</td>
            <td>{{$staf->name}}</td>
            <td>{{$staf->post}}</td>
            <td>{{$staf->device_date}}</td>
            <td>{{$staf->salary}}</td>
            <td>{{$staf->parent_id}}</td>

        </tr>
        @endforeach
        </tbody>

    </table>

    {{ $staff->onEachSide(10)->links() }}

</div>

<script src="/js/bootstrap.min.js"></script>
</body>
</html>
