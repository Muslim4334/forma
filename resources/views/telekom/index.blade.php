@extends('layout.app')
@section('content')
    
    <h3 class="text-center">Bu kursdohslarim</h3>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>T|R</td>
                <td>Kursdosh ismi</td>
                <td>Adrressi</td>
                <td>Telefoni </td>
            </tr>
        </thead>
    <tbody>
        @foreach($kursdoshes as $kursdosh)
            <tr>
                <td>{{($kursdoshes->currentpage()-1)*$kursdoshes->perpage() + ($loop->index+1)}}</td>
                <td>{{$kursdosh->name}}</td>
                <td>{{$kursdosh->address}}</td>
                <td>{{$kursdosh->phone}}</td>
            </tr>
        @endforeach
    </tbody>  
    </table>

    {{ $kursdoshes->links() }}
@endsection

