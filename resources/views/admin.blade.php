@extends('layouts.adminTheme')
@section('content')
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Visitors</h4>
					<h3>{{ $count }}</h3>
					<p>Other hand, we denounce</p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Users</h4>
						<h3>{{ $users }}</h3>
						<p>Other hand, we denounce</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Sales</h4>
						<h3>1,500</h3>
						<p>Other hand, we denounce</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Orders</h4>
						<h3>1,500</h3>
						<p>Other hand, we denounce</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		
		<div class="agil-info-calendar">
		<!-- calendar -->
		<div class="col-md-6 agile-calendar">
			<div class="calendar-widget">
                <div class="panel-heading ui-sortable-handle">
					<span class="panel-icon">
                      <i class="fa fa-calendar-o"></i>
                    </span>
                    <span class="panel-title"> Calendar Widget</span>
                </div>
				<!-- grids -->
					<div class="agile-calendar-grid">
						<div class="page">
							
							<div class="w3l-calendar-left">
								<div class="calendar-heading">
									
								</div>
								<div class="monthly" id="mycalendar"></div>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
			</div>
		</div>
		<!-- //calendar -->
		<div class="col-md-6 w3agile-notifications">
			<div class="notifications">
				<!--notification start-->
				
					<header class="panel-heading">
						Notification 
					</header>
					<div class="notify-w3ls">
						<div class="alert alert-info clearfix">
							<span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
							<div class="notification-info">
								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
									<li class="pull-right notification-time">1 min ago</li>
								</ul>
								<p>
									Urgent meeting for next proposal
								</p>
							</div>
						</div>
						<div class="alert alert-danger">
							<span class="alert-icon"><i class="fa fa-facebook"></i></span>
							<div class="notification-info">
								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> mentioned you in a post </li>
									<li class="pull-right notification-time">7 Hours Ago</li>
								</ul>
								<p>
									Very cool photo jack
								</p>
							</div>
						</div>
						<div class="alert alert-success ">
							<span class="alert-icon"><i class="fa fa-comments-o"></i></span>
							<div class="notification-info">
								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender">You have 5 message unread</li>
									<li class="pull-right notification-time">1 min ago</li>
								</ul>
								<p>
									<a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>
								</p>
							</div>
						</div>
						<div class="alert alert-warning ">
							<span class="alert-icon"><i class="fa fa-bell-o"></i></span>
							<div class="notification-info">
								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender">Domain Renew Deadline 7 days ahead</li>
									<li class="pull-right notification-time">5 Days Ago</li>
								</ul>
								<p>
									Next 5 July Thursday is the last day
								</p>
							</div>
						</div>
					
				
				<!--notification end-->
				</div>
			</div>
		</div>
			<!-- tasks -->
		
		
    </section>
</section>
@endsection