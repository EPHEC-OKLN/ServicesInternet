<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <?php include('include/head.include.php'); ?>
</head>
<body class="landing">
<div id="page-wrapper">

    <?php include('include/navbar.include.php'); ?>

    <!-- Banner -->
    <section id="banner">
        <div class="content">
            <header>
                <form method="post" action="#">
                    <div class="row uniform 50%">
                        <div class="12u$">
                            <input type="email" name="email" id="email" value="" placeholder="Email">
                        </div>
                        <div class="12u$">
                            <input type="password" name="password" id="password" value="" placeholder="Mot de passe">
                        </div>
                        <div class="12u$">
                            <ul class="actions">
                                <li><input type="submit" value="Envoyer" class="special"></li>
                                <li><input type="reset" value="Reset"></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </header>
        </div>
    </section>

</div>

<?php include('include/script.inc.php'); ?>
</body>
</html>