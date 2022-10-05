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

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('All Categories') }}
                        <a href="{{ route('category.create') }}">
                            <button class="btn btn-success" style="float:right">Create New Category</button>
                        </a>
                    </div>

                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                   
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($categorys) > 0)
                                    @foreach ($categorys as $key => $category)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                           
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td><a href="{{ route('category.edit', $category->id) }}"><button
                                                        class="btn btn-primary">Edit</button></a></td>
                                            <td><button class="btn btn-danger" data-toggle="modal"
                                                    data-target="#exampleModal{{ $category->id }}">Delete</button></td>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{ $category->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                                    @csrf @method('DELETE')
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Delete
                                                                    Conformation
                                                                </h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </tr>
                                    @endforeach
                                @else
                                    <p>No Category to show</p>
                                @endif

                            </tbody>
                        </table>
                        {{ $categorys->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection