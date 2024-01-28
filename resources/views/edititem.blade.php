@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <h1 class="alert alert-success">تعديل بيانات الاصناف</h1>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex justify-content-center">
                    <form action="{{ route('update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <label for="x1">اسم العنصر</label>
                        <input type="text" name="nameitem" id="x1" value="{{$item->itemname}}">

                        <label for="x2">سعر العنصر</label>
                        <input type="text" name="priceitem" id="x2" value="{{$item->price}}">

                        <label for="x3">لون العنصر</label>
                        <input type="text" name="coloritem" id="x3" value="{{$item->color}}">

                        <label for="x4">لون العنصر</label>
                        <input type="text" name="qtyitem" id="x4" value="{{$item->qty}}">
                        <div class="text-center">
                        <button class="btn btn-primary mt-2" type="submit">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
