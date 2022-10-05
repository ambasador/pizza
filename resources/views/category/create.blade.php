@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

        <div class="col-md-2">
                <div class="card">
                    <div class="card-header">{{ __('Categories') }}</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <a href="{{ route('category.index') }}" class="list-group-item list-group-item-action">View
                                Category</a>
                            <a href="{{ route('category.create') }}" class="list-group-item list-group-item-action">Create
                            Category</a>
                          
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Category') }}</div>
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">@csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name of Category</label>
                                <input type="text" class="form-control" name="name" placeholder="name of category">
                            </div>
                            <div class="form-group">
                                <label for="description">Description of Category</label>
                                <textarea class="form-control" name="description"></textarea>
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
