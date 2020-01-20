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
    <style>
    *{
        margin: 0px;
        padding: 0px;
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

    }
    </style>
    </head>
<body id="background">
<div class="w3-bar bg-dark">

<img src="images/Logo-SUSL.png">
<span style="text-shadow: 0 0 3px white;">Sabaragamuwa University of Sri Lanka</span>

</div>
<div class="container">
    <div class="box" style="margin-top: 20px">
  <div class="box-heading with-border">
        <h1 id="topic">Help Desk | Computer lab</h1>
  </div>
</div>

<div class="content">
        @yield('content')


      </div>

</div>
<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
          <small>Copyright &copy; Your Website</small>
        </div>
      </footer>
    </body>

