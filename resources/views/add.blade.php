,gjfdjfs,msfbmdsfd
@section('content')
<h1>fbhdfbsmdfb</h1>
<form action="submit">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="age" placeholder="age">
    <button type="submit">save</button>
</form>

    <form action="{{url('post-issue')}}">
        @csrf
         <fieldset>
        <legend>Help Desk Portal</legend>
        Machine Serial:
        <input type="text" name="machineSerial" placeholder="CIS01C05">

        <input type="text" name="hardwareSoftware" placeholder="hardwareSoftware">

        <input type="text" name="discription" placeholder="discription">

        <br>
        <br>

        <input class="btn btn-outline-primary" name="hardwareSoftware" type="button" value="Hardware" id="bt1"/>
        <input class="btn btn-outline-primary" name="hardwareSoftware" type="button" value="Software" id="bt2"/>

                    <div class="row" style="display:none;" id="cont1">
                        <div class="col-md-4">
                            <input type="checkbox" name="hardware1" value="keyboard">keyboard<br>
                            <input type="checkbox" name="hardware2" value="mouse">mouse<br>
                            <input type="checkbox" name="hardware3" value="monitor">monitor<br>
                            <input type="checkbox" name="hardware4" value="cpu">cpu<br>
                            <input type="checkbox" name="hardware5" value="networkConnection">network connection<br>
                            <input type="checkbox" name="hardware5" value="powerfault">power fault<br>
                        </div>
                        <div class="col-md-4">
                            <textarea rows="3" cols="25" name="discription" placeholder="Enter Fault"></textarea>
                        </div>
                    </div>
                    <div class="row" style="display:none;" id="cont2">
                        <textarea rows="3" cols="45" style="margin-left: 10px" placeholder="Enter fault of software"></textarea>

                    </div>

        <br>
        <br>

        <input class="btn btn-outline-success" name="save" type="submit" value="Submit" style="float: right">

        </fieldset>
    </form>

    @endsection
