<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $lang['title'] }}</title>

    <link rel="stylesheet" href="{{ $_ENV['CSS'] }}style.css" />

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/black-tie/jquery-ui.css" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="{{ $_ENV['LOGO'] }}" alt="Dijkma logo" id="logo" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <span id="nav-titel">{{ $lang['title'] }}</span>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container">
    <div class="jumbotron">
        <div>
            <p><span>{{ $lang['access_blocked'] }}</span></p>
            <p><span class='pre msg'>{{ $serverName.$uri }}</span></p>
        </div>
        <p><span>{{ $lang['ask_whitelist'] }}</span></p>
        <p><span>{{ $lang['blocked_list'] }}</span></p>
        <div class='buttons blocked'>
            <button type="button" class='btn btn-primary' href='javascript:history.back()'>{{ $lang['button_back'] }}</button>
            <button type="button" class='btn btn-success' data-toggle="modal" data-target="#whitelistform">{{ $lang['button_whitelist'] }}</button>
            <button type="button" class='btn btn-danger' href='javascript:window.close()'>{{ $lang['button_close'] }}</button>
        </div>
    </div>
</div>
<footer class="footer navbar-fixed-bottom">
    <div class="container">
        <p class="text-muted">{{ $lang['footer_tekst'] }}</p>
    </div>
</footer>
@include('form')
</body>
</html>