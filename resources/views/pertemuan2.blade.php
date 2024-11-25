<html>
<head>
<title>Latihan CSS</title>
<style>
    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color:rgb(156, 63, 99);
        font-size: 38px;
    }
    a:link {
      text-decoration: none;
      color :rgb(95, 95, 165) ;
    }

    a:visited {
    text-decoration: none;
    color :rgb(95, 95, 165) ;
    }

    a:hover {
        font-size:larger;
        color: aquamarine;
        text-decoration:underline
    }

    .headingmerah{
        color:rgb(255, 0, 0) ;
    }

    .parratakanan {
        text-align: right;
    }

    .partengah {
        text-align: center;
    }
</style>
</head>
<body>
<h1 style="color:bisque;">Hallo Selamat Datang</h1>
<h1 class="headingmerah">Hallo Selamat Datang</h1>
<p style="font-size:small;color:blueviolet;">Jurusan Sistem Informasi ITS</p>
<p class ="parratakanan">Jurusan Sistem Informasi ITS 2</p>
<p class ="partengah">Jurusan Sistem Informasi ITS 3</p>
<a href="https://www.google.com" target="_blank">Google</a>
<a href="https://www.google.com" target="_self">ITS</a>
<a href="http://127.0.0.1:8000/pertemuan1">File pertemuan 1 </a>
</body>
</html>
