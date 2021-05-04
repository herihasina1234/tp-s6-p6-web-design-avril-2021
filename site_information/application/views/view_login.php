<link rel="stylesheet" href="<?php echo site_url ('assets/css/login-style.css')?>">

<div class="container" id="login">
<div class="row">
    <div class="col"></div>        
    <div class="col-6">          
        <form action="<?php echo site_url('Login_Controller/traitement') ?>" method="post">  
            <div><label>Nom </label>
                <input type="text" name="nom"></div>
                </br>
            <label>Mot de passe</label>
                <input type="text" name="password">
                </br>
            <input type="submit" name="valeur" value="Login">
        </form>
        <a href="<?php echo site_url('Statistique') ?>" > <button type="button" class="btn btn-primary">voir Statistique</button> </a>
    </div>
<div class="col"></div>  
</div>
</div>
