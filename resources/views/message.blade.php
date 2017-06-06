@if (session('message'))
    <div class="alert alert-info">{{ session('message') }}</div>
@endif
@if (Session::has('success'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4 ">
            <div id="charge-massage" class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
@endif