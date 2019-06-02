<?php
SESSION_START();
?>

		<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendorDadosPessoais/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendorDadosPessoais/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="../../template/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../template/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../template/css/font-awesome.css" rel="stylesheet"> 

<link href="../../template/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    <!-- Vendor CSS-->
    <link href="../../template/vendorDadosPessoais/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../template/vendorDadosPessoais/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../template/css/maine.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="header" id="home">
	<div class="container">
            <ul>
		            <li> <a href="../painel.php" data-toggle="modal" ><i class="fa fa-paper-plane" aria-hidden="true"></i> Voltar para minha página </a></li>

		 
			<li><i class="fa fa-phone" aria-hidden="true"></i> Telefone :61 34832526</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">storemodeloficial@gmail.com</a></li>
                        <li> <a href="../logout.php" data-toggle="modal" ><i class="fa fa-sign-out" aria-hidden="true"></i> Sair </a></li></ul>
		</div>
</div>
    </br>
    <div class="col-md-4 logo_agile">
        <h1 style="text-align: center"><a href=""><span>S</span>tore<span>M</span>odel<i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Dados Pessoais</h2>
                    <form method="POST" action="insereDadosPessoais.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nome</label>
                                    <input class="input--style-4" type="text" name="nome">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Sobrenome</label>
                                    <input class="input--style-4" type="text" name="sobrenome">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Data de Nascimeto</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="dtNascimento">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Sexo</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Masculino
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Feminino
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">E-mail</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Telefone</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Qual estado do Brasil você mora?</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="estado">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>DF</option>
                                    <option>MG</option>
                                    <option>SP</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Endereço</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                               <input  type="text" name="phone">
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Atualizar Dados</button>
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../../template/vendorDadosPessoais/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../../template/vendorDadosPessoais/select2/select2.min.js"></script>
    <script src="../../template/vendorDadosPessoais/datepicker/moment.min.js"></script>
    <script src="../../template/vendorDadosPessoais/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../../template/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->