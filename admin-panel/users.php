<?php include ('header.php')  ?>
<?php include ('sidebar.php')  ?>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <div class="row">
                    <div class="col-md-12">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Users List</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">

									<table class="table table-striped">
										<thead>
											<tr>
												<th>SR No.</th>
												<th>Name</th>
												<th>Email</th>
												<th>username</th>
												<th>Phone</th>
											</tr>
										</thead>
										<tbody>
										<?php
                                        include ('support/connection.php');
										$select = "SELECT * FROM user";
										$result = mysqli_query($con, $select);
									    while($row = $result->fetch_assoc()){ ?>
											<tr>
											    <td><?php echo $row['id']  ?></td>
												<td><?php echo $row['username']  ?></td>
												<td><?php echo $row['email']  ?></td>
												<td><?php echo $row['full_name']  ?></td>
												<td><?php echo $row['phone']  ?></td>
												<td><a class="text-secondary btn btn-danger" href="deleteUser.php?id=<?php echo $row['id'] ?>" >DELETE</a></td>
											</tr>
                                        <?php
									       }
									    ?>
										</tbody>
									</table>
								</div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
										<div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div>
									</div>
								</div>
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
                    </div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
        <?php include ('footer.php') ?>