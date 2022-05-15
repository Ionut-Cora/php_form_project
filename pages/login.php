
<h1>Login</h1>

<form method="post">
    <table>
        <tr>
            <td><label for="email">Email</label></td>
            <td>
                <input type="email" id="email" name="email"/>
            </td>
        </tr>
        <tr>
            <td><label for="pass">Password</label></td>
            <td>
                <input type="password" id="pass" name="pass"/>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="login" value="Login">
            </td>
        </tr>
    </table>
</form>

<?php
    // var_dump($_POST);

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if ($email == 'test@gmail.com' && $pass == 'secret-pass') {
            print 'Login Success';
        } else {
            print 'Login Error';
        }
    }
?>
