<table>

    <thead>List of Users</thead>
    <thead>
        <tr>
            <td>Name</td>
            <td>UserName</td>
            <td>Email</td>
            <td>Gender</td>
            <td>Update</td>
        </tr>
    </thead>
    <tbody>
            @foreach ($all as $user)
    <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->mail}}</td>
            <td>{{$user->Gender->name}}</td>
            <td><a href="{{"/showusers/".$user->id}}">update</td>
            <td><a href="{{"/deleteusers/".$user->id}}">delete</td>
    </tr>
    @endforeach
    </tbody>
</table>