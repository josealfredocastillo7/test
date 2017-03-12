var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope) {

    $scope.name = "";
    $scope.lastname = "";
    $scope.cedula = "";
    $scope.email = "";
    $scope.cargo = "";
    $scope.status = "1";
    //$scope.lastName = "Doe";
    $scope.modificar = function(id) {

      //$scope.angularid = (string)id;
      document.getElementById("modific").setAttribute("action", "/edit/"+id);

      if(document.getElementById("Status-"+id).innerHTML != "Activo"){var status = "0"}
      else{var status = "1"}

      $scope.name = document.getElementById("Name-"+id).innerHTML;
      $scope.lastname = document.getElementById("Lastname-"+id).innerHTML;
      $scope.cedula = document.getElementById("Cedula-"+id).innerHTML;
      $scope.email = document.getElementById("Email-"+id).innerHTML;
      $scope.cargo = document.getElementById("Cargo-"+id).innerHTML;
      $scope.status = status;
    };
});
