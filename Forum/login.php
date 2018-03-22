
<div id="inlog">
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
</div>

<div class="loginRegister_js">
    <div class="loginRegister">
        <?php
        echo "Dit is mijn provesionale inlogpagina gemaakt door Mike FOlkersma";
        ?>
    </div>
</div>

<script src="javascript/javascript.js"></script>
<form method="post" action"login-afhandelen.php">
