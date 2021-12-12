<!DOCTYPE HTML>
<html lang="ru-RU">
<head>

    <title>{{ isset($title)?$title:'' }}</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta name="description" content="{{ (isset($meta_desc)) ? $meta_desc : ''}}">
	<meta name="keywords" content="{{ (isset($keywords)) ? $keywords : ''}}">
    <meta name="author" content="{{ Auth::user()->name }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset(env('THEME').'/images/favicon.ico')}}">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  {!!Html::style('admin/assets/bootstrap/css/bootstrap.min.css')!!}
  {!!Html::style('admin/assets/font-awesome/css/font-awesome.min.css')!!}
  {!!Html::style('admin/assets/Ionicons/css/ionicons.min.css')!!}
  {!!Html::style('admin/assets/bootstrap/css/AdminLTE.min.css')!!}
  {!!Html::style('admin/assets/bootstrap/css/skins/skin-blue.min.css')!!}
  {!!Html::style('admin/assets/bootstrap/css/style.css')!!}
  {!!Html::script(env('THEME').'/js/jquery-3.5.1.min.js')!!}
  {!!Html::script('admin/assets/bootstrap/js/bootstrap.min.js')!!}
  {!!Html::style(env('THEME').'/css/select2.min.css')!!}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->

    {!!Html::script('admin/ckeditor/tinymce.min.js')!!}


