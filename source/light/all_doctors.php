<?php include "header.php" ?>
<?php include "sidebar.php" ?>
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Doctor List</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Doctors</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Doctor List</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                                                            <!-- <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab1" data-toggle="tab"> List View </a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab"> Grid View </a>
                                    </li>
                                </ul> -->
                                <ul class="nav customtab nav-tabs" role="tablist">
	                                <li class="nav-item"><a href="#tab1" class="nav-link active"  data-toggle="tab" >List View</a></li>
	                                <li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Grid View</a></li>
	                            </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active fontawesome-demo" id="tab1">
                                        <div class="row">
					                        <div class="col-md-12">
					                            <div class="card card-topline-red">
					                                <div class="card-head">
					                                    <header></header>
					                                    <div class="tools">
					                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
						                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
						                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
					                                    </div>
					                                </div>
					                                <div class="card-body ">
					                                    <div class="row">
					                                        <div class="col-md-6 col-sm-6 col-xs-6">
					                                            <div class="btn-group">
					                                                <a href="add_doctor.php" id="addRow" class="btn btn-info">
					                                                    Add New <i class="fa fa-plus"></i>
					                                                </a>
					                                            </div>
					                                        </div>
					                                        <div class="col-md-6 col-sm-6 col-xs-6">
					                                            <div class="btn-group pull-right">
					                                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
					                                                    <i class="fa fa-angle-down"></i>
					                                                </a>
					                                                <ul class="dropdown-menu pull-right">
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-print"></i> Print </a>
					                                                    </li>
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
					                                                    </li>
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
					                                                    </li>
					                                                </ul>
					                                            </div>
					                                        </div>
					                                    </div>
					                                    <div class="table-scrollable">
                                      					   <table class="table table-hover table-checkable order-column full-width" id="example4">
					                                        <thead>
					                                            <tr>
					                                            	<th></th>
					                                                <th> Name </th>
					                                                <th> Department </th>
					                                                <th> Specialization </th>
					                                                <th> Degree </th>
					                                                <th> Mobile </th>
					                                                <th> Email </th>
					                                                <th>Joining Date</th>
					                                                <th> Action </th>
					                                            </tr>
					                                        </thead>
					                                        <tbody>
																
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="img/doc/doc6.jpg" alt="">
																	</td>
																	<td>Dr.Megha Trivedi</td>
																	<td class="left">Gynaecology</td>
																	<td class="left">7</td>
																	<td class="left">MBBS,MS</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			megha@gmail.com </a></td>
																	<td class="left">17 Mar 2013</td>
																	<td	>
																		<a href="edit_doctor.php" class="btn btn-primary btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-danger btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
															</tbody>
					                                    </table>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="row">
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/doc/doc10.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Pooja Patel </div>
					                                            <div class="name-center"> Cardiology </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                            <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/doc/doc1.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Rajesh </div>
					                                            <div class="name-center"> General surgery </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite,
																<br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/doc/doc2.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Sarah Smith </div>
					                                            <div class="name-center"> Anaesthetics </div>
					                                        </div>
				                                                <p>456, Estern evenue, Courtage area, <br />New York</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                    					</div>
                    					<div class="row">
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/doc/doc3.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.John Deo </div>
					                                            <div class="name-center"> Dentist </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/doc/doc4.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Jay Soni </div>
					                                            <div class="name-center"> General Physician </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/doc/doc5.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Jacob Ryan </div>
					                                            <div class="name-center"> Urology </div>
					                                        </div>
				                                                <p>456, Estern evenue, Courtage area, <br />New York</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                    					</div>
                    					<div class="row">
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/doc/doc6.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Megha Trivedi </div>
					                                            <div class="name-center"> Gynaecology </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/doc/doc1.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Rajesh </div>
					                                            <div class="name-center"> General surgery </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/doc/doc2.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Sarah Smith </div>
					                                            <div class="name-center"> Anaesthetics </div>
					                                        </div>
				                                                <p>456, Estern evenue, Courtage area, <br />New York</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                    					</div>
                    					<div class="row">
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/doc/doc10.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Pooja Patel </div>
					                                            <div class="name-center"> Cardiology </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/doc/doc1.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Rajesh </div>
					                                            <div class="name-center"> General surgery </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/doc/doc3.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.John Deo </div>
					                                            <div class="name-center"> Dentist </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                    					</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
         
        </div>
        <!-- end page container -->
       <?php include "footer.php" ?>