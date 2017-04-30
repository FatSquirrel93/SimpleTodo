(function () {
    'use strict';

    app.factory('SimpleTodoService', ['$http', function ($http) {

        var service = {
            findAll: findAll,
            save: save,
            remove: remove
        };

        return service;

        function findAll() {
            return $http.get('/api/todos').then(function(response) {return response});
        }

        function save(todo) {
            if (todo.id) {
                return $http.put('/api/todos/' + todo.id, todo).then(function(response) {return response});
            }

            return $http.post('/api/todos', todo).then(function(response) {return response});
        }

        function remove(todo) {
            return $http.delete('/api/todos/' + todo.id).then(function(response) {return response});
        }

    }]);

})();