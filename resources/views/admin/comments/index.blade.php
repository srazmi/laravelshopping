@extends('admin.layout.MasterAdmin')
@section('Mohtava')

<div>
<table class="table">
        <thead>لیست نظرات</thead>
        <thead>
            <tr>    
                <td>ردیف</td>
                <td>نام کاربر</td>
                <td>نام کالا</td>
                <td>نظر</td>
                
            </tr>
        </thead>
        <tbody>
                @foreach ($comments as $comment)
        <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->user['name']}}</td>   
                <td>{{$comment->kala['name']}}</td>
                <td>{{$comment->comment}}</td>
                {{-- <span></span> --}}
                <td><a href="{{"/edit/".$user->id}}">ویرایش</td>
                <td><a href="{{"/delete/".$user->id}}">حذف</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection