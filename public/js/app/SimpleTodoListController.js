(function() {
    'use strict';

    app.controller('SimpleTodoController', [ '$scope', 'SimpleTodoService', '$rootScope', function($scope, SimpleTodoService, $rootScope) {

        var vm = this;
        $scope.todos = [];

        vm.reload = function() {
            SimpleTodoService.findAll().then(function(response) {
                $scope.todos = response.data;
            });
        };

        $scope.remove = function (todo) {
            SimpleTodoService.remove(todo).then(function() {
                vm.reload();
            });
        };

        $scope.create = function(){
            SimpleTodoService.save($scope.newTodo).then(function() {
                vm.reload();
                $scope.newTodo = {};
            });
        };

        vm.reload();

    } ]);

})();