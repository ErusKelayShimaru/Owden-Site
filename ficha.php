<!DOCTYPE html>

<html lang="pt-br">
	
	<head>
		<meta charset="UTF-8"/>
		<title>Ficha Lado A</title>
		<link rel="stylesheet" type="text/css" href="css/estilogeral.css"/>
		<link rel="shortcut icon" href="img/favicon.ico" />
		
		<style>

		</style>

		<script>
			window.onload = function carregarCanvasFichaA()
			{
				//Carrega os dados da Ficha
				var nomeJogador = "Elcimar A. Moura";
				var nomePersonagem = "Argus";
				var nomeFamilia = "Mitranis";
				var nomeRaca = "Elfo";
				var nomeClasse = "Nômade";
				var idade = "25";
				var velocidade = "20";
				var altura = "1,80 m";
				var peso = "100 kg";
				var agilidade = "4";
				var fisico = "3";
				var forca = "2";
				var firmeza = "3";
				var atencao = "2";
				var intelecto = "2";
				var carisma = "3";
				var espirito = "2";
				var descrevePersonagem1 = "Linha 01 - Nesta área será o rascunho de";
				var descrevePersonagem2 = "Linha 02 - texto de informações sobre";
				var descrevePersonagem3 = "Linha 03 -  como é a aparência do";
				var descrevePersonagem4 = "Linha 04 - personagem";
				var descrevePersonagem5 = "Linha 05 - ...";
				var acoesFurtivas = "0";
				var acrobacias = "0";
				var malabarismo = "0";
				var pilhar = "0";
				var reparos = "0";
				var concentracao = "0";
				var observar = "0";
				var prontidao = "0";
				var sobrevivencia = "0";
				var trilhas = "0";
				var corrida = "0";
				var montaria = "0";
				var natacao = "0";
				var escalar = "0";
				var esforcar = "0";
				var animais = "0";
				var atuacao = "0";
				var confianca = "0";
				var seducao = "0";
				var lideranca = "0";
				var persuasao = "0";
				var armadilhas = "0";
				var barganha = "0";
				var fechaduras = "0";
				var jogos = "0";
				var feOracao = "0";
				var meditacao = "0";
				var sonhos = "0";
				var habConEspecial1Nome = "MTesteg1";
				var habConEspecial2Nome = "MTesteg2";
				var habConEspecial3Nome = "MTesteg3";
				var habConEspecial4Nome = "MTesteg4";
				var habConEspecial5Nome = "MTesteg5";
				var habConEspecial6Nome = "MTesteg6";
				var habConEspecial7Nome = "MTesteg7";
				var habConEspecial8Nome = "MTesteg8";
				var habConEspecial9Nome = "MTesteg9";
				var habConEspecial10Nome = "MTesteg10";
				var habConEspecial1 = "0";
				var habConEspecial2 = "0";
				var habConEspecial3 = "0";
				var habConEspecial4 = "0";
				var habConEspecial5 = "0";
				var habConEspecial6 = "0";
				var habConEspecial7 = "0";
				var habConEspecial8 = "0";
				var habConEspecial9 = "0";
				var habConEspecial10 = "0";
				var poderEspiritual = "00";
				var vitalidade = "000";
				var vontade = "000";
				var sorte = "00";
				var periciaMaoPura = "0";
				var periciaEscudos = "0";
				var periciaHastes = "0";
				var periciaLancar = "0";
				var periciaCabo = "0";
				var periciaTiro = "0";
				var periciaCorrente = "0";
				var protecaoObjeto1 = "Elmo de Couro";
				var valorProtecaoObjeto1Atual = "0";
				var valorProtecaoObjeto1Max = "0";
				
				var protecaoObjeto2 = "Elmo de Metal";
				var valorProtecaoObjeto2Atual = "0";
				var valorProtecaoObjeto2Max = "0";
				
				var protecaoObjeto3 = "Couro Macio";
				var valorProtecaoObjeto3Atual = "0";
				var valorProtecaoObjeto3Max = "0";
				
				var protecaoObjeto4 = "Cota de Malha";
				var valorProtecaoObjeto4Atual = "0";
				var valorProtecaoObjeto4Max = "0";
				
				var protecaoObjeto5 = "Couro Duro";
				var valorProtecaoObjeto5Atual = "0";
				var valorProtecaoObjeto5Max = "0";
				
				var protecaoObjeto6 = "Escudo";
				var valorProtecaoObjeto6Atual = "0";
				var valorProtecaoObjeto6Max = "0";
				
				var arma1 = "Arco Longo";
				var arma1Grupo = "0";
				var arma1Forca = "0";
				var arma1Agil = "0";
				var arma1Pericia = "0";
				var arma1Dano = "0";
				
				var arma2 = "Espada";
				var arma2Grupo = "0";
				var arma2Forca = "0";
				var arma2Agil = "0";
				var arma2Pericia = "0";
				var arma2Dano = "0";
				
				var arma3 = "Lança";
				var arma3Grupo = "0";
				var arma3Forca = "0";
				var arma3Agil = "0";
				var arma3Pericia = "0";
				var arma3Dano = "0";
				
				var arma4 = "Punhal";
				var arma4Grupo = "0";
				var arma4Forca = "0";
				var arma4Agil = "0";
				var arma4Pericia = "0";
				var arma4Dano = "0";
				
				var tecCombate1Nome = "Técnica de Combateg";
				var tecCombate2Nome = "Técnica de Combateg";
				var tecCombate3Nome = "Técnica de Combateg";
				var tecCombate4Nome = "Técnica de Combateg";
				var tecCombate5Nome = "Técnica de Combateg";
				var tecCombate6Nome = "Técnica de Combateg";
				var tecCombate7Nome = "Técnica de Combateg";
				var tecCombate8Nome = "Técnica de Combateg";
				var tecCombate9Nome = "Técnica de Combateg";
				var tecCombate10Nome = "Técnica de Combateg";
				
				var tecCombate1 = "0";
				var tecCombate2 = "0";
				var tecCombate3 = "0";
				var tecCombate4 = "0";
				var tecCombate5 = "0";
				var tecCombate6 = "0";
				var tecCombate7 = "0";
				var tecCombate8 = "0";
				var tecCombate9 = "0";
				var tecCombate10 = "0";
				
				var magia1Nome = "Magia";
				var magia2Nome = "Magia";
				var magia3Nome = "Magia";
				var magia4Nome = "Magia";
				var magia5Nome = "Magia";
				var magia6Nome = "Magia";
				var magia7Nome = "Magia";
				var magia8Nome = "Magia";
				var magia9Nome = "Magia";
				var magia10Nome = "Magia";
				
				var magia1 = "0";
				var magia2 = "0";
				var magia3 = "0";
				var magia4 = "0";
				var magia5 = "0";
				var magia6 = "0";
				var magia7 = "0";
				var magia8 = "0";
				var magia9 = "0";
				var magia10 = "0";
				
				var visao = "0";
				var audicao = "0";
				var olfato = "0";
				var paladar = "0";
				var tato = "0";
				var intuicao = "0";
				
				var pecasDeOuro = "0";
				var pecasDePrata = "0";
				var pecasDeCobre = "0";
				
				var possesEPropriedades1 = "Item g";
				var possesEPropriedades2 = "Item g";
				var possesEPropriedades3 = "Item g";
				var possesEPropriedades4 = "Item g";
				var possesEPropriedades5 = "Item g";
				var possesEPropriedades6 = "Item g";
				var possesEPropriedades7 = "Item g";
				var possesEPropriedades8 = "Item g";
				var possesEPropriedades9 = "Item g";
				var possesEPropriedades10 = "Item g";
				var possesEPropriedades11 = "Item g";
				var possesEPropriedades12 = "Item g";
				
				//Inicializa Variáveis da TELA CANVAS
				telaCanvas = document.getElementById("telaFichaA");
				telaContext = telaCanvas.getContext("2d");
				telaContext.font = "18px Arial bold";
				telaContext.textAlign="left";
				
				//Carregar imagem
				var fichaA = new Image();
				fichaA.src = "img/fichaA.jpg";
				fichaA.onload = function()
				{
					telaContext.drawImage(fichaA, 0, 0, 1412, 2000, 0, 0, 1412, 2000);
					
					//Escreve as Informações Pessoais
					telaContext.font = "32px Arial bold";
					telaContext.fillStyle = "#000000";
					telaContext.fillText(nomeJogador, 865, 236);
					telaContext.fillText(nomePersonagem, 832, 280);
					telaContext.fillText(nomeFamilia, 1145, 280);
					telaContext.fillText(nomeRaca, 832, 320);
					telaContext.fillText(nomeClasse, 1145, 320);
					telaContext.fillText(idade, 832, 360);
					telaContext.fillText(velocidade, 1145, 360);
					telaContext.fillText(altura, 832, 400);
					telaContext.fillText(peso, 1145, 400);
					
					//Escreve os Atributos
					telaContext.fillText(agilidade, 350, 445);
					telaContext.fillText(fisico, 350, 495);
					telaContext.fillText(forca, 350, 545);
					telaContext.fillText(firmeza, 350, 595);
					telaContext.fillText(atencao, 650, 445);
					telaContext.fillText(intelecto, 650, 495);
					telaContext.fillText(carisma, 650, 545);
					telaContext.fillText(espirito, 650, 595);
					
					//Escreve a Descrição do Personagem
					telaContext.font = "26px Arial bold";
					telaContext.fillText(descrevePersonagem1, 730, 490);
					telaContext.fillText(descrevePersonagem2, 730, 515);
					telaContext.fillText(descrevePersonagem3, 730, 540);
					telaContext.fillText(descrevePersonagem4, 730, 565);
					telaContext.fillText(descrevePersonagem5, 730, 590);
					
					//Escreve as Habilidades e Conhecimentos
					telaContext.fillText(acoesFurtivas, 383, 740);
					telaContext.fillText(acrobacias, 383, 780);
					telaContext.fillText(malabarismo, 383, 820);
					telaContext.fillText(pilhar, 383, 860);
					telaContext.fillText(reparos, 383, 900);
					telaContext.fillText(concentracao, 383, 989);
					telaContext.fillText(observar, 383, 1029);
					telaContext.fillText(prontidao, 383, 1069);
					telaContext.fillText(sobrevivencia, 383, 1109);
					telaContext.fillText(trilhas, 383, 1149);
					telaContext.fillText(corrida, 659, 743);
					telaContext.fillText(montaria, 659, 783);
					telaContext.fillText(natacao, 659, 823);
					telaContext.fillText(escalar, 659, 909);
					telaContext.fillText(esforcar, 659, 949);
					telaContext.fillText(animais, 659, 1030);
					telaContext.fillText(atuacao, 659, 1070);
					telaContext.fillText(confianca, 659, 1110);
					telaContext.fillText(seducao, 659, 1150);
					telaContext.fillText(lideranca, 935, 743);
					telaContext.fillText(persuasao, 935, 783);
					telaContext.fillText(armadilhas, 935, 866);
					telaContext.fillText(barganha, 935, 906);
					telaContext.fillText(fechaduras, 935, 946);
					telaContext.fillText(jogos, 935, 986);
					telaContext.fillText(feOracao, 935, 1072);
					telaContext.fillText(meditacao, 935, 1112);
					telaContext.fillText(sonhos, 935, 1152);
					
					//Escreve as Habilidades e Conhecimentos Especiais
					if(habConEspecial1Nome != "")
					{
						telaContext.font = "22px Arial bold";
						telaContext.fillText(habConEspecial1Nome, 1002, 756);
						telaContext.font = "26px Arial bold";
						telaContext.fillText(habConEspecial1, 1222, 756);
					}
					
					if(habConEspecial2Nome != "")
					{
						telaContext.font = "22px Arial bold";
						telaContext.fillText(habConEspecial2Nome, 1002, 800);
						telaContext.font = "26px Arial bold";
						telaContext.fillText(habConEspecial2, 1222, 800);
					}
					
					if(habConEspecial3Nome != "")
					{
						telaContext.font = "22px Arial bold";
						telaContext.fillText(habConEspecial3Nome, 1002, 842);
						telaContext.font = "26px Arial bold";
						telaContext.fillText(habConEspecial3, 1222, 842);
					}
					
					if(habConEspecial4Nome != "")
					{
						telaContext.font = "22px Arial bold";
						telaContext.fillText(habConEspecial4Nome, 1002, 885);
						telaContext.font = "26px Arial bold";
						telaContext.fillText(habConEspecial4, 1222, 885);
					}
					
					if(habConEspecial5Nome != "")
					{
						telaContext.font = "22px Arial bold";
						telaContext.fillText(habConEspecial5Nome, 1002, 927);
						telaContext.font = "26px Arial bold";
						telaContext.fillText(habConEspecial5, 1222, 927);
					}
					
					if(habConEspecial6Nome != "")
					{
						telaContext.font = "22px Arial bold";
						telaContext.fillText(habConEspecial6Nome, 1002, 970);
						telaContext.font = "26px Arial bold";
						telaContext.fillText(habConEspecial6, 1222, 970);
					}
					
					if(habConEspecial7Nome != "")
					{
						telaContext.font = "22px Arial bold";
						telaContext.fillText(habConEspecial7Nome, 1002, 1012);
						telaContext.font = "26px Arial bold";
						telaContext.fillText(habConEspecial7, 1222, 1012);
					}
					
					if(habConEspecial8Nome != "")
					{
						telaContext.font = "22px Arial bold";
						telaContext.fillText(habConEspecial8Nome, 1002, 1056);
						telaContext.font = "26px Arial bold";
						telaContext.fillText(habConEspecial8, 1222, 1056);
					}
					
					if(habConEspecial9Nome != "")
					{
						telaContext.font = "22px Arial bold";
						telaContext.fillText(habConEspecial9Nome, 1002, 1100);
						telaContext.font = "26px Arial bold";
						telaContext.fillText(habConEspecial9, 1222, 1100);
					}
					
					if(habConEspecial10Nome != "")
					{
						telaContext.font = "22px Arial bold";
						telaContext.fillText(habConEspecial10Nome, 1002, 1142);
						telaContext.font = "26px Arial bold";
						telaContext.fillText(habConEspecial10, 1222, 1142);
					}
					
					telaContext.font = "26px Arial bold";
					
					//Escreve os totais de combate
					telaContext.fillText(poderEspiritual, 602, 1225);
					telaContext.fillText(vitalidade, 830, 1225);
					telaContext.fillText(vontade, 1030, 1225);
					telaContext.fillText(sorte, 1210, 1225);
					
					//Escreve as Perícias de Combate
					telaContext.fillText(periciaMaoPura, 345, 1310);
					telaContext.fillText(periciaEscudos, 345, 1344);
					telaContext.fillText(periciaHastes, 345, 1377);
					telaContext.fillText(periciaLancar, 345, 1410);
					telaContext.fillText(periciaCabo, 345, 1443);
					telaContext.fillText(periciaTiro, 345, 1476);
					telaContext.fillText(periciaCorrente, 345, 1509);
					
					telaContext.font = "20px Arial bold";
					
					//Escreve os Equipamentos de Proteção
					telaContext.fillText(protecaoObjeto1, 414, 1338);
					telaContext.fillText(valorProtecaoObjeto1Atual, 602, 1338);
					telaContext.fillText(valorProtecaoObjeto1Max, 686, 1338);
					
					telaContext.fillText(protecaoObjeto2, 414, 1372);
					telaContext.fillText(valorProtecaoObjeto2Atual, 602, 1372);
					telaContext.fillText(valorProtecaoObjeto2Max, 686, 1372);
					
					telaContext.fillText(protecaoObjeto3, 414, 1406);
					telaContext.fillText(valorProtecaoObjeto3Atual, 602, 1406);
					telaContext.fillText(valorProtecaoObjeto3Max, 686, 1406);
					
					telaContext.fillText(protecaoObjeto4, 414, 1440);
					telaContext.fillText(valorProtecaoObjeto4Atual, 602, 1440);
					telaContext.fillText(valorProtecaoObjeto4Max, 686, 1440);
					
					telaContext.fillText(protecaoObjeto5, 414, 1472);
					telaContext.fillText(valorProtecaoObjeto5Atual, 602, 1472);
					telaContext.fillText(valorProtecaoObjeto5Max, 686, 1472);
					
					telaContext.fillText(protecaoObjeto6, 414, 1506);
					telaContext.fillText(valorProtecaoObjeto6Atual, 602, 1506);
					telaContext.fillText(valorProtecaoObjeto6Max, 686, 1506);
					
					//Escreve as Armas
					if(arma1 != "")
					{
						telaContext.fillText(arma1, 145, 1584);
						telaContext.fillText(arma1Grupo, 390, 1584);
						telaContext.fillText(arma1Forca, 465, 1584);
						telaContext.fillText(arma1Agil, 530, 1584);
						telaContext.fillText(arma1Pericia, 603, 1584);
						telaContext.fillText(arma1Dano, 685, 1584);
					}

					if(arma2 != "")
					{
						telaContext.fillText(arma2, 145, 1616);
						telaContext.fillText(arma2Grupo, 390, 1616);
						telaContext.fillText(arma2Forca, 465, 1616);
						telaContext.fillText(arma2Agil, 530, 1616);
						telaContext.fillText(arma2Pericia, 603, 1616);
						telaContext.fillText(arma2Dano, 685, 1616);
					}
					
					if(arma3 != "")
					{
						telaContext.fillText(arma3, 145, 1650);
						telaContext.fillText(arma3Grupo, 390, 1650);
						telaContext.fillText(arma3Forca, 465, 1650);
						telaContext.fillText(arma3Agil, 530, 1650);
						telaContext.fillText(arma3Pericia, 603, 1650);
						telaContext.fillText(arma3Dano, 685, 1650);
					}
					
					if(arma4 != "")
					{
						telaContext.fillText(arma4, 145, 1682);
						telaContext.fillText(arma4Grupo, 390, 1682);
						telaContext.fillText(arma4Forca, 465, 1682);
						telaContext.fillText(arma4Agil, 530, 1682);
						telaContext.fillText(arma4Pericia, 603, 1682);
						telaContext.fillText(arma4Dano, 685, 1682);
					}
					
					//Escreve as Técnicas de Combate
					if(tecCombate1Nome != "")
					{
						telaContext.fillText(tecCombate1Nome, 750, 1316);
						telaContext.fillText(tecCombate1, 955, 1316);
					}
					
					if(tecCombate2Nome != "")
					{
						telaContext.fillText(tecCombate2Nome, 750, 1349);
						telaContext.fillText(tecCombate2, 955, 1349);
					}
					
					if(tecCombate3Nome != "")
					{
						telaContext.fillText(tecCombate3Nome, 750, 1383);
						telaContext.fillText(tecCombate3, 955, 1383);
					}
					
					if(tecCombate4Nome != "")
					{
						telaContext.fillText(tecCombate4Nome, 750, 1417);
						telaContext.fillText(tecCombate4, 955, 1417);
					}
					
					if(tecCombate5Nome != "")
					{
						telaContext.fillText(tecCombate5Nome, 750, 1453);
						telaContext.fillText(tecCombate5, 955, 1453);
					}
					
					if(tecCombate6Nome != "")
					{
						telaContext.fillText(tecCombate6Nome, 1018, 1314);
						telaContext.fillText(tecCombate6, 1223, 1315);
					}
					
					if(tecCombate7Nome != "")
					{
						telaContext.fillText(tecCombate7Nome, 1018, 1347);
						telaContext.fillText(tecCombate7, 1223, 1348);
					}
					
					if(tecCombate8Nome != "")
					{
						telaContext.fillText(tecCombate8Nome, 1018, 1381);
						telaContext.fillText(tecCombate8, 1223, 1382);
					}
					
					if(tecCombate9Nome != "")
					{
						telaContext.fillText(tecCombate9Nome, 1018, 1415);
						telaContext.fillText(tecCombate9, 1223, 1416);
					}
					
					if(tecCombate10Nome != "")
					{
						telaContext.fillText(tecCombate10Nome, 1018, 1451);
						telaContext.fillText(tecCombate10, 1223, 1452);
					}
					
					//Escreve as Magias
					if(magia1Nome != "")
					{
						telaContext.fillText(magia1Nome, 752, 1543);
						telaContext.fillText(magia1, 960, 1543);
					}
					
					if(magia2Nome != "")
					{
						telaContext.fillText(magia2Nome, 752, 1576);
						telaContext.fillText(magia2, 960, 1576);
					}
					
					if(magia3Nome != "")
					{
						telaContext.fillText(magia3Nome, 752, 1611);
						telaContext.fillText(magia3, 960, 1611);
					}
					
					if(magia4Nome != "")
					{
						telaContext.fillText(magia4Nome, 752, 1646);
						telaContext.fillText(magia4, 960, 1646);
					}
					
					if(magia5Nome != "")
					{
						telaContext.fillText(magia5Nome, 752, 1681);
						telaContext.fillText(magia5, 960, 1681);
					}
					
					if(magia6Nome != "")
					{
						telaContext.fillText(magia6Nome, 1018, 1541);
						telaContext.fillText(magia6, 1228, 1541);
					}
					
					if(magia7Nome != "")
					{
						telaContext.fillText(magia7Nome, 1018, 1576);
						telaContext.fillText(magia7, 1228, 1576);
					}
					
					if(magia8Nome != "")
					{
						telaContext.fillText(magia8Nome, 1018, 1611);
						telaContext.fillText(magia8, 1228, 1611);
					}
					
					if(magia9Nome != "")
					{
						telaContext.fillText(magia9Nome, 1018, 1646);
						telaContext.fillText(magia9, 1228, 1646);
					}
					
					if(magia10Nome != "")
					{
						telaContext.fillText(magia10Nome, 1018, 1681);
						telaContext.fillText(magia10, 1228, 1681);
					}
					
					//Escreve os Sentidos
					telaContext.fillText(visao, 270, 1744);
					telaContext.fillText(audicao, 270, 1765);
					telaContext.fillText(olfato, 270, 1786);
					telaContext.fillText(paladar, 270, 1808);
					telaContext.fillText(tato, 270, 1829);
					telaContext.fillText(intuicao, 270, 1849);
					
					telaContext.font = "26px Arial bold";
					
					//Escreve as Peças de Tesouro
					telaContext.fillText(pecasDeOuro, 436, 1758);
					telaContext.fillText(pecasDePrata, 436, 1802);
					telaContext.fillText(pecasDeCobre, 436, 1845);
					
					telaContext.font = "20px Arial bold";
					
					//Escreve as Posses e Propriedades
					telaContext.fillText(possesEPropriedades1, 508, 1737);
					telaContext.fillText(possesEPropriedades1, 508, 1772);
					telaContext.fillText(possesEPropriedades1, 508, 1807);
					telaContext.fillText(possesEPropriedades1, 508, 1843);
					telaContext.fillText(possesEPropriedades1, 766, 1737);
					telaContext.fillText(possesEPropriedades1, 766, 1772);
					telaContext.fillText(possesEPropriedades1, 766, 1807);
					telaContext.fillText(possesEPropriedades1, 766, 1843);
					telaContext.fillText(possesEPropriedades1, 1024, 1737);
					telaContext.fillText(possesEPropriedades1, 1024, 1772);
					telaContext.fillText(possesEPropriedades1, 1024, 1807);
					telaContext.fillText(possesEPropriedades1, 1024, 1843);
					
					
					<!-- var possesEPropriedades1 = "0"; -->
				<!-- var possesEPropriedades2 = "0"; -->
				<!-- var possesEPropriedades3 = "0"; -->
				<!-- var possesEPropriedades4 = "0"; -->
				<!-- var possesEPropriedades5 = "0"; -->
				<!-- var possesEPropriedades6 = "0"; -->
				<!-- var possesEPropriedades7 = "0"; -->
				<!-- var possesEPropriedades8 = "0"; -->
				<!-- var possesEPropriedades9 = "0"; -->
				<!-- var possesEPropriedades10 = "0"; -->
				<!-- var possesEPropriedades11 = "0"; -->
				<!-- var possesEPropriedades12 = "0"; -->
				}
				
			}
		</script>
		
	</head>
	
	<body>
		<header>
		
		</header>
		
		<section id="fichaA">
			<canvas id="telaFichaA" width="1412" height="2000">Este navegador não suporta Canvas</canvas>
		</section>
		
		<footer>

		</footer>
	</body>
</html>