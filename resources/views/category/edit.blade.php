@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

         

            <div class="col-md-8">
                @include('pizza.error')
                <div class="card">
                    <div class="card-header">{{ __('Edit Pizza') }}</div>
                    <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name of Category</label>
                                <input type="text" class="form-control" name="name" placeholder="name of pizza"
                                    value="{{ $category->name }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description of Category</label>
                                <textarea class="form-control" name="description">{{ $category->description }}</textarea>
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
