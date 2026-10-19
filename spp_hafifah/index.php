<html>
<head>
    <title>Form Login</title>

    <style>
    body {
        background-image: url("src/background.jfif");
        background-size: 100% 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0;
        font-family: 'Open Sans', sans-serif;
        min-height: 100vh;
    }

    h1 {
        color: white;
        text-shadow: 2px 2px 5px #555;
    }

    fieldset {
        margin: 80px auto;
        width: 320px;
        height: 400px;
        border: 3px solid white;
        border-radius: 15px;
        background-image: url("src/kartun.jfif");
        background-size: 100% 100%;
        background-position: center;
        background-repeat: no-repeat;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    /* FOTO PROFIL */
    .foto {
        display: block;
        margin: 0 auto;
        width: 75px;
        height: 75px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid white;
        box-shadow: 0 3px 10px rgba(0,0,0,0.3);
    }

    /* TULISAN LOGIN */
    p b {
        color: #428df5;
        text-shadow: 1px 1px 2px white;
    }

    input {
        margin: 5px;
        padding: 10px;
        width: 300px;
        height: 40px;
        border: 1px solid white;
        border-radius: 10px;
        background-color: #e8f3ff;
    }

    input:focus {
        outline: none;
        border: 2px solid #428df5;
    }

    #input {
        background-color: #e8f3ff;
    }

    #submit {
        color: white;
        background-color: #428df5;
        border: none;
        cursor: pointer;
        font-weight: bold;
    }

    #submit:hover {
        background-color: #2876d8;
    }

    a {
        color: #428df5;
        font-weight: bold;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .alert {
        color: red;
        text-align: center;
        font-weight: bold;
    }

    </style>
</head>

<body>

    <h1 align="center">
        <b>SPP ONLINE</b>
    </h1>

    <form action="login_validasi.php" method="post">

    <fieldset>

    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>

        <legend align="center">
            <img src="src/loopy.jfif" class="foto" />
        </legend>

        <table>

            <p align="center">
                <b>LOGIN</b>
            </p>

            <tr>
                <td>
                    <input name="username"
                           type="text"
                           placeholder="Username"
                           id="input"/>
                </td>
            </tr>

            <tr>
                <td>
                    <input name="password"
                           type="password"
                           placeholder="Password"
                           id="input"/>
                </td>
            </tr>

            <tr>
                <td>
                    <input name="login"
                           type="submit"
                           value="LOGIN"
                           id="submit"/>
                </td>
            </tr>

            <tr>
                <td align="center">
                    <a href="bayar.php">CEK PEMBAYARAN</a>
                </td>
            </tr>

        </table>

    </fieldset>

    </form>

</body>
</html>