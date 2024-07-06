<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>...</title>
<style>
body{
    margin: 0;
    padding: 0;
}
section{
    width: 100%;
    height: 100vh;
    align-items: center;
    justify-content: center;
    display: flex;
    background-color: black;
}
#border{
    width: 100%;
    height: 100%;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
#border::before{
    content: "";
    background-image: conic-gradient(
        #fe0000,
        #fff001,
        #00ce01,
        #01ffff,
        #0000fe,
        #ff01ff,
        #fe0000

    );
    width: 250%;
    height: 250%;
    position: absolute;
    border: 1px solid white;

    animation: rotate 3s linear infinite;
}
.text{
    content: "";
    font-size: 40px;
    width: 99%;
    height: 98.5%;
    background: black;
    background-position: center;
    background-size: cover;
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}
#border,
.text{
    border-radius: 10px;
}
@keyframes rotate{
    0%{transform: rotate(0deg);}
    100%{transform: rotate(360deg);}
}
button{
    top: -100px;
    position: absolute;
}
</style>
</head>
<body>
    <section id="loading">
        <div id="border">
            <div class="text">
                <form style="opacity: 0.1;" action="" method="post">
                <input type="text" name="id" autofocus size="1" autocomplete="off" style="font-size: 20px;"><button type="submit" name="btn">.</button>
                </form>
                <?php
                if (isset($_POST['btn'])) {
                    $id = $_POST['id'];
                    if ($id == 1) {
                        header("location:login");
                        exit;
                    }
                    elseif ($id == 2) {
                        header("location:https://docs.google.com/presentation/d/1Snse4XEATDJv7JtS57zI0bh4BgQi4RuB/edit?usp=drivesdk&ouid=107874785746122528925&rtpof=true&sd=true");
                        exit;
                    }
                }
                ?>
            </div>
        </div>
    </section>
</body>
</html>