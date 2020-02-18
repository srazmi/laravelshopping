@extends('admin.layout.MasterAdmin')
@section('Mohtava')

<div class="showusers">
<table class="table">
        <thead>List of Users</thead>
        <thead>
            <tr>    
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td text-align="center">Operation</td>
            </tr>
        </thead>
        <tbody>
                @foreach ($users as $user)
        <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>   
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                {{-- <span></span> --}}
                <td><a href="{{"/edit/".$user->id}}">ویرایش</td>
                <td><a href="{{"/delete/".$user->id}}">حذف</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection