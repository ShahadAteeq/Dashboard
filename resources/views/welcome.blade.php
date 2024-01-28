@extends('layouts.app')

@section('content')
<?php

$c=0;

?>

<div class="container">
   <h1 class="alert alert-success text-center" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">أهلاً بكم في موقعي</h1>
@while($c <$count)
 <div class="row text-center d-flex align-items-center justify-content-center">
   <div class="col-sm-4 text-center">
   <a href="{{route('showproduct',['id'=>$data[$c]->id])}}">
        <div class="card">
            <div class="card-body">
                <h4>{{$data[$c]->itemgroupname}}</h4>
                <h3><i class="bi bi-diagram-2"></i></i></h3>
            </div>
        </div>
              </a>
      </div>
         <?php $c++;?>
         @if($c < $count)
      <div class="col-sm-4 text-center">
      <a href="{{route('showproduct',['id'=>$data[$c]->id])}}">
        <div class="card">
            <div class="card-body">
                <h4>{{$data[$c]->itemgroupname}}</h4>
                <h3><i class="bi bi-collection"></i></i></h3>
            </div>
         </div>
          </a>
     </div>
    <?php $c++;?>
    @endif
    @if($c < $count)
      <div class="col-sm-4 text-center">
      <a href="{{route('showproduct',['id'=>$data[$c]->id])}}">
        <div class="card">
            <div class="card-body">
                <h4>{{$data[$c]->itemgroupname}}</h4>
                <h3><i class="bi bi-collection"></i></i></h3>
            </div>
         </div>
          </a>
     </div>
    <?php $c++;?>
    @endif
   </div>
@endwhile
</div>
@endsection