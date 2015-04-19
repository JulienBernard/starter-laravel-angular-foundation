<!doctype html>
<html lang="en">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <title>Todo</title>
    <script type="application/javascript" src="<% elixir('js/all.js') %>"></script>
    <link rel="stylesheet" href="<% elixir('css/all.css') %>"/>
</head>
<body ng-app="todoApp" ng-controller="MainController" ng-init="getAuthenticatedUser()">

<nav class="top-bar" data-topbar="" role="navigation">
	<ul class="title-area">
		<li class="name">
		  <h1><a href="#">Todos</a></h1>
		</li>
		<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
	</ul>
  
    <section class="top-bar-section">
		<ul class="left">
			<li ng-class="{active:isActive('/todos')}"><a href="/todos">List Todos</a></li>
			<li ng-class="{active:isActive('/todos/create')}"><a href="/todos/create">Create Todo</a></li>
		</ul>
		<ul class="right">
			<li ng-if="authenticatedUser == null" ng-class="{active:isActive('/auth/signup')}"><a href="/auth/signup">Sign Up</a></li>
			<li ng-if="authenticatedUser == null" ng-class="{active:isActive('/auth/login')}"><a href="/auth/login">Log in</a></li>
			<li ng-if="authenticatedUser != null" ng-class="{active:isActive('/users/view/' + authenticatedUser.id)}"><a ng-href="/users/view/{{authenticatedUser.id}}">{{authenticatedUser.username}}</a></li>
			<li ng-if="authenticatedUser != null" ng-click="logout()"><a ng-href="#">Log out</a></li>
		</ul>
    </section>
</nav>

<div id="todoApp-main-container" class="row">
    <div class="small-11 medium-10 small-centered large-12 columns" ng-view>
    </div>
</div>

<script>
	$(document).foundation();
</script>


</body>
</html>
