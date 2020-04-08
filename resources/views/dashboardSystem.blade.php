@extends('Layouts.master')

@section('title')
Dashboard
@endsection

@section('content')

<div style="margin-bottom: 2%;margin-top: 13%">
        <nav class="navbar navbar-dark bg-dark justify-content-between">           
                <h3 style="font-family: 'Times New Roman', Times, serif;color: aliceblue">System Dashboard</h3>       
                <a class="btn btn-outline-dark" href="{{url('logout')}}" style="float: right;margin-top: 12px">Logout</a>
          </nav>       
        </div>

<div class="card" style="background-color: antiquewhite;height: max-content;width: max-content;padding: 5px;margin-left: -15%;">
    <div class="row">                
        <div class="col-md-6">
            <div class="card-body" style="width: fit-content;background-color: azure;margin: 2px;margin-left: 4px;">
                <legend>Hardware</legend>
            <table class="table table-striped table-dark" border = "1">
                <tr>
                    <th>ID</th>
                    <th>Computer Lab</th>
                    <th>Machine Serial</th>
                    <th>Type</th>
                    <th>Discription</th>                        
                    <th>Action</th>
                </tr>

                @foreach ($data as $err)
                <tr>
                    <td>{{ $err->user_id }}</td>
                    <td>{{ $err->ComputerLab }}</td>
                    <td>{{ $err->machineSerial }}</td>
                    <td>{{ $err->type }}</td>
                    <td>{{ $err->discription }}</td>
                    <td><a href="{{ route('CorrectEH',['id'=>$err->user_id]) }}" class="btn btn-light btn-sm">@if($err->status==1)Inactive @else Mark asFixed @endif</a></td>
                </tr>
                @endforeach    
            </table>    
        </div>
    </div>

        <div class="col-md-6">
            <div class="card-body" style="width: fit-content;background-color: azure;margin: 2px;float: right;">
                <legend>Software</legend>
            <table class="table table-striped table-dark" border = "1">
                <tr>
                    <th>ID</th>
                    <th>Computer Lab</th>
                    <th>Machine Serial</th>
                    <th>Discription</th>                        
                    <th>Action</th>
                </tr>

                @foreach ($data2 as $err)
                <tr>
                    <td>{{ $err->user_id }}</td>
                    <td>{{ $err->ComputerLab }}</td>
                    <td>{{ $err->machineSerial }}</td>
                    <td>{{ $err->softwarediscription }}</td>
                    <td><a href="{{ route('CorrectES',['id'=>$err->user_id]) }}" class="btn btn-light btn-sm">@if($err->status==1)Inactive @else Mark as Fixed @endif</a></td>
                </tr>
                @endforeach    
            </table> 
        </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection

