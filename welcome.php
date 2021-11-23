<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DATABASE</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Birthstone+Bounce:wght@500&family=Handlee&family=Merriweather&family=Pacifico&family=Rampart+One&display=swap"
        rel="stylesheet">
</head>

<body>
    <section class="container p-3 welcome-page">
        <h1>
            Your data have saved properly with all Security. 🔐
        </h1>
        <legend>

            <h1>
                <?php echo  $Fname; ?><br><?php echo  $Nname; ?></h1>

            <img class="responsive" width="600" height="400"
                src="https://www.newsfolo.com/wp-content/uploads/2017/11/hello.jpg"
                alt="error,plz check your connection">
        </legend>
    </section>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>