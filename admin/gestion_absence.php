<?php
include ("../connexion.php");
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Kiosque</title>
    <base target="_self">
    <meta name="description" content="A Bootstrap 4 admin dashboard theme that will get you started. The sidebar toggles off-canvas on smaller screens. This example also include large stat blocks, modal and cards. The top navbar is controlled by a separate hamburger toggle button."
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" value="notranslate">
    <link rel="shortcut icon" href="/images/cp_ico.png">


    <!--stylesheets / link tags loaded here-->


    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />


    <style type="text/css">
        .nav-link.active{
            color: #fff !important;
        }
        .nav>li .active{
            background-color: #0275d8 !important;
        }
        .modal.fade .modal-dialog{
            margin-top: 12%;
        }
        #datatable_wrapper{
            display: unset;
        }
        .navbar-inverse .navbar-brand {
            color: #fff !important;
            font-size: 24px;
        }
        div.dataTables_length label {
            float: left;
        }
        div.dataTables_filter label {
            float: right;
        }
        body,
        html {
            height: 100%;
        }
        /* workaround modal-open padding issue */

        body.modal-open {
            padding-right: 0 !important;
        }
        .container-fluid{
      margin-top: 100px;
    }

        #sidebar {
            padding-left: 0;
        }
        /*
     * Off Canvas at medium breakpoint
     * --------------------------------------------------
     */

        @media screen and (max-width: 48em) {
            .row-offcanvas {
                position: relative;
                -webkit-transition: all 0.25s ease-out;
                -moz-transition: all 0.25s ease-out;
                transition: all 0.25s ease-out;
            }
            .row-offcanvas-left .sidebar-offcanvas {
                left: -33%;
            }
            .row-offcanvas-left.active {
                left: 33%;
                margin-left: -6px;
            }
            .sidebar-offcanvas {
                position: absolute;
                top: 0;
                width: 33%;
                height: 100%;
            }
        }
        /*
     * Off Canvas wider at sm breakpoint
     * --------------------------------------------------
     */

        @media screen and (max-width: 34em) {
            .row-offcanvas-left .sidebar-offcanvas {
                left: -45%;
            }
            .row-offcanvas-left.active {
                left: 45%;
                margin-left: -6px;
            }
            .sidebar-offcanvas {
                width: 45%;
            }
        }

        .card {
            overflow: hidden;
        }

        .card-block .rotate {
            z-index: 8;
            float: right;
            height: 100%;
        }

        .card-block .rotate i {
            color: rgba(20, 20, 20, 0.15);
            position: absolute;
            left: 0;
            left: auto;
            right: -10px;
            bottom: 0;
            display: block;
            -webkit-transform: rotate(-44deg);
            -moz-transform: rotate(-44deg);
            -o-transform: rotate(-44deg);
            -ms-transform: rotate(-44deg);
            transform: rotate(-44deg);
        }

        .pagination>li {
            display: inline;
            padding:0px !important;
            margin:0px !important;
            border:none !important;
        }
        .modal-backdrop {
            z-index: -1 !important;
        }
        /*
        Fix to show in full screen demo
        */
        iframe
        {
            height:700px !important;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px !important;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .btn-primary {
            color: #fff !important;
            background: #428bca !important;
            border-color: #357ebd !important;
            box-shadow:none !important;
        }
        .btn-danger {
            color: #fff !important;
            background: #d9534f !important;
            border-color: #d9534f !important;
            box-shadow:none !important;
        }
    </style>

</head>

<body>
<nav class="navbar navbar-fixed-top navbar-toggleable-sm navbar-inverse bg-primary mb-3">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="flex-row d-flex">
        <a class="navbar-brand mb-1" href="#">Kiosque</a>
        <button type="button" class="hidden-md-up navbar-toggler" data-toggle="offcanvas" title="Toggle responsive left sidebar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

</nav>
<!-- Section principale -->
<div class="container-fluid">
  <div class="row" style="height:750px;">
  <div class="col-md-4 maps" >
         <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" frameborder="0" style="border:0" allowfullscreen></iframe>-->
      </div>
      <div class="col-md-4">
        <h3 class="text-uppercase mt-3 font-weight-bold">Créer mon mot d'absence</h3>
        
        <form action="">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" class="form-control mt-2" placeholder="Email" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="motif" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="date" class="form-control mt-2" placeholder="Date depart" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="date" class="form-control mt-2" placeholder="Retour" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="votre message ici ..." rows="3" required></textarea>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-light" type="submit">Envoyer</button>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>

</body>



<script>
    // sandbox disable popups
    if (window.self !== window.top && window.name != "view1") {
        window.alert = function() {
            /*disable alert*/
        };
        window.confirm = function() {
            /*disable confirm*/
        };
        window.prompt = function() {
            /*disable prompt*/
        };
        window.open = function() {
            /*disable open*/
        };
    }

    // prevent href=# click jump
    document.addEventListener(
        "DOMContentLoaded",
        function() {
            var links = document.getElementsByTagName("A");
            for (var i = 0; i < links.length; i++) {
                if (links[i].href.indexOf("#") != -1) {
                    links[i].addEventListener("click", function(e) {
                        console.debug("prevent href=# click");
                        if (this.hash) {
                            if (this.hash == "#") {
                                e.preventDefault();
                                return false;
                            } else {
                                /*
                                    var el = document.getElementById(this.hash.replace(/#/, ""));
                                    if (el) {
                                      el.scrollIntoView(true);
                                    }
                                    */
                            }
                        }
                        return false;
                    });
                }
            }
        },
        false
    );
</script>

<!--scripts loaded here-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">


<script>
    $(document).ready(function() {
        $('#datatable').dataTable();

        $("[data-toggle=tooltip]").tooltip();

    } );
    $(document).ready(function() {
        $("[data-toggle=offcanvas]").click(function() {
            $(".row-offcanvas").toggleClass("active");
        });
    });
</script>

</body>

</html>