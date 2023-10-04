<h2>team</h2>
<p><a href={{route('teams.create')}}>Create</a></p>

@foreach ($teams as $team)
    <?php
    $id = $team['id'];
    $name = $team['name'];
    $image = $team['image'];
    
    ?>
    <div>
    <p style="display: inline">{{ $id }}) {{ $name }} <a href={{route('teams.edit',$id)}}>edit</a></p>
    <form style="display: inline" action={{route('teams.destroy')}} method='POST'>
        @method("DELETE")
        @csrf
        <input type='submit' value='Delete'>
    </form>
  </div>
  <img src="{{url("storage/$image")}}" width="100px" height="100px" alt="">
  <hr>


@endforeach
