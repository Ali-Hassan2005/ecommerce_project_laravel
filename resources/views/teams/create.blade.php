<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create member</title>
</head>
<body>
    <p><a href={{route('teams.index')}}>teams</a>
    <form action={{route('teams.store')}} method="post" enctype="multipart/form-data">
        @csrf
        @method("POST")
        <table align="center">
            <tr>
                <th>Name:</th>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <th>Image:</th>
                <td><input type="file" name="image" /></td>
            </tr>
            <tr>
                <th>job_title:</th>
                <td><input type="text" name="job_title" /></td>
            </tr>
            <tr>
                <th>bio:</th>
                <td><input type="text" name="bio" /></td>
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
