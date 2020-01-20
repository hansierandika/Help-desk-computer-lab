@extends('Top.top')

@section('title')
Registration
@endsection

@section('content')

<div class="card" id="dash1">
        <div class="row">
                <div class="col-md-5">
                        <h3 style="font-family: 'Aclonica';">Welcome {{ session()->get('username') }}</h3>
                </div>
                <div class="col-md-7">
                        <a class="btn btn-outline-dark" href="{{url('logout')}}" style="float: right;">Logout</a>
                </div>
        </div>
        <div class="row">
        <div class="col-md-7">
            <div class="container">
                <div class="card" style="" id="contReport">


                    <form action="/insert" method="post" id="myform">
                        @csrf
                         <fieldset>
                        <legend>Help Desk Portal</legend>
                        <input type="hidden" name="id" value="{{ session()->get('id') }}" placeholder="00AAA0000">

                        Machine Serial:
                        <input type="text" name="machineSerial" id="machineSerial" placeholder="CIS01C05">
                        <br>
                        <br>

                        <input type="radio" class="btn btn-outline-primary" name="hardwareSoftware"  value="Hardware" id="bt1"/>hardware
                        <input type="radio" class="btn btn-outline-primary" name="hardwareSoftware" value="Software" id="bt2"/>Software

                                    <div class="row" style="display:none;" id="cont1">
                                        <div class="col-md-4">
                                            <input type="checkbox" name="type" value="keyboard">keyboard<br>
                                            <input type="checkbox" name="type" value="mouse">mouse<br>
                                            <input type="checkbox" name="type" value="monitor">monitor<br>
                                            <input type="checkbox" name="type" value="cpu">cpu<br>
                                            <input type="checkbox" name="type" value="networkConnection">network connection<br>
                                              <input type="checkbox" name="type" value="powerfault">power fault<br>
                                        </div>
                                        <div class="col-md-4">
                                            <textarea rows="3" cols="25" name="discription" placeholder="Enter Fault"></textarea>
                                        </div>
                                    </div>
                                    <div class="row" style="display:none;" id="cont2">
                                        <textarea rows="3" cols="45" name="softwarediscription" style="margin-left: 10px" placeholder="Enter fault of software"></textarea>

                                    </div>

                        <br>
                        <br>

                        <input class="btn btn-outline-success" name="save" type="submit" onclick="submit();" value="Submit" style="float: right">

                        </fieldset>
                    </form>
                </div>

                <div class="card" style="display:none;" id="contView">
                    <table border = "1">
                        <tr>
                        <td>No</td>
                        <td>Issue Id:</td>
                        <td>Id:</td>
                        <td>Machine Serial:</td>
                        <td>Hardware/Software</td>
                        <td>Discription</td>
                        <td>Date</td>
                        </tr>

                        </table>
                </div>

                <div class="card" style="display:none;" id="contSolved">
                    <table border = "1">
                               <tr>
                     <td>No</td>
                            <td>Issue Id:</td>
                            <td>Id:</td>
                            <td>Machine Serial:</td>
                            <td>Hardware/Software</td>
                            <td>Discription</td>
                            <td>Date</td>
                            </tr>


                        </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <button class="btn btn-outline-dark" id="btReport">Report Problem</button>
            <button class="btn btn-outline-dark" id="btView">View my reports</button>
            <button class="btn btn-outline-dark" id="btSolved">Solved</button>
        </div>
    </div>
</div>
<script>
        $section1 = $('#cont1');
        $section2 = $('#cont2');


        $("#bt1").click(function(){
            $section2.hide();
            $section1.show();

        });

        $("#bt2").click(function(){
            $section1.hide();
            $section2.show();

        });

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
        });
</script>
<script>
    function submit() {
        if(document.getElementById) {
            document.myForm.machineSerial.value = "";

    }
    </script>
@endsection

@section('scripts')

@endsection
