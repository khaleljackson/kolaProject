@extends('template.default')

@section('content')
    <div class="container">
        <div class="row">
            
    @foreach($details as $data)
                <?php if ($data->available==1){
                    ?>
                    <div class="col-md-4">
                    <div class="card">
                    <img class="card-img-top" src="{{ asset('storage/' . $data->image )}}" style="width:full; height:250px; padding:5px; border:10px solid white; border-radius: 20%;" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$data->item}}</h5>
                        <p class="card-text">
                            <br>Name: {{$data->item}}
                            <br>Size: {{$data->size}}
                            <br>Price: {{$data->price}}
                            <hr>
                            <button class="btn btn-primary" type="button">Order Now</button>
                        </p>
                    </div>
                </div>
                </div>
                <?php
                } ?>
    @endforeach
        </div>
    </div>
@endsection