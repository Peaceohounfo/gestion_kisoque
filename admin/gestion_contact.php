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
        .btn-add{
            width: 20%;
            position: absolute;
            top: 0;
            right: 23px;
        }

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
<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left" style="margin-top: 78px;">
        <div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
            <ul class="nav flex-column pl-1">
                <li class="nav-item"><a class="nav-link" href="gestion_stock.php">Gestion stock</a>
                    
                </li>
                <li class="nav-item"><a class="nav-link" href="gestion_commande.php">Gestion commande</a></li>
                <li class="nav-item"><a class="nav-link" href="gestion_vente.php">Gestion vente</a></li>
                <li class="nav-item active"><a class="nav-link active" href="gestion_contact.php">Gestion contact</a></li>
                <li class="nav-item"><a class="nav-link" href="gestion_absence.php">Gestion absence</a></li>

            </ul>
        </div>
        <!--/col-->

        <div class="col-md-9 col-lg-10 main">
        <h1 class="display-4 d-none d-sm-block" style="text-align: center;">
                Gestion stock
            </h1>
            <p>
                <button type="button" class="btn btn-primary btn-lg btn-add" style="width: 20%;"  data-title="Add" data-toggle="modal" data-target="#add"> Ajouter </button>
            <p>
            
           
            <?php
            $bdd = connectgestion_kiosque();
            $sql = "SELECT * FROM fournisseur";
            $req = $bdd->prepare($sql);
            $req->execute();
            $result = $req->fetchAll();
           
            ?>
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Nom fournisseur</th>
                    <th>Numéro voie</th>
                    <th>Nom voie</th>
                    <th>Code Postal</th>
                    <th>Ville</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Pays</th>
                    <th>TVA</th>
                    <th>Options</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($result as $row) { ?>
                    <tr id="tr_<?php echo $row['id_fournisseur']; ?>">
                        <td><?php echo $row['id_fournisseur']; ?></td>
                        <td id="nom_fournisseur_<?php echo $row['id_fournisseur']; ?>"><?php echo $row['nom_fournisseur']; ?></td>
                        <td id="num_voie_<?php echo $row['id_fournisseur']; ?>"><?php echo $row['num_voie']; ?></td>
                        <td id="nom_voie_<?php echo $row['id_fournisseur']; ?>"><?php echo $row['nom_voie']; ?></td>
                        <td id="code_postale_<?php echo $row['id_fournisseur']; ?>"><?php echo $row['code_postale']; ?></td>
                        <td id="ville_<?php echo $row['id_fournisseur']; ?>"><?php echo $row['ville']; ?></td>
                        <td id="email_<?php echo $row['id_fournisseur']; ?>"><?php echo $row['email']; ?></td>
                        <td id="telephone_<?php echo $row['id_fournisseur']; ?>"><?php echo $row['telephone']; ?></td>
                        <td id="pays_fournisseur_<?php echo $row['id_fournisseur']; ?>"><?php echo $row['pays_fournisseur']; ?></td>
                        <td id="TVA_fournisseur_<?php echo $row['id_fournisseur']; ?>"><?php echo $row['TVA_fournisseur']; ?></td>
                        <td>
                            <p data-placement="top" data-toggle="tooltip" title="Edit">
                                <button class="btn btn-primary btn-xs edit-btn"
                                        data-id_fournisseur="<?php echo $row['id_fournisseur']; ?>" data-nom_fournisseur="<?php echo $row['nom_fournisseur']; ?>"
                                        data-num_voie="<?php echo $row['num_voie']; ?>" data-nom_voie="<?php echo $row['nom_voie']; ?>"
                                        data-code_postale="<?php echo $row['code_postale']; ?>" data-ville="<?php echo $row['ville']; ?>"
                                        data-email="<?php echo $row['email']; ?>" data-telephone="<?php echo $row['telephone']; ?>"
                                        data-pays_fournisseur="<?php echo $row['pays_fournisseur']; ?>" data-TVA_fournisseur="<?php echo $row['TVA_fournisseur']; ?>"
                                        data-title="Edit" data-toggle="modal" data-target="#edit" >
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </button>
                            </p>
                            <p data-placement="top" data-toggle="tooltip" title="Delete">
                                <button class="btn btn-danger btn-xs delete-btn" data-title="Delete" data-id="<?php echo $row['id_fournisseur']; ?>" data-toggle="modal" data-target="#delete" >
                                    <span class="glyphicon glyphicon-trash"></span>
                                </button>
                            </p>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
    <!--/main col-->
</div>

</div>
<!--/.container-->
<footer class="container-fluid">
    <p class="text-right small">©2016-2017 Company</p>
</footer>


<!--  modal  -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
            </div>
            <div class="modal-body">
                <input class="form-control " type="hidden" placeholder="Id" id="id_fournisseur">
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="Nom fournisseur"  id="nom_fournisseur">
                </div>
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="Numéro voie"  id="num_voie">
                </div>
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="Nom voie"  id="nom_voie">
                </div>
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="Code postal"  id="code_postale">
                </div>
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="Ville"  id="ville">
                </div>
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="Email"  id="email">
                </div>
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="Téléphone"  id="telephone">
                </div>
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="Pays"  id="pays_fournisseur">
                </div>
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="Tva fournisseur" id="TVA_fournisseur">
                </div>

            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-warning btn-lg" id="updateRecord" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="add">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title custom_align" id="Heading">Add Contact</h4>
                </div>
                <div class="modal-body">
                    <input class="form-control " type="hidden" placeholder="Id" name="id_fournisseur">
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Nom fournisseur"  name="nom_fournisseur">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Numéro voie"  name="num_voie">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Nom voie"  name="nom_voie">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Code postal"  name="code_postale">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Ville"  name="ville">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Email"  name="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Téléphone"  name="telephone">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Pays"  name="pays_fournisseur">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Tva fournisseur" name="TVA_fournisseur">
                    </div>

                </div>
                <div class="modal-footer ">
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Add</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
            </div>
            <div class="modal-body">

                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-success" id="deleteRecord" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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

<script>
    // on document ready, onclieck .delete-btn get data-id on this and set data-id on #deleteRecord
    $(document).ready(function() {
        $('.delete-btn').on('click', function() {
            var id = $(this).data('id');
            console.log(id);
            $('#deleteRecord').attr('data-id', id);
        });

        // on click #deleteRecord get data-id on this and send ajax request
        $('#deleteRecord').on('click', function() {
            var id = $(this).data('id');
            $.ajax({
                url: './../controller/contactController.php',
                type: 'POST',
                data: {id: id, operation:"delete"},
                success: function(data) {
                    alert("Record deleted successfully");
                    console.log(data);
                    $('#tr_' + id).remove();
                    $('#delete').modal('toggle');
                }
            });
        });

        $('.edit-btn').on('click', function() {
            var id_fournisseur = $(this).data('id_fournisseur');
            var nom_fournisseur = $(this).data('nom_fournisseur');
            var num_voie = $(this).data('num_voie');
            var nom_voie = $(this).data('nom_voie');
            var code_postal = $(this).data('code_postal');
            var ville = $(this).data('ville');
            var pays_fournisseur = $(this).data('pays_fournisseur');
            var telephone = $(this).data('telephone');
            var pays_fournisseur = $(this).data('pays_fournisseur');
            var TVA_fournisseur = $(this).data('tVA_fournisseur');

            $('#id_fournisseur').val(id_fournisseur);
            $('#nom_fournisseur').val(nom_fournisseur);
            $('#num_voie').val(num_voie);
            $('#nom_voie').val(nom_voie);
            $('#code_postal').val(code_postal);
            $('#ville').val(ville);
            $('#pays_fournisseur').val(pays_fournisseur);
            $('#telephone').val(telephone);
            $('#pays_fournisseur').val(pays_fournisseur);
            $('#TVA_fournisseur').val(TVA_fournisseur);
        });

        $('#updateRecord').on('click', function() {
            var id_fournisseur = $('#id_fournisseur').val();
            var nom_fournisseur = $('#nom_fournisseur').val();
            var num_voie = $('#num_voie').val();
            var nom_voie = $('#nom_voie').val();
            var code_postal = $('#code_postal').val();
            var ville = $('#ville').val();
            var pays_fournisseur = $('#pays_fournisseur').val();
            var telephone = $('#telephone').val();
            var TVA_fournisseur = $('#TVA_fournisseur').val();

            $.ajax({
                url: './../controller/contactController.php',
                type: 'POST',
                data: {id_fournisseur: id_fournisseur, nom_fournisseur: nom_fournisseur, num_voie: num_voie, nom_voie: nom_voie, code_postal: code_postal, ville: ville, pays_fournisseur: pays_fournisseur, telephone: telephone, TVA_fournisseur: TVA_fournisseur, operation:"update"},
                success: function(data) {
                    console.log(data);
                    alert("Record updated successfully");
                    $("#nom_fournisseur_"+id_fournisseur).html(nom_fournisseur);
                    $("#num_voie_"+id_fournisseur).html(num_voie);
                    $("#nom_voie_"+id_fournisseur).html(nom_voie);
                    $("#code_postal_"+id_fournisseur).html(code_postal);
                    $("#ville_"+id_fournisseur).html(ville);
                    $("#pays_fournisseur_"+id_fournisseur).html(pays_fournisseur);
                    $("#telephone_"+id_fournisseur).html(telephone);
                    $("#TVA_fournisseur_"+id_fournisseur).html(TVA_fournisseur);
                    $('#edit').modal('toggle');
                }
            });
        });

        $('#add').on("submit", function(e) {
            e.preventDefault();
            var nom_fournisseur = $("input[name=nom_fournisseur]").val();
            var num_voie = $("input[name=num_voie]").val();
            var nom_voie = $("input[name=nom_voie]").val();
            var code_postal = $("input[name=code_postal]").val();
            var ville = $("input[name=ville]").val();
            var pays_fournisseur = $("input[name=pays_fournisseur]").val();
            var telephone = $("input[name=telephone]").val();
            var TVA_fournisseur = $("input[name=TVA_fournisseur]").val();

            $.ajax({
                url: './../controller/contactController.php',
                type: 'POST',
                data: {nom_fournisseur: nom_fournisseur, num_voie: num_voie, nom_voie: nom_voie, code_postal: code_postal, ville: ville, pays_fournisseur: pays_fournisseur, telephone: telephone, TVA_fournisseur: TVA_fournisseur, operation:"add"},
                success: function(data) {
                    console.log(data);
                    alert('Record added successfully')
                    $('#add').modal('toggle');
                    location.reload();
                }
            });
        });
    });
</script>

</body>

</html>