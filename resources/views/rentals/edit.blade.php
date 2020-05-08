@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Rental
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($rental, ['route' => ['rentals.update', $rental->id], 'method' => 'patch']) !!}

                        @include('rentals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection