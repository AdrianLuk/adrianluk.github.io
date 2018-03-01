<div id="cms" class="anchor"></div>
<div class="container">
<h2 class="text-center">Comparison of the 3 most popular CMS</h2>
    <p class="p-2">The three most popular content management systems on the market as of 2017 are definitely WordPress, Joomla and Drupal. Together they comprise about 60% of the market share of CMS. There is no clear CMS that is indisputably the best as each has their own quirks and features as well as their own pros and cons. When choosing a CMS for you or your business, there are a couple of features that you should look for: </p>
    <ul>
        <li>Page management: Check to see if the CMS has the page management features that you need.</li>
        <li>Content addition: Is adding content easy and straightforward regardless of the type of content?</li>
        <li>Template, theme, plugin variety: If customization is extremely important, look for a CMS that has a lot of themes and plugins for you to take advantage of.</li>
        <li>User groups: For websites requiring multiple users, can the CMS handle multiple users or user groups and is it intuitive?</li>
        <li>Security: If you own an eCommerce site or if you handle sensitive data, look for a CMS that prioritizes security.</li>
        <li>SEO friendliness: Clean code, page load speed, and SEO friendly URLs will have an impact on your search ranking.</li>
        <li>Support: If you are very new, look for a CMS with a large community and comprehensive documentation.</li>
    </ul>
<h3 class="text-center p-2">WordPress vs. Drupal vs. Joomla</h3>
    <table class="table table-responsive table-hover table-striped table-bordered mt-4">

<thead>
    <tr>
    <th class="text-center">Criteria</th>
      <th class="text-center  "><img  src="img/wordpress.png" alt="wordpress logo" width="200" height="200"><p class="mb-0 p-2">WordPress</p></th>
      <th class="text-center  "><img  src="img/drupal.png" alt="drupal logo" width="175" height="200"><p class="mb-0 p-2">Drupal</p></th>
      <th class="text-center  "><img src="img/joomla.png" alt="joomla logo" width="200" height="200"><p class="mb-0 p-2">Joomla</p></th>
    </tr>
  </thead>
  <tbody>
      <?php
    include 'comparisondata.php';
$criteria_count = count($criteria);

for ($i=0; $i < $criteria_count; $i++){
    echo '<tr><th class="text-center" scope="row">' . $criteria[$i] . '</th><td class="text-center">' . $wordpress[$i] . '</td><td class="text-center">' . $drupal[$i] . '</td><td class="text-center">' . $joomla[$i] . '</td></tr>';
};
       ?>
  </tbody>
    </table>
<p class="p-2">I have chosen WordPress for this website, mainly due to its simplicity and popularity. If there is any trouble, there are tons of resources and plugins to help make sure the website runs smoothly. Since we are only using a CMS to add blog posts and not for things like eCommerce, the additional functionality of Drupal or Joomla is unnecessary. Also because this is mainly just for the blog, there are a lot more themes available on WordPress than the other two CMS software so it will offer the most customization</p>
</div>
