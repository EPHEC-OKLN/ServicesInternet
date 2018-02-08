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
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="firstName" id="firstName" value="" placeholder="Noms">
                        </div>
                        <div class="6u$ 12u$(xsmall)">
                            <input type="text" name="secondName" id="secondName" value="" placeholder="Prénom">
                        </div>
                        <div class="12u$">
                            <input type="email" name="email" id="email" value="" placeholder="Email">
                        </div>
                        <div class="12u$">
                            <input type="password" name="password" id="password" value="" placeholder="Mot de passe">
                        </div>
                        <div class="12u$">
                            <input type="password" name="passwordConfirm" id="passwordConfirm" value="" placeholder="Confirmer le mot de passe">
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

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
            <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>