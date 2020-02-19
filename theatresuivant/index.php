<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Théâtre Suivant</title>
		<meta name="viewport" content="width=1280"  />
		<title>Théâtre Suivant</title>
		<link rel="shortcut icon" href="img/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css">
		<link rel="stylesheet" href="css/fonts.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/box.css" type="text/css" media="screen" />
	 	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />	
		<link href="css/scrollbar.css" rel="stylesheet" type="text/css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
		<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
		<script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" src="js/jquery.zoomooz.min.js"></script>
        	<script type="text/javascript" src="js/menu.js"></script>
		<script type="text/javascript" src="js/facescroll.js"></script>

		<script type="text/javascript">
		        jQuery.fx.interval = 42;
			//adding scrollbar to blocs
			jQuery(function(){ 
				$('#crea-bloc1-content').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
				$('#crea-bloc2-content').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
				$('#crea-bloc3-content').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
				$('#crea-bloc4-content').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
				$('#crea-bloc5-content').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
				$('#crea-bloc6-content').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
				$('#cal-bloc1-content').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
				$('#comp-bloc1-content').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
				$('#comp-bloc2-content').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
				$('#comp-bloc3-content').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
				$('#comp-bloc4-content').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
				$('#bruit-bloc1-content').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
				$('#bruit-bloc2-content').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
				$('#bruit-bloc3-content').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
				$('#bruit-bloc4-content').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
			})
			
			$(document).ready(function(){
				$(".show_hide").click(function() {
                              	 	$(".menu_list").hide();
                                 	$('html').css("background-image", "url(img/bghp.jpg)");
                                 	$('html').css("background-repeat", "no-repeat");
					$("#global").css("position", "absolute");
                                 	$("#global").animate( {"top": $("body").height() - 70 + "px"}, 1500, 'swing',function(){
                                        	$("#content").hide();
                                	});
                        	});

                        	$(".infos_link").click(function(evt) {
                                	$("#shadowing").css("height", $("#global").height() + "px");
                                	$("#shadowing").css("display", "block");
                                	$("#shadowing").animate( {"opacity": "0.8"}, 1500,'swing');
                        	});

                        	$(".infos_link_close").click(function(evt) {
                                	$("#shadowing").css("display", "none");
                                	$("#shadowing").css("opacity", "0.1");
                                	$(".box").css("opacity", "0.1");
                        	});

				$('#infos_link1').click(function(evt) {
    					$("#box1").css("display", "block");
					$("#box1").animate( {"opacity": "1"}, 500, 'swing');
				});
				$('#infos_link2').click(function(evt) {
                                        $("#box2").css("display", "block");
                                        $("#box2").animate( {"opacity": "1"}, 500, 'swing');
                                });
				$('#infos_link3').click(function(evt) {
                                        $("#box3").css("display", "block");
                                        $("#box3").animate( {"opacity": "1"}, 500, 'swing');
                                });
				$('#infos_link4').click(function(evt) {
                                        $("#box4").css("display", "block");
                                        $("#box4").animate( {"opacity": "1"}, 500, 'swing');
                                });

                	});
		</script>
	</head>
	<body>
		<a id="bruissement_link1" href="#">BRUISSEMENTS &#9658;</a>
		<div id="global">
		<div id="menu">
		<a href="#" class="show_hide"><img src="img/logo.jpg" width="184"></a>
		<ul>
  			<li><a href="#" id="cal-menu" title="CALENDRIER">CALENDRIER</a></li>
  			<li><a href="#" id="comp-menu" title="COMPAGNIE">COMPAGNIE</a>
    				<ul>
      					<li class="menu_list"><a href="#" id="comp-menu1">Repères</a></li>
      					<li class="menu_list"><a href="#" id="comp-menu2">Ateliers Urbains</a></li>
      					<li class="menu_list"><a href="#" id="comp-menu3">Édito</a></li>
      					<li class="menu_list"><a href="#" id="comp-menu4">Équipe</a></li>
    				</ul>
  			</li>
  			<li><a href="#" id="crea-menu" title="CRÉATIONS">CRÉATIONS</a>
				<ul>
					<li class="menu_list"><a href="#" id="crea-menu1">Un qui veut traverser</a></li>
                                        <li class="menu_list"><a href="#" id="crea-menu2">Sonen (Le Fils)</a></li>
                                        <li class="menu_list"><a href="#" id="crea-menu3">Sucre lent</a></li>
                                        <li class="menu_list"><a href="#" id="crea-menu4">Suite deglinguée</a></li>
                                        <li class="menu_list"><a href="#" id="crea-menu5">Mystère maison</a></li>
                                        <li class="menu_list"><a href="#" id="crea-menu6">Dialogue Dans la montagne</a></li>
                                </ul>	
			</li>
  			<li><a href="#" id="bruit-menu" title="LE GRAND BRUIT">LE GRAND BRUIT</a>
				<ul>
                                        <li class="menu_list"><a href="#" id="bruit-menu1">Résidence d'écrivain</a></li>
                                        <li class="menu_list"><a href="#" id="bruit-menu2">Comité de rédaction</a></li>
                                        <li class="menu_list"><a href="#" id="bruit-menu3">Rencontres</a></li>
                                        <li class="menu_list"><a href="#" id="bruit-menu4">Le projet</a></li>
                                </ul>
			</li>
  			<li><a href="#" id="vues-menu" title="VUES">VUES</a>
				<ul>
                                </ul>
			</li>
		</ul>
		</div>
		<div id="content">
			<a id="bruissement_link2" href="#">BRUISSEMENTS &#9658;</a>
			<div id="infos">
			<a class="infos_link" id="infos_link1" href="#">CONTACTS</a> |
			<a class="infos_link" id="infos_link2" href="#" onClick="document.getElementById('box2').style.display='block';">PARTENAIRES</a> |
			<a class="infos_link" id="infos_link3" href="#" onClick="document.getElementById('box3').style.display='block';">CRÉDITS</a> |
			<a class="infos_link" id="infos_link4" href="#" onClick="document.getElementById('box4').style.display='block';">LIENS</a>
			</div>

			<div id="shadowing"></div>
			<div class="box" id="box1">
      				  <div id="boxheader">
   					<span class="infos_link_close" id="boxclose" onClick="document.getElementById('box1').style.display='none';"> </span>
        			</div>
        	      		<div id="boxcontent">
        	     			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet elit egestas sem adipiscing lobortis. Duis viverra, elit in aliquet mollis, nisl lectus volutpat tellus, ut hendrerit sapien neque eu nisl. In vel arcu vitae nunc consequat tincidunt.</p><p>Sed pretium lorem id sem semper aliquam venenatis lacus commodo. Vestibulum fringilla justo non ante rhoncus vitae malesuada nunc hendrerit. Morbi a nunc nunc, vel rhoncus metus. Integer magna velit, euismod sit amet bibendum a, rutrum vitae urna. Fusce quam odio, condimentum non tincidunt sit amet, pretium id nulla. Sed tincidunt arcu at nunc faucibus auctor. Ut quis elit dui.</p> 
				</div>
			</div>	
			<div class="box" id="box2">
                                  <div id="boxheader">
                                        <span class="infos_link_close" id="boxclose" onClick="document.getElementById('box2').style.display='none';"></span>
                                </div>
                                <div id="boxcontent">
                                </div>
                        </div>
			<div class="box" id="box3">
                                  <div id="boxheader">
                                        <span class="infos_link_close" id="boxclose" onClick="document.getElementById('box3').style.display='none';"></span>
                                </div>
                                <div id="boxcontent">
                                </div>
                        </div>
			<div class="box" id="box4">
                                  <div id="boxheader">
                                        <span class="infos_link_close" id="boxclose" onClick="document.getElementById('box4').style.display='none';"></span>
                                </div>
                                <div id="boxcontent">
                                </div>
                        </div>
			
	
			<div id="calendrier" class="zoomTarget mainbloc" data-debug="false" data-closeclick="true">
			<h1 id="calendrierTitre">CALENDRIER</h1>
				
				<div id="cal-bloc1" class="zoomTarget bloc" data-debug="false" data-closeclick="true">
					<div id="cal-bloc1-content" style="width:180px; height:180px; overflow:scroll">
					
					<table>
						<tr>
							<td>
								16 février<br>
								10h - 19h
							</td>
							<td class="calendrier_info">
								Médiathèque du Canal (salle Léo Ferré) / Montigny-le Bretonneux
								Réunion du comité de rédaction de la revue Bruissements
								<hr>
							</td>
						</tr>
						<tr>
							<td>
								du 19 au 23 mars 
							</td>
							<td class="calendrier_info">
								La Friche des Lacs de l'Essonne / Viry-Chatillon
								<br><br>					
								Un qui veut traverser<br>
								Texte et interprétation Marc Soriano<br>
								Création sonore Sigolène Valax<br> 
								<br><br>
								Mardi 19 mars - 14h30<br>
								Mercredi 20 mars - 15h<br>
								Jeudi 21 mars - 14h30<br>
								Vendredi 22 mars - 20h<br>
								Samedi 23 mars - 20h<br>
								<hr>
							</td>
						</tr>
						<tr>
							<td>
								26 mars<br>
								(horaire à préciser)
							</td>
							<td class="calendrier_info">
								Attention travaux ! (journée professionnelle)<br>
								La Friche des Lacs de l'Essonne / Viry-Chatillon<br>
								<br><br>	
								Un qui veut traverser<br>
								Texte et interprétation Marc Soriano<br>
								Création sonore Sigolène Valax<br>
								<br><br>
								En partenariat avec le Conseil Général de l'Essonne
								<hr>
							</td>
						</tr>
						<tr>
							<td>
								du 28 au 30 mars
							</td>
							<td class="calendrier_info">
								Le Grand bruit #5<br> 
								(programmation en cours)
							</td>
						</tr>
					</table>
					</div>	
				</div>
			</div>

			<div id="compagnie" class="zoomTarget mainbloc" data-debug="false" data-closeclick="true">
				<h1 id="compagnieTitre">COMPAGNIE</h1>
                                <div id="compagnie-bloc1" class="zoomTarget bloc" data-debug="false" data-closeclick="true">
				<h3>Repères</h3>
				<div id="comp-bloc1-content" style="width:120px; height:150px; overflow:scroll">
                                <p>2011/12<br>

