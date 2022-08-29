<?php
function CSSLinks(string $type)
{

    switch ($type) {
        case 'Admin':
            return [
                // <!-- Theme style -->
                "dist/css/adminlte.min.css",
                // <!-- bootstrap rtl -->
                'dist/css/bootstrap-rtl.min.css',
                // <!-- template rtl version -->
                'dist/css/custom-style.css',

            ];
            break;
        case 'FormElements':
            return [
                'plugins/select2/select2.min.css',
                'dist/css/persian-datepicker.min.css'
            ];
            break;
    }

    // $type == 'Admin'[
    //     'Admin' => [
    // <!-- Font Awesome -->
    // <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }} ">
    // <!-- Ionicons -->
    // <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    // <!-- iCheck -->
    // {{-- <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css"> --}}
    // <!-- Morris chart -->
    // {{-- <link rel="stylesheet" href="../plugins/morris/morris.css"> --}}
    // <!-- jvectormap -->
    // {{-- <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css"> --}}
    // <!-- Date Picker -->
    // {{-- <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css"> --}}
    // <!-- Daterange picker -->
    // {{-- <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css"> --}}
    // <!-- bootstrap wysihtml5 - text editor -->
    // {{-- <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> --}}
    // <!-- Google Font: Source Sans Pro -->
    // {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}

    //     ],
    // ];
}

function JSLinks(string $type)
{

    switch ($type) {
        case 'Admin':
            return [
                // <!-- Theme style -->
                "plugins/jquery/jquery.min.js",
                // bootstrap.bundle.min.js
                "plugins/bootstrap/js/bootstrap.bundle.min.js",
                // <!-- AdminLTE App -->
                'dist/js/adminlte.js',
                // <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                // 'dist/js/pages/dashboard.js',
                // <!-- AdminLTE for demo purposes -->
                'dist/js/demo.js',


            ];
            break;


        case 'FormElements':
            return [
                'plugins/select2/select2.full.min.js',
                'plugins/input-mask/jquery.inputmask.js',
                'plugins/input-mask/jquery.inputmask.date.extensions.js',
                'dist/js/persian-date.min.js',
                'dist/js/persian-datepicker.min.js'

            ];
            break;

        default:
            # code...
            break;
    }
}
