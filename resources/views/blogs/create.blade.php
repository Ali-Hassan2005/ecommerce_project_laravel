<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <title>Create blogs</title>
</head>
<body>
    <p><a href={{route("blogs.index")}}>All blogs</a>
        <form action= {{route("blogs.store")}} method="post" enctype="multipart/form-data" >
        @csrf
        @method("POST")
        <table align="center">
            <tr>
                <th>Title:</th>
                <td><input type="text" name="title" /></td>
            </tr>
            <tr>
                <th>Image:</th>
                <td><input type="file" name="image" /></td>
            </tr>
            <tr>
                <th>Body:</th>
                <td><textarea id="editor" name="body"   cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Save">
                </td>
            </tr>
        </table>
    </form>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
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
