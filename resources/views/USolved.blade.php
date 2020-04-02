@extends('dashboardUser')

@section('sub_content')
<div class="card" style="" id="contSolved">
    <input type="hidden" name="id" value="{{ session()->get('id') }}" placeholder="00AAA0000">
    <table border = "1">
        <tr>
            <td>No</td>
           
            
            <td>Machine Serial:</td>
            <td>Hardware/Software</td>
            <td>Discription</td>
           
        </tr>

    
    @foreach ($data as $isu)
        <tr>              
<td>{{ $isu->no }}</td>

<td>{{ $isu->ComputerLab }}</td>
<td>{{ $isu->machineSerial }}</td>
<td>{{ $isu->type }}</td>
</tr>  
                        @endforeach
                    </table>
</div>

@endsection
