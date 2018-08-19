			<div class="col-md-9" style="background-color: #eee;">
				<h2 style="border-bottom: 2px solid black; margin-bottom: 20px;">Administrator Create User</h2>
				<form method="post" action="action/ad_add.php" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="SchoolName">Username :</label>
								<input type="text" class="form-control" id="Username" name="Username">
							</div>
							<div class="form-group">
								<label for="TypeOfSchool">Password :</label>
								<input type="password" class="form-control" id="Password" name="Password">
							</div>
							<div class="form-group">
								<label for="SchoolName">Email :</label>
								<input type="email" class="form-control" id="Email" name="Email">
							</div>
							<div class="form-group">
								<label for="FoundedOn">Full Name :</label>
								<input type="text" class="form-control" id="FullName" name="FullName">
							</div>
							<div class="form-group">
								<label for="FoundedOn">Nick Name :</label>
								<input type="text" class="form-control" id="NickName" name="NickName">
							</div>
							<div class="form-group">
								<label for="SchoolStatisticsNumber">Permission :</label>
								<select name="Permission" class="form-control">
									<option value="Article">Article</option>
									<option value="Attendance">Attendance</option>
								</select>
							</div>
							<div class="form-group">
								<label for="PrincipalNumberOfNationalSchool">Phone :</label>
								<input type="text" class="form-control" id="Phone" name="Phone">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="EducationCurriculum">User Image :</label>
								<div class="displaylogo" style="background-image: url(img/main/n.png);">
									<img src="">
								</div>
								<input type="file"  class="form-control" name="UserImage" >
							</div>
							
							<div class="form-group">
								<label for="Status">Address :</label>
								<textarea class="form-control" rows="5" id="comment" name="Address"></textarea>
							</div>
							<div class="form-group">
								<input type="submit"  class="form-control smschool" name="ad-add">
							</div>
						</div>
					</div>
				</form>
			</div>
			</div>