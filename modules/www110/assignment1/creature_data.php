<?php

$aliens_images = [
    'images/aliengrey.png',
    'images/comic_alien.png',
    'images/greenalien.png',
    'images/roundalien.png'
];
$rand_alien_image = array_rand($aliens_images, 1);

$robots_images= [
        'images/robotwhite.png',
        'images/roomba.png',
        'images/toaster.png',
        'images/bastion.png'
];

$rand_robot_image = array_rand($robots_images, 1);

$aliens_descriptions = [
    'The cumbersome, rhinocerous-like race. You have a radar-like sense. You are tripedial. You can adsorb nutrients, plant-like, from the soil or similar substances. You are extremely long-lived. Your greatest leaders were once entertainers. You are actually the embodiment of another, extra-dimensional being. You interbreed easily with other species. You are masters of space travel. Your government is a representative democracy that is extremely corrupt. Your world of origin is cold and is known for being incredibly polluted.',
    'The skeletal race of bovines. You have no obvious sensory organs - yet display definite senses of a mysterious nature. You have highly specialized limbs for various uses. You are able to adhere to solid surfaces, making climbing easy. The most revered members of your society are anthropologists. You naturally hybernate. Your major advancements are in computers. Your species is very diverse in individual appearances.',
    'The misshapen race that resembles the werewolves of earth mythology. Your society is dependent on one technology: terraforming. You are very xenophobic. Your government is entirely dysfunctional. Space is your home, you have no world of your own. You were once a dead people - what brought you back to life is a matter of speculation.',
    'The enormous, elephantine race. You have many eyes. This race is able to adhere to solid surfaces, making climbing easy. Biologically You are inclined to be archaeologists. Your entire lives are spent inside cybernetic pods. You are an all-female race. You are thrill-seekers. You control only one planet. You are close relatives of another race, from whom you split over cultural differences ages ago. You once came from another dimension.'
];

$rand_alien_description = array_rand($aliens_descriptions, 1);

$robots_descriptions = [
'A smart, spunky droid serving a multitude of masters over your lifetime, you have never had a major memory wipe or received new programming resulting in an adventurous and independent attitude. Oftentimes finding yourself in pivotal moments in galactic history, your bravery and ingenuity often saved the galaxy time and time again.',
'Once a frontline combatant in the devastating Intergalactic Crisis, you have all but lost your combat programming and now explores your surroundings, fascinated by the world and its inhabitants.
Though your new nature is gentle, your core combat programming takes over when the unit senses dangeryou, utilizing your entire arsenal to eliminate anything you perceives as a threat. This has led to instances of conflict with the few foreigners you have encountered, and you try to avoid populated areas in favor of the wild, uncharted regions of the world.',
'Originally created for peacekeeping purposes, R9K-' . $name . '-3X0 robot units possessed the unique ability to rapidly reconfigure yourselves into an assault-cannon mode. But during the Intergalactic Crisis, you were turned against your human makers, forming the bulk of the omnic rebel army. Following the resolution of the crisis, nearly all of the remaining R9K-' . $name . '-3X0 units were destroyed or disassembled. To this day, R9K-' . $name . '-3X0 units still symbolize the horrors of the conflict.',
'You are a 3X0 unit protocol droid designed to interact with organics, programmed primarily for etiquette and protocol. You are fluent in over seven million forms of communication, and developed a fussy and worry-prone personality throughout your many decades of operation. Along with your counterpart, the astromech droid RK0-' . $name . '-0MG33, you constantly find yourself directly involved in pivotal moments of galactic history, and have aided in saving the galaxy on many occasions.'
];

$rand_robot_description = array_rand($robots_descriptions, 1);

 ?>
