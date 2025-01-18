<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title><?= $title ?></title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?= base_url() ?>public/assets/modules/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>public/assets/modules/fontawesome/css/all.min.css">

	<!-- CSS Libraries -->
	<link rel="stylesheet" href="<?= base_url() ?>public/assets/modules/datatables/datatables.min.css" />
	<link rel="stylesheet" href="<?= base_url() ?>public/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" />
	<link rel="stylesheet" href="<?= base_url() ?>public/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css" />

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>public/assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>public/assets/css/components.css">

</head>

<body>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<form class="form-inline mr-auto">
					<ul class="navbar-nav mr-3">
						<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
						<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
					</ul>
					<div class="search-element">
						<input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
						<button class="btn" type="submit"><i class="fas fa-search"></i></button>
						<div class="search-backdrop"></div>
						<div class="search-result">
							<div class="search-header">
								Histories
							</div>
							<div class="search-item">
								<a href="#">How to hack NASA using CSS</a>
								<a href="#" class="search-close"><i class="fas fa-times"></i></a>
							</div>
							<div class="search-item">
								<a href="#">Kodinger.com</a>
								<a href="#" class="search-close"><i class="fas fa-times"></i></a>
							</div>
							<div class="search-item">
								<a href="#">Categories</a>
							</div>
						</div>
					</div>
				</form>
				<ul class="navbar-nav navbar-right">
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
							<img alt="image" src="<?= base_url() ?>public/assets/img/avatar-1.png" class="rounded-circle mr-1">
							<div class="d-sm-none d-lg-inline-block">Hi, <?= $user->first_name ?></div>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="dropdown-title">Logged in 5 min ago</div>
							<a href="features-profile.html" class="dropdown-item has-icon">
								<i class="far fa-user"></i> Profile
							</a>
							<a href="features-activities.html" class="dropdown-item has-icon">
								<i class="fas fa-bolt"></i> Activities
							</a>
							<a href="features-settings.html" class="dropdown-item has-icon">
								<i class="fas fa-cog"></i> Settings
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item has-icon text-danger">
								<i class="fas fa-sign-out-alt"></i> Logout
							</a>
						</div>
					</li>
					<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
						<div class="dropdown-menu dropdown-list dropdown-menu-right">
							<div class="dropdown-header">Notifications
								<div class="float-right">
									<a href="#">Mark All As Read</a>
								</div>
							</div>
							<div class="dropdown-list-content dropdown-list-icons">
								<a href="#" class="dropdown-item dropdown-item-unread">
									<div class="dropdown-item-icon bg-primary text-white">
										<i class="fas fa-code"></i>
									</div>
									<div class="dropdown-item-desc">
										Template update is available now!
										<div class="time text-primary">2 Min Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<div class="dropdown-item-icon bg-info text-white">
										<i class="far fa-user"></i>
									</div>
									<div class="dropdown-item-desc">
										<b>You</b> and <b>Dedik Sugiharto</b> are now friends
										<div class="time">10 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<div class="dropdown-item-icon bg-success text-white">
										<i class="fas fa-check"></i>
									</div>
									<div class="dropdown-item-desc">
										<b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
										<div class="time">12 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<div class="dropdown-item-icon bg-danger text-white">
										<i class="fas fa-exclamation-triangle"></i>
									</div>
									<div class="dropdown-item-desc">
										Low disk space. Let's clean it!
										<div class="time">17 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<div class="dropdown-item-icon bg-info text-white">
										<i class="fas fa-bell"></i>
									</div>
									<div class="dropdown-item-desc">
										Welcome to Stisla template!
										<div class="time">Yesterday</div>
									</div>
								</a>
							</div>
							<div class="dropdown-footer text-center">
								<a href="#">View All <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
					</li>
				</ul>
			</nav>
			<div class="main-sidebar sidebar-style-2">
				<aside id="sidebar-wrapper">
					<div class="sidebar-brand">
						<a href="index.html">PasarLelang.com</a>
					</div>
					<div class="sidebar-brand sidebar-brand-sm">
						<a href="index.html">pl</a>
					</div>
					<ul class="sidebar-menu">
						<li class="menu-header">Dashboard</li>

						<li class="<?= $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>"><a class="nav-link" href="<?= base_url('admin/dashboard') ?>"><i class="fas fa-th-large"></i> <span>Dashboard</span></a></li>

						<li class="menu-header">Menu</li>

						<li class="dropdown <?= $this->uri->segment(2) == 'user-account' || $this->uri->segment(2) == 'admin-account' ? 'active' : '' ?>">
							<a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Account</span></a>

							<ul class="dropdown-menu">
								<li class="<?= $this->uri->segment(2) == 'user-account' ? 'active' : '' ?>"><a class="nav-link" href="<?= base_url('admin/user-account') ?>">Users</a></li>
								<li class="<?= $this->uri->segment(2) == 'admin-account' ? 'active' : '' ?>"><a class="nav-link" href="index.html">Admin</a></li>
							</ul>
						</li>
					</ul>
				</aside>
			</div>

			<!-- Main Content -->
			<div class="main-content">
				<section class="section">
