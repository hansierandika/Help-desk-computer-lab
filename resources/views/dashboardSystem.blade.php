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

        @if(count($errors)>0)
<div class="alert alert-danger">
    <button type="button" class="close" data-dissmiss="alert">x</button>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if($message= Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dissmiss="alert">x</button>
    <strong>{{ $message }}</strong>
</div>
@endif

<div class="card" style="background-color: antiquewhite;height: max-content;width: max-content;padding: 5px;margin-left: 10%;align-items: center">
    @if(count($data)>0)
                        <div class="card-body" style="width: fit-content;background-color: azure;margin: 1px;margin-left: 1px;">
                            
                            <legend>Hardware</legend>
                        <table class="table table-striped table-dark" border = "1">
                            <tr>
                                <th>ID</th>
                                <th>Computer<br>Lab</th>
                                <th>Machine<br>Serial</th>
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
                                <td><a href="{{ route('CorrectAdminH',['id'=>$err->id]) }}" class="btn btn-light btn-sm">@if($err->status==1)Inactive @else Mark as Fixed @endif</a></td>
                            </tr>
                            @endforeach    
                        </table>  
                    </div> 
                        @endif 
                   
                
                
                    @if(count($data2)>0)
                        <div class="card-body" style="width: fit-content;background-color: azure;margin: 2px;">
                            
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
                                <td><a href="{{ route('CorrectAdminS',['id'=>$err->id]) }}" class="btn btn-light btn-sm">@if($err->status==1)Inactive @else Mark as Fixed @endif</a></td>
                            </tr>
                            @endforeach    
                        </table> 
                        
                    </div>
                    @endif
                    
                    @if(count($data)<1 && (count($data2)<1))
<h5>There is no new issues reported</h5>
                    @endif
</div>
@endsection

@section('scripts')

@endsection

