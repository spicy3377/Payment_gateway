<!doctype html>
<html>
  <head>
    <title>Documentation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="japheth jonathan">
    <meta name="description" content="use documentation">
    <link rel="icon" href="assets/images/favicon0.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/scribbler-global.css">
    <link rel="stylesheet" href="assets/css/scribbler-doc.css">
    <link rel="author" href="humans.txt">
    <style type="text/css" media="screen">
      a {
        color: #0e7def;
        text-decoration: none;
      }

      a:hover {
        color: #0963bf;
      }
    </style>
  </head>
  <body>
    <div class="doc__bg"></div>
    <nav class="header">
      <h1 class="logo mt-4">Documentation</h1>
      <ul class="menu">
        <div class="menu__item toggle"><span></span></div>
        <li class="menu__item"><a href="index" class="link link--dark"><i class="fa fa-home"></i> Go back home</a></li>
      </ul>
    </nav>
    <div class="wrapper mt-3">
      <aside class="doc__nav">
        <ul>
          <li class="js-btn selected">Get Started</li>
          <li class="js-btn">Credits</li>
          <li class="js-btn">Requirements</li>
          <li class="js-btn">Installation</li>
          <li class="js-btn">Configuration</li>
         
        </ul>
      </aside>
      <article class="doc__content">
        <section class="js-section">
          <h3 class="section__title">Get Started</h3>
          <p>The documentation describes the requirements, installation and configuration of this Test </p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Credits</h3>
          <p>Below are front-end, back-end and database technologies that made the development of Test possible</p>
          <table id="customers">
            <tr>
              <td>Front-end</td>
              <td>HTML 5, CSS 3, <a href="https://getbootstrap.com/" target="_blank" >Bootstrap 4</a>, <a href="https://jquery.com/" target="_blank" >JQuery</a></td>
            </tr>
            <tr>
              <td>Back-end</td>
              <td><a href="https://php.net" target="_blank">PHP</a></td>
            </tr>
            <tr>
              <td>Database</td>
              <td><a href="https://mysql.com" target="_blank">MySQL</a></td>
            </tr>
            <tr>
              <td>Others</td>
              <td><a href="https://themewagon.com/themes/free-html-documentation-template/" target="_blank">Flutter wave API (payment gateway)</a></td>
            </tr>
          </table>
        </section>
        <section class="js-section">
          <h3 class="section__title">Requirements</h3>
          <p>Please ensure you have the following installed on your server</p>
          <table id="customers">
            <tr>
              <th>Software</th>
              <th>Modules</th>
            </tr>
            <tr>
              <td>PHP 7 or higher</td>
              <td>MySQLi</td>
            </tr>
            <tr>
              <td>Apache 2 or higher</td>
              <td>mod_rewrite</td>
            </tr>
            <tr>
              <td>MySQL 5 or higher</td>
              <td>
                <div>[client]</div>
                <div>default-character-set = utf8mb4</div>
                <br>
                <div>[mysql]</div>
                <div>default-character-set = utf8mb4</div>
                <br>
                <div>[mysqld]</div>
                <div>character-set-client-handshake = FALSE</div>
                <div>character-set-server = utf8mb4</div>
                <div>collation-server = utf8mb4_unicode_ci</div>
              </td>
            </tr>
            <tr>
              <td>SSL Certificate</td>
            </tr>
          </table>
          <hr />
        </section>
        <section class="js-section">
          <h3 class="section__title">Installation</h3>
          <p>After downloading project package and extracted the contents from <code>ZIP</code> package, follow the steps below to get ready for use</p>
          <h5>Importing database</h5>
          <ol>
            <li>Create a new MySQL Database</li>
            <li>Import <code>payment.sql</code> file (which is found in the folder SQL/payment.sql) to your database</li>
           
          </ol>
         
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p class="text-justify">
              <strong>NOTE: </strong> Goto POSTMAN to test all the Endpoints you can find the endpoints url below, and please make sure .htaccess is allowed on the server.
            </p>
          </div>
        </section>
        <section class="js-section">
          <h3 class="section__title">Configuration</h3>
          <p class="text-justify">There's only few configuration to be done. Goto fLlutter wave and create an account with them s that you can get your own SECRET KEY.</p>
          <p>
            The following file located in the directory below are files to configure for successful functionality of the payment gateway
            <div class="code__block code__block--notabs">
              <pre class="code code--block">
                <code>
                  includes/flutter_con.php
                
                  callback.php
                 
                </code>
              </pre>
            </div>
          </p>
          <ol>
            <li>
              Open each file in the directories above and locate line 42 of the code to change the secret key of FLUTTER_CON to your own key.
            </li>
            <li>
              Open each file in the directories above and locate line 48 of the code to change the secret key of CALLBACK.PHP to your own key.
            </li>
           
          </ol>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p class="text-justify">
              <strong>NOTE: </strong> You will notice that there are different folders to the types of endpoints,  to test the endpoints of each please refer to README file to get the Endpoints url.</strong>
            </p>
          </div>
          <HR />
          <b> For further more assistance email me on (japhethjonathan793@gmail.com).
        </section>
     
      </article>
    </div>

    <footer class="footer" style="background-color: #fff">
      <div class="container">
        <p>&copy; <?php echo date("Y"); ?></p>
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="assets/js/scribbler.js"></script>
  </body>
</html>