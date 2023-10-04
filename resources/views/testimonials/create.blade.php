<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create testimonial</title>
</head>
<body>
    <p><a href={{route("testimonials.index")}}>All testimonials</a>
        <form action= {{route("testimonials.store")}} method="post"  enctype="multipart/form-data">
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
                <th>jop_title:</th>
                <td><input type="text" name="jop_title" /></td>
            </tr>
            <tr>
                <th>description:</th>
                <td><input type="text" name="description" /></td>
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
