@if(Session::has('status'))
    <div style="margin-top:70px" class="container">
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
    </div>
@endif