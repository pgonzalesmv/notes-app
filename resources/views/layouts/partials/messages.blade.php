@if( $message = Session::get('success'))
    <div class="card">
        <div class="card-content green">
            <p class="white-text">{{ $message }}</p>
        </div>
    </div>
@endif

@if( $message = Session::get('danger'))
    <div class="card">
        <div class="card-content red">
            <p class="white-text">{{ $message }}</p>
        </div>
    </div>
@endif