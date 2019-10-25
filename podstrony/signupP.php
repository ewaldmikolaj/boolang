<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section id="right">
        <div id="progress">
            <div class="active"><p>1</p></div>
            <div></div>
            <div><p>2</p></div>
            <div></div>
            <div><p>3</p></div>
        </div>
        <form action="" method="post">
            <div class="one">
                <label for="email">Email</label>
                <input type="text" name="email" class="form">
                <label for="password" >Hasło</label>
                <input type="password" name="password" class="form">
                <label for="password2" class="one">Potwierdź hasło</label>
                <input type="password" name="password2" class="form">
            </div>
            <!-- 
            1. felxboxy
            2. dać wszedzie klase display, w sensie na sekcje
            3, przerobić tego cssa i htmla
            -->
            <div class="display two"> 
                <label for="nick">Nick</label>
                <input type="text" name="nick" class="form">
                <div class="profile-picture"></div>
                <label for="avatar" class="fileContainer two">Zdjęcie profilowe
                <input type="file" accept="image/x-png,image/gif,image/jpeg" name="avatar" class="avatar">
                </label>
            </div>
            
            <div>
                <button class="przycisk cofnij" >cofnij</button>
                <button class="przycisk dalej">dalej</button>
            </div>
        </form>
    </section>
    <script src="links/form.js"></script>
</body>
</html>