<h2>Products</h2>
<p><a href={{route("products.create")}}>Create</a></p>

@foreach ($products as $product)
    <?php
    $id = $product['id'];
    $name = $product['name'];
    $image = $product['image'];
    
    ?>
    <div>
    <p style="display: inline">{{ $id }}) {{ $name }} <a href={{route("products.edit",$id)}}>edit</a></p>
    <form style="display: inline" action={{route("products.destroy",$id)}} method='POST'>
        @method("DELETE")
        @csrf
        <input type='submit' value='Delete'>
    </form>
  </div>
  <img src="{{url("storage/$image")}}" width="100px" height="100px" alt="">
  <hr>


@endforeach
