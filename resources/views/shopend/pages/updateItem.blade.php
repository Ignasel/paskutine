@extends('shopend/main')

@section('content')

        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Redaguokit  prekės informaciją!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 mb-5"  data-aos="fade">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors -> all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="/UpdateItem/{{$item->id}}" enctype="multipart/form-data" class="p-5 bg-white">
                        @csrf
                        <div class="row form-group" {{$item->id}}>
                            <div class="col-md-12">
                                <label class="text-black" for="name">Pavadinimas</label>
                                <input type="text" id="name" value="{{$item->title}}" name="title" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Aprašymas</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$item->description}}</textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="price">Kaina</label>
                                <input type="text" id="name" value="{{$item->price}}" name="price" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="name">Kiekis</label>
                                <input type="text" id="phone" name="quantity" value="{{$item->quantity}}" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="name">Kategorija</label>
                                <select class="form-control" name="cat_id" >
                                    <option value="{{$item->cat_id}}">
                                        @foreach($categories as $category)
                                            @if($item->cat_id == $category->id)
                                                {{$category->name}}
                                            @endif
                                        @endforeach
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <label class="text-black" for="name">Nuotraukos:</label>
                                    <img src="{{'storage/'.$item->img}}" alt="Image" class="img-fluid rounded">
                                    <input type="file" id="img" name="img" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Koreguoti" name="submit" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


@stop
