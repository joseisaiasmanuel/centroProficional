@if(count ($errors)>0)
@foreach ($errors->all() as $error)
<div class="col-md-12">
    <p class="alert alert-warning" style="color:red;"><i class="icon fa fa-ban"></i>{{$error}}</p>
</div>
@endforeach
@endif

@if(session()->has('message'))

<p class="alert alert-info small"><i class="icon fa fa-check"></i>{{session('message')}}</p>
@endif

@if(session()->has('msg_del'))
<p class="alert alert-danger small"><i class="icon fa fa-warning"></i>{{session('msg_del')}}</p>
@endif

@if(session()->has('msg_rest'))
<p class="alert alert-success small"><i class="icon fa fa-info"></i>{{session('msg_rest')}}</p>
@endif