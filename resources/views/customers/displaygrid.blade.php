@extends('layouts.app')
@section('content')
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 
<div style="padding-top:7%" class="container-fluid"> 
    <nav class="navbar navbar-default navbar-fixed-top"> 
        <ul class="list-inline nav navbar-nav navbar-right">
            <li><button id="drive" onclick="window.location.href=''" type="button" class="btn btn-primary navbar-btn center-block">Rent car</button></a></li> 
            <li><button id="emptystorage" type="button" class="btn btn-primary navbar-btn center-block">Empty Storage</button></li> 
            <li><span style="font-size:40px;margin-right:0px;" class="glyphicon glyphicon-car-rental navbar-btn"></span></li> 
            <li><div class="navbar-text" id="carrental" style="font-size:12pt;margin-left:0px;margin-right:0px;"></div></li> 
            <li><div class="navbar-text" style="font-size:14pt;margin-left:0px;">Client(s)</div></li> 
        <ul> 
    </nav> 
</div>

@include('flash::message') 
@php $j=0 @endphp 
@foreach($customers as $customer) 
    @if ($j==0) <div class='row'> @endif 
        <div class="col-sm-4"> 
            <div class="panel panel-primary"> 
            <div class="panel-heading">{{ $customer->firstname }} {{ $customer->surname }}</div> 
            <div class="panel-body"><img style="width:80%;height:200px;" class="img-responsive center-block" src="{{ asset('/img/' . $customer->email_address)}}"/></div> 
            <div class="panel-footer"><button id="addcustomer" type="button" class="btn btn-default center-block addcustomer" value="{{$customer->id}}">Add To storage</button></div> 
        </div> 
    </div> 
    @php $j++ @endphp 
    @if ($j==3) @php $j=0 @endphp </div> @endif 
@endforeach
<script>
$(".bth,.addclient").click(function() {
    var total = parseInt($('#carrental').text());
    var i=$(this).val();
    $('#carrental').text(total);    
    $.ajax({
      type: "get",
      url: "{{url('customers/addclient/')}}" + "/" + i,
      type: "GET",
      success: function(response) {
          total=total+1;
          $('#carrental').text(total);
      },
      error: function() {
          alert("problem communicating with the server");
      }
    });
});
</script>

@endsection('content')