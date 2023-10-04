<h2>clients</h2>
<p><a href={{route("clients.create")}}>Create</a></p>

@foreach ($clients as $client)
    <?php
    $id = $client->id;
    $name = $client->first_name;
    ?>
    <div>
    <p style="display: inline">{{ $id }}) {{ $name }} <a href={{route("clients.edit",$id)}}>edit</a></p>
    <form style="display: inline" action={{route("clients.destroy",$id)}} method='POST'>
        @method("DELETE")
        @csrf
        <input type='submit' value='Delete'>
    </form>
  </div>
  <hr>


@endforeach
