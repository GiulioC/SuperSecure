<?php /* Smarty version Smarty-3.1.18, created on 2017-05-23 23:08:24
         compiled from "Smarty_dir\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21045924a4c8aa0870-75453003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac8e7faef960b40a679355db5c3f6d71dd854016' => 
    array (
      0 => 'Smarty_dir\\templates\\index.tpl',
      1 => 1495488174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21045924a4c8aa0870-75453003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loggedIn' => 0,
    'allItems' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5924a4c8b172d6_69177762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5924a4c8b172d6_69177762')) {function content_5924a4c8b172d6_69177762($_smarty_tpl) {?><!doctype html>
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
  
  <body>
    <!--<div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">profile</a>
            </li>
            <li>
              <a href="#">Contacts</a>
            </li>
          </ul>
        </div>
      </div>
    </div>-->
    
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
      
      
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

        <div class="container-fluid">

  <div class="row">
    <div class="col-sm-3">
      <div class="panel" style="border-color: transparent; background-color: #ffffff" >
          <div class="panel-heading" style=" background-color: #ffffff"><h3 style="color: #1e2d3c"><a href="OrderDetail/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['item'];?>
</a></h3></div>
          <div class="panel-body" style=" background-color: #ffffff"><a href="OrderDetail/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><img src="images/<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
.png" class="container-img img-thumbnail" alt="Image" style="border-color: white;"></a></div>


        <div class="panel-footer" style="background-color: #ffffff; border-color: #ffffff">

        <div>

        <div class="progress" style="width: 100%; margin-top: 20px">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="background-color: rgba(70, 115, 161, 0.8); width: <?php echo (($_smarty_tpl->tpl_vars['item']->value['quantity'])-($_smarty_tpl->tpl_vars['item']->value['avQuantity']))/($_smarty_tpl->tpl_vars['item']->value['quantity'])*100;?>
%">
                   <?php echo (($_smarty_tpl->tpl_vars['item']->value['quantity'])-($_smarty_tpl->tpl_vars['item']->value['avQuantity']))/($_smarty_tpl->tpl_vars['item']->value['quantity'])*100;?>
%
                  </div>

              </div>
        </div>
        </div>

            </div>
        </div>
      <?php } ?>
      </div>
    </div>
      
    <!--<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
            class="img-responsive">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%;">60% Complete</div>
            </div>
            <h2>hdd</h2>
            <p>Lorem ipsum dolor sit amet, consec
            <a class="btn btn-primary">Click me</a>tetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div class="col-md-3">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
            class="img-responsive">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%;">60% Complete</div>
            </div>
            <h2>earphones</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
            <a class="btn btn-primary">Click me</a>
          </div>
          <div class="col-md-3">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
            class="img-responsive img-rounded">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%;">60% Complete</div>
            </div>
            <h2>usb</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
            <a class="btn btn-primary">Click me</a>
          </div>
          <div class="col-md-3">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
            class="img-responsive">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%;">60% Complete</div>
            </div>
            <h2>kit cartoleria</h2>
            <p>matite - quaderni - gomma - post it - penne - evidenziatori</p>
            <a class="btn btn-primary">Click me</a>
          </div>
        </div>
      </div>
    </div>
      
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
            class="img-responsive">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%;">60% Complete</div>
            </div>
            <h2>sport</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
            <a class="btn btn-primary">Click me</a>
          </div>
          <div class="col-md-3">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
            class="img-responsive">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%;">60% Complete</div>
            </div>
            <h2>caricatori / cavi&nbsp;</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
            <a class="btn btn-primary">Click me</a>
          </div>
          <div class="col-md-3">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
            class="img-responsive img-rounded">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%;">60% Complete</div>
            </div>
            <h2>ventilatori</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
            <a class="btn btn-primary">Click me</a>
          </div>
          <div class="col-md-3">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
            class="img-responsive">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%;">60% Complete</div>
            </div>
            <h2>lavagne stick</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
            <a class="btn btn-primary">Click me</a>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
            class="img-responsive">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%;">60% Complete</div>
            </div>
            <h2>speaker</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
            <a class="btn btn-primary">Click me</a>
          </div>
        </div>
      </div>
    </div> -->
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
  </body>

</html><?php }} ?>
