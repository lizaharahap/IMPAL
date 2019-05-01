<div class="container-fluid">
		<img src="<?=base_url()?>assets/coba1.png" style="width: 80px; height: 80px; margin-left: 580px; transform: translateY(30%); ">
	<div class="dropdown">
        <button type="button" class="btn btn-primary btn-md dropdown-toggle" data-toggle="dropdown" style="background-color: #d2d3d5; color: #606062; border: none; transform: translateX(2000%);">setting</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Language</a>
        </div>
    </div>

    	<div class="jumbotron jumbotron-fluid" style="background-color: #fff212; margin-top: 40px;">
    <div class="container" align="center" style="transform: translateY(-5%);">
        <p style="font-weight:600; font-size:24px; color:black; ">Register</p>
        <form align="left" action="<?=base_url()?>controller/add_user" method="post">
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label form_font">E-mail</label>
                <div class="col-sm-10">
                    <input class="form-control" type="email" id="email" name="email"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label form_font">Full Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="name" name="name"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label form_font">username</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="username" name="username"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label form_font">Password</label>
                <div class="col-sm-10">
                    <input class="form-control" type="password" id="pass" name="pass"/>
                </div>
            </div>
            <!-- <div class="form-group row">
                <label for="re-pass" class="col-sm-2 col-form-label form_font">Password Confirmation</label>
                <div class="col-sm-10">
                    <input class="form-control" type="password" id="re_pass"name="re_pass"/>
                </div>
            </div> -->
            <div class="form-group row">
                <label for="addres" class="col-sm-2 col-form-label form_font">Addres</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="addres" name="addres"/>
                </div>
            </div> 
            <div class="form-group row">
                <label for="phoneno" class="col-sm-2 col-form-label form_font">Phone No</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="phoneno" name="phoneno"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label form_font">Gender</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="gender" name="gender"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="age" class="col-sm-2 col-form-label form_font">Age</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="age" name="age"/>
                </div>
            </div>
            <!--  -->
            <div class="form-group row">
                <p class="col-sm-2 col-form-label"></p>
                <div class="col-sm-10" align="right">
                    <button type="submit" name="add_user"class="btn"  style="border-color:black; color:black">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
	</div>