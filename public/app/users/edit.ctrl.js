(function() {
  'use strict';

  angular
    .module('app.users')
    .controller('userEditCtrl', userEditCtrl);

  function userEditCtrl(ResourceCtrl, $location, $routeParams) {
    var vm = this;
    var users = ResourceCtrl('users', vm, $location);

    vm.type = 'edit';
    vm.save = users.update;

    users.getSingle($routeParams.id);

  }

})();