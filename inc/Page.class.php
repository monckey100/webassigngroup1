<?php 

class Page {
    public static $title = "";

    static function header() { ?>
        <!doctype html>
        <html lang="en">
            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

                <title><?php echo self::$title ;?></title>
            </head>
            <body>
                <h1><?php echo self::$title ;?></h1>
<?php
    }
    static function form() { ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table class="table">
        <tr>
            <td><label for="fname">First Name</label>
                <input type="text" name="fname">
            </td>
            <td><label for="lname">Last Name</label>
                <input type="text" name="lname">
            </td>
        </tr>
        <tr>
            <td><label for="email">Email Address</label>
                <input type="text" name="email">
            </td>
            <td><label for="gender">Gender</label>
                <select name="gender">
                    <option value=male>Male</option>
                    <option value=female>Female</option>
                </select>
            </td>
        </tr>
        <tr>
            <td rowspan=3><label for="address">Stress Address</label>
                <textarea class="text" cols="20" rows ="2" name="address"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="city">City</label>
                <input type="text" name="city">
            </td>
        </tr>
        <tr>
            <td>
                <label for="country">Country</label>
                 <input type="text" name="country">
            </td>
        </tr>
        <tfoot>
            <tr>
                <td><input type="submit" name="submit" value="Previous"> <input type="submit" name="submit" value="Save"> <input type="submit" name="submit" value="Delete"> <input type="submit" name="submit" value="Next"></td>
            </tr>
        </tfoot>
        </table>
    </form>

    <?php }

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