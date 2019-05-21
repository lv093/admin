<!doctype html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name') }}</title>
</head>
<body>
<div id="admin-app" data-config="{{ json_encode(config('app')) }}"></div>
@if(app()->environment('local'))
  <script src="http://localhost:35729/livereload.js"></script>
@endif
</body>
</html>