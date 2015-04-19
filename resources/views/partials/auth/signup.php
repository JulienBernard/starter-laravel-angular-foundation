<form name="loginForm" ng-controller="UserController" ng-submit="create()" novalidate>
    <div class="row">
        <div class="small-12 medium-6 columns">
			<label>Username</label>
            <input type="text" id="username" ng-model="username"
                   class="form-control" placeholder="John">
        </div>
        <div class="small-12 medium-6 columns">
			<label>Email</label>
            <input type="email" id="email" ng-model="email"
                   class="form-control" placeholder="john@fai.com">
        </div>
    </div>
    <div class="row">
		<div class="small-12 medium-6 columns">
			<label>Password</label>
			<input type="password" id="password" ng-model="password"
                   class="form-control" placeholder="Password">
		</div>
		<div class="small-12 medium-6 columns">
			<label>Password confirmation</label>
			<input type="password" id="passwordConfirmation" ng-model="passwordConfirmation"
                   class="form-control" placeholder="Password, again!">
        </div>
    </div>
    <div class="row">
        <div class="small-12 medium-6 medium-centered columns">
            <button type="submit" class="button expand">Sign Up</button>
        </div>
    </div>
</form>