<div class="container-fluid">
    <img src="<?=base_url()?>assets/coba1.png" style="width: 80px; height: 80px; margin-left: 580px; transform: translateY(45%); ">
    <div class="dropdown">
        <button type="button" class="btn btn-primary btn-md dropdown-toggle" data-toggle="dropdown" style="background-color: #d2d3d5; color: #606062; border: none; transform: translateX(1600%);">setting</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Language</a>
        </div>
    </div>
        <div class="container">
            <br><br><br><br><br>
            <div class="row">
                <div class="col"></div>
                    <div class="col-5" style="background-color:#fff212; padding: 5px; border-radius: 10px">
                        <div class="text-center">
                            <br>
                            <h3 style="color:black;"> <b> Login </b> </h3>
                        </div>
                    <div id="Container" class="text-center" style="padding-top:30px;">
                        <div class="container-content-middle">
                            <form id="loginform" action="<?php echo base_url()?>index.php/controller/login_check" method="post" class="m-x-auto app-login-form">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="form-group col-6">
                                        <input type="text" placeholder="Username" class="form-control" id="username" name="username" value="">
                                    </div>
                                    <div class="col"></div>
                               </div>
                               <div class="row">
                                    <div class="col"></div>
                                    <div class="form-group col-6">
                                        <input type="password" placeholder="password" class="form-control" id="password" name=pasword" value="">
                                    </div>
                                    <div class="col"></div>
                               </div>
                               <div class="row">
                                    <div class="col-4"></div>
                                    <div class="row">
                                        <div class="col" style="transform: translateX(38%);">
                                            <button type="submit" class="btn btn-default-outline" style="width:80px;font-size:14px;border-color:black;color:black;"> Login </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <p style="color:blue;font-size:10px;">Didn't have account?</p>
                                    <a href="<?php echo base_url().'index.php/register'?>" class="btn btn-default-outline" style="width:80px;font-size:14px;border-color:black;color:black;"> Register </a>
                                </div>
                                <br><br>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
    </div>