• résidence (2012/14) - les bruissements de la langue / projet œuvrant à la découverte et à la diffusion de la littérature dramatique - avec le soutien de la communauté d’agglomération de Saint-Quentin-en-Yvelines, de la Ferme de Bel Ebat / théâtre de Guyancourt et du rectorat de Versailles
• le Grand bruit #4 - médiathèque Anatole France / Trappes, la Ferme de Bel Ebat / théâtre de Guyancourt
• création de Sonen (le Fils) - La Batterie / pôle musiques de Guyancourt 
<br><br>
2010/11<br>

• résidence (2008/11) - les bruissements de la langue / projet œuvrant à la découverte et à la diffusion de la littérature dramatique - avec le soutien de la communauté d’agglomération de Saint-Quentin-en-Yvelines, de la ville de Maurepas, de l'Association Culturelle de Trappes (ACT) et du rectorat de Versailles
• le Grand bruit #3 - médiathèque Jean Rousselot / Guyancourt, Espace Albert Camus / Maurepas, cinéma le Grenier à Sel / Trappes
<br><br>
2009/10<br>

• accueil de Dorcy Rugamba en résidence d’écriture / auteur associé en 2010
• résidence (2008/11) - les bruissements de la langue / projet œuvrant à la découverte et à la diffusion de la littérature dramatique - avec le soutien de la communauté d’agglomération de Saint-Quentin-en-Yvelines, du conseil régional d'Ile-de-France et du rectorat de Versailles
• le Grand bruit #2 - la Ferme de Bel Ebat / théâtre de Guyancourt
<br><br>
2008/09<br>

