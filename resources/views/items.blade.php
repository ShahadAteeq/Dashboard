@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4">
            <form action="{{route('save')}}" method="post">
                @csrf
                <label for="itemname" class="p-2">اسم العنصر</label>
                <input type="text" class="form-control form-control-sm " name="itemname" id="itemname" required>

                <label for="price" class="p-2">سعر العنصر</label>
                <input type="text" class="form-control form-control-sm " name="price" id="price" required>

                <label for="color" class="p-2">لون العنصر</label>
                <input type="text" class="form-control form-control-sm " name="color" id="color" required>

                <label for="qty" class="p-2">الكمبة</label>
                <input type="text" class="form-control form-control-sm " name="qty" id="qty" required>
                
                <label for="itemgroupno" class="p-2"> مجموعة العنصر </label>
                 <select class="form-control form-control-sm " name="itemgroupno">
                 <option value="" disabled selected>اختر مجموعة العنصر</option>
                 @foreach($getitem as $group)
                 <option value="{{$group->id}}" id="itemgroupno">{{$group->itemgroupname}}</option>
                 @endforeach
                 </select>
                 <label for="image" class="from-lable">ارفق صورة العنصر</lable>
                 <input class="from-control" type="file" name="image" id="image">
                <div class="row">
                <div class="text-center">
                <button class="btn btn-primary mt-2" type="submit" onclick="showmessage()">حفظ</button>
                </div>
            </form>
          </div>
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
                    <th> المجموعه</th>
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
                        <td><i class="fa-solid fa-trash text-danger"></i></a></td>
                        <td><i class="fa-regular fa-pen-to-square text-success"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
</div>
        <script>
        function showmessage(){
        Swal.fire({
        position:"top-end",
        icon: "success",
        title: "تم الحفظ بنجاح",
        showConfirmButton: false,
        timer: 1500 
    });
            }
         </script>
         
@endsection
