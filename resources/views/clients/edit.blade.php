<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href={{route("clients.index")}}>All clients</a>
    <form action= {{route("clients.update",$client ->id)}} method="post" >
        @csrf
        @method("PUT")
        <table align="center">
            <tr>
                <th>First Name:</th>
                <td><input type="text" name="first_name" value="{{$client ->first_name}}" /></td>
            </tr>
            <tr>
                <th>Last Name:</th>
                <td><input type="text" name="last_name" value="{{$client ->last_name}}" /></td>
            </tr>
            <tr>
                <th>password:</th>
                <td><input type="text" name="password" value="{{$client ->password}}" /></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="email" name="email" value="{{$client ->email}}" /></td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td><input type="text" name="phone" value="{{$client ->phone}}" /></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><input type="text" name="address" value="{{$client ->address}}" /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Save">
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif