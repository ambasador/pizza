@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Menu') }}</div>

                    <div class="card-body">
                        @if (Auth::check())
                            <form action="{{ route('order.store') }}" method="POST">@csrf
                                <div class="form-group">
                                    <p>Name: {{ auth()->user()->name }}</p>
                                    <p>Email: {{ auth()->user()->email }}</p>
                                    <p>Phone Number: <input type="number" class="form-control" name="phone" required></p>
                                    <p>Small pizza order: <input type="number" class="form-control" name="small_pizza"
                                            value="0"></p>
                                    <p>Medium pizza order: <input type="number" class="form-control" name="medium_pizza"
                                            value="0"></p>
                                    <p>Large pizza order: <input type="number" class="form-control" name="large_pizza"
                                            value="0"></p>
                                    <p><input type="hidden" name="pizza_id" value="{{ $pizza->id }}"></p>
                                    <p><input type="date" name="date" class="form-control" required></p>
                                    <p><input type="time" name="time" class="form-control" required></p>
                                    <p><textarea class="form-control" name="body"></textarea required></p>
                                    <p class="text-center">
                                        <button class="btn btn-danger" type="submit">Make Order</button>
                                    </p>

                                    @if (session('message'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    @if (session('errmessage'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('errmessage') }}
                                        </div>
                                    @endif
                                </div>
                            </form>
                        @else
                            <P><a href="/login">Please login to make order</a></P>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Pizza') }}</div>

                    <div class="card-body">
                        <img src="{{ Storage::url($pizza->image) }}" class="img-thumbnail" style="width: 100%">
                        <p>
                        <h3>{{ $pizza->name }}</h3>
                        </p>
                        <p>
                        <h3>{{ $pizza->description }}</h3>
                        </p>
                        <p>Small Pizza Price: ${{ $pizza->small_pizza_price }}</p>
                        <p>Medium Pizza Price: ${{ $pizza->medium_pizza_price }}</p>
                        <p>Large Pizza Price: ${{ $pizza->large_pizza_price }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        a.list-group-item {
            font-size: 18px;
        }
        a.list-group-item:hover {
            background-color: red;
            color: white;
        }
        .card-header {
            background-color: red;
            color: white;
            font-size: 20px;
        }
    </style>
@endsection