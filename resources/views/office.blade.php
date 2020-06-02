@extends('adminlte::page')

@section('title', 'office')

@section('content')
<div id="app">
    <office :title="'{!!$title !!}'"></office>
</div>

<script type="text/javascript" src="js/app.js"></script>
@endsection