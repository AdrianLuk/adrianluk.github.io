<?php

include 'modules_data.php';

    echo '<div class="projects"><h3 class="py-4">My Past Work and Projects</h3>';
    echo '<h4 class="p-0">Work</h4>';
    echo '<ul class="project-links">';
        foreach($works as $work){
            echo '<li><a class="project-link" href="http://' . $work['url'] . '">' . $work['title'] . '</a><p class="project-link-description">' . $work['description'] . '</p></li>';
        };
    echo '</ul>';

    echo '<h4 class="p-0">Personal Projects</h4>';
    echo '<div class="row p-3">';
        foreach ($projects as $project) {
            echo '<a class="p-3 ass col-xs-12 col-lg-5 mx-auto" href="' . $project['url'] . '">';
            echo '<img class="img-fluid" src="modules/' . $project['image'] . '" alt="' . $project['title'] . '"><br>' . $project['title'] . '</a><br><p class="text-center"></p>';
        };
    echo '</div></div>';


$modules_count = count($modules);

    echo '<h3 class="pt-4"> Seneca Webmaster Program Projects</h3>';
        for ($i=0; $i < $modules_count; $i++){
            $assignment_count = count($modules[$i]['assignments']);
        echo '<div class="section">
        <div class="row p-3">';
            for ($j = 0; $j < $assignment_count; $j++){
            echo '<a class="ass col-xs-12 col-lg-5 mx-auto" href="' . $modules[$i]['assignments'][$j]['assignment_url'] . '">';
            echo '<img class="img-fluid" src="' . $modules[$i]['assignments'][$j]['assignment_image'] .'" width="700" height="250" alt="' . $modules[$i]['assignments'][$j]['assignment_title'] . '"><br>' . $modules[$i]['assignments'][$j]['assignment_title'] . '</a>';
            };
        echo '</div>
        </div>';
        };
