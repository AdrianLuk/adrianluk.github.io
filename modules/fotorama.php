<?php

require 'modules_data.php';

foreach ($projects as $project) {

    echo '<img class="img-fluid" src="modules/' . $project['splash'] . '" alt="' . $project['title'] . ' snapshot" data-caption="' . $project['title'] . '">';
};

$modules_count = count($modules);

for ($i=0; $i < $modules_count; $i++){
    $assignment_count = count($modules[$i]['assignments']);
for ($j = 0; $j < $assignment_count; $j++){
    echo '<img src="modules/' . $modules[$i]['assignments'][$j]['assignment_splash'] . '" alt="' . $modules[$i]['assignments'][$j]['assignment_title'] . ' snapshot" data-caption="' . $modules[$i]['assignments'][$j]['assignment_title'] . '">';

};
};
