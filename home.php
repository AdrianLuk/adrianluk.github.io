<?php include 'home_data.php'; ?>
<div id="homepage" class="animated fadeIn">
    <article class="content-container">
        <div class="container">
            <div class="intro">
                <h2 class="pb-3">Welcome to my website!</h2>
                <p class="mt-4 text-center">My name is <strong>Adrian Luk</strong> and I'm a full stack <strong>web developer</strong> and <strong>web designer</strong> from Toronto, Canada. I have a passion for creating things that look and feel great. </p>
            </div>

            <div class="cta">
                <p>Click or tap on the <strong>projects</strong> button to check out some of my projects!</p>
            </div>
        </div>
    </article>
    <section class="content-container" id="technical-skills">
        <div class="container">
            <h2><i class="fa fa-code"></i> Technical Skills</h2>
            <article class="row">
                        <div class="col-xs-12 col-lg-6">
                            <dl>
                            <dt>Languages:</dt>
                            <dd>HTML 5, CSS 3, JavaScript/AJAX, JSON, PHP 5</dd>
                            </dl>
                        </div>
                        <div class="col-xs-12 col-lg-6">
                            <dl>
                            <dt>Web Development Software:</dt>
                            <dd>Adobe Dreamweaver, Atom, Brackets, Notepad++, Filezilla, Node.js, Git, GitHub, BitBucket, Jira</dd>
                            </dl>
                            </div>
            <!-- </article>
            <article class="row"> -->
                        <div class="col-xs-12 col-lg-6">
                            <dl>
                            <dt>Frameworks &amp; Preprocessors:</dt>
                            <dd>React, Laravel, SASS, LESS, Bootstrap, Foundation, jQuery, Electron</dd>
                            </dl>
                        </div>
                        <div class="col-xs-12 col-lg-6">
                            <dl>
                            <dt>Design &amp; Illustration Software:</dt>
                            <dd>Adobe Photoshop, Adobe Illustrator, Adobe XD</dd>
                            </dl>
                        </div>
            <!-- </article>
            <article class="row"> -->
                        <div class="col-xs-12 col-lg-6">
                            <dl>
                            <dt>Other Software:</dt>
                            <dd>Wordpress, BigCommerce, Microsoft Office (Word, Excel, PowerPoint), CIMS database</dd>
                            </dl>
                        </div>
                        <div class="col-xs-12 col-lg-6">
                            <dl>
                            <dt>Other Skills &amp; Certifications:</dt>
                            <dd>RCM Piano Grade 10, CSIA Level 1 Ski Instructor</dd>
                            </dl>
                        </div>
            </article>
        </div>
    </section>

    <section class="content-container" id="education">
        <div class="container">
            <h2><i class="fa fa-graduation-cap"></i> Education</h2>            
            <?php foreach($educations as $education) :?>
            <article class="row program align-items-center">
                <div class="col-xs-12 col-lg-4">
                    <h5><?= $education['program']; ?></h5>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <h5><?= $education['institution']; ?></h5>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <h5><?= $education['timeframe']; ?></h5>
                </div>
            </article>
            <?php endforeach ?>
        </div>
    </section>
    <section class="content-container" id="work-experience">
        <div class="container">
            <h2><i class="fa fa-wrench"></i> Work Experience</h2>
            <?php foreach($jobs as $job) : ?>
    <article class="work">
        <div class="row align-items-center">
            <div class="col-xs-12 col-lg-4">
                <h5><?= $job['position']; ?></h5>
            </div>
            <div class="col-xs-12 col-lg-4">
                <h5><?= $job['company']; ?></h5>
            </div>
            <div class="col-xs-12 col-lg-4">
                <h5><?= $job['timeframe']; ?></h5>
            </div>
        </div>
        <ul>
            <?php foreach($job['responsibilities'] as $responsibility) :?>
                <li><?= $responsibility; ?></li>
            <?php endforeach ?>
        </ul>
    </article>
<?php endforeach ?>
        </div>
    </section>
    <section class="content-container" id="volunteer-experience">
        <div class="container">
            <h2><i class="fa fa-heart"></i> Volunteer Experience</h2>
            <article>
                <div class="row">
                    <div class="col-xs-12 col-lg-4">
                        <h5>Wellness Club Volunteer</h5>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <h5>Carefirst Seniors &amp; Community Services Association <br> Toronto, Ontario</h5>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <h5>February 2016 - Present</h5>
                    </div>
                </div>
                <ul>
                    <li>Front office administrative tasks in the Wellness Club office</li>
                    <li>Responsible for accurate entry of client information into CIMS (Client Information Management System) database</li>
                    <li>Prepare income/expenditure reports for cash and credit card sales and submitting a fee deposit summary</li>
                    <li>Update registration records regularly and accurately</li>
                    <li>Setup and clean-up of classes and events</li>
                    <li>Count and record statistics at the end of each month</li>
                    <li>Filed, scanned, renamed, and properly sorted financial documents for the Finance Department</li>
                </ul>
            </article>
            <article>
                <div class="row">
                    <div class="col-xs-12 col-lg-4">
                        <h5>Volunteer</h5>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <h5>Friends of the CNE (Canadian National Exhibition) <br> Toronto, Ontario</h5>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <h5>June 2009 - August 2009</h5>
                    </div>
                </div>
                <ul>
                    <li>Handed out pamphlets with the day's events to all visitors as they entered</li>
                    <li>Ensured all guests were welcomed and knew where they wanted to go</li>
                </ul>
            </article>
        </div>
    </section>
</div>
