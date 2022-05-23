<?php

session_start();



?>

<html>
<head>
    <title>ONEE - Management</title>
    <link rel="stylesheet" href="stylesheet.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    </head>
    <body>
        <form method="POST" target="_self">
    <div id="container">
        <div id="left-side">
        <div id="logo-div">
            <img src="media/logo.png"/>
            <h2>System Management</h2>
            </div>
            <h2 class="title">Menu Principal</h2>
            
             <div class="item">
                 <button type="submit" name="btn_acceuil" id="btn_acceuil" hidden></button>
                 <?php
                 
                 if(isset($_POST['btn_acceuil'])){
                     $_SESSION['page']='dashboard';
                     $_SESSION['index_item']='-1';
                     echo "<script>window.location.href='management.php'</script>";
                 }
                 
                 ?>
             <div class="sub-item-main" >
                    <img src="media/home.png"/>
                <a>Acceuil</a>
                 <div class="clickable" onclick="Show('btn_acceuil')"></div>
                    </div>
                 <div class="inner-items"></div>
            </div>
            
            
            <div class="item">
             <div class="sub-item-main">
                    <img src="media/client.png"/>
                <a>Les clients</a>
                    </div>
                <div class="inner-items">
                <div class="sub-item">
                     <button type="submit" name="btn_ajouter_client" id="btn_ajouter_client" hidden></button>
                 <?php
                 
                 if(isset($_POST['btn_ajouter_client'])){
                     $_SESSION['page']='add-client';
                     $_SESSION['index_item']='1';
                     echo "<script>window.location.href='management.php'</script>";
                 }
                 
                 ?>
                    <img src="media/add.png"/>
                <a>Ajouter un client</a>
                     <div class="clickable" onclick="Show('btn_ajouter_client')"></div>
                    </div>
                     <div class="sub-item">
                          <button type="submit" name="btn_list_client" id="btn_list_client" hidden></button>
                 <?php
                 
                 if(isset($_POST['btn_list_client'])){
                     $_SESSION['page']='list-of-clients';
                     $_SESSION['index_item']='1';
                     echo "<script>window.location.href='management.php'</script>";
                 }
                 
                 ?>
                    <img src="media/list.png"/>
                <a>Liste des clients</a>
                          <div class="clickable" onclick="Show('btn_list_client')"></div>
                    </div>
                </div>
            </div>
            
                <div class="item">
             <div class="sub-item-main">
                    <img src="media/encaissement.png"/>
                <a>L'encaissement</a>
                    </div>
                <div class="inner-items">
                <div class="sub-item">
                    <button type="submit" name="btn_ajouter-encaissement" id="btn_ajouter-encaissement" hidden></button>
                 <?php
                 
                 if(isset($_POST['btn_ajouter-encaissement'])){
                     $_SESSION['page']='add-receipt';
                     $_SESSION['index_item']='2';
                     echo "<script>window.location.href='management.php'</script>";
                 }
                 
                 ?>
                    <img src="media/add.png"/>
                <a>Ajouter un encaissement</a>
                     <div class="clickable" onclick="Show('btn_ajouter-encaissement')"></div>
                    </div>
                     <div class="sub-item">
                         <button type="submit" name="btn_list-receipt" id="btn_list-receipt" hidden></button>
                 <?php
                 
                 if(isset($_POST['btn_list-receipt'])){
                     $_SESSION['page']='list-of-receipts';
                     $_SESSION['index_item']='2';
                     echo "<script>window.location.href='management.php'</script>";
                 }
                 
                 ?>
                    <img src="media/list.png"/>
                <a>Liste des encaissements</a>
                          <div class="clickable" onclick="Show('btn_list-receipt')"></div>
                    </div>
                </div>
            </div>
            
                     <div class="item">
             <div class="sub-item-main">
                    <img src="media/prestations.png"/>
                <a>Les prestations</a>
                    </div>
                <div class="inner-items">
                <div class="sub-item">
                    <button type="submit" name="btn_ajouter-prestation" id="btn_ajouter-prestation" hidden></button>
                 <?php
                 
                 if(isset($_POST['btn_ajouter-prestation'])){
                     $_SESSION['page']='add-allowance';
                     $_SESSION['index_item']='3';
                     echo "<script>window.location.href='management.php'</script>";
                 }
                    ?>
                    <img src="media/add.png"/>
                <a>Ajouter une prestation</a>
                     <div class="clickable" onclick="Show('btn_ajouter-prestation')"></div>
                    </div>
                     <div class="sub-item">
                         <button type="submit" name="btn_list-prestations" id="btn_list-prestations" hidden></button>
                 <?php
                 
                 if(isset($_POST['btn_list-prestations'])){
                     $_SESSION['page']='list-of-allowances';
                     $_SESSION['index_item']='3';
                     echo "<script>window.location.href='management.php'</script>";
                 }
                         ?>
                    <img src="media/list.png"/>
                <a>Liste des prestations</a>
                          <div class="clickable" onclick="Show('btn_list-prestations')"></div>
                    </div>
                </div>
            </div>
            
             
             <div class="item">
                 <button type="submit" name="btn_decharge" id="btn_decharge" hidden></button>
                 <?php
                 
                 if(isset($_POST['btn_decharge'])){
                     $_SESSION['page']='decharge';
                     $_SESSION['index_item']='4';
                     echo "<script>window.location.href='management.php'</script>";
                 }
                 
                 ?>
             <div class="sub-item-main">
                    <img src="media/decharge.png"/>
                <a>Decharge</a>
                  <div class="clickable" onclick="Show('btn_decharge')"></div>
                    </div>
                 <div class="inner-items"></div>
            </div>
            <h2 class="title">Parametres</h2>
            
             <div class="item">
             <div class="sub-item-main">
                    <img src="media/utilisateur.png"/>
                <a>Les utilisateurs</a>
                    </div>
                <div class="inner-items">
                <div class="sub-item">
                    <button type="submit" name="btn_ajouter_utilisateur" id="btn_ajouter_utilisateur" hidden></button>
                 <?php
                 
                 if(isset($_POST['btn_ajouter_utilisateur'])){
                     $_SESSION['page']='ajouter-utilisateur';
                     $_SESSION['index_item']='5';
                     echo "<script>window.location.href='management.php'</script>";
                 }
                 
                 ?>

                    <img src="media/add.png"/>
                <a>Ajouter un utilisateur</a>
                     <div class="clickable" onclick="Show('btn_ajouter_utilisateur')"></div>
                    </div>
                     <div class="sub-item">
                         <button type="submit" name="btn_list_utilisateur" id="btn_list_utilisateur" hidden></button>
                 <?php
                 
                 if(isset($_POST['btn_list_utilisateur'])){
                     $_SESSION['page']='list-utilisateur';
                     $_SESSION['index_item']='5';
                     echo "<script>window.location.href='management.php'</script>";
                 }
                 
                 ?>
                    <img src="media/list.png"/>
                <a>Liste des utilisateurs</a>
                          <div class="clickable" onclick="Show('btn_list_utilisateur')"></div>
                    </div>
                </div>
            </div>
            
              <div class="item">
                  <button type="submit" name="btn_parametres" id="btn_parametres" hidden></button>
                 <?php
                 
                 if(isset($_POST['btn_parametres'])){
                     $_SESSION['page']='parametres';
                     $_SESSION['index_item']='6';
                     echo "<script>window.location.href='management.php'</script>";
                 }
                 
                 ?>
             <div class="sub-item-main">
                    <img src="media/settings.png"/>
                <a>Les parametres</a>
                  <div class="clickable" onclick="Show('btn_parametres')"></div>
                    </div>
                 <div class="inner-items"></div>
            </div>
            <div class="item">
                <button type="submit" name="btn_support" id="btn_support" hidden></button>
                 <?php
                 
                 if(isset($_POST['btn_support'])){
                     $_SESSION['page']='support';
                     $_SESSION['index_item']='7';
                     echo "<script>window.location.href='management.php'</script>";
                 }
                 
                 ?>


             <div class="sub-item-main">
                    <img src="media/support.png"/>
                <a>Support</a>
                  <div class="clickable" onclick="Show('btn_support')"></div>

                    </div>
                 <div class="inner-items"></div>
            </div>
            
              <div class="item" style="padding-bottom:20px">
             <div class="sub-item-main">
                    <img src="media/logout.png"/>
                <a>Se deconnecter</a>
                    </div>
                 <div class="inner-items"></div>
            </div>
            
        </div>
        <div id="right-side">
        <div id="top">
            <div id="account-info">
                <a>Firstname Lastname</a>
            <img src="media/profile.png"/>
            </div>
            </div>
            <div id="bottom">
            
                
                
                <div id="dashboard">
                <h2>Menu de navigation</h2>
                    <div  class="wrap-contents">

                        
        <div class="card-view">
            <div class="inner">
                <div id="dv1">
                <img src="media/client2.png"/>
                    <div id="right">
                    <h2>Gestion des resources</h2>
                        <p>Les clients (0)</p>
                    </div>
                </div>
                <div id="dv2">
                <button type="button" onclick="Show('btn_ajouter_client')">Ajouter un client</button>
                    <button type="button" onclick="Show('btn_list_client')">Liste des clients</button>
                </div>
            </div>
            
                        </div>
                            <div class="card-view">
            <div class="inner">
                <div id="dv1">
                <img src="media/receipts.png"/>
                    <div id="right">
                    <h2>Gestion des resources</h2>
                        <p>Les encaissement (0)</p>
                    </div>
                </div>
                <div id="dv2">
                <button type="button" onclick="Show('btn_ajouter-encaissement')">Ajouter un encaissement</button>
                    <button type="button" onclick="Show('btn_list-receipt')">Liste des encaissements</button>
                </div>
            </div>
            
                        </div>
          <div class="card-view">
            <div class="inner">
                <div id="dv1">
                <img src="media/prestations2.png"/>
                    <div id="right">
                    <h2>Gestion des resources</h2>
                        <p>Les prestations (0)</p>
                    </div>
                </div>
                <div id="dv2">
                <button type="button" onclick="Show('btn_ajouter-prestation')">Ajouter une prestation</button>
                    <button type="button" onclick="Show('btn_list-prestations')">Liste des prestations</button>
                </div>
            </div>
            
                        </div>    
                 <div class="card-view">
            <div class="inner">
                <div id="dv1">
                <img src="media/users.png"/>
                    <div id="right">
                    <h2>Gestion des resources</h2>
                        <p>Les utilisateurs (0)</p>
                    </div>
                </div>
                <div id="dv2">
                <button type="button" onclick="Show('btn_ajouter_utilisateur')">Ajouter un utilisateur</button>
                    <button type="button" onclick="Show('btn_list_utilisateur')">Liste des utilisateurs</button>
                </div>
            </div>
            
                        </div>       
                         
                        
                    </div>
                </div>
                
                 <div id="add-client">
                <h2>Ajouter un client</h2>
       
                </div>
                 <div id="list-of-clients">
                <h2>Liste des clients</h2>
       
                </div>
                
                <div id="add-receipt">
                <h2>Ajouter un encaissement</h2>
       
                </div>
                
                <div id="list-of-receipts">
                <h2>Liste des encaissements</h2>
       
                </div>
                
                 <div id="add-allowance">
                <h2>Ajouter une prestation</h2>
       
                </div>
                
                <div id="list-of-allowances">
                <h2>Liste des prestations</h2>
       
                </div>
                   <div id="decharge">
                <h2>Decharge</h2>
       
                </div>
                <div id="ajouter-utilisateur">
                <h2>Ajouter un utilisateur</h2>
       
                </div>
                <div id="list-utilisateur">
                <h2>Liste des utilisateurs</h2>
       
                </div>
                <div id="parametres">
                <h2>Les parametres</h2>
       
                </div>
                
                <div id="support">
                <h2>Support</h2>
       
                </div>
                
                
            </div>
        </div>
        </div>
            
            <div id="loader">
            <img src="media/loading.gif"/>
            </div>
            
    <script type="text/javascript" src="queries.js">
        
        </script>
            <?php
            if(isset($_SESSION['page'])){
    
    $element = $_SESSION['page'];
                $index = $_SESSION['index_item'];
        
    echo "<script>ShowDiv('". $element."',". $index.")</script>";
    
}
            ?>
            </form>
    </body>
</html>
