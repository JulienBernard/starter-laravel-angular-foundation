<div ng-controller="TodoController">
    <form ng-submit="create()" novalidate>
		<h1>Create a new todo task</h1>			
		<div class="row">
			<div class="large-12 columns">
				<div class="row collapse">
					<div class="small-12 medium-10 columns">
						<label>Enter the name of the task
							<input id="body" name="body" type="text" placeholder="Create an awesome webapp!"
								ng-model="body" required>
						</label>
					</div>
					<div class="small-12 medium-2 columns">
						<label>&nbsp;</label>
						<input type="submit" id="submit" name="submit" class="button postfix"/>
					</div>
				</div>
			</div>
		</div>
    </form>
</div>


