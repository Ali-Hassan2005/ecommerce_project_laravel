<h2>team</h2>
<p><a href='team/create'>Create</a></p>

@foreach ($teams as $team)
    <?php
    $id = $team['id'];
    $name = $team['name'];
    $image = $team['image'];
    
    ?>
    <div>
    <p style="display: inline">{{ $id }}) {{ $name }} <a href='team/{{ $id }}/edit'>edit</a></p>
    <form style="display: inline" action='/team/{{ $id }}' method='POST'>
        @method("DELETE")
        @csrf
        <input type='submit' value='Delete'>
    </form>
  </div>
  <img src="{{url("storage/$image")}}" width="100px" height="100px" alt="">
  <hr>


@endforeach
