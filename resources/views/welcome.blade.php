<form method="POST" action="/add">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name"><br>
    <input type="submit" value="Submit">
    @if($errors->any())
    <h4>{{$errors->first()}}</h4>
    @endif
</form>
