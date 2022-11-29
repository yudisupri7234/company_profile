<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    
    <title>Document</title>
</head>
<body>
        <nav class="navbar">
            <img src="asset/img/logo.png" alt="" class="nav-brand" style="width:150px; padding-left:10px;">
            <a href="#">Beranda</a>
            <div class="dropdown">
                <button class="dropbtn" >
                    <span class="name">Tentang Kampus</span>
                </button>
                <div class="dropdown-content">
                    <a href="#" style="font-weight:normal;">Informasi Mahasiswa</a>
                    <a href="#" style="font-weight:normal;">Informasi Kampus</a>
                </div>
            </div>
            <a href="#">Kemahasiswaan</a>
            <a href="#">PMB</a>
            <div class="nav-right" style="display:flex; float:right;">
                <p>Follow Us :</p>
                <a href="https://www.facebook.com" class="btn-icn"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com" class="btn-icn"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.whattsapp.com"class="btn-icn"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://www.youtube.com"class="btn-icn"><i class="fa-brands fa-youtube"></i></a>
                <div class="saparator">

                </div>
                <button class="btn-signin "><a href="#" style="color:white; text-align: center; padding-left:50px; padding-top:10px;">Masuk</a></button>
                
            </div>
            
        </nav>
        
        <!-- saparator and nav-right -->
        <style>

            .nav-right{
                display: flex;
                padding-top: 0px;
                padding-right: 40px;
            }
            .btn-icn{
                padding-left: 5px ;
                padding-top: 5px;
                padding-right: 5px;
            }

            .saparator{
                
                background-color: black;
                height: 30px;
                width: 1px;
                padding-top: 13px;
                opacity: 20%;


            }
            .btn-signin{
                border: none;
                background-color: #2980b9;
                width: 150px;
                height: 40px;
                margin-left: 10px;
                padding: auto;
                float: right;
                border-radius: 10px;
                text-align: center;
            }

            .btn-signin a{
                
                color: white;
            }
        </style>
       
</body>
</html>