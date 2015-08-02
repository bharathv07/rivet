'use strict';

describe('Controller: CostsCtrl', function () {

  // load the controller's module
  beforeEach(module('rivetApp'));

  var CostsCtrl, scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    CostsCtrl = $controller('CostsCtrl', {
      $scope: scope
    });
  }));

  it('should ...', function () {
    expect(1).toEqual(1);
  });
});
