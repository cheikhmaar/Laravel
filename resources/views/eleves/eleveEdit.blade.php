@section('head')
    <!DOCTYPE html>

<!-- Head -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Title-->
    <title> Classes </title>
    <link rel="icon" href="styles/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/styles/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/styles/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/styles/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="/styles/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="/styles/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="/styles/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="/styles/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="/styles/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />


    <!-- Custom Css -->
    <link href="/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="/styles/css/themes/all-themes.css" rel="stylesheet" />
</head>
@endsection

@extends('_layout.apps')

@section('content')
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-md-9 col-md-offset-1">
            <div class="card">
                <div class="header">
                    <h2>BASIC VALIDATION</h2>
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
                    <form id="form_validation" method="POST" action="/eleveList/{{$eleve->id}}">
                    @method('PATCH')
                    @csrf
                    <!-- Nom -->
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" value="{{$eleve->nom}}" name="nom" required>
                                <label class="form-label">Name</label>
                            </div>
                        </div>
                        <!-- Prenom -->
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" value="{{$eleve->prenom}}" name="prenom" required>
                                <label class="form-label">Surname</label>
                            </div>
                        </div>

                        <!-- Classes -->
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="password_2">Classe</label>
                            </div>
                            <div class="col-lg-5 col-md-8 col-sm-8 col-xs-8">
                                <select name="classe_id" class="form-control">
                                    <option  value="{{$eleve->classe_id}}" >{{$eleve->classe->libelleClasse}}</option>
                                    @foreach($classes as $classe)
                                        @if($eleve->classe->id != $classe->id)
                                            <option value="{{ $classe->id }}">
                                                {{ $classe->libelleClasse }}
                                            </option>
                                        @endif

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- #End Classes -->


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
    <!-- Jquery Core Js -->
    <script src="/styles/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/styles/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="/styles/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="/styles/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="/styles/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="/styles/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="/styles/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="/styles/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="/styles/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="styles/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="/styles/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="/styles/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="/styles/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="/styles/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="/styles/plugins/flot-charts/jquery.flot.js"></script>
    <script src="/styles/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="/styles/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="/styles/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="/styles/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Custom Js -->
    <script src="/styles/js/admin.js"></script>
    <script src="/styles/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="/styles/js/demo.js"></script>


@endsection
