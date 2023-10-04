<h2>coupons</h2>
<p><a href={{route("coupons.create")}}>Create</a></p>

@foreach ($coupons as $coupon)
    <?php
    $id = $coupon->id;
    $coupon_Key =$coupon->coupon_Key; 
    
    ?>
    <div>
    <p style="display: inline">{{ $id }}) {{ $coupon_Key }} <a href={{route("coupons.edit",$id)}}>edit</a></p>
    <form style="display: inline" action={{route("coupons.destroy",$id)}} method='POST'>
        @method("DELETE")
        @csrf
        <input type='submit' value='Delete'>
    </form>
  </div>
  <hr>


@endforeach
