<html>
<body>
    <div id="InputContainer">
        <form id="LoginForm" action="register.php" method="POST">
            <h1>LOGIN</h1>
            <p>
            <label for="LoginUsername">Username</label>
            <input id="LoginUsername" type="text" placeholder="e.g. Soumya_jit" required>
            </p>
            <p>
            <label for="LoginaPassword">Password</label>
            <input id="LoginPassword" type="password" placeholder="Your Password" required>
            </p>
    <button type="submit">LOG IN</button>
    </form>

    <form id="RegisterForm" action="register.php" method="POST">
            <h1>Register Your Account</h1>
            <p>
            <label for="RegisterUsername">Username</label>
            <input id="RegisterUsername" type="text" placeholder="e.g. Soumya_jit" required>
            </p>

            <p>
            <label for="Firstname">Firstname</label>
            <input id="Firstname" type="text" placeholder="e.g. Soumya" required>
            </p>

            <p>
            <label for="Lastname">Lastname</label>
            <input id="Lastname" type="text" placeholder="e.g. Jit" required>
            </p>

            <p>
            <label for="email">email</label>
            <input id="email" type="text" placeholder="yourname@gmail.com" required>
            </p>

            <p>
            <label for="email2">Confirm Email</label>
            <input id="email2" type="text" placeholder="yourname@gmail.com" required>
            </p>

            <p>
            <label for="Password">Password</label>
            <input id="Password" type="password" placeholder="Password Should be 8bit long" required>
            </p>

            <p>
            <label for="Password2">ConfirmPassword</label>
            <input id="Password2" type="password" placeholder="Your Password" required>
            </p>


    <button type="submit">SIGN UP</button>
    </form>

    </div>
</body>
</html>
