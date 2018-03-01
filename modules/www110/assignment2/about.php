<div id="home" class="anchor">
<div class="container">
<h2 class="text-center">What is a CMS?</h2>
<p class="p-2">A content management system (or CMS for short) is a web application that provides all the tools necessary for managing online content and users. It is a server-side software that makes the creation and maintenance of websites a lot easier and more user friendly.</p>
<div id="why" class="anchor"></div>
<h2 class="text-center">Why use a CMS?</h2>
<p class="p-2">One of the main reasons that you would choose to use a CMS is that you do not need extensive technical or coding knowledge to generate webpages, modify, or upload content as needed. CMSs feature an administration area, or dashboard, with a very user friendly user interface so that you can easily navigate the tools necessary to use the software. The dashboard can also be accessed through a web browser so all that is required is an internet connection to work on your website. The biggest CMSs also offer a mobile app thus allowing you to edit your website on the go.</p>
<p class="p-2">Due to the rapid expansion of your website and your desire to upload self-written content on a regular basis, I would definitely recommend using a CMS to manage your blog posts. The CMS would organize your blog posts, categories, tags, and comments for you. A CMS eliminates the need for a webmaster to maintain your website and empowers you to make changes as you see fit.</p>
<p class="p-2">Using a CMS will save you lots of time and money because you will not need to pay your developer for monthly maintenance or changes. Along with the monetary savings, it will save you a lot of work because you can copy and paste your content from your preferred word processor into the CMS and it will help format headings and body text for you. It is also very customizable with millions of available themes for you to choose from and if you can't find one you like, you can take a theme you like and modify it to suit your taste. There is no need to talk to your developer and rely on their interpretation of what you want because you can edit everything yourself.</p>
<h3 class="text-center p-2">Advantages and Disadvantages of using a Content Management System</h3>
<table class="table table-responsive table-hover table-striped table-bordered">

<thead>
    <tr>
      <th class="text-center">Advantages</th>
      <th class="text-center">Disadvantages</th>
    </tr>
  </thead>
  <tbody>
      <?php
      include 'comparisondata.php';
      $advantage_count = count($advantages);
    $disadvantage_count = count($disadvantages);
      for ($i=0; $i < $advantage_count; $i++){

        echo '<tr><td>'. $advantages[$i] . '</td><td>' . $disadvantages[$i] .'</td></tr>';
         };

       ?>
  </tbody>
</table>
</div>
</div>
