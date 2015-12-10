
<?php echo $content ?>

<script>


function charger(){

   setTimeout( function(){
       // on lance une requête AJAX
       window.location.reload()
       charger(); // on relance la fonction

   }, 5000); // on exécute le chargement toutes les 5 secondes

}

charger();

</script>
