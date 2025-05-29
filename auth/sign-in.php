<?php
session_start();
if (!empty($_SESSION['login'])) {
    header("Location: sign-in.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Batik Indonesia</title>
    <link rel="stylesheet" href="../assets/css/tailwindcss/output.css">
    <link rel="stylesheet" href="../libs/font/font.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="font-fira">
    <section class="sign-container w-full h-dvh">
        <main class="sign-row flex">
            <div
                class="left-sign flex-1/2 bg-primary text-center p-20 w-[50%] h-dvh flex justify-center items-center flex-col">
                <img class="rounded-sm mb-5"
                    src="https://asset.kompas.com/crops/d64HmpMdRPHMMwVVJfP-y5_RA8U=/518x0:5114x3064/750x500/data/photo/2022/01/01/61d00810dc56a.jpg"
                    alt="">
                <h1 class="text-xl font-bold text-white">Batik Indonesia Membentuk Pola Melestarikan Budaya</h1>
            </div>
            <div class="right-sign flex-1/2 p-10 flex justify-center items-center flex-col">
                <div class="w-full">
                    <div class="mb-3">
                        <h2 class="font-semibold text-2xl">Sign In <span class="text-primary">Batik</span> Indonesia
                        </h2>
                        <p class="text-slate-500">Masukan data Email dan Password anda</p>
                    </div>
                    <form action="" method="post">
                        <div class="f-group flex flex-col mb-5">
                            <label for="email" class="l-group block mb-1">Email</label>
                            <input
                                class="py-2.5 px-3 border-[2px] border-secondary rounded-sm focus:border-primary outline-none w-full"
                                type="text" name="email" placeholder="Masukan email anda" autocomplete="off" id="email">
                        </div>
                        <div id class="f-group flex flex-col mb-5">
                            <label for="password" class="l-group block mb-1">Password</label>
                            <div class="relative">
                                <input
                                    class="py-2.5 px-3 border-[2px] border-secondary rounded-sm focus:border-primary outline-none w-full"
                                    type="password" name="password" placeholder="Masukan password anda"
                                    autocomplete="off" id="password">
                                <span class="eye_password absolute bottom-[8px] -right-[-20px]"><i
                                        class="fas fa-eye-slash"></i></span>
                            </div>

                        </div>
                        <button name="signin" type="submit"
                            class="w-full py-2.5 px-3 rounded-sm bg-primary font-medium tracking-wider inline-block mt-2">Sign
                            In</button>
                    </form>
                </div>
            </div>
        </main>
    </section>

    <script>
    const passwodField = document.getElementById('password');
    const passwordIcon = document.querySelector(".eye_password i");

    passwordIcon.addEventListener('click', function() {
        if (passwodField.type === "password") {
            passwodField.type = 'text';
            passwordIcon.classList.add('fa-eye');
            passwordIcon.classList.remove('fa-eye-slash')
        } else {
            passwodField.type = 'password';
            passwordIcon.classList.remove('fa-eye');
            passwordIcon.classList.add('fa-eye-slash')
        }
    })
    </script>

</body>

</html>

<?php

include "../connection/config.php";

if (isset($_POST['signin'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $cek_login = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($cek_login) > 0) {
        $data = mysqli_fetch_array($cek_login);
        if (password_verify($password, $data['password'])) {
            $_SESSION['login'] = 1;
            $_SESSION['email'] = $data['email'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['id'] = $data['id'];
            header("Location: ../admin/dashboard.php");
        } else {
            echo "
            <script>alert('Password anda salah');
            window.location.href = './sign-in.php'</script>
            ";
        }
    } else {
        echo "
            <script>alert('Email dan Password anda salah');
            window.location.href = './sign-in.php'</script>
            ";
    }
}

?>