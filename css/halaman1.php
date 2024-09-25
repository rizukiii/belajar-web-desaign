<!-- Metode CSS In File -->
<!DOCTYPE html>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar Web CSS : Halaman 1</title>
        <style>
            /* penggunaan style dengan class */
            .kotak{
                width: 150px;
                height: 150px;
                background-color: green;
                text-align: center;
                align-content: center;
                
            }
            /* penggunaan style dengan id */
            #kotak2{
                width: 200px;
                height: 200px;
                background-color: yellow;
                text-align: center;
                align-content: center; 
            }

            /* pemanggilan style dengan text */
            div {
                background-color: green;
            }

            h1{
                color: red;
            }

            .kotak-besar{
                width: 1000px;
                height: 500px;
                background-color: black;
                margin-top: 10px;
                overflow-x: scroll;
                display: flex;
                gap: 10px;
            }

            .kotak-kecil{
                width: 150px;
                height: 50px;
                background-color: gray;
                text-align:center;
                align-content:center;
                flex: none;
            }

            .text{
                color: white;

            }
        </style>
    </head>
    <body>
        <!-- menambahkan tiap link pada halaman -->
        <a href="./halaman1.php">Halaman 1</a>
        <a href="./halaman2.php">halaman 2</a>
        <a href="./halaman3.php">Halaman 3</a>
        
        <!-- cara manggil css class -->
        <div class="kotak">Belajar Web</div>
        <!-- cara manggil css id -->
        <div id="kotak2">Belajar Web</div>
        <!-- cara manggil css class -->
        <div class="kotak">web Desaign</div>
        <!-- cara manggil css dengan tag -->
        <div>MEncoba tag styling</div>
        <h1>Lorem ipsum dolor sit amet.</h1>

        <!-- cara memanggil style 2 cara atau lebih -->
        <div class="kotak text">Lorem ipsum dolor sit amet consectetur.</div>
        
        <!-- cara membuat horizontal scroll -->
        <div class="kotak-besar">
            <div class="kotak-kecil"></div>
            <div class="kotak-kecil"></div>
            <div class="kotak-kecil"></div>
            <div class="kotak-kecil"></div>
            <div class="kotak-kecil"></div>
            <div class="kotak-kecil"></div>
            <div class="kotak-kecil"></div>
            <div class="kotak-kecil"></div>
            <div class="kotak-kecil"></div>
            <div class="kotak-kecil"></div>
            <div class="kotak-kecil"></div>

        </div>
    </body>
</html>