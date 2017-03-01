<div class="container">

<div class="row">

<div class="col-md-12">

@if (session()->has('message'))

<div class="alert alert-success">

{{ session()->get('message') }}

<button type="button" class="close" data-dismiss="alert" aria-label="Close">

<span aria-hidden="true">&times;</span>

</button>

</div>

@endif

@if (isset($errors))

@foreach ($errors->all() as $error)

<div class="alert alert-danger">

{{ $error }}

<button type="button" class="close" data-dismiss="alert" aria-label="Close">

<span aria-hidden="true">&times;</span>

</button>

</div>

@endforeach

@endif

</div>

</div>

<div class="row">

<div class="col-md-12">

@yield('content')

</div>

</div>

</div>

</div>
