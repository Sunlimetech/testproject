<?php $pagename = "HR OMNI - Products"?>
<?php include_once("inc/head.php"); ?>

	<body>
    <?php include_once("inc/header.php"); ?>

		<!-- main  -->
		<main class="product">
			<!-- hero -->
			<section class="hero">
				<div class="container">
                    <div class='heading text-center text-primary text-uppercase text-large'>The Platform</div>
					<div class="detail py-0 text-center">
						<p>In an increasingly complicated world, we at HROmni Solutions strive to keep things simple.</p>
						<p>Our single platform provides for all your hiring, payroll and leave management needs.</p>
					</div>
				</div>
			</section>
			<!-- //hero -->
			<!-- who-we-are -->
			<section class="who-we-are bg-secondary container-fluid">
				<div class="container">
					<div class="heading text-center text-primary text-uppercase text-large">Platform Highlights</div>
					<div class="row align-items-center justify-content-between">
						<div class="col-12">
							<div class="detail">
								<ul class="list-unstyled text-white">
									<li>
										An integrated payroll system that simplifies the process for the company and its employees, inputting data once with no need for repeated actions, thus reducing
										the occurrence of human error.
									</li>
									<li>
										The leave management system can be used with ease by employees for all their time-off requests. The HR team can respond to these requests with the same ease.
									</li>
									<li>
										The recruitment feature of the platform makes use of job postings, following up on applications, coordinating interviews and results, as well as on-boarding of
										new employees.
									</li>
									<li>
										A one-stop platform that meets the HR needs of small and medium businesses that may not have dedicated HR departments, or no use for overly complicated software
										that fulfill either one or partial requirements of a business.
									</li>
									<li>
										A platform that bases its cost based on usage – a fair system that allows businesses the flexibility to use features only when needed and pay for them
										accordingly.
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- //who-we-are -->
			<!-- strengths -->
			<section class="payroll text-center">
				<div class="container">
					<div class="heading text-center text-primary text-uppercase text-large">Pay your employees with one click</div>
					<div class="row">
                    <?php
                        $count = 1;
						while($count <= 6)
                        {
                        ?>
                        <div class="col-12 col-md-4 detail-wrapper">
							<p class="text-uppercase text-medium"><span class="text-primary fw-bold me-1"><?php echo $count; ?>.</span>Input data</p>
							<p>
								<img src="imgs/inputdata.png" alt="InPut Data" />
							</p>
						</div>
                       <?php 
						$count++;
					} ?>
						<div class="col-12 col-md-4 detail-wrapper">
							<p class="text-uppercase text-medium"><span class="text-primary fw-bold me-1">1.</span>Input data</p>
							<p>
								<img src="imgs/inputdata.png" alt="InPut Data" />
							</p>
						</div>
						<div class="col-12 col-md-4 detail-wrapper">
							<p class="text-uppercase text-medium"><span class="text-primary fw-bold me-1">2.</span>One click</p>
							<p>
								<img src="imgs/oneclick.png" alt="One Click" />
							</p>
						</div>
						<div class="col-12 col-md-4 detail-wrapper">
							<p class="text-uppercase text-medium"><span class="text-primary fw-bold me-1">3.</span>Salary Received</p>
							<p>
								<img src="imgs/salary.png" alt="One Click" />
							</p>
						</div>
					</div>
					<div class="more-detail bg-primary text-white text-start">
						HR Omni Solutions offers an easy-to-use, end-to-end payroll solution to business owners that will require limited input, thus minimising the possibility of errors. Connected
						directly with Revenue Ireland, we will handle tax calculations, as well as bank integrations to provide direct salary payments to individual employee accounts.
						<a href="#!" class="text-white fw-bold">Want to read more...</a>
					</div>
				</div>
			</section>
			<section class="payroll text-center pt-0">
				<div class="container">
					<div class="heading text-center text-secondary text-uppercase text-large">Leave management made easy</div>
					<div class="row">
						<div class="col-12 col-md-4 detail-wrapper">
							<p class="text-uppercase text-medium"><span class="text-primary fw-bold me-1">1.</span>Receive Leave Request</p>
							<p>
								<img src="imgs/inputdata.png" alt="InPut Data" />
							</p>
						</div>
						<div class="col-12 col-md-4 detail-wrapper">
							<p class="text-uppercase text-medium"><span class="text-primary fw-bold me-1">2.</span>Respond</p>
							<p>
								<img src="imgs/oneclick.png" alt="One Click" />
							</p>
						</div>
						<div class="col-12 col-md-4 detail-wrapper">
							<p class="text-uppercase text-medium"><span class="text-primary fw-bold me-1">3.</span>Leave Recorded</p>
							<p>
								<img src="imgs/leave.png" alt="One Click" />
							</p>
						</div>
					</div>
					<div class="more-detail bg-secondary text-white text-start">
						HR Omni Solutions provides a dedicated leave management system that will allow employees to input their proposed time-off and receive easy approval from employers.<a
							href="#!"
							class="text-white fw-bold"
							>Want to read more...</a
						>
					</div>
				</div>
			</section>
			<section class="payroll text-center pt-0">
				<div class="container">
					<div class="heading text-center text-primary text-uppercase text-large">Hiring and on-boarding new employees</div>
					<div class="row">
						<div class="col-12 col-md-4 detail-wrapper">
							<p class="text-uppercase text-medium"><span class="text-primary fw-bold me-1">1.</span>Job opening posted</p>
							<p>
								<img src="imgs/inputdata.png" alt="InPut Data" />
							</p>
						</div>
						<div class="col-12 col-md-4 detail-wrapper">
							<p class="text-uppercase text-medium"><span class="text-primary fw-bold me-1">2.</span>Applications received</p>
							<p>
								<img src="imgs/oneclick.png" alt="One Click" />
							</p>
						</div>
						<div class="col-12 col-md-4 detail-wrapper">
							<p class="text-uppercase text-medium"><span class="text-primary fw-bold me-1">3.</span>Hiring completed</p>
							<p>
								<img src="imgs/hiring.png" alt="One Click" />
							</p>
						</div>
					</div>
					<div class="more-detail bg-primary text-white text-start">
						HR Omni Solutions aims to provide employers with a recruitment platform where available positions can be featured, and job applications can be managed easily. Once a job
						posting is up, track applicants through the interview processes, all the way up to where you welcome them to your team. Keep files on new and existing employees on the platform
						for ease of access.<a href="#!" class="text-white fw-bold">Want to read more...</a>
					</div>
				</div>
			</section>
			<!-- //strengths -->

            
		</main>
		<!-- //main  -->
        <?php include_once("inc/footer.php"); ?>

        <?php include_once("inc/footer_js.php"); ?>
	</body>
</html>
