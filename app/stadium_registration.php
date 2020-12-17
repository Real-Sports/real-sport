<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--CSS-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <section id="form">
        <div class="container">

            <h3>Personal Details</h3>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Name" name="name" required="required" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="tel" id="phone_number" placeholder="Phone" name="phone_number" required="required" class="form-control" pattern="[6789][0-9]{10}">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" placeholder="Email" name="email" required="required" class="form-control">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="">Photo</label>
                    <input type="file" placeholder="photo" name="image" required="required" class="form-control">
                </div>    
            </div>

            <h3>Stadium Details</h3>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="sport">Sport</label>
                    <select name="sport" id="sport" required="required" class="form-control">
                        <option value="">Select Sport</option>
                        <option value="indoor">Indoor</option>
                        <option value="outdoor">Outdoor</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="">Photo 1</label>
                    <input type="file" placeholder="Photo" name="image_1" required="required" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="">Photo 2</label>
                    <input type="file" placeholder="Photo" name="image_2" required="required" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="">Photo 3</label>
                    <input type="file" placeholder="Photo" name="image_3" required="required" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="">Stadium Name</label>
                    <input type="text" placeholder="Name" name="stadium_name" required="required" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="">Door Number</label>
                    <input type="text" placeholder="door-number" name="door_number"required="required" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="">Area</label>
                    <input type="text" placeholder="Area" name="area"required="required" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="">Land Mark</label>
                    <input type="text" placeholder="Landmark" name="landmark" required="required" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="">City</label>
                    <input type="text" placeholder="City" name="city" required="required" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="">Pincode</label>
                    <input type="number" placeholder="Pincode" name="pincode" required="required" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="types">Type</label>
                    <select name="games" id="game" required="required" class="form-control">
                        <option value="">Select Type</option>
                        <option value="indoor">Indoor</option>
                        <option value="outdoor">Outdoor</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="timee">Opening time</label>
                    <input type="time" id="appt" name="timing_open" required="required" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="timee">Closing time</label>
                    <input type="time" id="appt" name="timing_close" required="required" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="">Pay Per Hour</label>
                    <input type="text" placeholder="Pay Per Hour" name="pay_per_hour" required="required" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <label for="">Pay Per Day</label>
                    <input type="text" placeholder="Pay Per Day" name="pay_per_day" required="required" class="form-control">
                </div>
            </div>

            <h3>Features</h3>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <input type="checkbox" id="vehicle1" name="accessory_1" class="cherem">
                    <label for="vehicle1"> Accessory</label>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                    <input type="checkbox" id="vehicle1" name="facility_1" class="cherem">
                    <label for="vehicle1"> Facility</label>
                </div>
            </div>

        </div>
    </section>
    <!--Script-->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>