@extends('adminlte::page')

@section('title', 'office')

@section('content')
    
    <div id="app">
        <office data="{{ $offices }}" array="{{ json_encode($data) }}" did="1"></office>
        <table>
            @foreach($data as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->code}}</td>
                <td>{{$data->office_name}}</td>
                <td>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" did="1">Open Modal</button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    

    <script type="text/javascript" src="js/app.js"></script>


    
@endsection
