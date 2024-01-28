@extends('layouts.app')
@section('content')

<div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
        @if($data !== null)
            
        @foreach($data as $row)
      <div class="col-md-8">
        <div class="card mb-4">
           <div class="card-header">
            <h3>ملخص الطلب</h3>
           </div>
          <div class="card-body">
            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="/image/{{$row->image}}"width="150" height="150">
                    
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>{{$row->itemname}}</strong></p>
                <p>{{$row->color}}</p>
                
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->

                  <div class="form-outline">
                    <label class="form-label" for="form1"> {{$row->qty}} شخص </label>
                  </div>

                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong><p>{{$row->price}}</p></strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->


</div>
            
          </div>
          @endforeach
              @endif
        </div>
      </div>
    </div>
  </div>

@endsection