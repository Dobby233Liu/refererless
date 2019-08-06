<?php header("Location:".(!isset($_GET['u'])?$_POST['u']:$_GET['u']));
