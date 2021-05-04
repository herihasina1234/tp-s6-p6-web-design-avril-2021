
<link rel="stylesheet" href="<?php echo site_url ('assets/css/login-style.css')?>">

<div class="container" id="login">
<div class="row">
    <div class="col"></div>        
    <div class="col-10">          
    <form action="<?php echo site_url('Statistique_Controller/traitement') ?>" method="post">  
    <div>
    <label>Formulaire insertion statistique region</label>
        </br> 
        <input type="text" name="region_id" placeholder="region_id">
        </br>    
        <input type="text" name="analyse" placeholder="analyse">
        </br>    
        <input type="text" name="cas" placeholder="cas">
        </br>    
        <input type="text" name="gueris" placeholder="gueris"> 
        </br>    
        <input type="text" name="grave" placeholder="grave">
        </br>    
        <input type="text" name="deces" placeholder="deces">
        </br>            
        <input type="text" name="dateStatistique" placeholder="date du format yyyy-mm-dd">
        </br>            
    </div>
    <input type="submit" name="valeur" value="inserer">
</form>
<a href="<?php echo site_url('Statistique') ?>" > <button type="button" class="btn btn-primary">voir liste</button> </a>
</div>
<div class="col"></div>  
</div>
</div>

