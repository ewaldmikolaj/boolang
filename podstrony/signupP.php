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
        <form action="index.php" method="post">
            <div class="one">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="podaj e-mail">
                <label for="password" >Hasło</label>
                <input type="password" name="password" placeholder="wpisz hasło">
                <label for="password2" class="one">Potwierdź hasło</label>
                <input type="password" name="password2" placeholder="potwierdź hasło">
            </div>

            <div class="display two"> 
                <label for="nick">Nick</label>
                <input type="text" name="nick">
                <div>
                    <div class="profile-picture"></div>
                        <label for="avatar" class="fileContainer two">Wybierz zdjęcie profilowe
                            <input type="file" accept="image/x-png,image/gif,image/jpeg" name="avatar" class="avatar">
                        </label>
                </div>
            </div>

            <div class="display three">
                <label for="language">Wybierz język</label>
                <select name="language">
                    <option value="English">Angielski</option>
                    <option value="German">Niemiecki</option>
                    <option value="French">Francuski</option>
                </select>
                <label for="oSobie">Kilka zdań o sobie</label>
                <textarea name="oSobie" cols="50" rows="10" wrap="off">
                </textarea>
            </div>
            <div>
                <button class="przycisk cofnij" >cofnij</button>
                <button class="przycisk dalej">dalej</button>
                <input type="submit" class="przycisk send display" value="Zarejestruj">
            </div>
        </form>
    </section>
    <script src="links/form.js"></script>
</body>
</html>