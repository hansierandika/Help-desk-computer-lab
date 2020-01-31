<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="{{url('style.css')}}">

    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <link rel="stylesheet" href="css_/index_style.css">
        <link rel="stylesheet" href="css_/w3.css">
        <link rel="stylesheet" href="css_/w3-theme-black.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">



        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  /*  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />*/
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />

    <link href="../assets/demo/demo.css" rel="stylesheet" />
    <style>
    *{
        margin: 0px;
        padding: 0px;
    }
    #nameTag{
        color: antiquewhite;
    }
    #background{
        background-image: url("images/appliedLab.jpg");
        height: 100%;
        background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    }
    #topicbox{
        background-color: antiquewhite;
    }
    span{
        color: beige;
        font-size:26px;
        margin-left: 10px;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    }
    img{
        width:70px ;
        height:70px ;
        margin: 15px;
        margin-left:50px ;

    }

    #topic{
        text-align: center;
        font-size: 20px;
        font-family: cursive;
        padding: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          text-shadow: 0 0 3px darkblue, 0 0 5px blue;
    }
    #h1register{
        font-family: "Comic Sans MS", cursive, sans-serif;

    }
    #left-side{
        background-color: #343a40;
    }
    #right-side{
        background-color:   #ebf5fb  ;

    }
    #lefttopheader{
        box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.15);
        height: 45px;
    }
    #topheader{
        margin-bottom: 10px;
        height: 45px;
        background-color: white;
        box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.15);
    }

    #myDIV {
        width: 100%;
        padding: 50px 0;
        text-align: center;
        background-color: lightblue;
        margin-top: 20px;
      }

    #dash1{
        height:480px;
background-color: midnightblue;
    }
    #header{
        left:0;
        position:fixed;
        width:100%;
        top:0;
        z-index:1;
    }
    #container{

        z-index:2;

    }
</style>
    </head>
<body id="background">
    <div id="header">
<div class="w3-bar bg-dark" >

<img src="images/Logo-SUSL.png">
<span style="text-shadow: 0 0 3px white;">Sabaragamuwa University of Sri Lanka</span>
</div>

<div class="container" id="container">
    <div class="box" style="margin-top: 0px">
  <div class="box-heading with-border" id="topicbox">
        <h1 id="topic">Help Desk | Computer lab</h1>
  </div>
</div>
</div>
    </div>
<div class="container" id="container">
<div class="content" style="margin:8% auto; padding:60px 0;">
        @yield('content')


      </div>

</div>
<footer id="sticky-footer" class="py-4 bg-dark text-white-50" style="bottom:0; left:0; position:fixed; width:100%;z-index:3;">
        <div class="container text-center">
          <small>D.D.H.Erandika | CIS</small>
        </div>
      </footer>
    </body>

