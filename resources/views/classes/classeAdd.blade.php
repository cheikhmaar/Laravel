@section('head')
    <!DOCTYPE html>
<html>
<!-- Head -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Title-->
    <title>Ajout Classe </title>
    <link rel="icon" href="styles/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https ://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="styles/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="styles/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="styles/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="styles/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="styles/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="styles/css/themes/all-themes.css" rel="stylesheet" />

</head>
@endsection

@extends('_layout.apps')

@section('content')
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-md-9 col-md-offset-1">
            <div class="card">
                <div class="header">
                    <h2>AJOUT CLASSE</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="{{ route('classeStore') }}">
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="libelleClasse" required>
                                <label class="form-label">Name</label>
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Validation -->
    {{--    ligne 873--}}
@endsection

@section('script')
    {{--/pages/ basic validations-- ligne 805--}}

    <!-- Jquery Core Js -->
    <script src="styles/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="styles/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="styles/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="styles/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="styles/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="styles/plugins/jquery-countto/jquery.countTo.js"></script>
    <script src="styles/plugins/jquery-countto/jquery.countTo.js"></script>



    <!-- Morris Plugin Js -->
    <script src="styles/plugins/raphael/raphael.min.js"></script>
    <script src="styles/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="styles/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="styles/plugins/flot-charts/jquery.flot.js"></script>
    <script src="styles/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="styles/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="styles/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="styles/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="styles/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="styles/js/admin.js"></script>
    <script src="styles/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="styles/js/demo.js"></script>



    <!-- Jquery Core Js






@endsection
