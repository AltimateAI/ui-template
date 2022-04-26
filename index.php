<?php include "header.php"; ?>

	<body>

		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

		<!-- main-area start -->	
		<main class="main-wrapper">

			<?php include "menu.php"; ?>

			<!-- modal-area start -->			
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="description-area">
							<form action="#">
								<h2>New Project</h2>
								<label>Project Name</label>
								<input type="text" name="" placeholder="Cryptocurrency Project" />
								<label>Project Description</label>
								<input type="text" name="" placeholder="Coin Analysis of ETH" />
								<div class="description-item">
									<div>
										<button type="submit">Save</button>
									</div>
									<div>
										<a data-dismiss="modal" aria-label="Close" href="#">Cancel</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				</div>
			<!-- modal-area end -->

			<!-- content-area start -->
			<div class="content-area">
				<div class="project-area">
					<div class="project-item">
						<div>
							<h1>Projects</h1>
						</div>
						<div>
							<i class="fas fa-bars"></i>
							<p>Welcome, Raouf G.</p>
							<a href="#">Logout</a>
						</div>
					</div>
					<div class="project-item2">
						<a data-toggle="modal" data-target="#exampleModalCenter" href="#">Add Project</a>
					</div>					
				</div>
				<div class="project-item3">
					<div class="table-responsive">
						<table cellpadding="0">
							<tr>
								<th><span>Project Name</span></th>
								<th><span>Description</span></th>
								<th><span>Created</span> </th>
								<th><span>Last Run <img src="images/08.png" /></span></th>
								<th><span>Action</span></th>
							</tr>
							<tr>
								<td>Housing Price</td>
								<td>Lorem ipsum Lorem ipsum Lorem ipsum Lorem</td>
								<td>04/12/2022 11:30 AM</td>
								<td>04/12/2022 3:30 PM</td>
								<td>
									<ul>
										<li><a href="#"><img src="images/09.png" /></a></li>
										<li><a href="#"><img src="images/10.png" /></i></a></li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Telecom customer churn</td>
								<td>Lorem ipsum Lorem ipsum Lorem ipsum Lorem</td>
								<td>04/12/2022 11:30 AM</td>
								<td>04/12/2022 3:30 PM</td>
								<td>
									<ul>
										<li><a href="#"><img src="images/09.png" /></a></li>
										<li><a href="#"><img src="images/10.png" /></i></a></li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>NYC Taxi Data</td>
								<td>Lorem ipsum Lorem ipsum Lorem ipsum Lorem</td>
								<td>04/12/2022 11:30 AM</td>
								<td>04/12/2022 3:30 PM</td>
								<td>
									<ul>
										<li><a href="#"><img src="images/09.png" /></a></li>
										<li><a href="#"><img src="images/10.png" /></i></a></li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>BNP Paribas </td>
								<td>Lorem ipsum Lorem ipsum Lorem ipsum Lorem</td>
								<td>04/12/2022 11:30 AM</td>
								<td>04/12/2022 3:30 PM</td>
								<td>
									<ul>
										<li><a href="#"><img src="images/09.png" /></a></li>
										<li><a href="#"><img src="images/10.png" /></i></a></li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Ghouls and Ghosts </td>
								<td>Lorem ipsum Lorem ipsum Lorem ipsum Lorem</td>
								<td>04/12/2022 11:30 AM</td>
								<td>04/12/2022 3:30 PM</td>
								<td>
									<ul>
										<li><a href="#"><img src="images/09.png" /></a></li>
										<li><a href="#"><img src="images/10.png" /></i></a></li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Custom Project</td>
								<td>Lorem ipsum Lorem ipsum Lorem ipsum Lorem</td>
								<td>04/12/2022 11:30 AM</td>
								<td>04/12/2022 3:30 PM</td>
								<td>
									<ul>
										<li><a href="#"><img src="images/09.png" /></a></li>
										<li><a href="#"><img src="images/10.png" /></i></a></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="pagination-area">
					<div class="pagination-item">
						<ul>
							<li><a href="#"><img src="images/11.png" /></a></li>
							<li><a href="#">1</a></li>
							<li><span>/</span></li>
							<li><a href="#">16</a></li>
							<li><a href="#"><img src="images/12.png" /></a></li>
						</ul>
					</div>
					<div class="pagination-item2">
						<p>Rows per page</p>
						<select>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>18</option>
						</select>
					</div>
				</div>
			</div>
			<!-- content-area end -->

		</main>	
		<!-- main-area end -->		
		
		
		<?php include "scripts.php"; ?>
		
	</body>
</html>