<?php
    session_start();
        $errors = [
            'login' => $_SESSION['login_error'] ?? '',
            'register' => $_SESSION['register_error'] ?? '',
        ];
        $activeForm = $_SESSION['active_form'] ?? 'login';

    session_unset();

    function showError($error) {
        return !empty($error) ? "<p class='error-message'>$error</p>" : '';
    }

    function isActiveForm($formName, $activeForm) {
        return $formName === $activeForm ? 'acive' : '';
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<meta name="viewpoint" content="width=device-width, initial-scalew=0.1">
<title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    
    </head>
<body>
<main>
    <div class="top">
        <img class="logo" src="Img/logo.jpeg" alt="logo">
        <label class="label" for="">EverClean</label>
    </div>

    <form action="login_register.php" method="post" <?= isActiveForm('login', $activeForm);?>>
        <h1>
             Create an account
        </h1>

        <?= showError($errors['register']); ?>

        <label for="">Role</label><br>
        <select name="" id="" name="Role">
            <option value="">Client</option>
            <option value="">Garbage collector</option>
        </select><br>

        <label for="name">Full name</label><br>
        <input type="text" name="name" required><br>
        
        <label for="email" >Email</label><br>
        <input type="email" name="email" required><br>
    
        <label for="name">Password</label><br>
        <input type="password" name="password" required><br>

       <span>Already have an account? <a href="login.html">Login</a></span>

       <button name="register" type="submit">Creat account</button>
    </form>
</main>
</body>

<script src="script.js">
        function showForm(){
            const formbox = document.querySelector('.formbox')
            formbox.style.display = 'flex'
        }

        function hideForm(){
            const sidebar = document.querySelector('.')
            sidebar.style.display = 'none'
        }
</script>

</html>