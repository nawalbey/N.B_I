<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <form class="flex1">
        <ul class="flex">
            <li>
                <label for="sexe">Civilité</label><br>
                <select name="pets" id="pet-select">
                    <option value="dog">sexe</option>
                    <option value="cat">femme</option>
                    <option value="homme">homme</option>
                </select>

            </li>

            <li>
                <label for="name">first name&nbsp;:</label><br>
                <input type="text" id="name" name="user_name" />
            </li>

            <li>
                <fieldset>
                    <legend>Select votre pays</legend>

                    <div>
                        <input type="radio" id="france" name="drone" value="france" checked />
                        <label for="france">france</label>
                    </div>

                    <div>
                        <input type="radio" id="allemagne" name="drone" value="allemagne" />
                        <label for="allemagne">allemagne</label>
                    </div>

                    <div>
                        <input type="radio" id="italie" name="drone" value="italie" />
                        <label for="italie">italie</label>
                    </div>
                </fieldset>
            </li>
            <li>
                <label for="lastName">last name&nbsp;:</label><br>
                <input type="text" id="lastName" name="user_lastName" />
            </li>
            <li>
                <label for="email">E-mail&nbsp;:</label><br>
                <input type="email">
            </li>

            <li>

                <fieldset>
                    <legend>veuillez accepte les condition</legend>

                    <div>
                        <input type="checkbox" id="oui" name="oui" checked />
                        <label for="oui">oui</label>
                    </div>

                    <div>
                        <input type="checkbox" id="non" name="non" />
                        <label for="non">non</label>
                    </div>
                </fieldset>
            </li>
            <input type="submit" class="submit">
        </ul>





    </form>
</body>

</html>