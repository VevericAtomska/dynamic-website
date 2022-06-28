<div class="home-page"><h1>-Registration-</h1>
    <div class="columns" id="login" >
        <form action="index.php?page=register" method="post" onsubmit="return validate()">
            <div class="container">

                <label class="register"> Username </br></label>
                <input id="username" type="text" name="username"  placeholder= "Enter Username" size="15" required />
                <label class = "register">
                    Gender :
                </label></br>
                <input id="male" type="radio" value="Male" name="gender" checked > Male
                <input id="female" type="radio" value="Female" name="gender"> Female
                <input id = "other" type="radio" value="Other" name="gender"> Other
                <label class = "register" for="email"></br>Email</label>
                <input id="email" type="text" placeholder="Enter Email" name="email" method="post" required>
                <label class = "register" for="psw">Password</label>
                <input id="psw" type="password" placeholder="Enter Password" name="password" required>
                <label class = "register" for="psw_repeat">Re-type Password</label>
                <input id="psw_repeat" type="password" placeholder="Retype Password" name="pass_repeat" required>
                <button type="submit" value="submit" class="btn">Register</button>
            </div>
        </form>
    </div>
</div>
<div class="footer">
    <script>
        <?php require_once( DIR_JS . "/validate.js"); ?>
    </script>
</div>
</body>
</html>
