<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <form method="post" action="{{url('clients/')}}">
    @method('PUT')
    @csrf

    <label>
        Nombre: 
    </label>
    <input type="text" placeholder="Maria" name="name" value="{{$client->name}}">

    <label>
        Email: 
    </label>
    <input type="email" placeholder="example@domain.com" name="email" value="{{$client->email}}">

    <label>
        Phone number: 
    </label>
    <input type="text" placeholder="612XXXXX" name="phone_number"value="{{$client->phone_number}}">

    <input type="text" placeholder="id" name="id"value="{{$client->id}}">
    
    <button type="submit">
        Actualizar
    </button>

    </form>
</body>
</html>