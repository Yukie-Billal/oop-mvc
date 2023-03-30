<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App YUKIE</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #f1f1f1;
            font-family: 'Inter',system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            line-height: 1.7em;
        }
        div.container {
            height: 50vh;
            gap: 6px;
            width: 90%;
            text-align: center;
            letter-spacing: .1rem;
        }
        div.content {
            height: 100%;
            margin-top: 55px;
            height: 40vh;
            background: #fff;
            display: flex;
            border-radius: 5px;
            box-shadow: .5px .5px 4px rgba(0, 0, 0, .1);
            padding: 12px;
        }
        h1 {
            color: darkorange;
        }
        .left, .right {
            height: 100%;
            width: 50%;
            padding: 1px 12px;
        }
        .sub-content-title {
            font-size: 22px;
            font-weight: normal;
            letter-spacing: .1rem;
        }
        p {
            margin-top: 18px;
            letter-spacing: .02rem;
            text-align: left;
        }
        a:visited{color: deepskyblue;}
        .button {
            display: flex;
            justify-content: end;
            margin-top: 8px;
        }
    </style>
</head>
<body>
    <?php if (Auth::check()) { ?>
        <h4>Logout</h4>
    <?php } ?>
    <div class="container">
        <h1>Selamat Datang - LC</h1>
        <div class="content">
            <div class="left">
                <h4 class="sub-content-title">Kerangka Kerja Berskala Kecil</h4>
                <p>
                    Hasil Pembelajaran Saat Menggunakan Framework CI Dan Laravel, penggabungan dua framework dan menyatukannya disini. ci nya versi 3 laravel nya 9.
                </p>
            </div>
            <div class="right">
                <h4 class="sub-content-title">Dokumentasi</h4>
                <p>
                    Halaman Selamat Datang, <a href="https://github.com/Yukie-Billal/oop-mvc" target="_blank">Dokumentasi</a> Bisa Dilihat Langsung Di Github
                </p>
            </div>
        </div>
        <div class="button">
            <button style="padding: 6px 10px; border-radius: 4px; border: 1px solid rgba(0, 0, 0, .3); background: #dfdfdf;">
                Dokumentasi
            </button>
        </div>
    </div>
</body>
</html>