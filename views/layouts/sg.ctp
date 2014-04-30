
<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="utf-8">
    <title>Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/rb/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="/rb/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/rb/bootstrap/js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills">
          <li class="active"><a href="/rb/mypage/">マイページ</a></li>
          <li class="active"><a href="/rb/story/">ストーリー</a></li>
          <li class="active"><a href="/rb/battle/">バトル</a></li>
          <li class="active"><a href="/rb/admin/">管理</a></li>
        </ul>
      </div>

      <hr>
      
      <?php echo $this->Session->flash(); ?>
      <?php echo $content_for_layout; ?>
      
      <hr>

      <div class="footer">
        <p>&copy; rb 2013</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/rb/bootstrap/js/jquery.js"></script>
    <script src="/rb/bootstrap/js/bootstrap-transition.js"></script>
    <script src="/rb/bootstrap/js/bootstrap-alert.js"></script>
    <script src="/rb/bootstrap/js/bootstrap-modal.js"></script>
    <script src="/rb/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="/rb/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="/rb/bootstrap/js/bootstrap-tab.js"></script>
    <script src="/rb/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="/rb/bootstrap/js/bootstrap-popover.js"></script>
    <script src="/rb/bootstrap/js/bootstrap-button.js"></script>
    <script src="/rb/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="/rb/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="/rb/bootstrap/js/bootstrap-typeahead.js"></script>
  </body>
</html>
