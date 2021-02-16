   <section class="content">
        <div class="container">
            <div class="row clearfix">
               
                <div class="col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">All Order</a></li>
                                    <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Pending Order</a></li>
                                    <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                                        <div class="panel panel-default panel-post" >
                                            
                                            <div class="panel-body" style="height:500px;">
                                                 <div class="card" style="height:500px;" >
                       
                        <div class="body" >
						<?php
						include("chart.php");
						?>
                       <div id="chartContainer" style="height:450px; "></div>
                        </div>
                    </div>
                                                </div>
                                            
                                        </div>
										<!----------=comment----
                                        <div class="panel panel-default panel-post">
                                            
                                            <div class="panel-body" style="height:450px;">
                                                <div class="card" >
                                            <div class="body" >
                        <?php
						//include("bar.html");
						?>
                        </div>
                        
                    </div>
                                            </div>
                                          
                                        </div>
										----->
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
		<input type="hidden" name="enrollment" value="<?php echo $row['enrollment'];?>"/>
   <label for="NameSurname" class="col-sm-2 control-label">Name</label>
                                                <div class="col-sm-10">
                                           <div class="form-line">
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'];  ?>" required>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
   <label for="NameSurname" class="col-sm-2 control-label">mobile</label>
                                                <div class="col-sm-10">
                                           <div class="form-line">
    <input type="text" class="form-control" id="mobile" name="mobile"  value="<?php echo $row['mobile'];  ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
    <label for="Email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email'];  ?>" required>
                                                    </div>
                                                </div>
                                            </div>
											 <div class="form-group">
    <label for="file" class="col-sm-2 control-label">Upload Photo</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
     <input type="file"  name="img" accept="image/*" onchange="loadFile(event)">
<img id="output" />
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
	  output.style="height:50px;width:50px;";
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
                                                    </div>
                                                </div>
                                            </div>
                                   
                                           
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
	<input type="checkbox" id="terms_condition_check" class="chk-col-red filled-in" />
                               <label for="terms_condition_check">I agree to the <a href="#">terms and conditions</a></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-danger" name="up_sub">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                        <form class="form-horizontal" method="post">
                                            <div class="form-group">
                                                <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="OldPassword" name="op" placeholder="Old Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPassword" name="np" placeholder="New Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPasswordConfirm" name="cnp" placeholder="New Password (Confirm)" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" name="change_pass" class="btn btn-danger">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>