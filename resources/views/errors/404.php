<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Found</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            display: flex; justify-content: center; align-items: center;flex-direction: column;
        }
        button {
            padding: 8px 14px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: .03em;
            border: 1px solid #8f8f8f;
            border-radius: 2px;
            cursor: pointer;
            transition: .2s
        }
        button:hover {
            background: #DFDFDF;
        }
    </style>
</head>
<body>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column; width: 70%;">
        <h2 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
            Maaf, Halaman Yang Anda Cari Tidak Dapat Kami Temukan
        </h2>
        <div style="width: 100%;display: flex; justify-content: center; align-items: center;flex-direction: column;">
            <button onclick="history.back()">KEMBALI</button>
        </div>
    </div>
</body>
</html>