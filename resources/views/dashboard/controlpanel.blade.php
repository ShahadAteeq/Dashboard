@extends('layouts.dashboard')
@section('content')
<div class="contaner">
    <div class="row">
        <div class="col">
            <h1 class="alert alert-success text-center">بيانات الاصناف</h1>
        <div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>رقم العنصر</th>
                    <th>اسم العنصر</th>
                    <th>اسم المجموعه</th>
                    <th>لون العنصر</th>
                    <th> السعر</th>
                    <th> الكمبة</th>
                </tr>
            </thead>
        </tbody>
        @if($data!=null)
        @foreach($data as $row)
        <tr>
         <td>{{$row->id}}</td>
         <td>{{$row->itemname}}</td>
         <td>{{$row->itemgroupname}}</td>
         <td>{{$row->color}}</td>
         <td>{{$row->price}}</td>
         <td>{{$row->qty}}</td>
        </tr>
        @endforeach
@endif 
      </tbody>
        </table>
    </div>
</div>
        </div>
    </div>
</div>

@endsection