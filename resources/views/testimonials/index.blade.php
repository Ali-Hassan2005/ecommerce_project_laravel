<h2>testimonials</h2>
<p><a href={{route("testimonials.create")}}>Create</a></p>

@foreach ($testimonials as $testimonial)
    <?php
    $id = $testimonial->id;
    $name = $testimonial->name;
    $image = $testimonial->image;
    
    ?>
    <div>
    <p style="display: inline">{{ $id }}) {{ $name }} <a href={{route("testimonials.edit",$id)}}>edit</a></p>
    <form style="display: inline" action={{route("testimonials.destroy",$id)}} method='POST'>
        @method("DELETE")
        @csrf
        <input type='submit' value='Delete'>
    </form>
  </div>
  <img src="{{url("storage/$image")}}" width="100px" height="100px" alt="">
  <hr>


@endforeach
