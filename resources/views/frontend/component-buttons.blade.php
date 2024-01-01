<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/rocker/demo/vertical/component-buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Apr 2023 19:36:19 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
	<title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Rocker</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					<ul>
						<li> <a href="index.html"><i class='bx bx-radio-circle'></i>Default</a>
						</li>
						<li> <a href="index2.html"><i class='bx bx-radio-circle'></i>Alternate</a>
						</li>
						<li> <a href="index3.html"><i class='bx bx-radio-circle'></i>Graphical</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Application</div>
					</a>
					<ul>
						<li> <a href="app-emailbox.html"><i class='bx bx-radio-circle'></i>Email</a>
						</li>
						<li> <a href="app-chat-box.html"><i class='bx bx-radio-circle'></i>Chat Box</a>
						</li>
						<li> <a href="app-file-manager.html"><i class='bx bx-radio-circle'></i>File Manager</a>
						</li>
						<li> <a href="app-contact-list.html"><i class='bx bx-radio-circle'></i>Contatcs</a>
						</li>
						<li> <a href="app-to-do.html"><i class='bx bx-radio-circle'></i>Todo List</a>
						</li>
						<li> <a href="app-invoice.html"><i class='bx bx-radio-circle'></i>Invoice</a>
						</li>
						<li> <a href="app-fullcalender.html"><i class='bx bx-radio-circle'></i>Calendar</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">UI Elements</li>
				<li>
					<a href="widgets.html">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Widgets</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cart'></i>
						</div>
						<div class="menu-title">eCommerce</div>
					</a>
					<ul>
						<li> <a href="ecommerce-products.html"><i class='bx bx-radio-circle'></i>Products</a>
						</li>
						<li> <a href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Product Details</a>
						</li>
						<li> <a href="ecommerce-add-new-products.html"><i class='bx bx-radio-circle'></i>Add New Products</a>
						</li>
						<li> <a href="ecommerce-orders.html"><i class='bx bx-radio-circle'></i>Orders</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
						</div>
						<div class="menu-title">Components</div>
					</a>
					<ul>
						<li> <a href="component-alerts.html"><i class='bx bx-radio-circle'></i>Alerts</a>
						</li>
						<li> <a href="component-accordions.html"><i class='bx bx-radio-circle'></i>Accordions</a>
						</li>
						<li> <a href="component-badges.html"><i class='bx bx-radio-circle'></i>Badges</a>
						</li>
						<li> <a href="component-buttons.html"><i class='bx bx-radio-circle'></i>Buttons</a>
						</li>
						<li> <a href="component-cards.html"><i class='bx bx-radio-circle'></i>Cards</a>
						</li>
						<li> <a href="component-carousels.html"><i class='bx bx-radio-circle'></i>Carousels</a>
						</li>
						<li> <a href="component-list-groups.html"><i class='bx bx-radio-circle'></i>List Groups</a>
						</li>
						<li> <a href="component-media-object.html"><i class='bx bx-radio-circle'></i>Media Objects</a>
						</li>
						<li> <a href="component-modals.html"><i class='bx bx-radio-circle'></i>Modals</a>
						</li>
						<li> <a href="component-navs-tabs.html"><i class='bx bx-radio-circle'></i>Navs & Tabs</a>
						</li>
						<li> <a href="component-navbar.html"><i class='bx bx-radio-circle'></i>Navbar</a>
						</li>
						<li> <a href="component-paginations.html"><i class='bx bx-radio-circle'></i>Pagination</a>
						</li>
						<li> <a href="component-popovers-tooltips.html"><i class='bx bx-radio-circle'></i>Popovers & Tooltips</a>
						</li>
						<li> <a href="component-progress-bars.html"><i class='bx bx-radio-circle'></i>Progress</a>
						</li>
						<li> <a href="component-spinners.html"><i class='bx bx-radio-circle'></i>Spinners</a>
						</li>
						<li> <a href="component-notifications.html"><i class='bx bx-radio-circle'></i>Notifications</a>
						</li>
						<li> <a href="component-avtars-chips.html"><i class='bx bx-radio-circle'></i>Avatrs & Chips</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Content</div>
					</a>
					<ul>
						<li> <a href="content-grid-system.html"><i class='bx bx-radio-circle'></i>Grid System</a>
						</li>
						<li> <a href="content-typography.html"><i class='bx bx-radio-circle'></i>Typography</a>
						</li>
						<li> <a href="content-text-utilities.html"><i class='bx bx-radio-circle'></i>Text Utilities</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"> <i class="bx bx-donate-blood"></i>
						</div>
						<div class="menu-title">Icons</div>
					</a>
					<ul>
						<li> <a href="icons-line-icons.html"><i class='bx bx-radio-circle'></i>Line Icons</a>
						</li>
						<li> <a href="icons-boxicons.html"><i class='bx bx-radio-circle'></i>Boxicons</a>
						</li>
						<li> <a href="icons-feather-icons.html"><i class='bx bx-radio-circle'></i>Feather Icons</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="form-froala-editor.html">
						<div class="parent-icon"><i class='bx bx-code-alt'></i>
						</div>
						<div class="menu-title">Froala Editor</div>
					</a>
				</li>
				<li class="menu-label">Forms & Tables</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
						</div>
						<div class="menu-title">Forms</div>
					</a>
					<ul>
						<li> <a href="form-elements.html"><i class='bx bx-radio-circle'></i>Form Elements</a>
						</li>
						<li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Input Groups</a>
						</li>
						<li> <a href="form-radios-and-checkboxes.html"><i class='bx bx-radio-circle'></i>Radios & Checkboxes</a>
						</li>
						<li> <a href="form-layouts.html"><i class='bx bx-radio-circle'></i>Forms Layouts</a>
						</li>
						<li> <a href="form-validations.html"><i class='bx bx-radio-circle'></i>Form Validation</a>
						</li>
						<li> <a href="form-wizard.html"><i class='bx bx-radio-circle'></i>Form Wizard</a>
						</li>
						<li> <a href="form-text-editor.html"><i class='bx bx-radio-circle'></i>Text Editor</a>
						</li>
						<li> <a href="form-file-upload.html"><i class='bx bx-radio-circle'></i>File Upload</a>
						</li>
						<li> <a href="form-date-time-pickes.html"><i class='bx bx-radio-circle'></i>Date Pickers</a>
						</li>
						<li> <a href="form-select2.html"><i class='bx bx-radio-circle'></i>Select2</a>
						</li>
						<li> <a href="form-repeater.html"><i class='bx bx-radio-circle'></i>Form Repeater</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-grid-alt"></i>
						</div>
						<div class="menu-title">Tables</div>
					</a>
					<ul>
						<li> <a href="table-basic-table.html"><i class='bx bx-radio-circle'></i>Basic Table</a>
						</li>
						<li> <a href="table-datatable.html"><i class='bx bx-radio-circle'></i>Data Table</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Pages</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-lock"></i>
						</div>
						<div class="menu-title">Authentication</div>
					</a>
					<ul>
						<li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Basic</a>
							<ul>
								<li><a href="auth-basic-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-basic-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-basic-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-basic-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Cover</a>
							<ul>
								<li><a href="auth-cover-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-cover-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-cover-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-cover-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>With Header Footer</a>
							<ul>
								<li><a href="auth-header-footer-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-header-footer-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-header-footer-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-header-footer-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="user-profile.html">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">User Profile</div>
					</a>
				</li>
				<li>
					<a href="timeline.html">
						<div class="parent-icon"> <i class="bx bx-video-recording"></i>
						</div>
						<div class="menu-title">Timeline</div>
					</a>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-error"></i>
						</div>
						<div class="menu-title">Errors</div>
					</a>
					<ul>
						<li> <a href="errors-404-error.html" target="_blank"><i class='bx bx-radio-circle'></i>404 Error</a>
						</li>
						<li> <a href="errors-500-error.html" target="_blank"><i class='bx bx-radio-circle'></i>500 Error</a>
						</li>
						<li> <a href="errors-coming-soon.html" target="_blank"><i class='bx bx-radio-circle'></i>Coming Soon</a>
						</li>
						<li> <a href="error-blank-page.html" target="_blank"><i class='bx bx-radio-circle'></i>Blank Page</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="faq.html">
						<div class="parent-icon"><i class="bx bx-help-circle"></i>
						</div>
						<div class="menu-title">FAQ</div>
					</a>
				</li>
				<li>
					<a href="pricing-table.html">
						<div class="parent-icon"><i class="bx bx-diamond"></i>
						</div>
						<div class="menu-title">Pricing</div>
					</a>
				</li>
				<li class="menu-label">Charts & Maps</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-line-chart"></i>
						</div>
						<div class="menu-title">Charts</div>
					</a>
					<ul>
						<li> <a href="charts-apex-chart.html"><i class='bx bx-radio-circle'></i>Apex</a>
						</li>
						<li> <a href="charts-chartjs.html"><i class='bx bx-radio-circle'></i>Chartjs</a>
						</li>
						<li> <a href="charts-highcharts.html"><i class='bx bx-radio-circle'></i>Highcharts</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-map-alt"></i>
						</div>
						<div class="menu-title">Maps</div>
					</a>
					<ul>
						<li> <a href="map-google-maps.html"><i class='bx bx-radio-circle'></i>Google Maps</a>
						</li>
						<li> <a href="map-vector-maps.html"><i class='bx bx-radio-circle'></i>Vector Maps</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Others</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-menu"></i>
						</div>
						<div class="menu-title">Menu Levels</div>
					</a>
					<ul>
						<li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level One</a>
							<ul>
								<li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level Two</a>
									<ul>
										<li> <a href="javascript:;"><i class='bx bx-radio-circle'></i>Level Three</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="https://codervent.com/rocker/documentation/index.html" target="_blank">
						<div class="parent-icon"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Documentation</div>
					</a>
				</li>
				<li>
					<a href="https://themeforest.net/user/codervent" target="_blank">
						<div class="parent-icon"><i class="bx bx-support"></i>
						</div>
						<div class="menu-title">Support</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>

					  <div class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
						<input class="form-control px-5" disabled type="search" placeholder="Search">
						<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5"><i class='bx bx-search'></i></span>
					  </div>


					  <div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
								<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="assets/images/county/02.png" width="22" alt="">
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/01.png" width="20" alt=""><span class="ms-2">English</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/02.png" width="20" alt=""><span class="ms-2">Catalan</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/03.png" width="20" alt=""><span class="ms-2">French</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/04.png" width="20" alt=""><span class="ms-2">Belize</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/05.png" width="20" alt=""><span class="ms-2">Colombia</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/06.png" width="20" alt=""><span class="ms-2">Spanish</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/07.png" width="20" alt=""><span class="ms-2">Georgian</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/08.png" width="20" alt=""><span class="ms-2">Hindi</span></a>
									</li>
								</ul>
							</li>
							<li class="nav-item dark-mode d-none d-sm-flex">
								<a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
								</a>
							</li>

							<li class="nav-item dropdown dropdown-app">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><i class='bx bx-grid-alt'></i></a>
								<div class="dropdown-menu dropdown-menu-end p-0">
									<div class="app-container p-2 my-2">
									  <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/slack.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Slack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/behance.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Behance</p>
											  </div>
											  </div>
										  </a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												<img src="assets/images/app/google-drive.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/outlook.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Outlook</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/github.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">GitHub</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/stack-overflow.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/figma.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/twitter.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Twitter</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/google-calendar.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Calendar</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/spotify.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Spotify</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/google-photos.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/pinterest.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/linkedin.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">linkedin</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/dribble.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/youtube.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">YouTube</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/google.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">News</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/envato.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Envato</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/safari.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Safari</p>
											  </div>
											  </div>
											</a>
										 </div>
				
									  </div><!--end row-->
				
									</div>
								</div>
							</li>

							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-badge">8 New</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5 sec
												ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger">dc
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
												ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
												sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success">
													<img src="assets/images/app/outlook.png" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Account Created<span class="msg-time float-end">28 min
												ago</span></h6>
													<p class="msg-info">Successfully created new email</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info">Ss
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span
												class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
												min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
												ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary">
													<img src="assets/images/app/github.png" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
												ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
												ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<button class="btn btn-primary w-100">View All Notifications</button>
										</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-shopping-bag'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">My Cart</p>
											<p class="msg-header-badge">10 Items</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/11.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/02.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/03.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/04.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/05.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/06.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/07.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/08.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/09.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<h5 class="mb-0">Total</h5>
												<h5 class="mb-0 ms-auto">$489.00</h5>
											</div>
											<button class="btn btn-primary w-100">Checkout</button>
										</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
							<div class="user-info">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-cog fs-5"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-download fs-5"></i><span>Downloads</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Components</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Buttons</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col col-lg-9 mx-auto">
						<div class="card radius-10">
							<div class="card-body">
								<div>
									<h5 class="card-title">Basic Examples</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<button type="button" class="btn btn-primary px-5">Primary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-danger px-5">Danger</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-success px-5">Success</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-info px-5">Info</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-warning px-5">Warning</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-dark px-5">Dark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-secondary px-5">Secondary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5">Light</button>
									</div>
								</div>
								<!--end row-->
							</div>
							<div class="card-body">
								<div>
									<h5 class="card-title">Outline Examples</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<button type="button" class="btn btn-outline-primary px-5">Primary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-danger px-5">Danger</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-success px-5">Success</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-info px-5">Info</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-warning px-5">Warning</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-dark px-5">Dark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-secondary px-5">Secondary</button>
									</div>
								</div>
								<!--end row-->
							</div>
						</div>
						<div class="card radius-10">
							<div class="card-body">
								<div>
									<h5 class="card-title">Round Buttons</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<button type="button" class="btn btn-primary px-5 radius-30">Primary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-danger px-5 radius-30">Danger</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-success px-5 radius-30">Success</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-info px-5 radius-30">Info</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-warning px-5 radius-30">Warning</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-dark px-5 radius-30">Dark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-secondary px-5 radius-30">Secondary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30">Light</button>
									</div>
								</div>
								<!--end row-->
							</div>
							<div class="card-body">
								<div>
									<h5 class="card-title">Round Outline Buttons</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<button type="button" class="btn btn-outline-primary px-5 radius-30">Primary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-danger px-5 radius-30">Danger</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-success px-5 radius-30">Success</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-info px-5 radius-30">Info</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-warning px-5 radius-30">Warning</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-dark px-5 radius-30">Dark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-secondary px-5 radius-30">Secondary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-light px-5 radius-30">Light</button>
									</div>
								</div>
								<!--end row-->
							</div>
						</div>
						<div class="card radius-10">
							<div class="card-body">
								<div>
									<h5 class="card-title">Square Buttons</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<button type="button" class="btn btn-primary px-5 rounded-0">Primary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-danger px-5 rounded-0">Danger</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-success px-5 rounded-0">Success</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-info px-5 rounded-0">Info</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-warning px-5 rounded-0">Warning</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-dark px-5 rounded-0">Dark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-secondary px-5 rounded-0">Secondary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 rounded-0">Light</button>
									</div>
								</div>
								<!--end row-->
							</div>
							<div class="card-body">
								<div>
									<h5 class="card-title">Square Outline Buttons</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<button type="button" class="btn btn-outline-primary px-5 rounded-0">Primary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-danger px-5 rounded-0">Danger</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-success px-5 rounded-0">Success</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-info px-5 rounded-0">Info</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-warning px-5 rounded-0">Warning</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-dark px-5 rounded-0">Dark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-secondary px-5 rounded-0">Secondary</button>
									</div>
								</div>
								<!--end row-->
							</div>
						</div>

						<div class="card radius-10">
							<div class="card-body">
								<div>
									<h5 class="card-title">Button With Icons</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<button type="button" class="btn btn-primary px-5"><i class='bx bx-user mr-1'></i>Person</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-danger px-5"><i class='bx bx-bookmark mr-1'></i>Bookmark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-success px-5"><i class='bx bx-home mr-1'></i>Home</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-info px-5"><i class='bx bx-cloud-download mr-1'></i>Downloads</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-warning px-5"><i class='bx bx-heart-circle mr-1'></i>Love</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-dark px-5"><i class='bx bx-cloud-upload mr-1'></i>Upload</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-secondary px-5"><i class='bx bx-comment mr-1'></i>Comments</button>
									</div>
									<div class="w-100 border-top"></div>

									<div class="col">
										<button type="button" class="btn btn-lg btn-primary px-5"><i class='bx bx-user mr-1'></i>Person</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-lg btn-danger px-5"><i class='bx bx-bookmark mr-1'></i>Bookmark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-lg btn-success px-5"><i class='bx bx-home mr-1'></i>Home</button>
									</div>
									<div class="w-100 border-top"></div>

									<div class="col">
										<button type="button" class="btn btn-sm btn-primary px-5"><i class='bx bx-user mr-1'></i>Person</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-sm btn-danger px-5"><i class='bx bx-bookmark mr-1'></i>Bookmark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-sm btn-success px-5"><i class='bx bx-home mr-1'></i>Home</button>
									</div>
								</div>
								<!--end row-->
							</div>

							<div class="card-body">
								<div>
									<h5 class="card-title">Outline Button With Icons</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<button type="button" class="btn btn-outline-primary px-5"><i class='bx bx-user mr-1'></i>Person</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-danger px-5"><i class='bx bx-bookmark mr-1'></i>Bookmark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-success px-5"><i class='bx bx-home mr-1'></i>Home</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-info px-5"><i class='bx bx-cloud-download mr-1'></i>Downloads</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-warning px-5"><i class='bx bx-heart-circle mr-1'></i>Love</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-dark px-5"><i class='bx bx-cloud-upload mr-1'></i>Upload</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-secondary px-5"><i class='bx bx-comment mr-1'></i>Comments</button>
									</div>
									<div class="w-100 border-top"></div>

									<div class="col">
										<button type="button" class="btn btn-lg btn-outline-primary px-5"><i class='bx bx-user mr-1'></i>Person</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-lg btn-outline-danger px-5"><i class='bx bx-bookmark mr-1'></i>Bookmark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-lg btn-outline-success px-5"><i class='bx bx-home mr-1'></i>Home</button>
									</div>
									<div class="w-100 border-top"></div>

									<div class="col">
										<button type="button" class="btn btn-sm btn-outline-primary px-5"><i class='bx bx-user mr-1'></i>Person</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-sm btn-outline-danger px-5"><i class='bx bx-bookmark mr-1'></i>Bookmark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-sm btn-outline-success px-5"><i class='bx bx-home mr-1'></i>Home</button>
									</div>
								</div>
								<!--end row-->
							</div>



							<div class="card-body">
								<div class="row row-cols-auto g-3">
									<div class="col">
										<button type="button" class="btn btn-outline-primary px-5 radius-30"><i class='bx bx-user mr-1'></i>Person</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-danger px-5 radius-30"><i class='bx bx-bookmark mr-1'></i>Bookmark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-success px-5 radius-30"><i class='bx bx-home mr-1'></i>Home</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-info px-5 radius-30"><i class='bx bx-cloud-download mr-1'></i>Downloads</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-warning px-5 radius-30"><i class='bx bx-heart-circle mr-1'></i>Love</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-dark px-5 radius-30"><i class='bx bx-cloud-upload mr-1'></i>Upload</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-secondary px-5 radius-30"><i class='bx bx-comment mr-1'></i>Comments</button>
									</div>

									<div class="w-100 border-top"></div>
									<div class="col">
										<button type="button" class="btn btn-outline-primary"><i class='bx bx-user me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-danger"><i class='bx bx-blanket me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-success"><i class='bx bx-home-alt me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-info"><i class='bx bx-refresh me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-warning"><i class='bx bx-heart me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-dark"><i class='bx bx-like me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-secondary"><i class='bx bx-comment-detail me-0'></i>
										</button>
									</div>
								</div>
								<!--end row-->
							</div>
						</div>
						<div class="card radius-10">
							<div class="card-body">
								<div>
									<h5 class="card-title">Group Buttons</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<div class="btn-group" role="group" aria-label="First group">
											<button type="button" class="btn btn-primary">1</button>
											<button type="button" class="btn btn-primary">2</button>
											<button type="button" class="btn btn-primary">3</button>
											<button type="button" class="btn btn-primary">4</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="First group">
											<button type="button" class="btn btn-dark">5</button>
											<button type="button" class="btn btn-dark">6</button>
											<button type="button" class="btn btn-dark">7</button>
											<button type="button" class="btn btn-dark">8</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="First group">
											<button type="button" class="btn btn-warning">9</button>
											<button type="button" class="btn btn-warning">10</button>
											<button type="button" class="btn btn-warning">11</button>
											<button type="button" class="btn btn-warning">12</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="First group">
											<button type="button" class="btn btn-outline-secondary">13</button>
											<button type="button" class="btn btn-outline-secondary">14</button>
											<button type="button" class="btn btn-outline-secondary">15</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="First group">
											<button type="button" class="btn btn-outline-primary">16</button>
											<button type="button" class="btn btn-outline-primary">17</button>
											<button type="button" class="btn btn-outline-primary">18</button>
											<button type="button" class="btn btn-outline-primary">19</button>
											<button type="button" class="btn btn-outline-primary">20</button>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
											<button type="button" class="btn btn-primary">1</button>
											<button type="button" class="btn btn-primary">2</button>
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
											<button type="button" class="btn btn-danger">1</button>
											<button type="button" class="btn btn-danger">2</button>
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
											<button type="button" class="btn btn-success">1</button>
											<button type="button" class="btn btn-success">2</button>
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
											<button type="button" class="btn btn-info">1</button>
											<button type="button" class="btn btn-info">2</button>
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-secondary">Left</button>
											<button type="button" class="btn btn-secondary">Middle</button>
											<button type="button" class="btn btn-secondary">Right</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-primary">Left</button>
											<button type="button" class="btn btn-primary">Middle</button>
											<button type="button" class="btn btn-primary">Right</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-danger">Left</button>
											<button type="button" class="btn btn-danger">Middle</button>
											<button type="button" class="btn btn-danger">Right</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-success">Left</button>
											<button type="button" class="btn btn-success">Middle</button>
											<button type="button" class="btn btn-success">Right</button>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-outline-secondary">Left</button>
											<button type="button" class="btn btn-outline-secondary">Middle</button>
											<button type="button" class="btn btn-outline-secondary">Right</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-outline-primary">Left</button>
											<button type="button" class="btn btn-outline-primary">Middle</button>
											<button type="button" class="btn btn-outline-primary">Right</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-outline-danger">Left</button>
											<button type="button" class="btn btn-outline-danger">Middle</button>
											<button type="button" class="btn btn-outline-danger">Right</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-outline-success">Left</button>
											<button type="button" class="btn btn-outline-success">Middle</button>
											<button type="button" class="btn btn-outline-success">Right</button>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-dark"><i class="bx bx-like"></i>
											</button>
											<button type="button" class="btn btn-dark"><i class="bx bx-share"></i>
											</button>
											<button type="button" class="btn btn-dark"><i class="bx bx-comment-detail"></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-info"><i class="bx bxs-music"></i>
											</button>
											<button type="button" class="btn btn-info"><i class="bx bxs-heart"></i>
											</button>
											<button type="button" class="btn btn-info"><i class="bx bxs-florist"></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-warning"><i class="bx bx-left-arrow"></i>
											</button>
											<button type="button" class="btn btn-warning"><i class="bx bx-up-arrow"></i>
											</button>
											<button type="button" class="btn btn-warning"><i class="bx bx-right-arrow"></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-primary"><i class="bx bxl-facebook-square"></i>
											</button>
											<button type="button" class="btn btn-primary"><i class="bx bxl-twitter"></i>
											</button>
											<button type="button" class="btn btn-primary"><i class="bx bxl-linkedin-square"></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-danger"><i class='bx bx-pointer me-0'></i>
											</button>
											<button type="button" class="btn btn-danger"><i class='bx bx-search-alt me-0'></i>
											</button>
											<button type="button" class="btn btn-danger"><i class='bx bx-rotate-right me-0'></i>
											</button>
											<button type="button" class="btn btn-danger"><i class='bx bx-aperture me-0'></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-secondary"><i class='bx bx-export me-0'></i>
											</button>
											<button type="button" class="btn btn-secondary"><i class='bx bx-star me-0'></i>
											</button>
											<button type="button" class="btn btn-secondary"><i class='bx bx-pin me-0'></i>
											</button>
											<button type="button" class="btn btn-secondary"><i class='bx bx-cloud-light-rain me-0'></i>
											</button>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-outline-dark"><i class="bx bx-like"></i>
											</button>
											<button type="button" class="btn btn-outline-dark"><i class="bx bx-share"></i>
											</button>
											<button type="button" class="btn btn-outline-dark"><i class="bx bx-comment-detail"></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-outline-info"><i class="bx bxs-music"></i>
											</button>
											<button type="button" class="btn btn-outline-info"><i class="bx bxs-heart"></i>
											</button>
											<button type="button" class="btn btn-outline-info"><i class="bx bxs-florist"></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-outline-warning"><i class="bx bx-left-arrow"></i>
											</button>
											<button type="button" class="btn btn-outline-warning"><i class="bx bx-up-arrow"></i>
											</button>
											<button type="button" class="btn btn-outline-warning"><i class="bx bx-right-arrow"></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-outline-primary"><i class="bx bxl-facebook-square"></i>
											</button>
											<button type="button" class="btn btn-outline-primary"><i class="bx bxl-twitter"></i>
											</button>
											<button type="button" class="btn btn-outline-primary"><i class="bx bxl-linkedin-square"></i>
											</button>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-dark">Button</button>
											<button type="button" class="btn btn-dark">Button</button>
											<button type="button" class="btn btn-dark">Button</button>
											<button type="button" class="btn btn-dark">Button</button>
											<button type="button" class="btn btn-dark">Button</button>
											<button type="button" class="btn btn-dark">Button</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-warning">Button</button>
											<button type="button" class="btn btn-warning">Button</button>
											<button type="button" class="btn btn-warning">Button</button>
											<button type="button" class="btn btn-warning">Button</button>
											<button type="button" class="btn btn-warning">Button</button>
											<button type="button" class="btn btn-warning">Button</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-outline-danger">Button</button>
											<button type="button" class="btn btn-outline-danger">Button</button>
											<button type="button" class="btn btn-outline-danger active">Button</button>
											<button type="button" class="btn btn-outline-danger">Button</button>
											<button type="button" class="btn btn-outline-danger">Button</button>
											<button type="button" class="btn btn-outline-danger">Button</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-outline-success">Button</button>
											<button type="button" class="btn btn-outline-success">Button</button>
											<button type="button" class="btn btn-outline-success">Button</button>
											<button type="button" class="btn btn-outline-success">Button</button>
											<button type="button" class="btn btn-outline-success">Button</button>
											<button type="button" class="btn btn-outline-success">Button</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-info"><i class='bx bxl-facebook-square me-0'></i>
											</button>
											<button type="button" class="btn btn-info"><i class='bx bxl-twitter me-0'></i>
											</button>
											<button type="button" class="btn btn-info"><i class='bx bxl-linkedin-square me-0'></i>
											</button>
											<button type="button" class="btn btn-info"><i class='bx bxl-youtube me-0'></i>
											</button>
											<button type="button" class="btn btn-info"><i class='bx bxl-wordpress me-0'></i>
											</button>
											<button type="button" class="btn btn-info"><i class='bx bxl-pinterest me-0'></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-dark"><i class='bx bx-home-smile me-0'></i>
											</button>
											<button type="button" class="btn btn-dark"><i class='bx bx-coin-stack me-0'></i>
											</button>
											<button type="button" class="btn btn-dark"><i class='bx bx-book-heart me-0'></i>
											</button>
											<button type="button" class="btn btn-dark"><i class='bx bx-video-recording me-0'></i>
											</button>
											<button type="button" class="btn btn-dark"><i class='bx bx-paper-plane me-0'></i>
											</button>
											<button type="button" class="btn btn-dark"><i class='bx bx-trash-alt me-0'></i>
											</button>
										</div>
									</div>
								</div>
								<!--end row-->
							</div>
						</div>
						<div class="card radius-10">
							<div class="card-body">
								<div>
									<h5 class="card-title">Dropdown Buttons</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<div class="dropdown">
											<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Primary</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Secondary</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="dropdown">
											<button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Success</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="dropdown">
											<button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Info</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="dropdown">
											<button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Warning</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="dropdown">
											<button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Danger</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-primary">Primary</button>
											<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-secondary">Secondary</button>
											<button type="button" class="btn btn-secondary split-bg-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-success">Success</button>
											<button type="button" class="btn btn-success split-bg-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-info">Info</button>
											<button type="button" class="btn btn-info split-bg-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-warning">Warning</button>
											<button type="button" class="btn btn-warning split-bg-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-danger">Danger</button>
											<button type="button" class="btn btn-danger split-bg-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-outline-primary">Dropdown</button>
											<button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-outline-secondary">Dropdown</button>
											<button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-outline-success">Dropdown</button>
											<button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-outline-info">Dropdown</button>
											<button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-outline-warning">Dropdown</button>
											<button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-outline-danger">Dropdown</button>
											<button type="button" class="btn btn-outline-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!--end row -->
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->

	<!-- search modal -->
    <div class="modal" id="SearchModal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
		  <div class="modal-content">
			<div class="modal-header gap-2">
			  <div class="position-relative popup-search w-100">
				<input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search" placeholder="Search">
				<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i class='bx bx-search'></i></span>
			  </div>
			  <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="search-list">
				   <p class="mb-1">Html Templates</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action active align-items-center d-flex gap-2 py-1"><i class='bx bxl-angular fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vuejs fs-4'></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-magento fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-shopify fs-4'></i>eCommerce Html Templates</a>
				   </div>
				   <p class="mb-1 mt-3">Web Designe Company</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-windows fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-dropbox fs-4' ></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-opera fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-wordpress fs-4'></i>eCommerce Html Templates</a>
				   </div>
				   <p class="mb-1 mt-3">Software Development</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-mailchimp fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-zoom fs-4'></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-sass fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vk fs-4'></i>eCommerce Html Templates</a>
				   </div>
				   <p class="mb-1 mt-3">Online Shoping Portals</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-slack fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-skype fs-4'></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-twitter fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vimeo fs-4'></i>eCommerce Html Templates</a>
				   </div>
				</div>
			</div>
		  </div>
		</div>
	  </div>
    <!-- end search modal -->



	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
					<label class="form-check-label" for="semidark">Semi Dark</label>
				</div>
			</div>
			<hr/>
			<div class="form-check">
				<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
				<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
			</div>
			<hr/>
			<h6 class="mb-0">Header Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator headercolor1" id="headercolor1"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor2" id="headercolor2"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor3" id="headercolor3"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor4" id="headercolor4"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor5" id="headercolor5"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor6" id="headercolor6"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor7" id="headercolor7"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor8" id="headercolor8"></div>
					</div>
				</div>
			</div>
			<hr/>
			<h6 class="mb-0">Sidebar Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/component-buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Apr 2023 19:36:19 GMT -->
</html>