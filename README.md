# Praktikum 7: PHP Dasar

## Nama: Syafarudiansya
## NIM: 312410381
## Kelas: TI 24 A6


## 1. PHP Dasar
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.
```php
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
<h1>Belajar PHP Dasar</h1>
<?php
echo "Hello World";
?>
</body>
</html>
```
<img src="gambar/1.png" width="500"/>

## 2. Variable PHP
Menambahkan variable pada program.
```php
<?php
$nim = "0411500400";
$nama = 'Yansa';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>
```
<img src="gambar/11.png" width="500"/>

## 3. Predefine Variable $_GET
```php
<h1>Predefine Variable</h1>
<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>
```
<img src="gambar/12.png" width="500"/>

## 4. Membuat Form Input
```php
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
<label>Nama: </label>
<input type="text" name="nama">
<input type="submit" value="Kirim">
</form>
<?php
echo 'Selamat Datang ' . $_POST['nama'];
?>
</body>
</html>
```
<img src="gambar/4.png" width="500"/>
