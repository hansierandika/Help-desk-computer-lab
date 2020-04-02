@extends('dashboardUser')

@section('sub_content')
                <div class="card"  id="contView">
                    <input type="hidden" name="id" value="{{ session()->get('id') }}" placeholder="00AAA0000">
                    <table border = "1">
                        <tr>
                        <td>No</td>
                
                        <td>Computer Lab</td>
                        <td>Machine Serial</td>
                        <td>Hardware/Software</td>
                        
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
