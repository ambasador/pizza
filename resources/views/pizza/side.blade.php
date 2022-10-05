
<div class="col-md-4">
    <div class="card">
        <div class="card-header">{{ __('Menu') }}</div>
        <div class="card-body">
            <ul class="list-group">
                <a href="{{ route('pizza.index') }}" class="list-group-item list-group-item-action">View Pizza</a>
                <a href="{{ route('pizza.create') }}" class="list-group-item list-group-item-action">Create Pizza</a>
                <a href="{{ route('user.order') }}" class="list-group-item list-group-item-action">User Order</a>
            </ul>
        </div>
    </div>
    @include('pizza.error')
</div>