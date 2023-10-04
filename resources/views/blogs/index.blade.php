<h2>blogs</h2>
<p><a href={{route("blogs.create")}}>Create</a></p>

@foreach ($blogs as $blog)
    <?php
    $id = $blog->id;
    $name = $blog->title;
    $image = $blog->image;
    ?>
    <div>
    <p style="display: inline">{{ $id }}) {{ $name }} <a href={{route("blogs.edit",$id)}}>edit</a></p>
    <form style="display: inline" action={{route("blogs.destroy",$id)}} method='POST'>
        @method("DELETE")
        @csrf
        <input type='submit' value='Delete'>
    </form>
  </div>
  <img src="{{url("storage/$image")}}" width="100px" height="100px" alt="">
  <hr>


@endforeach
