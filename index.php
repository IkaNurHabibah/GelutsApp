<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Realtime Chat App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>
<div class="wrapper">
    <section class="form signup">
        <header>Gelut Chat App</header>
        <form action="#">
            <div class="error-txt">Ini adalah pesan error</div>
            <div class="field input">
                <label>IDGlut</label>
                <input type="text" placeholder="IDGluts">
            </div>
            <div class="name-details">
                <div class="field input">
                    <label>Nama Awal</label>
                    <input type="text" placeholder="Nama Awal">
                </div>
                <div class="field input">
                    <label>Nama Akhir</label>
                    <input type="text" placeholder="Nama Akhir">
                </div>
            </div>
                <div class="field input">
                    <label>Alamat Email</label>
                    <input type="email" placeholder="Email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="File">
                </div>
                <div class="field button">
                    <input type="submit" value="Lanjut chat">
                </div>

        </form>
        <div class="link">Punya Akun ? <a href="#">Login yuks</a></div>
    </section>
</div>
<script src="js/pass-show-hide.js"></script>
<script src="js/signup.js"></script>
</body>
</html>