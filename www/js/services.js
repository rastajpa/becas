angular.module('becas.services', ['ionic','ngCordova'])
.service('StateService', function($q){
    return {
        UserState: function(doc,data){
           var deferred = $q.defer();
            var promise = deferred.promise;  
            for (var i = data.length - 1; i >= 0; i--) {
                if (doc == data[i].dni) {
                var dni= data[i].dni
            }
            }
            if (doc == dni) {
                deferred.resolve('Cualquier duda que tenga, por favor escribanos un mail en la sección de reclamos');
            } else {
                deferred.reject('Datos erroneos.');
            }
            promise.success = function(fn) {
                promise.then(fn);
                return promise;
            }
            promise.error = function(fn) {
                promise.then(null, fn);
                return promise;
            }
            return promise;
        }
    }
});