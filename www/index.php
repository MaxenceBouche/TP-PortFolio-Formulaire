<?php include 'C:\UwAmp\www\sendmail.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body> 
    <!--alert messages start-->
        <?php echo $alert; ?>
        <!--alert messages end-->
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/me.jpg" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Bonjour, je suis <span>Maxence</span>
                </h1>
                <p>
                    Je suis en troisème année au Gaming Campus, en Business School.
                </p>
                <div class="btn-con">
                <a download="CV Maxence Bouché" href="Aseth/CV.pdf" class="main-btn" type="application/octet-stream">
                        <span class="btn-text">Télécharger mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>Me<span> connaître</span><span class="bg-text">Connaître</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>À propos de moi !</h4>
                    <p>
                        Je suis une perosnne ouverte d'esprit, j'aime m'interesser à plusieurs sujet différents pour en apprendre plus.
                        Le monde du jeu vidéo m'attire énormément, c'est un milieu en plein développement et 
                        j'aimerais en faire mon métier plus particulièrement dans les ressources humaines. <br /> <br /> 
                    </p>
                    <div class="btn-con">
                    <a download="CV Maxence Bouché" href="Aseth/CV.pdf" class="main-btn" type="application/octet-stream">
                        <span class="btn-text">Télécharger mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">+150</p>
                            <p class="small-text">Jeux <br /> essayés</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">+5 000</p>
                            <p class="small-text">heures <br /> jeux</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">+20</p>
                            <p class="small-text">projets<br /> associatifs dirigé</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">+500</p>
                            <p class="small-text">relations <br />professionnels</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">Mes compétences</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">Suite adobe</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Travail en équipe</p>
                        <div class="progress-con">
                            <p class="prog-text">95%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Ponctualité</p>
                        <div class="progress-con">
                            <p class="prog-text">100%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Aisance à l'oral</p>
                        <div class="progress-con">
                            <p class="prog-text">70%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                </div>
            </div>
            <h4 class="stat-title">Mon parcours & mes experiences</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-school"></i>
                    </div>
                    <p class="tl-duration">2020 - présent</p>
                    <h5>Gaming Campus<span> - Business School</span></h5>
                    <p>
                        Actuellement en 3ème année au Gaming Campus.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Mai - Juillet 2022</p>
                    <h5>Ressources Humaines<span> - Team Divergentes</span></h5>
                    <p>
                        J'ai effectué ce stage pour en apprendre plus sur les ressources humaines dans le milieu de l'esport, c'est un stage que j'ai énorément apprécié.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-school"></i>
                    </div>
                    <p class="tl-duration">2013 - 2017</p>
                    <h5>Lycée du Mont-Blanc<span> - BAC STMG</span></h5>
                    <p>
                        J'ai obtenu mon STMG avec option Mercatique.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Mai - Juillet 2021</p>
                    <h5>Directeur de production<span> - Failen9</span></h5>
                    <p>
                        Ce stage ma apprit beaucoup de chose sur ce que une structure esport peut produire en terme de contenu.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-school"></i>
                    </div>
                    <p class="tl-duration">2013 - 2017</p>
                    <h5>Collège Assomption Mont-Blanc<span></span></h5>
                    <p>
                       
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Juillet - Aout 2022</p>
                    <h5>Mise en rayon<span> Super U </span></h5>
                    <p>
                        J'ai effectué ce travail pour subvenir à mes besoins toute au long de l'année scolaire.
                    </p>
                </div>
            </div>
        </section>
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>Mes <span>Passions</span><span class="bg-text">Passions</span></h2>
            </div>
            <p class="port-text">
                
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/messi.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Le foot</h3>
                        <div class="icons">
                            <a href="https://twitter.com/Shayks667" target="_blank" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/maxence-bouch%C3%A9-3b66621b6/" target="_blank" class="icon">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCaQzBH7ylTSDBLv7rh9QzdA" target="_blank" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/RS.jfif" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Réseaux sociaux</h3>
                        <div class="icons">
                            <a href="https://twitter.com/Shayks667" target="_blank" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/maxence-bouch%C3%A9-3b66621b6/" target="_blank" class="icon">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCaQzBH7ylTSDBLv7rh9QzdA" target="_blank" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port3.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Jeux-vidéos</h3>
                        <div class="icons">
                            <a href="https://twitter.com/Shayks667" target="_blank" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/maxence-bouch%C3%A9-3b66621b6/" target="_blank" class="icon">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCaQzBH7ylTSDBLv7rh9QzdA" target="_blank" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/ski.jfif" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Le Ski</h3>
                        <div class="icons">
                            <a href="https://twitter.com/Shayks667" target="_blank" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/maxence-bouch%C3%A9-3b66621b6/" target="_blank" class="icon">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCaQzBH7ylTSDBLv7rh9QzdA" target="_blank" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/teidee.jfif" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Voyager</h3>
                        <div class="icons">
                            <a href="https://twitter.com/Shayks667" target="_blank" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/maxence-bouch%C3%A9-3b66621b6/" target="_blank" class="icon">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCaQzBH7ylTSDBLv7rh9QzdA" target="_blank" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/pnl.jfif" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>La musique</h3>
                        <div class="icons">
                            <a href="https://twitter.com/Shayks667" target="_blank" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/maxence-bouch%C3%A9-3b66621b6/" target="_blank" class="icon">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCaQzBH7ylTSDBLv7rh9QzdA" target="_blank" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
        </section>
        <section class="container" id="blogs">
            <div class="blogs-content">++
                <div class="main-title">
                    <h2>My <span>Blogs</span><span class="bg-text">My Blogs</span></h2>
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="img/port6.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Étude de marché pour Ovrdoze
                            </h4>
                            <p>
                            Étude de marcher complète sur Ovrdoze puis présentation à l'oral en équipe.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/wwb.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Création d'un site web sur un jeu.
                            </h4>
                            <p>
                                Création d'un site web avec les G TECH, sur un jeu choisi par nous même.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/montage.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Montage vidéo
                            </h4>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Me<span>Contacter</span><span class="bg-text">Contacter</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contacter moi ici</h4>
                        <p></p>
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Location</span>
                                </div>
                                <p>
                                    : France, Lyon
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    <span>: mbouche@gaming.bs</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Formation</span>
                                </div>
                                <p>
                                    <span>: Gaming Campus</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                    <span>Numéro de téléphone</span>
                                </div>
                                <p>
                                    <span>: 07522670617</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Langues</span>
                                </div>
                                <p>
                                    <span>: Français, Anglais, Espagnol</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="https://www.youtube.com/channel/UCaQzBH7ylTSDBLv7rh9QzdA" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="https://twitter.com/Shayks667" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://github.com/MaxenceBouche" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="https://www.twitch.tv/qlf_shayks" target="_blank">
                                    <i class="fab fa-twitch"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form method="POST" action="" class="contact-form">
                            <div class="input-control i-c-2">
                                <input type="text" name="name" required placeholder="Votre nom">
                                <input type="email" name="email" required placeholder="Email">
                            </div>
                            <div class="input-control">
                                <input type="text" name="subject" required placeholder="Objet">
                            </div>
                            <div class="input-control">
                                <textarea name="message" id="" cols="15" rows="8" placeholder="Ton message..."></textarea>
                            </div>
                            <div class="submit-btn">
                                <input type="submit" name="submit" class="send-btn" value="Envoyer">
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="app.js"></script>
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>
</html>