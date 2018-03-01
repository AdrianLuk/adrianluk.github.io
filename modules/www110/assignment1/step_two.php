<?php

$title = 'Your Creature';
require_once 'includes/header.php';

date_default_timezone_set("America/Toronto");
$date = date('l F jS, Y');

$creature;

if(isset($_POST['creature_type']) && !empty($_POST['name'])){
    $creature = $_POST['creature_type'];
    $name = $_POST['name'];
}
else{

    header('Location: step_one.php');
}

function cleanup($data){
    $data = strip_tags($data);
    $data = htmlentities($data);
    $data = html_entity_decode($data);
    return $data;
}

$name = cleanup(ucwords(strtolower($name)));

include 'creature_data.php';
 ?>

  <?php

 if ($creature == 'alien'){
echo '<p class="lead" style="text-indent:50px"> Thanks ' . $name . '-ulan. Your mission is simple: To protect the alien race from all forces of evil. Today is ' . $date . ' and it\'s been an extremely hectic day so you better get right to work. But don\'t worry! Our top engineers are harvesting the blood and energy of our fallen foes in order to make sure that you are at your optimal nano-biological power level for battle.</p>';
 echo '<p class="lead text-center">When you are ready to see the results &nbsp; <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#alien-profile" aria-expanded="false" aria-controls="alien-profile">Click Here</button></p>
 <div class="collapse" id="alien-profile">
  <div class="card card-block row">';
      echo '<p><img class="d-block mx-auto" src="' . $aliens_images[$rand_alien_image] . '" alt="alien image" width="250" max-height="400"></p>';
echo "<p class=\"lead\" id=\"description\" style=\"text-indent:50px\">{$aliens_descriptions[$rand_alien_description]}</p>";
  echo '</div></div>';
}

if ($creature == 'robot'){
  echo '<p class="lead" style="text-indent:50px"> Thanks R9K-' . $name . '-3X0. Your mission is simple: To protect your fellow robots from all forces of evil. Today is ' . $date . ' and it\'s been an extremely hectic day so you better get right to work. But don\'t worry! Our top engineers are harvesting the blood and energy of our fallen foes in order to make sure that you are at your optimal nano-photonic power level for battle.</p>';
  echo '<p class="lead text-center">When you are ready to see the results &nbsp; <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#robot-profile" aria-expanded="false" aria-controls="robot-profile">Click Here</button></p>
  <div class="collapse" id="robot-profile">
   <div class="card card-block row">';
       echo '<p><img class="d-block mx-auto" src="' . $robots_images[$rand_robot_image] . '" alt="robot image" width="250" max-height="400"></p>';
       echo "<p class=\"lead\" id=\"description\" style=\"text-indent:50px\">{$robots_descriptions[$rand_robot_description]}</p>";
   echo '</div></div>';
}
?>

<?php
$description;
if ($creature == 'alien'){
    $description = $aliens_descriptions[$rand_alien_description];
}
if ($creature == 'robot'){
    $description = $robots_descriptions[$rand_robot_description];
}
//
// $to = 'aluk3@myseneca.ca';
// $subject = 'Creature Generator Results for' . $name;
// $message = 'Name: '.$name . "\r\n" . 'Creature Type: ' . $creature . "\r\n" . $description;
// $message = wordwrap($message, 70, "\r\n");
//
// $headers = 'From: aluk3@myseneca.ca';
//
// mail($to, $subject, $message, $headers);
//
// if (mail($to, $subject, $message, $headers)){
//     echo 'mail sent successfully';
// } else{
//     echo 'Oops, something went wrong!';
// }

require_once 'includes/footer.php';

?>
