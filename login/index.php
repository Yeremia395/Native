<head>
    <link rel="stylesheet" href="tampilan.css" text="text/css">
    <title>Login SiPerpus</title>
</head>
<body>
    <div class="box">
        <form action="proses-login.php" method="POST">
            <span class="text-center">login</span>
            <div class="input-container">
                <input type="text" name="username" id="" required="" autocomplete="off">
                <label>Username</label>
            </div>
            <div class="input-container">
                <input type="password" name="password" id="" required="" autocomplete="off">
                <label>Password</label>
    
            </div>
            <button type="submit" value="Login" name="btnlogin" class="btn">Masuk</button>
            
        </form>
    </div>
</body>