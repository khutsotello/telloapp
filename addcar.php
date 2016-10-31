<?php
error_reporting(E_ALL);
require '../core/init.php';

//$general->logged_out_protect();

$username   = htmlentities($user['username']); // storing the user's username after clearning for any html tags.
$user_id    = htmlentities($user['id']); // storing the user's username after clearning for any html tags.

$make = $cars->display_make(); 

if (isset($_POST['sabmit'])) {

$make             = htmlentities($_POST['make']);
$model            = htmlentities($_POST['model']);
$varient          = htmlentities($_POST['varient']);
$mileage          = htmlentities($_POST['mileage']);
$color            = htmlentities($_POST['color']);
$price            = htmlentities($_POST['price']);
$condition        = htmlentities($_POST['condition']);
$extras           = htmlentities($_POST['extras']);
$other_features   = htmlentities($_POST['other_features']);
//$image            = htmlentities($_POST['image']);
$transmision      = htmlentities($_POST['transmision']);
$fuel_type        = htmlentities($_POST['fuel_type']);
$area             = htmlentities($_POST['area']);

$cars->add_car($user_id,$make,$model,$varient,$mileage,$color,$price,$condition,$extras,$other_features,$transmision,$fuel_type,$area);
 //header('Location:make.php'.$_SERVER['REQUEST_URL']);

}



?>

<!DOCTYPE html>
<html>
    <head>   
    </head>
    <body>
                  <form method="post" class="noo-form property-form" role="form" enctype="multipart/form-data" >

        
                                <label>Make:
                                    <select name="make" onChange="showState(this);">
                                        <option value="">Please Select</option>
                                        <?php foreach ($make as $rs) { ?>
                                            <option  value="<?php echo $rs["id"]; ?>"><?php echo $rs["make"]; ?></option>
                                        <?php } ?>
                                    </select>
                               
                            <td align="center" height="50"><div id="output1"></div> </td>




                            <div class="col-md-12">
                        <div class="form-group s-prop-title">
                          <label for="title">Varient&nbsp;&#42;</label>
                          <input type="text" id="varient" class="form-control" value="<?php if(isset($_POST['varient'])) echo htmlentities($_POST['varient']); ?>" name="varient" required="">
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group s-prop-title">
                          <label for="title">Milage&nbsp;&#42;</label>
                          <input type="text" id="mileage" class="form-control" value="<?php if(isset($_POST['mileage'])) echo htmlentities($_POST['mileage']); ?>" name="mileage" required="">
                        </div>
                      </div>

                         <div class="col-md-12">
                        <div class="form-group s-prop-title">
                          <label for="title">Color&nbsp;&#42;</label>
                          <input type="text" id="color" class="form-control" value="<?php if(isset($_POST['color'])) echo htmlentities($_POST['color']); ?>" name="color" required="">
                        </div>
                      </div>

                        <div class="col-md-12">
                        <div class="form-group s-prop-title">
                          <label for="title">Price&nbsp;&#42;</label>
                          <input type="text" id="price" class="form-control" value="<?php if(isset($_POST['price'])) echo htmlentities($_POST['price']); ?>" name="price" required="">
                        </div>
                      </div>
                     <div class="col-md-4">
                        <div class="form-group s-prop-location">
                          <label>Condition</label>
                          <div class="dropdown label-select">
                            <select name="condition" class="form-control">
                              <option value=""><?php if(isset($_POST['condition'])) echo htmlentities($_POST['condition']); ?></option>
                              <option value=""> - Select - </option>
                              <option value="Manual">Manual</option>
                              <option value="Autamatic">Autamatic</option>
                            </select>
                          </div>
                        </div>
                      </div>
                  </div>


                         <div class="col-md-12">
                        <div class="form-group s-prop-title">
                          <label for="title">Extras&nbsp;&#42;</label>
                          <input type="text" id="extras" class="form-control" value="<?php if(isset($_POST['extras'])) echo htmlentities($_POST['extras']); ?>" name="extras" required="">
                        </div>
                      </div>

                           <div class="col-md-12">
                        <div class="form-group s-prop-desc">
                          <label for="textarea">Other Features&nbsp;&#42;</label>
                          <textarea id="textarea" name="other_features" rows="10" value="<?php if(isset($_POST['other_features'])) echo htmlentities($_POST['other_features']); ?>" name="other_features" required=""></textarea>
                        </div>
                      </div>  

                       <div class="noo-control-group">
                    <div class="group-title">Dealer Logo</div>
                    <div class="group-container row">
                      <div class="col-md-12">
                        <div id="upload-container">
                          <div id="aaiu-upload-container">
                            <div class="moxie-shim moxie-shim-html5">
                              <label for="input-upload" class="btn btn-secondary btn-lg">Select Images</label>
                                      <input type ="hidden" name="MAX_FILE_SIZE" value="5000000">
                                      <input id="input-upload" type ="file" name="image">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                        <div class="col-md-4">
                        <div class="form-group s-prop-location">
                          <label>Transmision</label>
                          <div class="dropdown label-select">
                            <select name="transmision" class="form-control">
                              <option value=""><?php if(isset($_POST['transmision'])) echo htmlentities($_POST['transmision']); ?></option>
                              <option value=""> - Select - </option>
                              <option value="New">New</option>
                              <option value="Used">Used</option>
                              
                            </select>
                          </div>
                        </div>
                      </div>

