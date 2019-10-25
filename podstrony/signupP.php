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
        <!--PANIE EGZAMINATORZE KURWA TU SĄ MOJE A I B DO NICH WPISUJE DANE, PISZĘ DO DLA PANA, MIŁEGO DNIA BRKI TO-->
        <form action="" method="post">
            <label for="email" class="one">Email</label>
            <input type="text" name="email" class="form one">
            <label for="password" class="one">Hasło</label>
            <input type="password" name="password" class="form one">
            <label for="password2" class="one">Potwierdź hasło</label>
            <input type="password" name="password2" class="form one">
            <label for="nick" class="display two">Nick</label>
            <input type="text" name="nick" class="form two display">
            <label for="avatar" class="display two">Zdjęcie profilowe</label>
            <input type="file" accept="image/x-png,image/gif,image/jpeg" name="avatar" class="avatar two display">
            <button class="przycisk cofnij" >cofnij</button>
            <button class="przycisk dalej">dalej</button>
        </form>
    </section>
    <script src="links/form.js"></script>
</body>
</html>