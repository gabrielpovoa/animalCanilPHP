
<?php
require("./classes/process_form.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER ANIMAL - VIEW</title>
</head>
<body>
<section class="register">
        <div class="box-heading">
            <h1>ANIMAL REGISTER 🐠🐕‍🦺🐈‍⬛</h1>
        </div>
    <form action="../registered/Registered.php" method="POST" enctype="multipart/form-data">
            <label for="animalName">
                Enter the animal Name:
                <input type="text" class="box" id="animalName" name="Name"/>
            </label>
            <label >
                Select the animal Sex:
                <label for="female">
                    female
                    <input type="radio" id="female" name="SexAnimal" value="Female"/>
                </label>
                <label for="male">
                    male
                    <input type="radio" id="male" name="SexAnimal" value="Male"/>
                </label>
            </label>
            <label for="animalPhoto">
                insert a picture of your pet
                <input type="file" name="Animalphoto" id="animalPhoto" hidden>
            </label>
            <div class="form-control">
                <input type="submit" value="Send" class="send">
                <a href="../registered/Registered.php" class="see">See Registre Animals</a>
            </div>
        </form>
    </section>
</body>
</html>