<h1>Users</h1>
<br><br>
@foreach ($user as $id => $u)
    <h3>User : {{ $id }}</h3>
    <h3>Name : {{ $u['name'] }}</h3>
    <h3>Phone : {{ $u['phone'] }}</h3>
    <h3>Email : {{ $u['email'] }}</h3>
    <br>
@endforeach