</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{ route('adminIndex') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>dm</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">{{ Auth::user()->name }} <b>Admin</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">



  @if(Gate::allows('VIEW_ADMIN_MUROJAAT'))
         <!-- /.messages-menu -->

         <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Сизда {{$diplom[1]}} та янги мурожаат бор">
              <i class="fa fa-building-o"></i>
              <span class="label label-danger">{{$diplom[1]}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Сизда {{$diplom[1]}} та янги ариза бор</li>
              <li>
                <!-- Inner menu: contains the tasks -->


@foreach($diplom[0] as $k=>$dip)

                   <ul class="menu">


                  <li><!-- Task item -->
                    <a href="{{route('diplom.edit',['diplom' => $dip->id])}}" style="text-align: right;color: #6b6565;font-size: 14px;">
                      <!-- Task title and progress text -->

                      <!-- The progress bar -->

                        <!-- Change the css width attribute to simulate progress -->



                         <small ><i class="fa fa-clock-o"></i> {{ is_object($dip->created_at) ?$dip->created_at->format('d.m.Y H:s') : ''}} </small>
                        <br>
                    <div style="text-align: left;font-size: 15px;font-weight: bold;"> {{Str::limit($dip->author,150)}} </div>
                    </a>
                  </li>
                    <!-- end task item -->
                </ul>




  @endforeach


              </li>
              <li class="footer">
                <a href="{{ route('diplom.index') }}">Ҳамма мурожаатларга ўтиш</a>
              </li>
            </ul>
          </li>

@endif



  @if(Gate::allows('VIEW_ADMIN'))
         <!-- /.messages-menu -->


         <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Sizda {{$requ[1]}} ta yangi buyurtma bor">
              <i class="fa fa-paste"></i>
              <span class="label label-danger">{{$requ[1]}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Sizda {{$requ[1]}} ta yangi buyurtma bor</li>
              <li>
                <!-- Inner menu: contains the tasks -->


@foreach($requ[0] as $k=>$com)

                   <ul class="menu">


                  <li><!-- Task item -->
                    <a href="{{route('requ.edit',['requ' => $com->id])}}" style="text-align: right;color: #6b6565;font-size: 14px;">
                      <!-- Task title and progress text -->

                      <!-- The progress bar -->

                        <!-- Change the css width attribute to simulate progress -->



                         <small ><i class="fa fa-clock-o"></i> {{ is_object($com->created_at) ?$com->created_at->format('d.m.Y H:s') : ''}} </small>
                        <br>
                    <div style="text-align: left;"><b style="font-size: 15px;font-weight: bold;">Tavsiflar:</b> {{Str::limit($com->text,150)}} </div>
                    </a>
                  </li>
                    <!-- end task item -->
                </ul>




  @endforeach


              </li>
              <li class="footer">
                <a href="{{ route('requ.index') }}">Перейти ко всем ссылкам</a>
              </li>
            </ul>
          </li>

@endif



@if(Gate::allows('VIEW_ADMIN_MUROJAAT'))
         <!-- /.messages-menu -->

         <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Сизда {{$oq[1]}} та янги мурожаат бор">
              <i class="fa fa-file-text-o"></i>
              <span class="label label-danger">{{$oq[1]}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Сизда {{$oq[1]}} та янги навбат бор</li>
              <li>
                <!-- Inner menu: contains the tasks -->


@foreach($oq[0] as $k=>$com1)

                   <ul class="menu">


                  <li><!-- Task item -->
                    <a href="{{route('qabul.edit',['qabul' => $com1->id])}}" style="text-align: right;color: #6b6565;font-size: 14px;">
                      <!-- Task title and progress text -->

                      <!-- The progress bar -->

                        <!-- Change the css width attribute to simulate progress -->



                         <small ><i class="fa fa-clock-o"></i> {{ is_object($com1->created_at) ?$com1->created_at->format('d.m.Y H:s') : ''}} </small>
                        <br>
                    <div style="text-align: left;font-size: 15px;font-weight: bold;"> {{Str::limit($com1->fish,150)}} </div>
                    </a>
                  </li>
                    <!-- end task item -->
                </ul>




  @endforeach


              </li>
              <li class="footer">
                <a href="{{ route('qabul.index') }}">Ҳаммасига ўтиш</a>
              </li>
            </ul>
          </li>

@endif




@if(Gate::allows('VIEW_ADMIN_XATO'))

                  <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Сайтда {{$xato[1]}} та хатолик хабари бор">
              <i class="fa fa-exclamation-triangle"></i>
              <span class="label label-success">{{$xato[1]}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Сизда {{$xato[1]}} та хатолик хабари бор</li>
              <li>
                <!-- inner menu: contains the messages -->
@foreach($xato[0] as $k=>$comment)
               <ul class="menu">
                  <li  style="width: 96%;overflow: hidden;"><!-- start message -->
                    <a href="{{route('xato.edit',['xato' => $comment->id])}}">
                      <!-- Message title and timestamp -->
                      <h4 style="margin:0">{!!$comment->mis!!}</h4>
                      <!-- The message -->
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                      @endforeach
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="{{ route('xato.index') }}">Ҳамма хабарларни кўриш</a></li>
            </ul>
          </li>

@endif
@if(Gate::allows('VIEW_ADMIN_CONTACT'))

        <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Сизга {{$mes[1]}} та янги хабар бор">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">{{$mes[1]}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Сизда {{$mes[1]}} та янги хабар бор</li>
              <li>
                <!-- inner menu: contains the messages -->
@foreach($mes[0] as $k=>$comment)
               <ul class="menu">
                  <li><!-- start message -->
                    <a href="{{route('contact.edit',['contact' => $comment->id])}}">
                      <div class="pull-left">
                        <!-- User Image -->
            @if(!empty($mes[2][$comment->user_id][1]))
                 <img src="{{ asset(env('THEME').'/images/users/'.$mes[2][$comment->user_id][1]) }}" class="img-circle" alt="{{ $mes[2][$comment->user_id][0] }}">
            @else
                 <img src="{{ asset(env('THEME').'/images/users/user.png') }}" class="img-circle" alt="{{ Auth::user()->name }}">
            @endif
<!-- dd($users[1]->image); -->
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
      {{($comment->user_id != NULL)?$mes[2][$comment->user_id][0]:''}}
      {!! isset($comment->name)?$comment->name:''  !!}
                        <small><i class="fa fa-clock-o"></i> {{ is_object($comment->created_at) ?$comment->created_at->format('d.m.Y H:s') : ''}} </small>
                      </h4>
                      <!-- The message -->
                      <p>{!!Str::limit($comment->message,150)!!}</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                      @endforeach
               <!-- /.menu -->
              </li>
              <li class="footer"><a href="{{ route('contact.index') }}">Ҳамма хабарларни кўриш</a></li>
            </ul>
          </li>
@endif


          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
            @if(!empty(Auth::user()->image))
          <img src="{{ asset(env('THEME').'/images/users/'.Auth::user()->image) }}" class="user-image" alt="{{ Auth::user()->name }}">
            @else
          <img src="{{ asset(env('THEME').'/images/users/user.png') }}" class="user-image" alt="{{ Auth::user()->name }}">
            @endif


              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">

            @if(!empty(Auth::user()->image))
                <img src="{{ asset(env('THEME').'/images/users/'.Auth::user()->image) }}" class="img-circle" alt="{{ Auth::user()->name }}">
            @else
                <img src="{{ asset(env('THEME').'/images/users/user.png') }}" class="img-circle" alt="{{ Auth::user()->name }}">
            @endif
                <p>
                  {{ Auth::user()->name }}
                  <small>{{date("Y")}}</small>
                </p>
              </li>


              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('regProf') }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">

               @if(Auth::user())
                                   <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-lock"></i> Chiqish
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @endif


                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">

            @if(!empty(Auth::user()->image))
                <img src="{{ asset(env('THEME').'/images/users/'.Auth::user()->image) }}" class="img-circle" alt="{{ Auth::user()->name }}">
            @else
                <img src="{{ asset(env('THEME').'/images/users/user.png') }}" class="img-circle" alt="{{ Auth::user()->name }}">
            @endif
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>



  @yield('navigation')

      <!-- Sidebar Menu -->



      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<!--     <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section> -->

    <!-- Main content -->

    <section class="content container-fluid">

         @yield('content')

    </section>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Dasturchi:
      <a href="https://parmonov98.uz" target="_blank" rel="nofollow">@parmonov98</a>
    </div>
    <!-- Default to the left -->
    <strong>&copy; EOSTS </strong> - {{date("Y")}}. Barcha huquqlar himoyalangan. 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->






    {!!Html::script('admin/assets/bootstrap/js/adminlte.min.js')!!}
    {!!Html::script('js/jquery.gritter.js')!!}
    {!!Html::script('js/gritter-conf.js')!!}
    {!!Html::script(env('THEME').'/js/select2.full.min.js')!!}
    {!!Html::script('admin/assets/jquery.maskedinput.min.js')!!}

     <!-- {!!Html::script('admin/assets/dataTables.bootstrap.min.js')!!} -->
 {!!Html::script('admin/assets/jquery.dataTables.min.js')!!}

    <script type="text/javascript">



        $(function() {
          $('.select2').select2();
            $("#arrFilter_DATE_ACTIVE_FROM_2").mask("9999-99-99");
        });
    </script>



</body>


</html>

