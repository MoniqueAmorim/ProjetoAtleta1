var atletasModulo = angular.module('atletasModulo',[]);

atletasModulo.controller("atletasController", function ($scope){
  $scope.atletas = [
    {nome:'Monique', modalidade:'Volei',situacaodoAtleta:'Competindo', calculodaIMC:'21,80'}
    
  ];  
    
  $scope.selecionaAtleta = function(atletaSelecionado) {
      $scope.atleta = atletaSelecionado;
      
  }
   
  $scope.limparCampos = function(){
      $scope.categoria ="";
  }
  
});