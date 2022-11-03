<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <form method="post" action="">
    @csrf

    <label>
        Nombre: 
    </label>
    <input type="text" placeholder="Maria" name="name">

    <label>
        Email: 
    </label>
    <input type="email" placeholder="example@domain.com" name="email">

    <label>
        Phone number: 
    </label>
    <input type="text" placeholder="612XXXXX" name="phone_number">

    <button type="submit">
        Guardar
    </button>

    </form>
</body>
</html>
