<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../bootstrap-4.4.1-dist/css/bootstrap.css">
    <title>BooLang | Admin | Fiszki</title>
</head>
<body style="background-color: #1B98E0;" class="overflow-hidden container">
    <a href="./admin.php" class="position-absolute" style="top: 10px; right: 15px;"><button type="button" class="btn btn-light">Wyjdź</button></a>
    <div style="width: 70rem; margin-top: 5rem;" class="row">
            <table class="table table-hover col-md-12 align-self-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nazwa zestawu</th>
                        <th scope="col">Ilość słówek</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Data utworzenia</th>
                        <th scope="col">Typ</th>
                        <th class="text-center" scope="col">Usuń</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="align-middle" scope="row">1</th>
                        <td class="align-middle">Super angielski</td>
                        <td class="align-middle">250</td>
                        <td class="align-middle">Mikołaj Ewald</td>
                        <td class="align-middle">02.12.2010</td>
                        <td>Publiczny</td>
                        <td class="text-center align-middle"><i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td class="align-middle">Słaby niemiecki</td>
                        <td class="align-middle">120</td>
                        <td class="align-middle">BooBoo</td>
                        <td class="align-middle">01.01.2020</td>
                        <td>Prywatny</td>
                        <td class="align-middle text-center"><i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <th class="align-middle" scope="row">3</th>
                        <td class="align-middle" class="align-middle">Super Hiszpański</td>
                        <td class="align-middle">1000</td>
                        <td class="align-middle">Kowalski</td>
                        <td class="align-middle">03.10.2000</td>
                        <td>Publiczny</td>
                        <td class="align-middle text-center"><i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <th class="align-middle" scope="row">4</th>
                        <td class="align-middle">Słaby niemiecki</td>
                        <td class="align-middle">250</td>
                        <td class="align-middle">Kowalski</td>
                        <td class="align-middle">03.10.2000</td>
                        <td>Prywatny</td>
                        <td class="align-middle text-center"><i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <th class="align-middle" scope="row">5</th>
                        <td class="align-middle" class="align-middle">Super Hiszpański</td>
                        <td class="align-middle">250</td>
                        <td class="align-middle">Joanna</td>
                        <td class="align-middle">02.12.2010</td>
                        <td>Prywatny</td>
                        <td class="align-middle text-center"><i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <th class="align-middle" scope="row">6</th>
                        <td class="align-middle">Słaby niemiecki</td>
                        <td class="align-middle">198</td>
                        <td class="align-middle">Szeregowy</td>
                        <td class="align-middle">02.12.2010</td>
                        <td>Publiczny</td>
                        <td class="align-middle text-center"><i class="fa fa-trash"></i></td>
                        </tr>
                    <tr>
                        <th class="align-middle" scope="row">7</th>
                        <td class="align-middle" class="align-middle">Super Hiszpański</td>
                        <td class="align-middle">268</td>
                        <td class="align-middle">Kowalski</td>
                        <td class="align-middle">03.10.2000</td>
                        <td>Prywatny</td>
                        <td class="align-middle text-center"><i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <th class="align-middle" scope="row">8</th>
                        <td class="align-middle" class="align-middle">Super Hiszpański</td>
                        <td class="align-middle">250</td>
                        <td class="align-middle">Jasiu</td>
                        <td class="align-middle">01.01.2020</td>
                        <td>Publiczny</td>
                        <td class="align-middle text-center"><i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <th class="align-middle" scope="row">9</th>
                        <td class="align-middle">Słaby niemiecki</td>
                        <td class="align-middle">127</td>
                        <td class="align-middle">Kowalski</td>
                        <td class="align-middle">02.12.2010</td>
                        <td>Publiczny</td>
                        <td class="align-middle text-center"><i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <th class="align-middle" scope="row">10</th>
                        <td class="align-middle">Super angielski</td>
                        <td class="align-middle">300</td>
                        <td class="align-middle">Ania</td>
                        <td class="align-middle">01.01.2020</td>
                        <td>Publiczny</td>
                        <td class="align-middle text-center"><i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <th class="align-middle" scope="row">11</th class="align-middle">
                            <td class="align-middle">Super angielski</td>
                        <td class="align-middle">1000</td>
                        <td class="align-middle">Ty</td>
                        <td class="align-middle">03.10.2000</td>
                        <td>Prywatny</td>
                        <td class="align-middle text-center"><i class="fa fa-trash"></i></td>
                    </tr>
                </tbody>
            </table>
    </div>
</body>
</html>