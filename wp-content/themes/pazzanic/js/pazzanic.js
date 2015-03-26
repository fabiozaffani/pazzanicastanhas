$(function(){

/* Funcao para girar carrossel automaticamente */
	
	interval = setInterval("gira()", 9000);

/* Função para movimentar o carrossel */
	
  var MovimentoCarrossel = $('#Carrossel').width();
  
  $('#ControlesCarrossel a').click(function(){
    var PosicaoAtual = $('#Carrossel ul').position();
        if (PosicaoAtual.left == 0){
          $('#Carrossel ul').animate({
            'left': -MovimentoCarrossel
          }, 1000, 'swing');          
        } else {
          $('#Carrossel ul').animate({
            'left': 0
          }, 1000, 'swing');
        }
	clearInterval(interval);
	interval = setInterval("gira()", 9000);
    return false;
  });
  
  /* Busca do Site */
  
  $('.CampoBusca').blur(function(){
	var Texto = $(this).val();
	switch(Texto){
		case '':
			$(this).val('Procurar...');
		break;
	}
  });
  
  $('.CampoBusca').focus(function(){
	var Texto = $(this).val();
	switch(Texto){
		case 'Procurar...':
			$(this).val('');
		break;
	}
  });
  
  /* Mascara no Campo Telefone */
  
  var isPhone = $('#FaleConoscoPaginaTelefone').length;
  
  if (isPhone)
  	$('#FaleConoscoPaginaTelefone').mask('(99)9999-9999');
});

function gira(){
	$('#ControlesCarrossel a').click();
};
