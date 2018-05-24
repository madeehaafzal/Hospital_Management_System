<?php include "header.php" ?>
<?php include "sidebar.php" ?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Patient</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Doctors</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Patient</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Basic Information</header>
                                     <button id = "panel-button" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">First Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="firstname" data-required="1" placeholder="enter first name" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Last Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="lastname" data-required="1" placeholder="enter last name" class="form-control input-height" /> </div>
                                            </div>
											<div class="form-group row">
                                                <label class="control-label col-md-3">CNIC
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="cnic" data-required="1" placeholder="enter cnic"   class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Date Of Birth
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
		                                                <input class="form-control input-height" size="16" placeholder="date of Birth" type="text" value="">
	                                            	</div>
	                                            	<input type="hidden" id="dtp_input2" value="" />
	                                            </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Gender
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="gender">
                                                        <option value="">Select...</option>
                                                        <option value="Category 1">Male</option>
                                                        <option value="Category 2">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Age
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="age" data-required="1" placeholder="enter your age" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Mobile No.
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input name="number" type="text" placeholder="mobile number" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Email
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input-height" name="email" placeholder="Email Address"> </div>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Address
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="address" placeholder="address" class="form-control-textarea" rows="5" ></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Marital Status 
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="gender">
                                                        <option value="">Select...</option>
                                                        <option value="Category 1">Single</option>
                                                        <option value="Category 2">Married</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Upload Picture
                                                </label>
                                                <div class="compose-editor">
                                                  <input type="file" class="default" multiple>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Blood Group
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="selectbg">
                                                        <option value="">Select...</option>
                                                        <option value="Category 1">A+</option>
                                                        <option value="Category 2">A-</option>
                                                        <option value="Category 3">B+</option>
                                                        <option value="Category 4">B-</option>
                                                        <option value="Category 5">AB+</option>
                                                        <option value="Category 6">AB-</option>
                                                        <option value="Category 7">O+</option>
                                                        <option value="Category 8">O-</option>	
                                                    </select>
                                                </div>
                                            </div>
                                         	<div class="form-group row">
                                                 <label class="control-label col-md-3">Blood Presure
                                                 </label>
                                                 <div class="col-md-5">
                                                     <input type="text" class="form-control input-height" placeholder="blood presure" name="bp" >
                                                 </div>
                                             </div>
											<div class="form-group row">
                                                <label class="control-label col-md-3">Sugger
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control input-height" placeholder="sugger" name="sug" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                 <label class="control-label col-md-3">Injury/Condition
                                                 </label>
                                                 <div class="col-md-5">
                                                     <input type="text" class="form-control input-height" placeholder="injury/condition" name="injury" >
                                                 </div>
                                             </div>
											<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            	</div>
                                        	</div>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            <div class="chat-sidebar-container" data-close-on-body-click="false">
                <div class="chat-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon"  data-toggle="tab"> <i class="material-icons">chat</i>Chat
                                    <span class="badge badge-danger">4</span>
                                </a>
                        </li>
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_3" class="nav-link tab-icon"  data-toggle="tab"> <i class="material-icons">settings</i> Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Start Doctor Chat --> 
 						
           
        </div>
        <!-- end page container -->
       <?php include "footer.php" ?>
