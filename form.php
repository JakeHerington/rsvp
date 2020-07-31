<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='stylesheet' type='text/css' href='bootstrap-4.3.1-dist/css/bootstrap.css'>
    <title>Jake & Jenny's Wedding RSVP</title>
    <style type='text/css'>
    body {
        background: black !important;
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src='bootstrap-4.3.1-dist/js/bootstrap.js'></script>
    <script src="bootstrap-4.3.1-dist/js/custom.js"></script>
</head>
<body>

    <div class='container mt-3'>
        <div class='row'>
            <div class='col'></div>
            <div class='col align-self-center'>
                <img class='img-fluid' src='img/logoTransparent.png' />
            </div>
            <div class='col'></div>
        </div>
    </div>
    
    <?php session_start();?>

    <div class='container'>
        <div class='row mt-5'>
            <div class='col-12'>
                <div class='col-3'></div>
                <div class='col ml-5'>
                    <h2 class='text-white'>Hello <?php echo $_SESSION['name']?></h2>
                </div>
                <div class='col-3'></div>
            </div>
        </div>
        <div class='row'>
            <div class='col-1'></div>
            <div class='col-10 mt-3'>
                <form id='form' class='p-4 mb-3 rounded-lg' action='process_form.php' method='post' onsubmit='return validate()'>
                    <div class="form-group row col">
                        <label class='col-sm-4 col-form-label text-white' for='attending'>Attending?</label>
                        <div class='col-align-centre'>
                            <button name='attending' type='button' class='btn-lg bg-warning btn-outline-warning text-white p-3' onclick='toggleYes()'>Yes</button>
                            <input type='checkbox' id='attending-yes' name='attending' value='yes' class='d-none'>
                        </div>
                        <div class='col'>
                            <button name='attending' type='button' class='btn-lg bg-warning btn-outline-warning text-white p-3' onclick='toggleNo()'>No</button>
                            <input type='checkbox' id='attending-no' name='attending' value='no' class='d-none'>
                        </div>
                    </div>
                    <div id='yes' class='collapse'> 
                        <div class='form-group row'>
                            <label class='col-sm-4 col-form-label text-white' for='totalAttending'>How many will be attending?</label><br />
                            <div class='col-sm-6'></div>
                            <div class='col-sm-2 float-right'>
                                <select class='form-control' id='totalAttending' name='total-attending' onchange="show(value);">
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                </select><br />
                            </div>
                        </div>
                        <div class='form-group row'>
                            <div class='col-sm-4'>
                                <label class='text-white col-form-label'>Attendee names:</label><br />
                            </div>
                            <div class='col-sm-8'>
                                <input type='text' class='form-control' id='a1-fName' name='a1-fName' placeholder='First Name'>
                                <input type='text' class='form-control mt-1' id='a1-lName' name='a1-lName' placeholder='Last Name'><br />
                                <p class='text-white'>Dietary Restrictions:</p>
                                <div class='col-sm-3 float-right mt-n3'>
                                    <input type='radio' id='a1-none' name='a1-diet' value='none'>
                                    <label class='col-form-label text-white' for='a1-none'>None</label>
                                </div>
                                <div class='col-sm-3 float-right mt-n3'>
                                    <input type='radio' id='a1-veg' name='a1-diet' value='vegetarian'>
                                    <label class='col-form-label text-white' for='a1-veg'>Vegetarian</label>
                                </div>
                                <div class='col-sm-3 float-right mt-n3'>
                                    <input type='radio' id='a1-vegan' name='a1-diet' value='vegan'>
                                    <label class='col-form-label text-white' for='a1-vegan'>Vegan</label>
                                </div>
                                <div class='col-sm-3 float-right mt-n3 mb-4'>
                                    <input type='checkbox' id='a1-gf' name='a1-diet' value='yes'>
                                    <label class='col-form-label text-white' for='a1-gf'>Gluten Free</label>
                                </div>
                                <div class='collapse' id='a2'>
                                    <input type='text' class='form-control' id='a2-fName' name='a2-fName' placeholder='First Name'>
                                    <input type='text' class='form-control mt-1' id='a2-lName' name='a2-lName' placeholder='Last Name'><br />
                                    <p class='text-white'>Dietary Restrictions:</p>
                                    <div class='col-sm-3 float-right mt-n3'>
                                        <input type='radio' id='a2-none' name='a2-diet' value='none'>
                                        <label class='col-form-label text-white' for='a2-none'>None</label>
                                    </div>
                                    <div class='col-sm-3 float-right mt-n3'>
                                        <input type='radio' id='a2-veg' name='a2-diet' value='vegetarian'>
                                        <label class='col-form-label text-white' for='a2-veg'>Vegetarian</label>
                                    </div>
                                    <div class='col-sm-3 float-right mt-n3'>
                                        <input type='radio' id='a2-vegan' name='a2-diet' value='vegan'>
                                        <label class='col-form-label text-white' for='a2-vegan'>Vegan</label>
                                    </div>
                                    <div class='col-sm-3 float-right mt-n3 mb-4'>
                                        <input type='checkbox' id='a2-gf' name='a2-gf' value='yes'>
                                        <label class='col-form-label text-white' for='a2-gf'>Gluten Free</label>
                                    </div>
                                </div>
                                <div class='collapse' id='a3'>
                                    <input type='text' class='form-control' id='a3-fName' name='a3-fName' placeholder='First Name'>
                                    <input type='text' class='form-control mt-1' id='a3-lName' name='a3-lName' placeholder='Last Name'><br />
                                    <p class='text-white'>Dietary Restrictions:</p>
                                    <div class='col-sm-3 float-right mt-n3'>
                                        <input type='radio' id='a3-none' name='a3-diet' value='none'>
                                        <label class='col-form-label text-white' for='a3-none'>None</label>
                                    </div>
                                    <div class='col-sm-3 float-right mt-n3'>
                                        <input type='radio' id='a3-veg' name='a3-diet' value='vegetarian'>
                                        <label class='col-form-label text-white' for='a3-veg'>Vegetarian</label>
                                    </div>
                                    <div class='col-sm-3 float-right mt-n3'>
                                        <input type='checkbox' id='a3-vegan' name='a3-diet' value='vegan'>
                                        <label class='col-form-label text-white' for='a3-vegan'>Vegan</label>
                                    </div>
                                    <div class='col-sm-3 float-right mt-n3 mb-4'>
                                        <input type='checkbox' id='a3-gf' name='a3-gf' value='yes'>
                                        <label class='col-form-label text-white' for='a3-gf'>Gluten Free</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='col-12'>
                            <p class='card card-body bg-dark border-warning text-white'>If enough people are interested, we may be able to secure a package deal
                            for cheaper accomodation at the Clarendon Hotel.<br></p> 
                        </div>
                        <div class='form-group row'>
                            <div class='col-auto mr-5'>
                                <p class='text-white'>Please check this box if<br> you are interested.</p>
                            </div>
                            <div class='col-auto ml-5 mt-3'>
                                <input type='checkbox' id='accomodation' name='accom' value='yes'>
                            </div>
                        </div>
                        <div class='form-group row'>
                            <div class='col-sm-12'>
                                <label class='col-form-label text-white' for='message'>Send us a message or special request.</label><br />
                                <textarea class='form-control' name='message' id='message' rows='5' placeholder='optional...'></textarea>
                            </div>
                        </div>
                    </div>
                    <div id='no' class='collapse'>
                        <div class='form-group row'>
                            <div class='col-sm-12'>
                                <label class='col-form-label text-white' for='message-n'>Send us a message.</label><br />
                                <textarea class='form-control' name='message-n' id='message-n' rows='5' placeholder='optional...'></textarea>
                            </div>
                        </div>
                    </div>
                    <div class='form-group row mt-5'>
                        <div class='col-sm-12'>
                            <input class="btn btn-success btn-lg" type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
            <div class='col-1'></div>
        </div>
    </div>
</body>
</html>