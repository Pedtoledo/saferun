
@if (Session::has('success'))
<div class="alert alert-sucess" role="alert">
<strong>Success:</strong>{{Session::get('success')}}
</div>
@endif
@yield('content')