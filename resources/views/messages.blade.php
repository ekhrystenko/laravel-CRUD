@if( session('success') )
    <div class="alert alert-success text-center fade-out">
        {{ session('success') }}
    </div>
@endif
@if( session('update') )
    <div class="alert alert-warning text-center fade-out">
        {{ session('update') }}
    </div>
@endif
@if( session('delete') )
    <div class="alert alert-danger text-center fade-out">
        {{ session('delete') }}
    </div>
@endif
