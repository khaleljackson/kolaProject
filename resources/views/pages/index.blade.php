@extends('template.default')
    @section('content')

    <div class="container">
        <div class="row">
            @foreach($cocker as $data)
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="card">
                    <a href="./{{$data->id}}"><img class="card-img-top" src="{{ asset('storage/' . $data->avatar )}}" style="width:full; height:250px; padding:5px; border:10px solid white; border-radius: 20%;" alt=""></a>
                    <div class="card-body">
                        <h5 class="card-title">{{$data->name}}</h5>
                        <p class="card-text">{{$data->address}}</p>
                        <p class="card-text">{{$data->phone}}</p>
                        <hr>
                        <a href="./{{$data->id}}">
                            <button class="btn btn-primary" type="button">Menu</button>
                        </a>
                        
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

        
@endsection