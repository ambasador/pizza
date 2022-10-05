@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            @include('pizza.side')
           
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Pizza') }}</div>
                    <form action="{{ route('pizza.store') }}" method="POST" enctype="multipart/form-data">@csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name of Pizza</label>
                                <input type="text" class="form-control" name="name" placeholder="name of pizza">
                            </div>
                            <div class="form-group">
                                <label for="description">Description of Pizza</label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                            <div class="form-inline">
                                <label>Price ($) &nbsp;</label>
                                <input type="number" name="small_pizza_price" class="form-control"
                                    placeholder="small pizza price">&nbsp;
                                <input type="number" name="medium_pizza_price" class="form-control"
                                    placeholder="medium pizza price">&nbsp;
                                <input type="number" name="large_pizza_price" class="form-control"
                                    placeholder="large pizza price">
                            </div>
                            <div class="form-group">
                                <label for="description">Category </label>
                                <select class="form-control" name="category">
                                @foreach ($category as $key => $cat)
                                <option value="{{$cat->id}}"> {{$cat->name}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
