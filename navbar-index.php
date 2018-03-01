<?php
include 'modules/modules_data.php';
$modules_count = count($modules);

for ($i=0; $i < $modules_count; $i++){
    $assignment_count = count($modules[$i]['assignments']);
 echo '<li class="dropdown-submenu"><a style="color: black" tabindex="-1" class="test" href="#">Module ' . ($i + 1) . ':<br> ' . $modules[$i]['title'] . ' <span class="glyphicon glyphicon-triangle-right"></span></a><ul class="dropdown-menu">';
for ($j = 0; $j < $assignment_count; $j++){
echo '<li><a style="color:black" tabindex="-1" href="modules/' . $modules[$i]['assignments'][$j]['assignment_url'] . '">' . $modules[$i]['assignments'][$j]['assignment_title'] . '</a></li>';
};
echo '</ul></li>';
};
 ?>