• résidence (2008/11) - les bruissements de la langue / projet œuvrant à la découverte et à la diffusion de la littérature dramatique - avec le soutien de la communauté d’agglomération de Saint-Quentin-en-Yvelines
• le Grand bruit #1 - Théâtre de Saint-Quentin-en-Yvelines / Scène Nationale
<br><br>
2007/08<br>

• préfiguration de la résidence (2008/11) - développement des bruissements de la langue
• Mystère maison - centre culturel Pablo Picasso / scène conventionnée d’Homécourt (57), Gif (91) et Saint-Cloud (78)
<br><br>
2006/07<br>

• Mystère maison - coproduction La Ferme de Bel Ebat / théâtre de Guyancourt - Le Prisme / centre de développement artistique de Saint-Quentin-en-Yvelines 
• Mystère maison - Festival Théâtr’enfants / Avignon 
• En route pour la gloire, tout le monde au poste / Festival Polar dans la ville de Saint-Quentin-en-Yvelines
<br><br>
2005/06<br>

• création de Mystère maison au Théâtre de l’Envol, scène pour l’enfance et la jeunesse à Viry-Châtillon
• création de Sucre lent / Festival Polar dans la ville, spectacle décentralisé en collège
• Bouts de ficelles d’après les nouvelles de Camillieri / lecture scénique dans le cadre du Festival Polar dans la ville 
• compagnie associée au Scarabée - La Verrière / actions de décentralisation autour des créations de la compagnie - ateliers en maison de quartier
• création de Suite déglinguée… au Théâtre de Saint-Quentin-en-Yvelines / Scène Nationale
<br><br>
2003/04<br>

• compagnie associée au développement de l’action artistique du Théâtre de St-Quentin-en-Yvelines / Scène nationale
• compagnie associée à l’action artistique de la Maison de la Poésie à Saint-Quentin-en-Yvelines (lectures publiques, mise en place d’un atelier d’écriture permanent)
• Jusqu’où irons-nous dans la ville, exploration burlesque des comportements urbains avec l’atelier permanent / le Scarabée
• L’âme de l’A de Philippe Martone / mémoire des lieux - chœurs d’enfants chanté et parlé, présence du théâtre dans les quartiers - avec l’aide de la communauté d’agglomération de Saint-Quentin-en-Yvelines
• création de La cité des poètes, collaboration transversale avec l’ensemble vocal de Saint-Quentin-en-Yvelines - Théâtre de Saint-Quentin-en-Yvelines / Scène Nationale
<br><br>
2002/03<br>

• création de Dialogue dans la montagne / Maison de la Poésie à Paris<br> 
• L’âme de l’A de Philippe Martone / création à la Maison de la Poésie à Saint-Quentin-en-Yvelines</p>
				</div>
				</div>			
                
                
                
                
                <div id="compagnie-bloc2" class="zoomTarget bloc" data-debug="false" data-closeclick="true">
                                	<h3>Ateliers Urbains</h3>
					<div id="comp-bloc2-content" style="width:210px; height:130px; overflow:scroll">
					
                                	<p>Du théâtre... se retrouver, lire des pièces et jouer, découvrir des auteurs, des personnages, des exercices, beaucoup d'exercices, improviser, assister à des pièces ensemble, en monter une sous la direction d'un metteur en scène,...
<br/><br/>
Comédienne et metteur en scène, responsable de l'atelier : Anne Béziel
<br/>

