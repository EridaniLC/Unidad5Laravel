<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h3>
        Clientes
    </h3>

    <table>
        <thead>
            <tr>
                #
            <tr>
                Name
            </tr>
            <tr>
                Email
            </tr>
            <tr>
                Phone number
            </tr>

        </thead>

        <tbody>
            @foreach($clients as $client)

            <tr>
                <>
                    {{$client->id}}
                </>
                <>
                    {{$client->name}}
                </>
                <>
                    {{$client->email}}
                </>
                <>
                    {{$client->phone_number}}
                </>
            </tr>
        </tbody>
    </table>
</body>
</html>