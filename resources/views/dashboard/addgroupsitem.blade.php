@extends('layouts.dashboard')
@section('content')
<div class="contaner">
    <div class="row">
        <div class="col-sm-30">
            <h1 class="alert alert-success text-center"> اضافة مجموعات الاصناف</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{route('saves')}}" method="post">
                    @csrf
                    <lable for="itemgrname">اسم المجموعه</lable>
                    <input type="text" name="itemgroupname" id="itemgrname">
                    <div class="row mt-3 p-3 text-center">
                        <div class="col">
                         <button class="btn btn-primary" type="submit">حفظ</button>
                        </div>
                    </div>
            </form>
            </div> </div>
            <div class="card mt-3">
        <div class="cardd-body">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                    <th>رقم المجموعه</th>
                    <th>اسم المجموعه</th>
                    <th colspan="2">اجراء</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->itemgroupname}}</td>
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
</div>
@endsection