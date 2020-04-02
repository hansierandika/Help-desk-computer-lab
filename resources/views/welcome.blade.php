
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






            /* <div class="col-md-5">
    
           <button class="btn btn-secondary" id="btReport" >Report Problem</button>
            <button class="btn btn-secondary" id="btView" onclick="window.location='{{ url("/store") }}'">View my reports</button>
            <button class="btn btn-secondary" id="btSolved">Solved</button>
       
</div> */




            /*
        $sectionReport=$('#contReport');
        $sectionView=$('#contView');
        $sectionSolved=$('#contSolved');
    
        $("#btReport").click(function(){
            $sectionView.hide();
            $sectionSolved.hide();
            $sectionReport.show();
        });
    
        $("#btView").click(function(){
            $sectionReport.hide();
            $sectionSolved.hide();
            $sectionView.show();
    
        });
    
        $("#btSolved").click(function(){
            $sectionReport.hide();
            $sectionView.hide();
            $sectionSolved.show();
        });*/