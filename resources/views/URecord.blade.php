@extends('dashboardUser')

@section('sub_content')


        <div class="card" style="background-color: #FBF7F9;margin-right: 5%;" id="contReport">

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
            <form action="/insert" method="post" id="myform">
                @csrf
                 <fieldset class="form-group">
                <legend>Help Desk Portal</legend>
                <input type="hidden" name="id" value="{{ session()->get('id') }}" placeholder="00AAA0000">
                <input type="hidden" name="name" value="{{ session()->get('username') }}" placeholder="00AAA0000">

                <div class="form-group row">
                    <label for="Computer_Lab" id="label" class="col-3 col-form-label">Computer Lab :</label>
                    <div class="col-8">
                        <select class="form-control form-control-sm" name="ComputerLab">
                            <option name="ComputerLab" value="CIS Lab1">CIS Lab1</option>
                            <option name="ComputerLab" value="CIS Lab2">CIS Lab2</option>
                            <option name="ComputerLab" value="PST Lab">PST_lab</option>
                        </select>
                     </div>
                </div>


                    <div class="form-group row">
                        <label for="Machine_Serial" id="label" class="col-3 col-form-label">Machine Serial :</label>
                        <div class="col-8">
                            <input class="form-control form-control-sm" type="text" name="machineSerial" id="machineSerial" placeholder="CIS01C05">
                        </div>
                    </div>



                    <label class="form-check-label" id="label">
                <input type="radio" class="btn btn-outline-primary" name="hardwareSoftware"  value="Hardware" id="bt1"/>hardware</label>
                <label class="form-check-label" id="label">
                <input type="radio" class="btn btn-outline-primary" name="hardwareSoftware" value="Software" id="bt2"/>Software</label>

                            <div class="row" style="display:none;margin-left: 2%" id="cont1">
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
                                <textarea rows="3" cols="45" name="softwarediscription" style="margin-left: 5%" placeholder="Enter fault of software"></textarea>

                            </div>

                <br>
                <br>

                <input class="btn btn-success" name="save" type="submit" onclick="submit();" value="Submit" style="float: right">

                </fieldset>
            </form>
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

    </script>
    <script>
    function submit() {
        if(document.getElementById) {
            document.myForm.machineSerial.value = "";

    }
    </script>
    @endsection
