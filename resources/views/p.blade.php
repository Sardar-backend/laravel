<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background: red;
            width: 500px;
            height: 100px;
        }

    </style>
</head>
<body>
    <ul>
        @foreach($u as $p)
            <li>{{$p->name}}</li>
        @endforeach
                    <div>
        <form action={{route('per')}} method="post">
            @csrf
                <input type="text" name="name">
                <button type="submit">submit</button>

        </form>
                </div>
    </ul>

</body>
</html>
