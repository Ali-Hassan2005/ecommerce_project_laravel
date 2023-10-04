<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create coupons</title>
</head>
<body>
    <p><a href={{route("coupons.index")}}>All coupons</a>
        <form action= {{route("coupons.store")}} method="post">
        @csrf
        @method("POST")
        <table align="center">
            <tr>
                <th>Coupon Key:</th>
                <td><input type="text" name="coupon_Key" /></td>
            </tr>
            <tr>
                <th>Percentage:</th>
                <td><input type="number" name="percentage" /></td>
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
