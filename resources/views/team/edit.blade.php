<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <p><a href='/team'>team</a>
    <form action= "/team/{{$team ->id}}" method="post">
        @csrf
        @method("PUT")
        <table align="center">
            <tr>
                <th>Name:</th>
                <td><input type="text" name="name" value="{{$team ->name}}" /></td>
            </tr>
            <tr>
                <th>Image:</th>
                <td><input type="file" name="image" value="{{$team ->image}}" /></td>
            </tr>
            <tr>
                <th>job_title:</th>
                <td><input type="text" name="job_title" value="{{$team ->job_title}}" /></td>
            </tr>
            <tr>
                <th>bio:</th>
                <td><input type="text" name="bio" value="{{$team ->bio}}" /></td>
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