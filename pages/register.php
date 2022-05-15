
<h1>Register</h1>

<form method="post">
    <table>
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="text" name="name" id="name"/></td>
        </tr>
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
            <td>Minimum age</td>
            <td>
                <input type="text" name="minimum_age" value="16" readonly />
            </td>
        </tr>
        <tr>
            <td><label id="age">Age</label></td>
            <td>
                <input type="text" name="age" id="age"/>
            </td>
        </tr>
        <input type="hidden" name="minimum_age_2" value="16" />
        <tr>
            <td>Gender</td>
            <td>
                M <input type="radio" name="gender" value="m" />
                F <input type="radio" name="gender" value="f" />
                N/A <input type="radio" name="gender" value="na" />
            </td>
        </tr>
        <tr>
            <td><label id="location">Location</label></td>
            <td>
                <select name="location" id="location">
                    <option value="l">London</option>
                    <option value="m">Manchester</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Notifications</td>
            <td>
                Email <input type="checkbox" name="notifications[]" value="email" />
                SMS <input type="checkbox" name="notifications[]" value="sms" />
                Push <input type="checkbox" name="notifications[]" value="push" />
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="reg" value="Register">
            </td>
        </tr>
    </table>
</form>

<?php
    if (isset($_POST['reg'])) {
        /*
            Validations
            name min 3 characters
            password min 6 characters
            ages = minimum ages
            success message
            else
            error message
        */

        $errors = array();

        $name = $_POST['name'];
        if (strlen(trim($name)) < 3) {
            $errors[] = 'The name should have minimum 3 characters';
        }

        $pass = $_POST['pass'];
        if (strlen(trim($pass)) < 6) {
            $errors[] = 'The password should have minimum 6 characters';
        }

        $minimumAge = $_POST['minimum_age'];
        $minimumAge2 = $_POST['minimum_age_2'];

        $age = $_POST['age'];
        if ($age < $minimumAge) {
            $errors[] = 'The minimum age is 16';
        }

        if (!empty($errors)) {
            // if we have errors

            print '<div style="color: red">';
            print 'The following errors ocurred: <br>';
            print '<ul>';
            foreach($errors as $error) {
                print '<li>' . $error . '</li>';
            }
            print '</ul>';
            print '</div>';
        } else {
            // if we don't have errors

            if (isset($_POST['notifications'])) {
                $notifications = $_POST['notifications'];

                $message = 'you will receive notifications on ' . implode('/', $notifications);
            } else {
                $message = 'you will not receive notifications';
            }

            $email = $_POST['email'];
            print '<div style="color: green">';
            print "$name, you registered with email $email and $message";
            print '</div>';
        }

    }
?>
