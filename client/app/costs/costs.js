'use strict';

angular.module('rivetApp')
  .config(function ($routeProvider) {
    $routeProvider
      .when('/costs', {
        templateUrl: 'app/costs/costs.html',
        controller: 'CostsCtrl'
      });
  });
