<?php
// Avec la ligne suivant commnce les affichages dans la page
require("inc/mainHeader.inc.php");
require("inc/nav.inc.php");

?>

    <div class="wrapper">
        <div class="page-header" style="background-image:url('assets/img/music-cassette.jpg'); text-align:center;">
            <div class="filter"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-4 col-sm-6 offset-sm-3">

                            <div class="card card-register" style="background:transparent;">
							
						
                                <h2 class="title" style="font-weight:bold;color:red;">Welcome</h2>

                                <form class="register-form" action="" method="post">
								<div class="form-group">
                                    <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Pseudo">
								</div>	
                                <div class="form-group">  
                                    <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Password">
                                </div>    
                                <div class="form-group">   
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email">
								</div>
                                    <button type="submit" name="inscription" id="inscription" class="btn btn-danger btn-block btn-round">Jump in!!!</button>
                                </form>
                            </div>
                        </div>
                    </div>
					<div class="footer register-footer text-center">
						<h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i>by us @ WebForce3</h6>
					</div>
                </div>
        </div>
    </div>


<?php
require("inc/footer.inc.php");