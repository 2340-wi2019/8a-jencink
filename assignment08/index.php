<?php
    include "includes/header.php";

    //write PHP here...
    $weight = '209';
    $age = '31';
    $fName = 'Jen';
    $lName = 'Cink';
   function poundsToKg($weight) {
       $kg = $weight / 2.2;
       return $kg;
   }
?>
<body>
<p>Good morning, ladies and gentlemen!</p>
<p>My name is <?php echo $fName ?> <?php echo $lName ?>!
<p>I am <?php echo $age ?> years old. I weigh <?php echo $weight ?> pounds, which is <?php echo poundsToKg($weight) ?> kg!</p>

</body>
<?php
    include "includes/footer.php";
?>


