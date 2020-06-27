<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- Title Page-->
    <title>FitMe</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/stil.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Dobro dosli!  Popunite polja za registraciju</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Ime</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Prezime</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Datum rodjenja</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Pol</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Muski
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Zenski
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            
							
							<div class="input-group">
                            <label class="label">Zemlja</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Izaberite zemlju</option>
                                    <option>Srbija</option>
                                    <option>Nemacka</option>
                                    <option>Francuska</option>
									<option>Luksemburg</option>
									<option>Madjarska</option>
									<option>Velika Britanija</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div> 
						<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Visina (u cm)</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tezina (u kg)</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                            
                                <div class="input-group">
                                    <label class="label">Da li imate neke alergije?          Ako da, Upisite koje</label>
                                    <input class="input--style-4" type="text" name="phone">
                              
                            </div>
							
							<div class="input-group">
                                    <label class="label">Da li bolujete od neke bolesti?          Ako da, Upisite koje</label>
                                    <input class="input--style-4" type="text" name="phone">
                              
                            </div>
                        
                        <div class="input-group">
                            <label class="label">Omiljena vrsta mesa?</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Izaberite opciju</option>
                                    <option>Piletina</option>
                                    <option>Svinjetina</option>
                                    <option>Riba</option>
									<option>Govedina</option>
									<option>Ne jedem meso</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						  <div class="input-group">
                            <label class="label">Omiljeno voce?</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Izaberite opciju</option>
                                    <option>Banane</option>
                                    <option>Jabuke</option>
                                    <option>Jagode</option>
									<option>Kivi</option>
									<option>Kruske</option>
									<option>Breskve</option>
									<option>Tresnje</option>
									<option>Nesto drugo</option>
									<option>Ne volim voce</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						  <div class="input-group">
                            <label class="label">Omiljeno povrce?</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Izaberite opciju</option>
                                    <option>Krastavac</option>
                                    <option>Zelena salata</option>
                                    <option>Kupus</option>
									<option>Sargarepa</option>
									<option>Grasak</option>
									<option>Pasulj</option>
									<option>Nesto drugo</option>
									<option>Ne jedem povrce</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						<div class="input-group">
                            <label class="label">Koliko cesto jedete "brzu hranu"?</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Izaberite opciju</option>
                                    <option>Nekoliko puta godisnje</option>
                                    <option>Nekoliko puta mesecno</option>
                                    <option>Nekoliko puta nedeljno</option>
									<option>Svaki dan</option>
									<option>Ne jedem "brzu hranu"</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						<div class="input-group">
                            <label class="label">Koliko cesto vezbate?</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Izaberite opciju</option>
                                    <option>Nekoliko puta godisnje</option>
                                    <option>Nekoliko puta mesecno</option>
                                    <option>Nekoliko puta nedeljno</option>
									<option>Svaki dan</option>
									<option>Ne vezbam<option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						  <div class="input-group">
                                    <label class="label">Koliko u proseku imate vremena za pripremu jednog obroka? (Upisite vreme kao ceo broj u minutima)</label>
                                    <input class="input--style-4" type="text" name="phone">
                              
                            </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->