<?php 

    if(isset($_POST['submit']) && $_POST['submit'] == 'zakazi'){
      $pr=new Prijava(null,$_POST['predmet'],$_POST['katedra'],$_POST['sala'],$_POST['datum']);
      $status=Prijava::create($pr,$conn);
    }

?>