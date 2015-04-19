<div ng-controller="TodoController" ng-init="findOne()">
    <h2>View Todo #{{todo.id}} <small><a href ng-click="remove(todo)"><i class="fi-trash size-16"> Remove this task</i></a></small></h2>
    <p>
		{{todo.body}}
	</p>
</div>


