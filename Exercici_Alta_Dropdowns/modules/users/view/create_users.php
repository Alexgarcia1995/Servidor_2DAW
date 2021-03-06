<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
<!-- Script with absolute route -->
<script type="text/javascript" src="modules/users/view/js/users.js" ></script>
<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>ADD USER    </h2>
            <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>

            <form id="form_user" name="form_user"><!---->
                <div class ="form-group">
                    <input type="hidden" name="alta_users" value="alta_users">
                </div>
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" id="name" name="name" placeholder="name" class="form-control" value="" required="required">
                        <div id="e_name"></div>
                    </div>
                    
                    <div class="form-group">
                        <label>Last Name *</label>
                        <input type="text" id="last_name" name="last_name" placeholder="last name" value="" class="form-control" required="required">

                        <div id="e_last_name"></div>
                    </div>
                    
                    <div class="form-group">
                        <label>Date of Birth *</label>
                        <input id="birth_date" type="text" name="birth_date"   class="form-control" value="" placeholder="mm/dd/yyyy" >
                        <div id="e_birth_date"></div>
                    </div>
                    
                    <div class="form-group">
                        <label>Date of obtaining title *</label>
                        <input id="title_date" type="text" name="title_date" placeholder="mm/dd/yyyy" value=""  class="form-control" >
                        <div id="e_title_date"></div>
                    </div>
                    
                    <div class="form-group">
                        <label>Address*</label>
                        <input id="address" type="text" name="address" placeholder="Street nXX ptaX" required="required" value="" class="form-control">
                        <div id="e_address"></div>
                    </div>
                    

                    <div class="form-group">
                        <label>English level</label>
                        <select name="en_lvl" id="en_lvl">
                            <option value ="Select level" selected>Select level</option>
                            <option value="a1">A1</option>
                            <option value="a2">A2</option>
                            <option value="b1">B1</option>
                            <option value="b2">B2</option>
                            <option value="c1">C1</option>
                        </select>
                        <div id="e_en_lvl"></div>
                    </div>

                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>User *</label>
                        <input type="text" id="user" name="user" placeholder="user" class="form-control" value="" required="required" >
                        <div id="e_user"></div>
                    </div>
                    
                    <div class="form-group">
                        <label>Password *</label>
                        <input type="password" id="pass" name="pass" placeholder="pass" class="form-control" value="" required="required">
                        <div id="e_pass"></div>
                    </div>
                    
                    <div class="form-group">
                        <label>Confirm Password *</label>
                        <input type="password" id="conf_pass" name="conf_pass" placeholder="confirm pass" value="" class="form-control" required="required">
                        <div id="e_conf_pass"></div>
                    </div>
                    
                    <div class="form-group">
                        <label>E-mail *</label>
                        <input type="email" id="email" name="email" placeholder="e-mail" class="form-control" value="" required="required" >
                        <div id="e_email"></div>
                    </div>
                    
                    <div class="form-group">
                        <label>Confirm Email *</label>
                        <input type="email" id="conf_email" name="conf_email" placeholder="confirm e-mail" value="" class="form-control" required="required" >
                        <div id="e_conf_email"></div>
                    </div>
                    
                    <div class="form-group">
                        <label>Interests  *</label><br>

                        Computing  <input type="checkbox" name="interests[]" class="messageCheckbox" value="Computing">
                        History  <input type="checkbox" name="interests[]" class="messageCheckbox" value="History">
                        Magic  <input type="checkbox" name="interests[]" class="messageCheckbox" value="Magic">
                        Music   <input type="checkbox" name="interests[]" class="messageCheckbox" value="Music">
                        <div id="e_interests"></div>
                    </div>
                    
                    
                    
                    
                    <div class="form-group" id="progress">
                        <div id="bar"></div>
                        <div id="percent">0%</div >
                    </div>

                    <div class="msg"></div>
                    <br/>
                    <div id="dropzone" class="dropzone"></div><br/>
                    <br/>
                    <br/>
                    <br/>

                    <div class="form-group">
                        <button type="button" id="submit_user" name="submit_user" class="btn btn-primary btn-lg" value="submit">Submit Message</button>
                    </div>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
