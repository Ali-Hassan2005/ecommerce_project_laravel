<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <p><a href='/product'>All products</a>
    <form action="/product" method="post" enctype="multipart/form-data">
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
                <th>Price:</th>
                <td><input type="number" name="price" /></td>
            </tr>
            <tr>
                <th>Count in stock:</th>
                <td><input type="number" name="count_in_stock" /></td>
            </tr>
            <tr>
                <th>Description:</th>
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
