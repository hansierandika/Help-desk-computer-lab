@extends('dashboardUser')

@section('sub_content')
<div class="card" style="" id="contSolved">
    <input type="hidden" name="id" value="{{ session()->get('id') }}" placeholder="00AAA0000">
    <legend>Solved History</legend>
    <table border = "1" class="table table-striped table-dark">
        <tr>
            <th>No</th>
            <th>Issue No</th>
            <th>Computer Lab</th>
            <th>Machine Serial</th>
            <th>Hardware/Software Type</th>


        </tr>

     @php($count=0)
    @foreach ($data as $isu)
        <tr>
@php ($count++)
<td>{{ $count }}</td>
<td>{{ $isu->no }}</td>
<td>{{ $isu->ComputerLab }}</td>
<td>{{ $isu->machineSerial }}</td>
<td>{{ $isu->type }}</td>

</tr>
                        @endforeach
                    </table>
</div>

@endsection
