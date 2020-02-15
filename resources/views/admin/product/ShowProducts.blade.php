@extends('admin.layout.MasterAdmin')
@section('Mohtava')

<div>
        <table id="mytable" class="table table-bordred table-striped">
                   
                <thead>

                    <th>ردیف</th>
                    <th>نام</th>
                    <th>توضیحات</th>
                    <th>دسته بندی</th>
                    <th>قیمت</th>
                    <th>تعداد</th>
                    <th>ویرایش</th>   
                    <th>حذف</th>
                </thead>
                <tbody>
                @foreach($Temp['kala'] as $kala)
                    <tr>
                    <td><input type="checkbox" class="checkthis" /></td>
                    {{-- <td>{{$kala->id}}</td> --}}
                    <td>{{$kala->name}}</td>
                    <td>{{$kala->description}}</td>
                    <td>{{$kala->categori->name}}</td>
                    <td>{{$kala->price}}</td>
                    <td>{{$kala->number}}</td>
                    <td><a href="/editproduct/{{$kala["id"]}}" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                    <td><a href="/deleteproduct/{{$kala["id"]}}" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
</div>
@endsection