<div ng-controller="TodoController" ng-init="find()">
    <p ng-if="!todos.length">
        There are no todos right now, <a href="/todos/create">create one!</a>
    </p>

    <div class="row" ng-repeat="todo in todos">
		<div class="small-12 medium-10 large-12 small-centered columns">
            <div class="row collapse">
				<div class="small-9 medium-10 columns">
					<input type="text" class="form-control" ng-model="todo.body"
                       ng-blur="update(todo)" enter-stroke="update(todo)">
				</div>
				<div class="small-3 medium-2 columns">
					<span class="postfix">
						<a href="/todos/view/{{todo.id}}"><i class="fi-eye size-18"></i></a>
						&nbsp;
						<a href><i class="fi-trash size-18" ng-click="remove(todo)"></i></a>
					</span>
                </div>
            </div>
        </div>
    </div>
	
	<p ng-if="todos.length" class="text-right">
        <a href="/todos/create"><small>Create another task</small></a>
    </p>
</div>