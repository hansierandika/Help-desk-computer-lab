
            <div class="row">
                <table border = "1">
                    <tr>
                    <td>No</td>
                    <td>Id</td>
                    <td>Computer Lab</td>
                    <td>Machine Serial</td>
                    <td>hardwareSoftware</td>
                    <td>type</td>
                    <td>discription</td>
                    <td>softwarediscription</td>
                    <td>status</td>
                    </tr>
                    @foreach ($issues as $issue)
                    <tr>
                    <td>{{ $issue->no }}</td>
                    <td>{{ $issue->id }}</td>
                    <td>{{ $issue->ComputerLab }}</td>
                    <td>{{ $issue->machineSerial }}</td>
                    <td>{{ $issue->hardwareSoftware }}</td>
                    <td>{{ $issue->type }}</td>
                    <td>{{ $issue->discription }}</td>
                    <td>{{ $issue->softwarediscription }}</td>
                    <td>{{ $issue->status }}</td>
                   </tr>
                    @endforeach
                    </table>
            </div>