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
									<h3 class="panel-title">Approve Emails</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
											    <th>ID</th>
												<th>SenderEmail</th>
												<th>ReceiverEmail</th>
												<th>Subject</th>
												<th>EmailBody</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										<?php
                                        include ('support/connection.php');
										$select = "SELECT * FROM emails";
										$result = mysqli_query($con, $select);
									    while($row = $result->fetch_assoc()){ ?>
											<tr>
												<td><?php echo $row['id']  ?></td>
												<td><?php echo $row['senderEmail']  ?></td>
												<td><?php echo $row['receiverEmail']  ?></td>
												<td><?php echo $row['emailSubject']  ?></td>
												<td><?php echo substr($row['emailBody'],0,30)  ?></td>
												<td><a class="text-secondary btn btn-success" href="support/VerifyEmails.php?id=<?php echo $row['id'] ?>" >MARK AS SPAM</a></td>
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