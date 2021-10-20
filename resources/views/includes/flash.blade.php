@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <div class="d-flex justify-content-between">
            <strong>{{$message}}</strong>
            <button type="button" class="btn-close" aria-label="Close" data-dismiss="alert"></button>
        </div>
    </div>
@endif