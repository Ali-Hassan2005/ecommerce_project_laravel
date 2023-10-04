<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href={{route("products.index")}}>All products</a>
    <form action= {{route("products.update",$product ->id)}} method="post"  enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <table align="center">
            <tr>
                <th>Name:</th>
                <td><input type="text" name="name" value={{$product ->name}} /></td>
            </tr>
            <tr>
                <th>image:</th>
                <td><input type="file" name="image" /></td>
            </tr>
            <tr>
                <th>price:</th>
                <td><input type="number" name="price" value={{$product ->price}} /></td>
            </tr>
            <tr>
                <th>Count in stock:</th>
                <td><input type="number" name="count_in_stock" value={{(int)$product ->count_in_stock}} /></td>
            </tr>
            <tr>
                <th>Cdescription:</th>
                <td><input type="text" name="description" value={{$product ->description}} /></td>
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