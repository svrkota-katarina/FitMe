<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

        <title>FitMe</title>
        <!-- Loading third party fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|" rel="stylesheet" type="text/css">
        <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="fonts/iconmoon.css" rel="stylesheet" type="text/css">
        <!-- Loading main css file -->
        <link rel="stylesheet" href="style.css">

        <!--[if lt IE 9]>
        <script src="js/ie-support/php5.js"></script>
        <script src="js/ie-support/respond.js"></script>
        <![endif]-->

        <script>
            function voli($srce, $id) {
                $slika = $srce.getAttribute("src");
                document.cookie = "voli=" + $id;
                if ($slika == "slike/csrce") {
                    $srce.setAttribute("src", "slike/srce");
                } else
                    $srce.setAttribute("src", "slike/csrce");
            }
        </script>

    </head>


    <body>

        <div id="site-content">
            <?php
            include "header.php";
            include "provera.php";
            ?>

            <main class="main-content">

                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="feature color-green" >
                                    <div class="pad" > <img src='slike/1.png' class='jelovnik' style="border-color: #48172d;"> </div>
                                    <a href="recept.php?id=1"><h3 class="feature-title">Ovsena kasa</h3></a>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="feature color-green">
                                    <div class="pad"><img src='slike/2.png' class='jelovnik'></div>
                                    <a href="recept.php?id=2"><h3 class="feature-title">Riba sa povrcem</h3></a>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="feature color-green">
                                    <div class="pad"><img src='slike/3.png' class='jelovnik'></i></div>
                                    <a href="recept.php?id=3"><h3 class="feature-title">Jabuka sa kikiriki puterom</h3></a>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="feature color-green">
                                    <div class="pad"><img src='slike/4.png' class='jelovnik'></i></div>
                                    <a href="recept.php?id=4"><h3 class="feature-title">Paradajz corba</h3></a>
                                    <p> </p>
                                </div>
                            </div>
                        </div>

                        <?php
                        for ($i = 1; $i < 5; $i++) {
                            echo " <div class='col-md-3'>
								<div class='feature'>
                                                                    <a href='profil.php'><img src='";


                            $upit = "SELECT * FROM voli WHERE idR={$i}";
                            $rez = mysqli_query($kon, $upit) or die("Upit neuspesno izvrsen");
                            $rez = mysqli_fetch_array($rez);
                            if ($rez == null)
                                echo 'slike/srce.png';
                            else
                                echo 'slike/csrce.png';
                            echo"' class='ikonice' onclick='voli(this,{$i})'> </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                                        <img src='slike/switch.png' class='ikonice'>
								</div>
							</div>";
                        }
                        ?>


                        <p>&nbsp</p>

                        <hr>

                    </div>
                    <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="tabela"> 

                                <tr>
                                    <td>Proteini </td>
                                    <td> <progress id="file" value="95" max="100"> 32% </progress></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Ugljeni hidrati </td>
                                    <td> <progress id="file" value="80" max="100"> 32% </progress></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Vlakna </td>
                                    <td> <progress id="file" value="85" max="100"> 32% </progress></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Masti </td>
                                    <td> <progress id="file" value="70" max="100"> 32% </progress> </td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Zasicene masti </td>
                                    <td> <progress id="file" value="32" max="100"> 32% </progress></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Trans masti </td>
                                    <td> <progress id="file" value="20" max="100"> 32% </progress></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Sodijum </td>
                                    <td><progress id="file" value="40" max="100"> 32% </progress> </td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Kalijum </td>
                                    <td> <progress id="file" value="20" max="100"> 32% </progress></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Vitamin A </td>
                                    <td> <progress id="file" value="93" max="100"> 32% </progress></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Vitamin C </td>
                                    <td> <progress id="file" value="77" max="100"> 32% </progress></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Kalcijum </td>
                                    <td> <progress id="file" value="92" max="100"> 32% </progress></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Vitamin B </td>
                                    <td> <progress id="file" value="80" max="100"> 32% </progress></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Vitamin D</td>
                                    <td> <progress id="file" value="72" max="100"> 32% </progress></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Omega3 kiseline</td>
                                    <td> <progress id="file" value="95" max="100"> 32% </progress></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Magnezijum </td>
                                    <td> <progress id="file" value="62" max="100"> 32% </progress></td>
                                    <td> </td>
                                </tr>
                            </table>
                        </div>
                   
            <!--DODATAK-->
            <div class="col-md-6">
                <section class="comments">
                    <h3>Zajednice</h3>
                    <ul class="comment-list">
                        <li class="comment">
                            <footer>
                                <img src="slike/zaj1.jpg" class="avatar">
                                <img src="slike/zaj.png">
                                <h4 class="fn">Hrana i mozak</h4>
                               
                            </footer>
                            <div class="comment-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate esse repellendus iusto vitae quasi nisi, illo totam saepe tempora quo, possimus quibusdam, debitis ullam itaque nesciunt, adipisci ab expedita assumenda?</p>
                            </div>
                        </li>
                        <li class="comment">
                            <footer>
                                <img src="slike/zaj2.jpg" class="avatar">
                                <img src="slike/zaj.png">
                                <h4 class="fn">Fitnes saveti</h4>
                  
                            </footer>
                            <div class="comment-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae voluptatibus aliquid officia quae quo. Architecto voluptates, inventore quisquam quia eaque pariatur quod, similique voluptatem tempora rem eius ipsa nesciunt? Eveniet?</p>
                            </div>
                        </li>

                    </ul>

                </section>
            </div>
        </div> 
       </div>
                </div>
                   </main>
<?php include 'footer.php'; ?>

        </div>



        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

    </body>

</php>