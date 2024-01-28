@extends('layouts.dashboard')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
    <div class="row d-flex justify-content-center">
    <h1 class="alert alert-success text-center"> اضافة بيانات الاصناف</h1>
        <div class="col-sm-8">
            <form action="{{route('save')}}" method="post">
                @csrf
                <label for="itemname" class="p-2">اسم العنصر</label>
                <input type="text" class="form-control form-control-sm " name="itemname" id="itemname">

                <label for="price" class="p-2">سعر العنصر</label>
                <input type="text" class="form-control form-control-sm " name="price" id="price">

                <label for="color" class="p-2">لون العنصر</label>
                <input type="text" class="form-control form-control-sm " name="color" id="color">

                <label for="qty" class="p-2">الكمبة</label>
                <input type="text" class="form-control form-control-sm " name="qty" id="qty">

                <label for="itemgroupno" class="p-2"> مجموعة العنصر </label>
                 <select class="form-control form-control-sm " name="itemgroupno">
                 </select>
                  
                 <label for="image" class="from-lable">ارفق صورة العنصر</lable>
                 <input class="from-control" type="file" name="image" id="image">

                    <div class="row">
                <div class="text-center">
                <button class="btn btn-primary mt-2" type="submit">حفظ</button>
                </div>

      <div class="card mt-3">
        <div class="cardd-body">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                    <th>رقم المنتج</th>
                    <th>اسم المنتج</th>
                    <th> سعر المنتج</th>
                    <th> لون المنتج</th>
                    <th> الكمية</th>
                    <th> المحموعه</th>
                    <th>ملف الصوره</th>
                    <th colspan="2"> اجراء</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->itemname}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->color}}</td>
                        <td>{{$row->qty}}</td>
                        <td>{{$row->itemgroupon}}</td>
                        <td>{{$row->image}}</td>
                        <td><a href="{{ route('del',['x'=>$row->id])}}"><i class="fa-solid fa-trash text-danger"></i></a></td>
                        <td><a href="{{ route('edit',['x'=>$row->id])}}"><i class="fa-regular fa-pen-to-square text-success"><i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
</div>
@endsection