<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>
        @if(Auth::user())
            {{Auth::user()->name }}
        @endif
    </h1>
        
    <form method="post" action="{{url('login/')}}">
        
        @csrf

    
        <label>
            Email: 
        </label>
        <input type="email" placeholder="example@domain.com" name="email" value=" ">

        <label>
            Password: 
        </label>
        <input type="text" placeholder="612XXXXX" name="phone_number"value=" ">



        <button type="submit">
            Acceder
        </button>

        </form>
</body>
</html>