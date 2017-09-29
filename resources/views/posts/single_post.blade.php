@extends('layouts.master')

@section('content')

    <div class="row">
            <div class="col-lg-12 col-sm-6 portfolio-item">
                <a href="#"><img class="card-img-top" src="{{asset('images/'.$image->name)}}" alt=""></a>
            </div>
    </div>
    <!-- /.row -->

@endsection