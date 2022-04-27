<!DOCTYPE html>
<html lang="en">
<!--
    Saikrishna S 
    PHP database connection 

-->

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
    .wrapper {
        width: 500px;
        margin: 0 auto;
    }

    body {
        background-color: #8ab9f1;
    }

    /**div {
        display: inline-block;
    }

    div label {
        display: block;
    }**/
    </style>
    <!--<script type="text/javascript">
    function validateForm() {
        return checkEmail();
    }

    function checkeEmail() {
        var email = document.forms["myForm"]["email"].value;
        var format = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/"
        if (email.value.match(format)) {
            return true;
        } else {
            document.getElementById("email").className = document.getElementById("email").className + " error";
            return false;
        }
    }
    </script>-->
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h3>Owner Name</h3>
                    </div>
                    <form action="insert.php" method="post" name="myForm" onsubmit="return validateForm()">
                        <div class="form-group" style="display: inline-block;">
                            <label style="display: block;">First Name</label>
                            <input type="text" name="fname" class="form-control">
                        </div>
                        <div class="form-group" style="display: inline-block;">
                            <label style="display:block">Last Name</label>
                            <input type="text" name="lname" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Cell phone number</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <br>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <br>

                        <div class="form-group" style="display: inline-block;">
                            <label style="display: block;">Pet First name</label>
                            <input type="text" name="rpass" class="form-control">
                        </div>
                        <div class="form-group" style="display: inline-block;">
                            <label style="display: block;">Pet Last name</label>
                            <input type="text" name="pass" class="form-control">
                        </div>
                        <hr>
                        <h1>Grooming Instructions</h1>
                        <label>
                            <h3>Grooming choice</h3>
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                                value="Basic Grooming">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Basic Grooming: (Bath, Ear Cleaning, Nail Trim)
                            </label>
                        </div><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                value="Partial">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Partial Groom
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                value="Full Service">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Full-service
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                value="Same as before">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Same as before
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                value="Other">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Other
                            </label>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>