<!DOCTYPE html>
<html lang="<?php echo config('application.language') ?>">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>{{ is_callable(config('administrator.title')) ? call_user_func(config('administrator.title')) : config('administrator.title') }}</title>
	
	@if(!!config('administrator.favicon'))
		<link rel='icon' type='image/png' href="{{ asset(is_callable(config('administrator.favicon')) ? call_user_func(config('administrator.favicon')) : config('administrator.favicon')) }}">
	@endif

	@foreach ($css as $url)
		<link href="{{$url}}" media="all" type="text/css" rel="stylesheet">
	@endforeach

	<!--[if lte IE 9]>
		<link href="{{asset('packages/frozennode/administrator/css/browsers/lte-ie9.css')}}" media="all" type="text/css" rel="stylesheet">
	<![endif]-->

</head>
<body>
	<div id="wrapper">
		@include('administrator::partials.header')

		{!! $content !!}

		@include('administrator::partials.footer')
	</div>

	@foreach ($js as $url)
		<script src="{{$url}}"></script>
	@endforeach
</body>
</html>