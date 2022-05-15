
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
