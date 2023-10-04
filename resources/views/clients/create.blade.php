<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create client</title>
</head>
<body>
    <p><a href={{route("clients.index")}}>All clients</a>
        <form action= {{route("clients.store")}} method="post" >
        @csrf
        @method("POST")
        <table align="center">
            <tr>
                <th>First Name:</th>
                <td><input type="text" name="first_name" /></td>
            </tr>
            <tr>
                <th>Last Name:</th>
                <td><input type="text" name="last_name" /></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="email" name="email" /></td>
            </tr>
            <tr>
                <th>password:</th>
                <td><input type="text" name="password" /></td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td><input type="text" name="phone" /></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><input type="text" name="address" /></td>
            </tr>
            <tr>
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
