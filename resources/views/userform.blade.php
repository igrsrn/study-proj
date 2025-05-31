<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма пользователя</title>
</head>
<body>
<form action="{{url('/storeform')}}" method="post">
    @csrf
    <div>
        <div>
            <label for="firstname">Введите имя</label>
        </div>
        <input type="text" name="firstname" id="firstname">
    </div>
    <div>
        <div>
            <label for="lastname">Введите фамилию</label>
        </div>
        <input type="text" name="lastname" id="lastname">
    </div>
    <div>
        <div>
            <div>
                <label for="email">Введите email</label>
            </div>
            <input type="email" name="email" id="email">
        </div>
    </div>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
