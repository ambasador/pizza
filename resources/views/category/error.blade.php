@if (count($errors) > 0)
<div class="card mt-5">
    <div class="card-body">
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br />
            @endforeach
        </div>
    </div>
</div>
@endif()