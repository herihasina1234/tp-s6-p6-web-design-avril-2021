<?php 
//var_dump( $this->session->userdata('user'));
//var_dump( $sumStatistique);
//var_dump( $statActu);
?>
<link rel="stylesheet" href="<?php echo site_url ('assets/css/login-style.css')?>">

<div class="container" id="login">
<div class="row">
    <div class="col"></div>        
    <div class="col-10">          
<H1>COVID-19:Les derniers Statistiques a Madagascar</H1>
<p>Les dernieres nouvelles sur l'etat de la pandemie <STRONG>Corona Virus</STRONG> <STRONG>(COVID-19)</STRONG> a <STRONG>Madagascar</STRONG>.
</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Region</th>
      <th scope="col">nombre analyse</th> 
      <th scope="col">nouveau cas</th>      
      <th scope="col">nouveau gueris</th>      
      <th scope="col">nouveau deces</th>      
      <th scope="col">nouveau cas grave</th>       
    </tr>
  </thead>
  <tbody>
    <?php 
        for ($i =0 ; $i < COUNT($statistique) ; $i++){ ?>
            <tr>
                <th scope="row"><?php echo $statistique[$i]['intitule']?></th>
                <td><?php echo $statistique[$i]['analyse']?></td>
                <td><?php echo $statistique[$i]['cas']?></td>
                <td><?php echo $statistique[$i]['gueris']?></td>      
                <td><?php echo $statistique[$i]['deces']?></td>
                <td><?php echo $statistique[$i]['grave']?></td>                
            </tr>    
    <?php }
    ?>    
  </tbody>
</table>
</br>
<H2>TOTAL statistique Madagascar</H2>
<table class="table">
  <thead>
    <tr>      
      <th scope="col">total Analyse</th>      
      <th scope="col">nouveau cas</th>      
      <th scope="col">cas grave</th>      
      <th scope="col">Gueris</th>      
      <th scope="col">total deces</th>      
    </tr>
  </thead>
  <tbody>           
  <?php 
        for ($i =0 ; $i < COUNT($sumStatistique) ; $i++){ ?>
    <tr>
        <th scope="row"><?php echo $sumStatistique[$i]['total_analyse']?></th>
        <td><?php echo $sumStatistique[$i]['total_cas']?></td>
        <td><?php echo $sumStatistique[$i]['total_grave']?></td>      
        <td><?php echo $sumStatistique[$i]['total_gueris']?></td>
        <td><?php echo $sumStatistique[$i]['total_deces']?></td>
    </tr>
    <?php }
    ?>                
  </tbody>
</table>
</br>
<H2>Actualite COVID-19 Madagascar</H2>
<table class="table">
  <thead>
    <tr>      
      <th scope="col">total Analyse</th>      
      <th scope="col">en traitement</th>      
      <th scope="col">cas grave en traitement</th>      
      <th scope="col">Gueris</th>      
      <th scope="col">total deces</th>      
    </tr>
  </thead>
  <tbody> 
  <?php 
        for ($i =0 ; $i < COUNT($statActu) ; $i++){ ?>          
    <tr>
      <th scope="row"><?php echo $statActu[$i]['total_analyse']?></th>
      <td><?php echo $statActu[$i]['traite']?></td>
      <td><?php echo $statActu[$i]['total_grave']?></td>      
      <td><?php echo $statActu[$i]['total_gueris']?></td>
      <td><?php echo $statActu[$i]['total_deces']?></td>
    </tr> 
    <?php }
    ?>               
  </tbody>
</table>

<?php if ($this->session->has_userdata('user')){ ?>
    <a href="<?php echo site_url('add') ?>" > <button type="button" class="btn btn-primary">ajouter nouveau statistique</button> </a>
<?php }?>
</div>
<div class="col"></div>  
</div>
</div>




