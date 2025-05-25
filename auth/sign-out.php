<?php

session_start();
session_destroy();
echo "
<script>alert('Sign Out Berhasil');
window.location.href = './sign-in.php'</script>
";