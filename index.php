<?php include('header.php'); ?>
		<title>Matias Guiomar Henschel</title>
		<meta name="description" content="Matias Guiomar Henschel, 27 anos, moro em Blumenau / SC / Brasil, formado em Ciência da Computação pela FURB em 2017. Sou estudante, programador e desenvolvedor. Conheça um pouco sobre mim através do meu website." />
		<meta name="keywords" content="Matias Guiomar Henschel, Matias G Henschel, Matias Henschel, Matias, Henschel, mghenschel, mghextreme, estudante, programador, desenvolvedor, arquiteto, engenheiro de software, curriculum vitae, Blumenau, Santa Catarina, Brasil, Brazil, Benner, Capgemini, Philips, FleetOps" />

		<!-- OpenGraph -->
		<meta property="og:type" content="website">
		<meta property="og:title" content="Matias Guiomar Henschel">
		<meta property="og:description" content="Matias Guiomar Henschel, 27 anos, moro em Blumenau / SC / Brasil, formado em Ciência da Computação pela FURB em 2017. Sou estudante, programador e desenvolvedor. Conheça um pouco sobre mim através do meu website.">
		<meta property="og:url" content="<?=$website['link'];?>">
		<meta property="og:locale" content="pt_BR">
		<meta property="og:site_name" content="MGHenschel">
		<meta property="og:image" content="<?=$website['link'];?>imgs/logo-share.jpg">

		<script type="text/javascript" charset="utf-8">
			var menu = 'home';
			var pos = {
				home: 0,
				about: 0,
				experience: 0,
				skills: 0,
				education: 0,
				contact: 0
			};

			function clicked(num){
				if (num == 1 || num == 13 || num == 32)
					return true;
				return false;
			}

			function isMobile(){
				return navigator.userAgent.match(/(iPod|iPhone|iPad|Android|IE Mobile|Opera (Mini|Mobile)|Mobile)/);
			}

			function setDimensions(){
				pos.about = $('#about').offset().top;
				pos.experience = $('#experience').offset().top;
				pos.skills = $('#skills').offset().top;
				pos.education = $('#education').offset().top;
				pos.contact = $('#contact').offset().top;

				scrolled();
			}

			function scrollTo(str){
				var dest = 0;
				switch (str){
					case 'about': dest = pos.about; break;
					case 'experience': dest = pos.experience; break;
					case 'skills': dest = pos.skills; break;
					case 'education': dest = pos.education; break;
					case 'contact': dest = pos.contact; break;
				}
				dest -= 50;
				
				if (isMobile()){
					window.scrollTo(0, dest);
				} else {
					$('html,body').stop().animate({ scrollTop: dest }, 800, 'easeOutCubic');
				}
			}

			function scrolled(){
				var scY = isMobile ? $(window).scrollTop() : $('html').scrollTop();
				scY += 190;
				var menuOn = 'home',
					holder = $('#menuHolder');
				
				if (scY > pos.contact){
					menuOn = 'contact';
				} else if (scY > pos.education){
					menuOn = 'education';
				} else if (scY > pos.skills){
					menuOn = 'skills';
				} else if (scY > pos.experience){
					menuOn = 'experience';
				} else if (scY > pos.about){
					menuOn = 'about';
				}
				
				if (menuOn != menu){
					menu = menuOn;
					var topo = holder.children('#menu');
					topo.children('a.on').removeClass('on');
					if (menu != 'home')
						topo.children('[href="#'+menu+'"]').addClass('on');
				}
				
				if (scY > 450){
					holder.addClass('fixed');
				} else {
					holder.removeClass('fixed');
				}
			}

			$(function(){
				$('div#menu > a').on('click keydown', function(e){
					if (clicked(e.which)){
						e.preventDefault();
						scrollTo($(this).attr('href').substring(1));
					}
				});

				$(window).scroll(scrolled);
				$(window).resize(setDimensions);
				$(window).load(setDimensions);
			});
		</script>
	</head>
	<body id="home">
		<div id="menuHolder">
			<div id="menu">
				<h1>MGHenschel</h1>
				<a href="#about">Sobre</a>
				<a href="#experience">Experiência</a>
				<a href="#skills">Proficiências</a>
				<a href="#education">Educação</a>
				<a href="#contact">Contato</a>
			</div>
		</div>
		<div id="title">
			<img class="varBg" src="imgs/title-background.jpg" alt="São Paulo City Background" />
			<div class="text">
				<h1>Matias Henschel</h1>
				<h3>Programador // Desenvolvedor</h3>
			</div>
		</div>
        <div id="about" class="white">
			<div class="center">
				<h2>Sobre</h2>
				<p>Olá! Meu nome é Matias Guiomar Henschel, tenho 27 anos e sou apaixonado por código e criar minhas próprias experiências. Programei meu primeiro algoritmo antes dos 15 anos e comecei meu primeiro estágio com 16. Graduei-me em Ciência da Computação pela FURB no ano de 2017. Estou sempre curioso sobre novas tecnologias e busco continuamente contribuir não somente com código mas com a constante melhoria do ambiente de trabalho onde estou inserido.</p>
				<div class="links">
					<a class="cv" href="mghenschel-curriculum-vitae-pt-br.pdf" target="_blank"><span class="fa">&#xf15c;</span><span class="tx">Curriculum Vitae (PT-BR)</span></a>
					<a class="cv" href="mghenschel-curriculum-vitae-en.pdf" target="_blank"><span class="fa">&#xf15c;</span><span class="tx">Curriculum Vitae (EN)</span></a>
				</div>
				<div class="socials">
					<a class="github" href="https://github.com/mghextreme" target="_blank"><span class="fa">&#xf09b;</span><span class="tx">GitHub</span></a>
					<a class="linkedin" href="https://linkedin.com/in/mghenschel" target="_blank"><span class="fa">&#xf0e1;</span><span class="tx">LinkedIn</span></a>
				</div>
				<h3>Áreas de Interesse</h3>
				<ul class="interests">
					<li>Desenvolvimento Full-stack</li>
					<li>Melhoria contínua</li>
					<li>Desenvolvimento Ágil</li>
				</ul>
			</div>
		</div>
		<div id="experience" class="background fixed">
			<div class="center">
				<h2>Experiência</h2>
				<div class="item">
					<h4><a href="https://www.fleetops.ai/" target="_blank">FleetOps</a></h4><small>2022 - hoje</small>
					<h5>Engenheiro de Software</h5>
					<ul>
						<li>Python</li>
						<li>MongoDB</li>
						<li>BitBucket</li>
						<li>JIRA</li>
						<li>AWS</li>
					</ul>
					<!-- <div class="foot"><a class="more" href="projects/philips/" target="_blank">Veja alguns projetos</a></div> -->
				</div>
				<div class="item">
					<h4><a href="https://www.philips.com.br/" target="_blank">Philips</a></h4><small>2019 - 2022</small>
					<h5>Programador Sênior</h5>
					<ul>
						<li>C#</li>
						<li>.NET <small>(Framework e Core)</small></li>
						<li>Angular</li>
						<li>TypeScript</li>
						<li>Java</li>
						<li>Gradle</li>
						<li>Azure DevOps</li>
						<li>CI <small>(pipeline as code)</small></li>
						<li>Git</li>
						<li>SAFe <small>(com Ágil e Scrum)</small></li>
					</ul>
					<div class="foot"><a class="more" href="projects/philips/" target="_blank">Veja alguns projetos</a></div>
				</div>
				<div class="item">
					<h4><a href="https://www.capgemini.com/" target="_blank">Capgemini</a></h4><small>2018 - 2019</small>
					<h5>Programador de RPA</h5>
					<ul>
						<li>Melhoria contínua</li>
						<li>UIPath</li>
						<li>Mapeamento de processos</li>
						<li>Otimização de processos</li>
						<li>Robotização de processos</li>
						<li>Integrações com ferramentas</li>
						<li>Transformação digital</li>
						<li>Documentação</li>
					</ul>
					<div class="foot"><a class="more" href="projects/capgemini/" target="_blank">Veja alguns projetos</a></div>
				</div>
				<div class="item">
					<h4><a href="http://www.benner.com.br/" target="_blank">Grupo Benner</a></h4><small>2017 - 2018</small>
					<h5>Programador Jr</h5>
					<ul>
						<li>C# e ASP.NET</li>
						<li>Web <small>(HTML e CSS)</small></li>
						<li>JavaScript <small>(com Vue)</small></li>
						<li>WebPack e npm</li>
						<li>Testes</li>
						<li>Integração Contínua</li>
						<li>Git</li>
						<li>Docker</li>
						<li>Suporte ao desenvolvedor</li>
						<li>Documentação</li>
						<li>Pacotes NuGet</li>
						<li>Scripts <small>(PowerShell)</small></li>
						<li>Selenium</li>
						<li>Solr</li>
					</ul>
					<div class="foot"><a class="more" href="projects/benner/" target="_blank">Veja alguns projetos</a></div>
				</div>
				<div class="item">
					<h4><a href="https://www.cosmonauta.com.br/" target="_blank">Empresadois / Lupulada / Cosmonauta</a></h4><small>2011 - 2017</small>
					<h5>Desenvolvedor Web Full Stack</h5>
					<ul>
						<li>Codificação de Photoshop para HTML e CSS</li>
						<li>Desenvolvimento de temas para Wordpress</li>
						<li>Codificação de Design Responsivo</li>
						<li>PHP para integração de CMS</li>
						<li>Desenvolvimento de um CMS com integração de MySQL</li>
						<li>Codificação JavaScript <small>(jQuery)</small> para interatividade na página</li>
					</ul>
					<div class="foot"><a class="more" href="projects/lupulada/" target="_blank">Veja alguns projetos</a></div>
				</div>
			</div>
		</div>
        <div id="skills" class="white">
			<div class="center">
				<h2>Proficiências</h2>
				<ul class="skillset programming">
					<li>
						<span>C#</span>
						<div class="block"><div class="perc" style="width:95%;"></div></div>
					</li>
					<li>
						<span>JavaScript / TypeScript</span>
						<div class="block"><div class="perc" style="width:90%;"></div></div>
					</li>
					<li>
						<span>CSS / SASS</span>
						<div class="block"><div class="perc" style="width:90%;"></div></div>
					</li>
					<li>
						<span>SQL</span>
						<div class="block"><div class="perc" style="width:90%;"></div></div>
					</li>
					<li>
						<span>Python</span>
						<div class="block"><div class="perc" style="width:85%;"></div></div>
					</li>
					<li>
						<span>MongoDB</span>
						<div class="block"><div class="perc" style="width:85%;"></div></div>
					</li>
					<li>
						<span>Git</span>
						<div class="block"><div class="perc" style="width:97%;"></div></div>
					</li>
					<li>
						<span>Testes Automatizados</span>
						<div class="block"><div class="perc" style="width:90%;"></div></div>
					</li>
					<li>
						<span>DevOps</span>
						<div class="block"><div class="perc" style="width:90%;"></div></div>
					</li>
					<li>
						<span>Docker</span>
						<div class="block"><div class="perc" style="width:70%;"></div></div>
					</li>
					<li>
						<span>Ágil e Scrum</span>
						<div class="block"><div class="perc" style="width:90%;"></div></div>
					</li>
					<li>
						<span>Java</span>
						<div class="block"><div class="perc" style="width:50%;"></div></div>
					</li>
				</ul>
				<ul class="skillset languages">
					<li>
						<span>Português</span>
						<div class="block"><div class="perc" style="width:100%;"></div></div>
						<ul class="sub">
							<li>Nativo</li>
						</ul>
					</li>
					<li>
						<span>Inglês</span>
						<div class="block"><div class="perc" style="width:98%;"></div></div>
						<ul class="sub">
							<li>TOEFL iBT, Jul 2013<small>(97/120)</small></li>
							<li>Aulas curriculares no Ensino Médio</li>
						</ul>
					</li>
					<li>
						<span>Alemão</span>
						<div class="block"><div class="perc" style="width:40%;"></div></div>
						<ul class="sub">
							<li>Goethe Zertifikat B1, Jan 2012<small>(Befriedigend)</small></li>
							<li>3 semanas de curso intensivo em um programa de intercâmbio em Frankfurt, Alemanha<small>(PASCH)</small></li>
							<li>Aulas curriculares no Ensino Médio</li>
						</ul>
					</li>
					<li>
						<span>Espanhol</span>
						<div class="block"><div class="perc" style="width:20%;"></div></div>
						<ul class="sub">
							<li>Compreensão razoável</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div id="education" class="background fixed">
			<div class="center">
				<h2>Educação</h2>
				<div class="item">
					<h4>Graduação em Ciência da Computação</h4><small>2013 - 2017</small>
					<h5><a href="http://www.furb.br/" target="_blank">Fundação Universidade Regional de Blumenau</a></h5>
					<ul>
						<li>Inteligência Artificial</li>
						<li>Computação Gráfica</li>
						<li>Linguagens de Programação</li>
						<li>Programação Orientada a Objeto</li>
						<li>Programação Web</li>
						<li>Engenharia de Software</li>
						<li>Design Patterns</li>
						<li>Curso de 40h de Unity 3D</li>
						<li>Curso de 40h de IoT</li>
					</ul>
					<div class="foot"><a class="more" href="projects/furb/" target="_blank">Veja alguns projetos</a></div>
				</div>
				<div class="item">
					<h4>Ensino Médio</h4><small>2010 - 2012</small>
					<h5><a href="http://www.escolabarao.com.br/" target="_blank">Escola Barão do Rio Branco</a></h5>
					<ul>
						<li>Matérias curriculares</li>
						<li>Inglês e Alemão</li>
						<li>Intercâmbio via Goethe Institut (<a href="https://blog.pasch-net.de/jugendkurse/archives/1906-Der-Abschied-von-euch-fiel-uns-sehr-schwer....html" target="_blank">matéria em alemão</a>)</li>
						<li>Olimpíada Regional de Matemática (<a href="http://www.orm.mtm.ufsc.br/premiados.php?ano=2012" target="_blank">Ouro em 2012</a>)</li>
						<li>Feira Catarinense de Matemática (2010 e 2011)</li>
					</ul>
