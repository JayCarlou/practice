
@extends('adminlte::page')

@section('title', 'office')

@section('content')

<div id="app">
    <office :office="office" :action="action"></office>

    <table class="table table-hover table-bordered table-striped">
        <thead class="thead-dark ">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->code}}</td>
                <td>{{$data->office_name}}</td>
                <td>
                    <button @click="officeClicked({{json_encode($data)}},'edit')" type="button" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button>
                    <button @click="officeClicked({{json_encode($data)}},'delete')" type="button" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<script type="text/javascript" src="js/app.js">

</script>



@endsection