<?php /* Smarty version Smarty-3.1.18, created on 2017-05-22 23:24:42
         compiled from "Smarty_dir\templates\orderDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54955923571a5f8ef2-06589082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac46cfbbce6395806dd6d56da3398e62968cb9f9' => 
    array (
      0 => 'Smarty_dir\\templates\\orderDetail.tpl',
      1 => 1495487777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54955923571a5f8ef2-06589082',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loggedIn' => 0,
    'item' => 0,
    'description' => 0,
    'qty' => 0,
    'ucost' => 0,
    'avQty' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5923571a632c85_36345787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5923571a632c85_36345787')) {function content_5923571a632c85_36345787($_smarty_tpl) {?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/new_css_prova.css" type="text/css">
  </head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar  navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">U-Stock</a>
        </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li>

            </li>
            <li><a href="">Suggest</a></li>
        </ul>


            <?php if (($_smarty_tpl->tpl_vars['loggedIn']->value)) {?>
                <ul class="nav navbar-nav navbar-right">
            <li><a href="">Home</a></li>
            <li> <a href="" >About us</a></li>
            <li> <a href="">Profile</a></li>
            <li><a href=""><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            <?php } else { ?>
                <ul class="nav navbar-nav navbar-right">
            <li><a href="">Home</a></li>
            <li> <a href="">About us</a></li>
            <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            <?php }?>
    </div>
    </div>
    </nav>

<!-- Container  -->
<div id="details" class="container-fluid" style="margin-top: 50px">

  <div class="row" style="height: 500px">
    <div class="col-sm-6" >

        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 400px; width: 660px; margin-top: 50px; margin-left: 40px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="height: 400px">
      <div class="item active">
        <img src="/static/image/.jpg"  alt="Image">
      </div>

      <div class="item ">
        <img src="/static/image/1.jpg"  alt="Image">
      </div>

      <div class="item ">
        <img src="/static/image/2.jpg"  alt="Image">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

      </div>

      <div class="col-md-1" style="right: 215px">

      </div>



    <div class="col-sm-5 text-center" style="right: 4.1%; margin-top: 1.5%">
      <p class="text-center"> <h1><strong><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</strong></h1></p>
        <hr>
        <div class="text-left">
            <h3>Description: <h4> <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</h4></h3>
            <h3>Stock expiration:  22 days left</h3>

            <h3>Quantity per Lot: <?php echo $_smarty_tpl->tpl_vars['qty']->value;?>
</h3>
            <h3>price : <?php echo $_smarty_tpl->tpl_vars['ucost']->value;?>
&#8364;</h3>
            <h3 style="color: #6d90b5">Stocks available: <?php echo $_smarty_tpl->tpl_vars['avQty']->value;?>
</h3>
            <hr>
        </div>
</div>

    </div>

  </div>
</div>
<hr style="border-color: #6d90b5; border-style: dotted">
<!-- Container (TOUR Section) -->
<div id="supervisor" >
  <div class="container" style="height: 700px">
    <h2 class="text-center" style="color: #4673a1"><strong>Supervisor:</strong></h2>
       <div class="row text-center" style="margin-top: 5%">
         <div class="col-sm-6" style="margin-left: -11%">
        </div>
      <div class="col-sm-7" style="margin-left: 16%; margin-right: -14%; height: 400px;right: 3.9%;">
        <div class="thumbnail" style="height: 400px;">
          <img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/16114178_10209590668821953_3984312520702354777_n.jpg?oh=6337cfd7ff55089690f6c860784469bc&oe=59478746" class="img-circle" style=" width: 20%; margin-top: 0px" />
          <p><strong><h2>Steeve</h2></strong></p>
            <hr>
            <div class="text-left">
            <h4><strong>Pick-up point: Via Alpignano 69, Torino</strong> </h4>
            <h4><strong>Available days:</strong> monday 17-19, tuesday 15-17, friday 11-14</h4>

        </div>
            <hr>
            <button class="btn btn-link text-center" data-toggle="modal" data-target="#myModal" style="font-size: medium">Check The Supervisor Profile</button>
      </div>

      </div>
    </div>
    </div>

    <hr style="border-color: #6d90b5; border-style: dotted; margin-top: -4.5%">
</div>

<!-- Container (Contact Section) -->
<div id="qa" class="container " style="height: 700px; margin-top: 3%">
  <h1 class="text-center"><strong>Q&A</strong></h1>




  <ul class="nav nav-tabs" style="margin-top: 3%; color: #1e2d3c; font-size: medium">
    <li class="active"><a data-toggle="tab" href="#home">Payment</a></li>
    <li><a data-toggle="tab" href="#menu1">Supervisor</a></li>
    <li><a data-toggle="tab" href="#menu3">Delivery</a></li>
    <li><a data-toggle="tab" href="#menu5">General Question</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3 style="color: #6d90b5">What happen after the payment?</h3>
      <h4>After the payment you will receive a "ORDER CODE" which is very important for the pick up: you must keep it and show it to the supervisor in order to collect
      your piece of stock. When the order will be completed (100% of the progressbar) you will receive an e-mail with a summary of your order and the contact of the supervisor.</h4>
        <h3 style="color: #6d90b5">Which payment method could I use?</h3>
      <h4>Coins!</h4>
        <h3 style="color: #6d90b5">When will you take my money?</h3>
        <h4>Thanks to the crowdfunding method we are going to take it at the payment, but, if the stock doesn't reach 100%, you will get your cash back.</h4>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3 style="color: #6d90b5">What happen if I become a "Supervisor"?</h3>
      <h4>You will receive the stock at your house. After you wait for the other user to come and pick the order, during the delivery time (choosen by you)</h4>
    </div>
      <div id="menu3" class="tab-pane fade">
      <h3 style="color: #6d90b5">How much time i had to wait for my stock?</h3>
      <h4>The Supervisor will receive the good 7-10 after the expiration of the stock,then you will go to the delivery point.</h4>
    </div>
      <div id="menu5" class="tab-pane fade">
       <a href=""><h1>do your question about stock</h1></a>
    </div>

  </div>
</div>

 <div class="col-md-4">
      <a><img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive"></a>
      <h2>A title</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,&nbsp;</p>
    </div>
    <footer class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>Footer header</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div class="col-sm-6">
            <p class="text-info text-right">
              <br>
              <br>
            </p>
            <div class="row">
              <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 hidden-xs text-right">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>





    </body><?php }} ?>