téléchargez le bulletin d'inscription aux Ateliers Urbains - saison 2012/13
<br/>
Pièces présentées ces dernières saisons par l'atelier
<br/>
2011/12	A propos de l'homme singe / Valérie Sigward
2010/11	Le cercle de craie caucasien / Bertolt Brecht
2009/10	Les enchainés de la middle-class / Philippe Dorin et Sylvain Levey (collage de textes à partir de Les Enchainés et Ô ciel la procréation est plus aisée que l'éducation)
2008/09	Yerma / Federico Garcia Lorca
<br/><br/>
Infos pratiques
<br/>
Ateliers - adultes - tous les lundis de 19h30 à 22h à la maison de quartier André Malraux - 4, rue des Blés d'Or à Montigny-le-Bretonneux. Les ateliers ont lieu tous les lundis, sauf vacances scolaires et jours fériés.
<br/><br/>
Le tarif
<br/>
L'inscription annuelle comprend l'adhésion à l'association Théâtre Suivant, les ateliers et trois places de théâtre (au tarif de groupe). Elle est fixée à 360 euros.
<br/>
Renseignements et inscriptions
<br/>
Tél. 01 30 96 96 23
administration@theatresuivant.fr</p>
                                </div>
				</div>


				<div id="compagnie-bloc3" class="zoomTarget bloc" data-debug="false" data-closeclick="true">
                                	<h3>Édito</h3>
					<div id="comp-bloc3-content" style="width:125px; height:140px; overflow:scroll">
                                <p>
<b>Veillez et armez-vous en pensée</b>
<br/><br/>
Voici ce qu'écrivait en 1833, en exil à Strasbourg, le dramaturge Georg Büchner (Woyzeck, la Mort de Danton, Léonce et Léna...) fuyant une Allemagne post-napoléonienne, encore féodale à la veille de la révolution industrielle. Presque 180 ans plus tard, le combat semble le même, pour "le droit et la saine raison "... Strasbourg, ville actuelle du parlement européen.
<br/>
"...S'il y a une issue à notre époque, c'est la violence. Nous savons ce que nous avons à attendre de nos princes. Tout ce qu'ils ont concédé leur a été arraché par la nécessité. Et même ces concessions, ils nous les ont jetées comme une grâce mendiée et comme un misérable jouet destiné à faire oublier à cet éternel badaud de peuple sa ceinture trop serrée (...) On reproche aux jeunes d'user de la violence. Mais ne sommes-nous pas dans un Etat de violence perpétuelle ? Parce que nous sommes nés et que nous avons grandi dans un cachot, nous ne remarquons plus la fosse où nous sommes, avec des fers aux mains et aux pieds, et un bâillon sur la bouche. Qu'appelez-vous donc légalité ? Une loi qui fait de la grande masse des citoyens un bétail bon pour la corvée afin de satisfaire les besoins artificiels d'une minorité insignifiante et corrompue ? Une loi qui est une violence brutale et perpétuelle, faite au droit et à la saine raison..."</p>
                                </div>
				</div>

				<div id="compagnie-bloc4" class="zoomTarget bloc" data-debug="false" data-closeclick="true">
					<h3>Équipe</h3>
					<div id="comp-bloc4-content" style="width:350px; height:48px; overflow:scroll">
                                <p>au gré des projets
<br/>
comédien(ne)s 
Madeleine Assas, Edith Baldy, Catherine Bayle, François Berland, Anne Béziel, Jean-Marie Burucoa, Violaine de Carné, Nicolas Charrier, Mathieu Desfemmes, Younouss Diallo, Claire Engel, Isabelle Esposito, Jean-Louis Fayollet, Philippe Herisson, Christophe Laluque, Guillaume Ledun, Véronique Mailliard, Jonas Marmy, Antoine de la Morinerie, Grégory Nardella, Alexandra Nicolaïdis, Blandine Pélissier, Sylvia Pignide, Véronique Poupelin, Raphaëlle Trugnan 
<br/>
conseil d'administration :
Thierry Curiale, président - Yann Le Garrec, trésorier - Jocelyne Jean, secrétaire <br/>
direction artistique :
Marc Soriano<br/>
auteur associé aux bruissements :
Dorcy Rugamba (2010)
metteur en scène associé aux bruissements 
Charlotte Lagrange (2011) <br/>
scénographes :
Emmanuelle Debeusscher, Jean-Pierre Gaillard, Karine Maire, Mélanie Tomas<br/>
musicien(ne)s :
Nicolas Chatenoud, Nicolas Guadagno, Fred Giuliani, Gilles Laval, Nicolas Prigent, Guillaume Saurel, Philippe Monange, Sigolène Valax <br/>
lumières :
Marc Baylet-Delperier, Alexis Jimenez, François-Eric Valentin<br/>
vidéo :
Frédéric Bonnet, Philippe Ribeiro, Marc Baylet-Delperier<br/>
interaction gestuelle (Un qui veut traverser) :
Florent Colautti<br/>
costumes :
Anne-Laure Fériot, Amélie Gagnot, Marie-Claire Dorothus, Julia Allègre, Caroline Rossat<br/>
graphistes  :
Mélanie Even, Pierre-Antoine Thierry<br/>
développement web :
Minyin Tu, Meddy Messaoudi<br/>
régisseurs :
Patrick Marchand, Hervé Gajean, Caroline Florès, Fabien Espèche<br/>
administration et production :
Alexia Bessas, Laurence Perrier, Thibault Lambert<br/>
<br/>
Comité de rédaction de la revue Bruissements (2012/13) conduit par
Juliette Morillot, Sophie Bosquillon-Pigeon
<br/>
bibliothécaires associées / les bruissements (2008-12) :
Alexandra Bock, Christelle Leymet, Nathalie Pascal, Jacqueline Escourrou, Audrey Goulieu, Marie-Pierre Caruhel, Frédérique Lemoine, Juliette Garcia, Anne-Lise Bisson, Sylvain Bazin, Valérie Bréheret, Solen Coléou
<br/>
comité de présélection / les bruissements (2008-12) :
Claire Fournié, Philippe Hérisson, Mathieu Desfemmes, Sylvie Dadoun, Antoine de la Morinerie, Marc Soriano, Pascal Antonini, Jocelyne Jean, Guillaume Ledun, Nathalie Pascal, Alexandra Bock, Anne-Lise Bisson, Corinne François Denève, Anne Theunissen, Pascale Curnier, Anne Béziel, Véronique Mailliard, Alain Landais, Thierry Curiale, Charlotte Lagrange, Hélène Brousseau</p>
                                </div>
				</div>
			</div>	
			<div id="creations" class="zoomTarget mainbloc" data-debug="false" data-closeclick="true">
				<h1 id="creationsTitre">CRÉATIONS</h1>
				<div id="crea-bloc1" class="zoomTarget bloc" data-debug="false" data-closeclick="true">
					<h3>Un qui veut traverser</h3>				
					<div id="crea-bloc1-content" style="width:180px; height:180px; overflow:scroll">
						<img src="img/imgunqui.jpg" width="160">
						<?php
        			      		include('connexion.php');
					        $req = "SELECT * FROM creations WHERE bloc like 'bloc1'";
        					$dataset = mysql_query($req) or die($req_piece_infos."<br />\n".mysql_error());
        					$piece = mysql_fetch_array($dataset);
        					print_r($piece);
        					mysql_close();
                				?>	
					</div>
				</div>

				<div id="crea-bloc2" class="zoomTarget bloc" data-debug="false" data-closeclick="true">
					<h3>Sonen (Le Fils)</h3>
					<div id="crea-bloc2-content" style="width:130px; height:140px; overflow:scroll">
						<img src="img/imgsonen.jpg" width="110">
<p>Le Fils au voisin : Puisque tu sais tout tu n'as qu'à raconter<br/>
Le Voisin se levant avec difficulté, riant : Qu'est-ce que j'ai bien pu raconter <br/>
Le Fils : Tu racontes que j'ai été en prison<br/>
Extrait de Sonen (Le Fils)<br/>
<br/>
Pièce / concert 
<br/><br/>
Texte <br/>
Jon Fosse<br/> <br/>
Traduction française <br/> 
Terje Sinding<br/> <br/>
Conception et direction  <br/>
Marc Soriano 
<br/> <br/>
Avec Violaine de Carné voix Nicolas Chatenoud guitare Mathieu Desfemmes voix Younouss Diallo voix, batterie Jonas Marmy voix Guillaume Saurel violoncelle, basse, sampler
 <br/> <br/>
Composition musicale  <br/>
ArchiPass  <br/> <br/>
Régie  <br/>
Fabien Espèche
<br/> <br/>

Production  <br/>
Théâtre Suivant<br/> <br/>
Coproduction  <br/>
La Batterie / pôle musiques de Guyancourt, communauté d'agglomération de Saint-Quentin-en-Yvelines, la SPEDIDAM
<br/> <br/>
L’Arche est éditeur et agent théâtral du texte représenté
<br/>
<br/>
Téléchargez le dossier artistique
<br/><br/>
Dates <br/>

le 21 octobre 2011 à La Batterie / pôle musiques de Guyancourt</p>
				</div>
				</div>
				<div id="crea-bloc3" class="zoomTarget bloc" data-debug="false" data-closeclick="true">
                                <h3>Sucre lent</h3>
				<div id="crea-bloc3-content" style="width:130px; height:140px; overflow:scroll">
				<img src="img/imgsonen.jpg" width="110">
				<p>Texte <br/>
Jean-Pierre Milovanoff<br/>
Mise en scène <br/>
Marc Soriano<br/>
 <br/> <br/>
Avec Edith Baldy et Marc Soriano <br/> <br/>

Vidéo  <br/>
Marc Baylet-Delperier
 <br/> <br/>

Production  <br/>
Théâtre Suivant <br/> <br/>
Coproduction  <br/>
Le Prisme / centre de développement artistique de Saint-Quentin-en-Yvelines <br/>
 <br/> 
Création dans le cadre des Nocturnes à l’Ecole
 <br/> <br/>
Dates <br/>
 <br/>
le 27 janvier 2006 au lycée Emilie de Breteuil / Montigny-le-Bretonneux <br/>
le 26 janvier 2006 à l’Estaminet / Magny-les-Hameaux <br/>
le 25 janvier 2006 à l’IFA Dolorozoy / Montigny-le-Bretonneux <br/>
le 24 janvier 2006 au lycée des 7 Mares / Elancourt <br/>
le 23 janvier 2006 au collège Ariane / Guyancourt <br/>
le 20 janvier 2006 au collège Hélène Boucher / Voisins-le-Bretonneux <br/>
le 13 janvier 2006 au collège Louis Pergaud / Elancourt <br/></p>
				</div>
				</div>

				<div id="crea-bloc4" class="zoomTarget bloc" data-debug="false" data-closeclick="true">
                                <h3>Suite deglinguée</h3>
				<div id="crea-bloc4-content" style="width:130px; height:140px; overflow:scroll">
				<img src="img/imgsonen.jpg" width="110">
				<p>Texte et mise en scène <br/>
Philippe Herisson et Marc Soriano
<br/><br/>
Avec Philippe Hérisson, Christophe Laluque, Catherine Bayle, Grégory Nardella, Marc Soriano
<br/><br/>
Vidéo <br/>
Frédéric Bonnet <br/><br/>
Lumières<br/>
Marc Baylet-Delperier <br/><br/>
Costumes <br/>
Julia Allègre<br/><br/>


Production <br/>
Théâtre Suivant<br/><br/>
Coproduction <br/>
Théâtre de Saint-Quentin-en-Yvelines / Scène Nationale - avec le soutien 
de la Ferme de Bel Ebat / théâtre de Guyancourt, de L’Estaminet à Magny-les-Hameaux et 
du Scarabée à La Verrière<br/><br/>

Dates<br/>

les 17 et 18 mars 2005 au Scarabée / La Verrière
le 15 mars 2005 à L’Estaminet / Magny-les-Hameaux
les 18 et 19 février 2005 à la Comédie de Saint Maur / théâtre d’Arsonval
le 15 février 2005 à la Ferme de Bel Ebat / théâtre de Guyancourt</p>
				</div>
				</div>

				<div id="crea-bloc5" class="zoomTarget bloc" data-debug="false" data-closeclick="true">
                                <h3>Dialogue dans la montagne</h3>
				<div id="crea-bloc5-content" style="width:200px; height:140px; overflow:scroll">
				<img src="img/imgdialogue.jpg" width="180">
				<p>Je me trouve sur un autre plan - d’espace et de temps - que mon lecteur. Il ne peut que me comprendre de loin, il ne peut pas m’attraper, il ne fait que saisir les barreaux de la grille dressée entre nous / Paul Celan<br/><br/>

Texte <br/>
Paul Celan<br/><br/> 
Traduction <br/>
Jean-Pierre Lefèbvre<br/><br/>
Mise en scène <br/>
Marc Soriano<br/><br/>

Avec Claire Engel, Philippe Hérisson, Christophe Laluque<br/><br/>

Lumière<br/>
François-Eric Valentin<br/><br/>
Scénographie <br/>
Emmanuelle Debeusscher et Mélanie Tomas<br/><br/>
Costumes <br/>
Marie-Claire Dorothus<br/><br/>
Régie <br/>
Caroline Florès et Nicolas Prigent<br/><br/>


Production <br/>
Théâtre Suivant<br/><br/>
Coproduction <br/>
l'Amin compagnie théâtrale, la communauté d’agglomération de Saint-Quentin-en-Yvelines, 
ville de Grigny, Théâtre Molière - Maison de la Poésie à Paris, ville de Paris
<br/><br/>
Dates<br/>

le 25 avril 2003 / Maison de la Poésie à Saint-Quentin-en-Yvelines
du 3 novembre au 3 décembre 2000 / Maison de la Poésie à Paris</p>
				</div>
				</div>

				<div id="crea-bloc6" class="zoomTarget bloc" data-debug="false" data-closeclick="true">
                                <h3>Mystère maison</h3>
				<div id="crea-bloc6-content" style="width:130px; height:140px; overflow:scroll">
				<img src="img/imgsonen.jpg" width="110">
				<p>Sans maison, l’homme serait un être dispersé. Elle maintient l’homme à travers les orages du ciel et les orages de la vie. Elle est corps et âme. Elle est le premier monde de l’être humain. Et toujours en nos rêveries, la maison est un grand berceau. La vie commence bien, elle commence enfermée, protégée, toute tiède dans le giron de la maison / Gaston Bachelard in La poétique de l’espace<br/><br/>

Titre originel <br/>
De bas en haut dans les coins, mais pas au milieu<br/><br/>

Texte et mise en scène <br/>
Marc Soriano<br/><br/>

Avec Alexandra Nicolaïdis et Raphaëlle Trugnan<br/><br/>

Musique <br/>
Nicolas Guadagno<br/><br/>
Lumière<br/>
Alexis Jimenez<br/><br/>
Scénographie <br/>
Karine Maire<br/><br/>
Costumes <br/>
Amélie Gagnot<br/><br/>
Régie <br/>
Patrick Marchand et Hervé Gajean<br/><br/>


Production <br/>
Théâtre Suivant<br/><br/>
Coproduction <br/>
Théâtre de l’Envol / scène pour l’enfance et la jeunesse, l'Amin compagnie théâtrale, communauté d’agglomération de Saint-Quentin-en-Yvelines, Le Prisme / centre de développement artistique de Saint-Quentin-en-Yvelines, la Ferme de Bel Ebat / théâtre de Guyancourt<br/><br/>

Le texte de la pièce est publié aux Editions L’Harmattan (collection L’Instant Théâtral) 
sous le titre L’autre Côté<br/><br/>

Dates<br/>

le 24 janvier 2008 à Gif/Yvette<br/>
le 16 janvier 2008 à Saint-Cloud<br/>
les 4 et 5 décembre 2007 au Centre culturel Pablo Picasso / scène conventionnée d’Homécourt<br/>
du 10 au 25 juillet 2007 au Festival Théâtr’enfants / Avignon<br/>
du 12 au 22 décembre 2006 au Prisme / centre de développement artistique <br/>
de Saint-Quentin-en-Yvelines<br/>
le 8 décembre 2006 à la Ferme de Bel Ebat / théâtre de Guyancourt<br/>
du 12 au 23 novembre 2005 au Théâtre de l’Envol / scène pour l’enfance et la jeunesse à Viry-Châtillon</p>
				</div>
				</div>
			</div>	
				

			<div id="bruissement" class="zoomTarget mainbloc" data-debug="false" data-closeclick="true">
				<h1 id="bruissementTitre">LE GRAND BRUIT</h1>
                                <div id="bruissement-bloc1" class="zoomTarget bloc" data-debug="false" data-closeclick="true">	
				<h3>Résidence d'écrivain</h3>    
				<div id="bruit-bloc1-content" style="width:90px; height:240px; overflow:scroll">
				<p>
2010 / Dorcy Rugamba
<br/><br/>
téléchargez:<br/>
la biographie de Dorcy Rugamba (actualisée en 2011)<br/>
les intentions<br/>
le dossier de presse<br/>
<br/><br/>
Calendrier des interventions publiques
<br/><br/>
du 15 au 21 février		
<br/>première semaine de présence chez l’habitant, à Trappes<br/><br/>

20 mars  
<br/>Le théâtre est-[il lisible] ? - Lecture publique à la médiathèque du Canal (Montigny-le-Bretonneux)
En partenariat avec les Editions Théâtrales<br/><br/>

du 12 au 18 avril<br/>

15 avril - Exil / Exils - intervention et lecture publique à la Maison de la Poésie à Saint-Quentin-en-Yvelines avec Myriam Montoya (Colombie) et Salah Al Hamdani (Irak)<br/><br/>

17 avril - La littérature Nigériane - Ken Saro-Wiwa / Lectures et discussion à la  médiathèque Anatole France (Trappes)<br/><br/>
<br/><br/>
du 17 au 23 mai<br/>

Atelier d'écriture mené à la maison d'arrêt de Bois d'Arcy
En partenariat avec le Service Pénitentiaire d’Insertion et de Probation (SPIP 78)<br/><br/>

18 mai - Cabaret Poélitique # 12 à la Ferme de Bel Ebat / théâtre de Guyancourt<br/><br/>

du 7 au 13 juin<br/>

12 juin - Lecture de Aller-retour au Paradis ! à la Ferme de Bel Ebat / théâtre de Guyancourt dans le cadre de la programmation du Grand bruit #2</p>
				</div>
				</div>

				<div id="bruissement-bloc2" class="zoomTarget bloc" class="scroll-pane" data-debug="false" data-closeclick="true">
                               	<h3>Comité de rédaction</h3>
				<div id="bruit-bloc2-content" style="width:120px; height:136px; overflow:scroll">
			        <img src="img/imgcomite.jpg" width="100">
				<p>Nous vous proposons d’intégrer un comité de rédaction pour la création d’une revue en ligne, à parution annuelle, nommée Bruissements. Cette revue se donne pour but, à partir d’une thématique et d’un corpus d’œuvres, d’éclairer le sujet choisi sous différentes formes : écrit, son et image.<br/><br/>

Ce qui est vous est proposé est l’appropriation d’une question de société. Il s’agit de creuser, d’analyser, un phénomène ou une pensée par le biais d’une enquête, d’une critique, d’un questionnaire, d’une interview, d’un reportage photo, d’un sondage sauvage… Cette démarche sera induite par la lecture initiale d’un ou plusieurs ouvrages d’une bibliographie de base constituée de publications directement liées à la thématique et présents dans le fonds documentaire du réseau des médiathèques de Saint-Quentin-en-Yvelines.
<br/><br/>
Le comité de rédaction de la revue sera conduit par Juliette Morillot (écrivain et journaliste) et Sophie Bosquillon-Pigeon (documentariste et réalisatrice audiovisuelle). Ses réunions auront lieu dans les équipements du réseau de la lecture publique (calendrier ci-dessous)
<br/><br/>

Thématique de la revue pour la saison 2012/13 :
<br/>
Traverser des murs / ce que migrer clandestinement veut dire
<br/><br/>

Il y a des hommes et des femmes - il y a des peuples entiers - qui attendent tout de la vie qu'ils pourraient mener ailleurs que chez eux. Qui font le pari de survivre aux dangers qui les guettent pour atteindre cet ailleurs. Qui sont poussés à emprunter les moyens illégaux d'émigration et à devenir le gibier des mafias et des administrations. L'actualité rapporte régulièrement des faits tragiques qui touchent tous les continents et tous les moyens de transports : terrestres, maritimes ou aériens.
<br/><br/>
Le siècle qui s’ouvre sera sans nul doute celui des migrations massives, économiques et politiques mais également environnementales. Traverser, passer, voilà l'obsession des peuples de nombreuses régions du monde, acculés par la misère, la guerre, la dictature, les catastrophes écologiques ou les quatre à la fois. Pour celles et ceux qui parviennent en terre promise l’épreuve s’éternise, car ils restent bien souvent hors-la-loi dans le pays d'accueil. Contrôles, chicanes judiciaires et administratives, persécutions, menace d'une traversée en sens inverse.
<br/><br/>
Qui sont ces hommes et ces femmes qui acceptent de n'être plus que des corps encombrants et qui n'ont plus que lui à opposer aux lois ? Car ce sont elles, surtout, qu'il leur faut affronter, transgresser, pour exister. Les responsables nous jettent régulièrement à la figure l’immigration clandestine pour nous apeurer, nous apitoyer ou nous manipuler. Les médias nous en donnent une vision souvent partielle, fréquemment émotionnelle, rarement éclairée.
<br/><br/>
Au-delà des faits divers tragiques ou quelquefois heureux, que sait-on de l'ampleur de ce phénomène ? Quelles réalités humaines, économiques, sociales et géopolitiques implique-t-il ? Quels sont ses mécanismes ? Quelles solutions, quels projets d'envergure peuvent mettre un terme à ce désastre humain, démographique, économique, politique et inverser la logique ?
<br/><br/>
Toute une série de questions auxquelles il faudra essayer de répondre à partir d’une bibliographie de base, en proposant des angles d'analyse, à partir de recherches de données chiffrées, iconographiques et historiques. Chacun choisira son domaine (littéraire, économique, sociologique…) et la forme de sa contribution (article de fond, interview, billet, photographie,…)

<br/><br/>

téléchargez le bulletin d'inscription (comité de rédaction de la revue) - saison 2012/13

<br/><br/>
Bibliographie de base (les références marquées d’un astérisque sont disponibles au prêt dans le fonds documentaire du réseau des médiathèques de Saint-Quentin-en-Yvelines)
<br/><br/>
Très loin et tout près, petite conférence sur la frontière d’Etienne Balibar (Bayard)*
Bilal, sur la route des clandestins de Fabrizio Gatti (Liana Levi)*
Ceux qui passent d'Haydée Saberan (Editions Montparnasse)*
Accueillir ou reconduire d’Alexis Spire (Raisons d’agir)
Chroniques de rétention 2008-2010 - La Cimade (Sorlin / Actes-Sud)
<br/><br/>
Calendrier 2012/13 - réunions du comité de rédaction  
<br/>
le mardi 23 octobre de 19h à 22h
le mardi 13 novembre de 19h à 22h
le mardi 27 novembre de 19h à 22h
le mardi 15 janvier 2013 de 19h à 22h
le samedi 16 février 2013 de 10h à 19h (journée de bouclage)
<br/><br/>
Lieux Médiathèques du Canal à Montigny-le-Bretonneux (salle Léo Ferré) et Anatole France à Trappes  
<br/><br/>

Les réunions du comité de rédaction se terminent par un repas, l'occasion de parler la bouche pleine et de fabriquer des sets de table que vous pouvez télécharger ci-dessous (impression format A3).
<br/><br/>
Entre autres, les sets reprennent des impressions, des notes, des échanges, un mail de la grande distribution, le programme du Conseil National de la Résistance, des extraits de Campcamp (Lfks), des coups de colère, un dessin de Jean Cagnard, les propos teintés d'amertume d'un traducteur, le faire part de disparition d'un centre de ressources, une tribune de Jean-Claude Guillebaud...</p>
				<a href="img/document.pdf"><img src="img/download.png" width="20px"></a>
				 </div> 
				 </div> 

				<div id="bruissement-bloc3" class="zoomTarget bloc" data-debug="false" data-closeclick="true">
                                <h3>Rencontres</h3>
				<div id="bruit-bloc3-content" style="width:120px; height:110px; overflow:scroll">
				<p>2011 (19 mars)<br/><br/>

L'écriture et le[s] pouvoir[s]<br/><br/>

La question est aussi vieille que le théâtre. Mais aujourd'hui, en France et plus largement en Europe, comment le pouvoir est-il raconté, critiqué. Et au fond l'est-il ? Et ne vaudrait-il pas mieux dire les pouvoirs ?
<br/><br/>
Invités :
<br/><br/>
Pierre Banos directeur des Editions Théâtrales<br/>
Jean-Charles Darmon professeur à l'Université de Versailles-Saint-Quentin - directeur du Centre de Recherche sur les Relations entre Littérature, Philosophie et Morale à l’Ecole Normale Supérieure<br/>
Xavier Papaïs philosophe, chargé d’enseignement à l’Ecole Normale Supérieure<br/>
Dorcy Rugamba auteur, comédien et metteur en scène <br/>
Françoise Thanas traductrice, membre du comité littéraire hispanique de la Maison Antoine Vitez / centre international de la traduction théâtrale <br/>
<br/><br/>
avec la participation de Mathieu Desfemmes comédien
<br/><br/>
Modérateur Marc Soriano, directeur artistique de Théâtre Suivant
<br/><br/>
En partenariat avec le réseau des médiathèques de Saint-Quentin-en-Yvelines, les Editions Théâtrales et le Collège International de Philosophie 
<br/><br/><br/>
2010 (20 mars)
<br/><br/>
Le théâtre est-[il lisible] ?<br/>
Lectures et discussion à la médiathèque du Canal / Montigny-le-Bretonneux<br/>
<br/>
Invités :<br/><br/>

Pierre Banos directeur adjoint des Editions Théâtrales<br/>
Ronan Mancec auteur<br/>
Xavier Papaïs philosophe et enseignant à l'Ecole Normale Supérieure<br/>
Dorcy Rugamba auteur associé aux bruissements de la langue en 2010<br/>
Maria Savary comédienne<br/>
<br/><br/>
Modérateur Marc Soriano, directeur artistique de Théâtre Suivant
<br/><br/>
En partenariat avec les Editions Théâtrales, le conseil régional d'Ile-de-France et le réseau des médiathèques de Saint-Quentin-en-Yvelines</p>	
				</div> 	
				</div> 	

				<div id="bruissement-bloc4" class="zoomTarget bloc" data-debug="false" data-closeclick="true">
                                <h3>Le projet</h3>
				<div id="bruit-bloc4-content" style="width:130px; height:135px; overflow:scroll">
				<p>« Ne haïssez pas les médias, soyez les médias »*

Nous étions jusqu’ici, avec les Bruissements, attentifs aux sons émis par les dramaturges contemporains. Nous les traquions, nous les attrapions et nous les mastiquions à plusieurs, pour qu’ils résonnent parmi nous, et fassent entendre leur vérité, la nôtre. Ce faisant, nous étions toujours attirés par ceux qui nous éclairaient sur ce que nous ressentions et percevions quotidiennement du monde comme il va. Car c’est là que se situe la parole théâtrale, aux confins du temps présent et de la permanence humaine, tentative mille fois recommencée de comprendre ce que nous faisons ici et pourquoi nous agissons. Ainsi avons nous exploré les nouvelles frontières entre masculin et féminin, approché les territoires autour des villes, traversé l’Europe en tout sens, visité un collège en zone d’éducation prioritaire, disséqué la crise financière, démonté les rouages du déclenchement de la guerre en Irak…<br/><br/>

Chaque fois nous mesurions l’écart entre ce que nous disaient ces textes et les images toutes faites, les discours invariants sur tel ou tel sujet ou phénomène, bref notre regard changeait, nous nous dégagions de l’emprise des idées dominantes, au moins le temps de la représentation théâtrale.<br/><br/>

Alors pour continuer ce travail, aller plus loin, différemment, nous avons voulu non plus collecter des textes, mais partir d’une thématique liée à la démarche artistique de la compagnie et choisir des œuvres de toute nature s’y rapportant (romans, pièces, essais, articles, témoignages, etc.). Cela avec l’intention de produire une revue sur le sujet, de faire nous-mêmes (habitants et membres de la compagnie) un travail de journaliste, nouvelliste, pamphlétaire, libelliste - à partir des œuvres choisies et de nos propres recherches, transformant ainsi le comité de lecture en un comité de rédaction.
<br/><br/>
A l’heure où l’information et la communication sont devenues sœurs jumelles et détiennent un immense pouvoir, chacun produira des articles, des reportages, des critiques, des enquêtes, manière d’être acteur de l’information, de lever certains préjugés et d’imaginer des solutions.
<br/><br/>

* Eric Reed Boucher alias Jello Biafra - chanteur, homme politique et militant écologiste américain</p>	
				</div>
				</div>
			</div>

			<div id="vues" class="zoomTarget mainbloc" data-debug="false" data-closeclick="true">
			<img src="img/vue.jpg" width="140" height="200">
			<h1 id="vuesTitre">VUES</h1>
			</div>
		</div>
		</div>
		</div>
	</body>
</html>
