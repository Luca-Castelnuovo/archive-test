<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/functions.php");
login_admin();



?>
<!DOCTYPE html>

<html lang="en">

<?php head('Admin Panel'); ?>

<body>
<div class="wrapper">
    <form class="login pd-20">
        <p class="title">Admin Panel</p>
        <input type="hidden" name="CSRFtoken" value="<?= csrf_gen() ?>"/>
        <div class="inline">
			<?php
			if (isset($_SESSION['invite_response'])) {
				echo "<a class='dropdown-trigger btn' href='{$_SESSION['invite_response']}'>Registration link</a>";
				unset($_SESSION['invite_response']);
			} ?>
        	<a class='dropdown-trigger btn' href='#' id="submit">Generate Invite Code</a>
        	<a class='dropdown-trigger btn' href='?users'>Users</a>
        	<a class='dropdown-trigger btn' href='?login_log'>Login Log</a>
        	<a class='dropdown-trigger btn' href='/home'>Back</a>
        </div>
    </form>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/invite.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>

</html>
