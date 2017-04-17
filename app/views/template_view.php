<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title>Webmaster Forge Test</title>
    <meta name="viewport" content="width=1130">
    <link rel="stylesheet" href="/assets/template/css/normalize.css">
    <link rel="stylesheet" href="/assets/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/template/css/dopstyle.css">
    <!--// ÑÑÐ¸Ð»Ð¸-->
    <script src="/assets/template/js/modernizr-custom.js"></script>
</head>
<body>
    <div class="wrapper">
        <header class="container-fluid">
            <div class="row">
                <div class="col-xs-12 text-center head-block">
                    <h1 class="header-name">
                        <a href="/main/" class="main-link">Webmaster Forge Test</a>
                    </h1>
                    <div class="header-lang">
                        <span class = "header-lang-block">
                            <a href="/lang/ru">
                                <button type="submit" class="btn btn-success lang-button-ru <?php echo ($lang=='rus')?('lang-button_active'):('lang-button_disactive')?>">Рус</button>
                            </a>
                        </span>
                        <span class = "header-lang-block">
                            <a href="/lang/eng">
                                <button type="submit" class="btn btn-success lang-button-eng <?php echo ($lang=='eng')?('lang-button_active'):('lang-button_disactive')?>">Eng</button>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </header>
        <section class="container-fluid content">
            <?php include 'app/views/'.$content_view; ?>
</section>
<footer class="container-fluid footer">
    <div class="row">
        <div class="col-xs-12">
            <p>&copy;2017 Chagarin Ivan.</p>
        </div>
    </div>
</footer>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="/assets/template/js/bootstrap.min.js"></script>
<script src="/assets/template/js/main.js"></script>
</body>

</html>