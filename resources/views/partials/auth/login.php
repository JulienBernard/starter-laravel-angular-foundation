<form name="loginForm" ng-controller="UserController" ng-submit="login()" novalidate>
	<div class="row">
        <div class="small-12 medium-6 columns">
			<label>Username</label>
            <input type="text" id="username" ng-model="username"
                   class="form-control" placeholder="John">
        </div>
        <div class="small-12 medium-6 columns">
			<label>Password</label>
            <input type="password" id="password" ng-model="password"
                   class="form-control" placeholder="Password">
        </div>
    </div>
    <div class="row">
        <div class="small-12 medium-6 medium-centered columns">
            <button type="submit" class="button expand">Login</button>
        </div>
    </div>
</form>
