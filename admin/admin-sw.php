			<div class="col-md-9" style="background-color: #eee;">
				<h2 style="border-bottom: 2px solid black; margin-bottom: 20px;">Administrator</h2>
				<form>
					<div class="row">
						<div class="col-md-12"> 	
							<div class="search-container" style="">
								<form>
      								<button type="submit" class="xs" style="width: 50px; margin-left: 5px;"><i class="fa fa-search"></i></button>
									<input class="xs" type="text" placeholder="Search.." name="search">
									<style type="text/css">
										.xs {
											width: 200px;
										    float: right;
										    padding: 10px 6px;
										    margin-left: 20px;
										    border-radius: 5px;

										}
										table.sad {
											width: 100%;
											height: 50px;
										}
										table.sad tr td {
											padding: 5px 10px;
											font-size: 12px;

										}
										table.sad tr td:nth-child(1){
											width: 10px;
										}
										table.sad tr td:nth-child(2), table.sad tr td:nth-child(3), table.sad tr td:nth-child(6){
											width: 100px;
										}
										table.sad tr td:nth-child(4){
											width: 250px;
										}
										table.sad tr td:nth-child(5){
											width: 150px;
										}
										table.sad tr td:nth-child(7){
											width: 108px;
										}
										.saa {
											color: #fff;
										}
									</style>
								</form>
								<button type="button" class="btn btn-primary" style="width: 120px; float: right; padding: 10px;">Create Account</button>
							</div>
							<div style="width: 100%; height: 50px; float: left; margin-top: 10px; ">
								<table class="sad saa" style="border-radius: 5px 5px 0px 0px; background-color: #222;font-weight: bold;">
									<tr>
										<td>No</td>
										<td>Username</td>
										<td>Nickname</td>
										<td>FullName</td>
										<td>Email</td>
										<td>Phone</td>
										<td></td>
									</tr>
								</table>
							</div>
							<div style="width: 100%; height: 410px;  float: left;	overflow-y: scroll;" class="zaza">
								<table class="sad">
									<tr>
										<?php
											include_once 'action/connect.php';
											$query = mysqli_query($connect, "SELECT * FROM `user_admin`");
											$x = 0;
											while ($q = mysqli_fetch_array($query)) {
												$x++;
												$Password = $q["Password"];
												echo '
												<tr>	
													<td>'.$x.'</td>
													<td>'.$q["Username"].'</td>
													<td>'.$q["NickName"].'</td>
													<td>'.$q["FullName"].'</td>
													<td>'.$q["Email"].'</td>
													<td>'.$q["NumberPhone"].'</td>
													<td style="width: 100px;">
														<i class="fa fa-trash" style="font-size: 25px; padding: 5px; width: 40px; height: 40px; float:left;"></i>
														<i class="fa fa-edit" style="font-size: 25px; padding: 5px;float:left; width: 40px; height: 40px; "></i>
													</td>
												</tr>

											    ';
											}
										?>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</form>
			</div>