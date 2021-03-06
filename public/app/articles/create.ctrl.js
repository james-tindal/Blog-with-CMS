(function() {
  'use strict';

  angular
    .module('app.articles')
    .controller('articleCreateCtrl', articleCreateCtrl);

  function articleCreateCtrl(ResourceCtrl, $location) {
    var vm = this;
    var articles = ResourceCtrl('articles', vm, $location);

    vm.type = 'create';
    vm.save = articles.create;

  }

})();