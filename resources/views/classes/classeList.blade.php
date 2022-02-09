
@section('head')
    <!DOCTYPE html>
<html>
<!-- Head -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Title-->
    <title> Liste Classe </title>
    <link rel="icon" href="styles/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="styles/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="styles/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="styles/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="styles/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="styles/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="styles/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="styles/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="styles/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="styles/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="styles/css/themes/all-themes.css" rel="stylesheet" />
</head>
@endsection

@extends('_layout.apps')


@section('content')

    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ELEVES
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                            <tr>
                                <th>Matricule</th>
                                <th>Libelle</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>

                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Libelle</th>

                                <th style="width: 10%;">Modifier</th>
                                <th style="width: 10%;">Supprimer</th>
                            </tfoot>
                            <tbody>
                            @foreach($classes as $classe)

                                <tr>
                                    <td scope="row"> {{ $classe->id }} </a></td>
                                    <td>         {{ $classe->libelleClasse  }} </a> </td>

                                    <td align="center"><a href="/classeList/{{ $classe->id}}/classeEdit" class="btn btn-primary" style="width: 100px;" my-3>Update</a></td>
                                    <td align="center">
                                        <form action="/classeList/{{ $classe->id }}"
                                              method="POST"
                                              style="display:inline"
                                              onsubmit="return confirm('Etes vous sure de vouloir supprimer {{$classe->libelleClasse}}  de la liste des classes')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" style="width: 100px;"> Delete </button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Exportable Table -->

@endsection

@section('script')
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

    <!-- Jquery DataTable Plugin Js -->
    <script src="styles/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="styles/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="styles/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="styles/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="styles/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="styles/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="styles/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="styles/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="styles/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>


    <!-- Custom Js -->
    <script src="styles/js/admin.js"></script>
    <script src="styles/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="styles/js/demo.js"></script>


@endsection








