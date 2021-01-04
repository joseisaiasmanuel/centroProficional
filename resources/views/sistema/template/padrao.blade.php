<!DOCTYPE html>
<html lang="pt-br">
<head>
	@include('sistema.template.topo')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
			@include('sistema.template.header')
		@include('sistema.template.menus')
		@section('main-content')
		@show
		@include('sistema.template.rodape')
	</div>

</body>
</html>