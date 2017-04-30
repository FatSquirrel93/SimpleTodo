<!doctype html>
<html lang="{{ config('app.locale">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>

</head>
<body ng-app="SimpleTodoModule">

<div class="container">

    <h1>SimpleTodo</h1>

    <div ng-controller="SimpleTodoController">
        <table class="table">
            <caption>Optional table caption.</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Task</th>
                <th>Created at</th>
                <th>Modified at</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"></th>
                <td>
                    <input type="text" class="form-control" ng-model="newTodo.todo">
                </td>
                <td></td>
                <td></td>
                <td><button class="btn btn-default" ng-click="create(todo)">+</button></td>
            </tr>
            <tr ng-repeat="todo in todos">
                <th scope="row">{{todo.id}}</th>
                <td>{{todo.todo}}</td>
                <td>{{todo.created_at}}</td>
                <td>{{todo.updated_at}}</td>
                <td><button class="btn btn-default" ng-click="remove(todo)">X</button></td>
            </tr>

            </tbody>
        </table>
    </div>

</div>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>

<script type="text/javascript" src="js/app/SimpleTodoModule.js"></script>

<script type="text/javascript" src="js/app/SimpleTodoService.js"></script>
<script type="text/javascript" src="js/app/SimpleTodoListController.js"></script>

</body>

</html>