<!--					<div class="foot"><a class="more" href="projects/barao/" target="_blank">Veja alguns projetos</a></div>-->
				</div>
			</div>
		</div>
		<div id="contact" class="white">
			<div class="center">
				<h2>Encontre-me online</h2>
				<div class="socials">
					<a class="linkedin" href="https://linkedin.com/in/mghenschel" target="_blank"><span class="fa">&#xf0e1;</span><span class="tx">LinkedIn</span></a>
					<a class="medium" href="https://medium.com/@mghextreme" target="_blank"><span class="fa">&#xf23a;</span><span class="tx">Medium</span></a>
					<a class="email" href="mailto:matias@mghenschel.com.br" target="_blank"><span class="fa">&#xf003;</span><span class="tx">E-mail</span></a>
					<a class="twitter" href="https://twitter.com/mghextreme" target="_blank"><span class="fa">&#xf099;</span><span class="tx">Twitter</span></a>
					<a class="instagram" href="https://instagram.com/mghenschel" target="_blank"><span class="fa">&#xf16d;</span><span class="tx">Instagram</span></a>
					<a class="facebook" href="https://fb.com/mghenschel" target="_blank"><span class="fa">&#xf09a;</span><span class="tx">Facebook</span></a>
				</div>
				<h3>Envie uma mensagem</h3>
				<form name="sendEmail" id="sendEmail" method="post" action="javascript:sendMessage()">
					<div class="field" id="name">
						<label for="name">Nome</label>
						<input type="text" name="name" value="" />
					</div>
					<div class="field half" id="email">
						<label for="email">E-mail</label>
						<input type="text" name="email" value="" />
					</div>
					<div class="field half" id="phone">
						<label for="phone">Telefone</label>
						<input type="text" name="phone" value="" />
					</div>
					<div class="field" id="message">
						<label for="message">Mensagem</label>
						<textarea name="message"></textarea>
					</div>
					<button type="submit" id="submit">Enviar</button>
				</form>
				<script type="text/javascript" charset="utf-8">
					function sendMessage(){
						var form = $('form#sendEmail'),
							el, val, regex,
							but = form.children('button#submit'),
							error = false;
						
						but.attr({ disabled: 'disabled' });
						
						// Name
						
						el = form.children('div#name.field');
						val = el.children('input').val();
						if (val.length < 6){
							error = true;
							el.addClass('fail');
						} else el.removeClass('fail');
						
						// E-mail
						
						regex = /^([a-zA-Z0-9._-]+)\@([a-zA-Z0-9._-]+)\.([a-zA-Z]){2,4}$/;
						el = form.children('div#email.field');
						val = el.children('input').val();
						if (!regex.test(val)){
							error = true;
							el.addClass('fail');
						} else el.removeClass('fail');
						
						// Message
						
						el = form.children('div#message.field');
						val = el.children('textarea').val();
						if (val.length < 10){
							error = true;
							el.addClass('fail');
						} else el.removeClass('fail');
						
						if (error){
							but.removeAttr('disabled');
							$box.alert('Algum campo não está corretamente preenchido.<br/>Verifique os campos e tente novamente.');
							return;
						}
						
						$.post('func/send-email.php', form.serialize(), function(result){
							try {
								var rs = JSON.parse(result);
								
								if (rs.error){
									console.log(rs);
									but.removeAttr('disabled');
									$box.alert('Houve um erro ao enviar sua mensagem.<br/>Tente novamente mais tarde.');
								}
								
								$box.alert('Mensagem enviada com sucesso!');
							}
							catch (err){
								console.log(err);
								but.removeAttr('disabled');
								$box.alert('Houve um erro ao enviar sua mensagem.<br/>Tente novamente mais tarde.');
							}
						});
					}
				</script>
			</div>
		</div>
		<footer id="footer" class="background">
			<div class="center">
				<p>Desenvolvido por <a href="http://www.mghenschel.com.br/">MGHenschel</a>. Todos os direitos reservados. Imagens por <a href="http://www.pexels.com/" target="_blank">Pexels</a>.</p>
			</div>
		</footer>
	</body>
</html>