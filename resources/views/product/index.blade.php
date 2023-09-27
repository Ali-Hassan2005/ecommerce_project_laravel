<h2>Products</h2>
<p><a href='product/create'>Create</a></p>

@foreach ($products as $product)
    <?php
    $id = $product['id'];
    $name = $product['name'];
    $image = $product['image'];
    
    ?>
    <div>
    <p style="display: inline">{{ $id }}) {{ $name }} <a href='product/{{ $id }}/edit'>edit</a></p>
    <form style="display: inline" action='/product/{{ $id }}' method='POST'>
        @method("DELETE")
        @csrf
        <input type='submit' value='Delete'>
    </form>
  </div>
  <img src="{{url("storage/$image")}}" width="100px" height="100px" alt="">
  <hr>


@endforeach
