<?php 

class Page {
    public static $title = "";

    // create the header with the title
    static function header() { ?>
        <!doctype html>
        <html lang="en">
            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <!-- Personal CSS -->
                <link rel="stylesheet" href="css/css.css" />

                <title><?php echo self::$title ;?></title>
            </head>
            <body>
                <h1><?php echo self::$title ;?></h1>
<?php
    }
    // create the form, get the data and include on the inputs
    static function form($Person) { ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table class="table">
        <tr>
            <td><label for="fname">First Name</label> <br />
                <input type="text" name="fname" value="<?php echo $Person->getFirstName(); ?>">
            </td>
            <td><label for="lname">Last Name</label> <br />
                <input type="text" name="lname" value="<?php echo $Person->getLastName(); ?>">
            </td>
        </tr>
        <tr>
            <td><label for="email">Email Address</label> <br />
                <input type="text" name="email" value="<?php echo $Person->getEmail(); ?>">
            </td>
            <td><label for="gender">Gender</label> <br />
                <select name="gender">
                    <option value=male <?php if($Person->getGender() === 0) { echo 'selected';} ?>>Male</option>
                    <option value=female <?php if($Person->getGender() !== 0) { echo 'selected';} ?>>Female</option>
                </select>
            </td>
        </tr>
        <tr>
            <td rowspan=3><label for="address">Stress Address</label> <br />
                <textarea class="text" cols="20" rows ="2" name="address"><?php echo $Person->getAddress(); ?></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="city">City</label> <br />
                <input type="text" name="city" value="<?php echo $Person->getCity(); ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="country">Country</label> <br />
                 <input type="text" name="country" value="<?php echo $Person->getCountry(); ?>">
            </td>
        </tr>
        </table>
        <input type="submit" name="submit" value="Previous" id="prev" >
        <input type="submit" name="submit" value="Save" id="sav" >
        <input type="submit" name="submit" value="Delete" id="del" >
        <input type="submit" name="submit" value="Next" id="nxt" >
        <input type="hidden" name="hiddenID" value="<?php echo $_POST["hiddenID"]; ?>">
    </form>

    <?php }

    // print the errors if they exist on the screen
    static function printErrors($errors) {
        echo "<ul>";
        foreach($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul>";
    }

    // the footer of the page
    static function footer() { ?>
                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            </body>
        </html>
<?php
    }
}

?>