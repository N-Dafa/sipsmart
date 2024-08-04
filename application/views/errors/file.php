<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animasi Teks Berganti ke Arah Bawah</title>
    <style>/* styles.css */

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            margin: 0;
        }
        
        .text-container {
            width: 300px;
            height: 50px;
            overflow: hidden;
            border: 2px solid #333;
            position: relative;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .text-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            transition: transform 0.5s ease-in-out;
            button{
                width: 100%;
                border: 1px solid transparent;
                font-style: normal;
                text-decoration: none;
            }
        }
        
        .text-item {
            height: 50px;
            line-height: 50px;
            text-align: center;
            color: #333;
            font-size: 18px;
        }
        
    </style>
</head>
<body>
    <div class="text-container">
        <div class="text-slide">
            <button class="text-item">Teks Pertama</button>
            <button class="text-item">Teks Kedua</button>
            <button class="text-item">Teks Ketiga</button>
            <button class="text-item">Teks Keempat</button>
            <button class="text-item">Teks Kelima</button>
        </div>
    </div>
    
    <script>
    document.addEventListener('DOMContentLoaded', () => {
    const textSlide = document.querySelector('.text-slide');
    const textItems = document.querySelectorAll('.text-item');
    const totalItems = textItems.length;
    let currentIndex = 0;
    
    setInterval(() => {
        currentIndex = (currentIndex + 1) % totalItems;
        textSlide.style.transform = `translateY(-${currentIndex * 50}px)`;
    }, 2000); // 2000ms atau 2 detik untuk berganti teks
});

    </script>
</body>
</html>