<div class="col-md-4">
                        <div class="form-group s-prop-location">
                          <label>Fuel Type</label>
                          <div class="dropdown label-select">
                            <select name="fuel_type" class="form-control">
                              <option value=""><?php if(isset($_POST['fuel_type'])) echo htmlentities($_POST['fuel_type']); ?></option>
                              <option value=""> - Select - </option>
                              <option value="Disiel">Disiel</option>
                              <option value="Petrol">Petrol</option>
                            </select>
                          </div>
                        </div>
                      </div>


                        <div class="col-md-4">
                        <div class="form-group s-prop-location">
                          <label>Country</label>
                          <div class="dropdown label-select">
                            <select name="area" class="form-control">
                              <option value=""><?php if(isset($_POST['area'])) echo htmlentities($_POST['area']); ?></option>
                              <option value=""> - Select - </option>
                              <option value="South Africa">South Africa</option>
                              <option value="South Africa">Namibia</option>
                              
                            </select>
                          </div>
                        </div>
                      </div>

                      <input type="submit" name="sabmit"/>

                        

     
        </form>

        <script src="jquery-1.9.0.min.js"></script>

  <script src="jquery-1.9.0.min.js"></script>
        <script>
                    function showState(sel) {
                        var make_id = sel.options[sel.selectedIndex].value;
                        $("#output1").html("");
                        $("#output2").html("");
                        if (make_id.length > 0) {

                            $.ajax({
                                type: "POST",
                                url: "model.php",
                                data: "make_id=" + make_id,
                                cache: false,
                                beforeSend: function() {
                                    $('#output1').html('<img src="loader.gif" alt="" width="24" height="24">');
                                },
                                success: function(html) {
                                    $("#output1").html(html);
                                }
                            });
                        }
                    }

                    function showCity(sel) {
                        var state_id = sel.options[sel.selectedIndex].value;
                        if (state_id.length > 0) {
                            $.ajax({
                                type: "POST",
                                url: "fetch_city.php",
                                data: "state_id=" + state_id,
                                cache: false,
                                beforeSend: function() {
                                    $('#output2').html('<img src="loader.gif" alt="" width="24" height="24">');
                                },
                                success: function(html) {
                                    $("#output2").html(html);
                                }
                            });
                        } else {
                            $("#output2").html("");
                        }
                    }
        </script>

    </body>
</html>
