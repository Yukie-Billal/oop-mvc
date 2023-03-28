## Invetory Project
Aplikasi OOP PHP MVC Implementasi Hasil pembelajaran dan Adaptasi Logika Framework CI Dan Laravel


## Constibutor
- [Yukie M Billal](https://github.com/Yukie-Billal).


### Penggunaan
Menyalakan Server PHP dengan menjalankan Perintah Berikut Di Terminal Anda

    composer serve

Atau dengan cara manual anda, sebagai contoh :


  ```
    php -S localhost:1000

  ```
  
### Path Set Up
Jika anda ingin mengubah nama root direktori, anda diharuskan menyetel ulang configurasi aplikasi pada direktori `config/uri.php`

  ```php

    define("APP_URL", "http://localhost:1000/");

    define("BASE_PATH", APP_URL."yukie_app/");
    define("CONTROL_PATH", BASE_PATH."app/controllers/");
    define("VIEW_PATH", BASE_PATH."resources/views/");
    define("PUBLIC_PATH", BASE_PATH."public/");

  ```
  
### Controller Set Up
Controller Terletak Pada Direktori `app/controllers`. Anda Bisa Membuat Controller Dalam Directori Tersebut. Dan Mendaftarkannya Pada `kernel.php`

Penamaan Controller Diharuskan Diakhiri Dengan Kata `Controller` Diawali Huruf Besar, Begitu Juga Nama Controller Anda. Sebagai Contoh

`ProdukController`

Anda Dapat Mengubah Default Controller Pada configurasi uri yang terdapat pada `config/uri.php` dengan controller yang anda punya


### Database Set Up

##### NOTE  : Database yang Digunakan Untuk Saat ini hanya Mysql, untuk itu driver selain mysql tidak akan berjalan pada program ini.

Untuk Melakukan Set Up Database, Anda dapat membuka direktori `config/database.php` Dan Sesuaikan Dengan configurasi milik anda

```php

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'app_yukie');

```

### Model
Model Sendiri Terletak Pada Direktori `app/models`. Anda Bisa Membuat Model Dalam Directori Tersebut. Dan Mendaftarkannya Pada `kernel.php`

Model Memiliki Kebebasan dalam hal Penamaan, Namun Dalam pemberian akses tabel anda diharuskan memperikan sebuah properti `table` dalam class model anda. seperti contoh :

```php

    class Produk
    {
        protected $table = 'your_table_name';
    }

```

### View
Anda Bisa mengembalikan sebuah view dari controller menggunakan cara berikut
```php 
    public function index()
    {
        return view("produk/index");
    }
```

### mengirim data
Anda Bisa mengikuti kode program dibawah untuk melakukan pengiriman data

```php
    public function index()
    {
        $produk = new Produk;
        return view("produk/index",[
            'produk' => $produk->get(),
        ]);
    }
```

Data yang diambil dari model akan dikirimkan melalui parameter dan dapat terima oleh view

```php 
    <table>
        <tr>
            <th>#</th>
            <th>Nama Produk</th>
            <th>Merek</th>
            <th>Harga</th>
        </tr>
        <?php foreach ($data['produk'] as $produk) { ?>
            <tr>
                <td><?= $produk['id'] ?></td>
                <td><?= $produk['nama_produk'] ?></td>
                <td><?= $produk['merek'] ?></td>
                <td><?= $produk['harga'] ?></td>
            </tr>
        <?php } ?>
    </table>
```

## Registrasi Model & Controller

Anda Diharuskan Melakukan registrasi Model dan Controller yang anda punya Dalam File kernel atau lebih tepatnya dalam direktori `app/kernel.php`.


### Support
Seperti Yang Dilihat, Masih Ada keterbatasan dalam hal route dan struktur, Oleh Karena Itu saya sebagai pengelola mengharapkan banyaknya saran untuk terus mengembangkan logika program yang sedang saya rancang ini

Selamat Mencoba