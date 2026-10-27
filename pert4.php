<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Menjadi Lebih Baik</title>

    <link rel="stylesheet" href="style.css">

    <style>
        .sembunyi{
           display: none;
        }
.kotak-info{
    background-color: #20991c;
    padding : 15px;
    margin: 10px;
    border: 2px solid #ffffff;
    border-radius: 6px; 
}
        .btn-close{
            position: relative;
            top: 8px;
            right: 10px;
            border: none;
            background: none;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            color: #555;
        }
        .btn-close:hover{
            color: #ff0000;
        }

    </style>
</head>
<body>

    <div class="flex-center">
         <div class="kartu-profile">
            <h2>Goo Green</h2> 
            <p>Web Desain</p>
            <button id="btndetail" onclick="info()" class="btn-detail">Info Lengkap</button>
        </div>
    </div>
  
    <div class="kotak-info sembunyi" id="infobox">
        <button onclick="tutupdetail()"class="btn-close">&times;</button>
        <h1>Informasi Detail</h1>
    </div>
    

<script>
    function info(){
        //alert("Tombol Lengkap di ke clik");
        let info = document.getElementById("infobox");
        let btndetail = document.getElementById("btndetail");

        info.style.display = "block";
        btndetail.style.display = "none";

    }
    function tutupdetail(){
        //alert("Tombol Lengkap di ke clik");
        let info = document.getElementById("infobox");
        let btndetail = document.getElementById("btndetail");

        info.style.display = "none";
        btndetail.style.display = "inline-block";

    }
</script>
</body>
</html>