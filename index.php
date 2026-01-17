<?php
// Configuration
$site_title = "17 FIDUS – Cabinet Fiduciaire à Casablanca";
$site_description = "Cabinet fiduciaire à Casablanca, spécialiste de la comptabilité, fiscalité, gestion d'entreprise et accompagnement sur-mesure.";

// Gestion du formulaire de contact
$form_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    if ($name && $email && $message) {
        // Configuration email
        $to = "17Fidus@gmail.com";
        $email_subject = "Nouveau message de: $name - $subject";
        $email_body = "Nom: $name\nEmail: $email\nSujet: $subject\n\nMessage:\n$message";
        $headers = "From: $email\r\nReply-To: $email";
        
        // Envoi email (décommenter en production)
        // mail($to, $email_subject, $email_body, $headers);
        
        $form_message = '<div class="alert alert-success">Merci ! Votre message a bien été envoyé. Nous vous répondrons rapidement.</div>';
    } else {
        $form_message = '<div class="alert alert-error">Veuillez remplir tous les champs obligatoires.</div>';
    }
}

// Données des témoignages
$testimonials = [
    [
        'initials' => 'BM',
        'name' => 'Badr Mouatassim',
        'company' => 'Préférence Trans Maroc',
        'message' => "Un cabinet exceptionnel ! 17 FIDUS nous accompagne depuis plusieurs années et leur professionnalisme nous permet de gérer notre activité en toute sérénité. Merci pour votre réactivité et vos conseils avisés."
    ],
    [
        'initials' => 'AB',
        'name' => 'Anas Bouanane',
        'company' => 'Medousa Car',
        'message' => "Très satisfait de la collaboration avec 17 FIDUS. Leur expertise comptable et fiscale est remarquable. Une équipe à l'écoute qui comprend parfaitement les enjeux de notre secteur."
    ],
    [
        'initials' => 'AE',
        'name' => 'Anas El Ghiati',
        'company' => 'Planet Marbre',
        'message' => "17 FIDUS est bien plus qu'un cabinet comptable, c'est un véritable partenaire stratégique. Leur accompagnement personnalisé et leur disponibilité font toute la différence. Je recommande vivement !"
    ],
    [
        'initials' => 'AM',
        'name' => 'Amal Mezzi',
        'company' => '7 Days Techno',
        'message' => "Une équipe compétente et professionnelle qui nous facilite la gestion administrative. Grâce à 17 FIDUS, nous pouvons nous concentrer pleinement sur le développement de notre activité. Excellente collaboration !"
    ],
    [
        'initials' => 'AB',
        'name' => 'Anas Belmalah',
        'company' => 'Morocco Bridge',
        'message' => "Cabinet sérieux, efficace et moderne. L'équipe de 17 FIDUS apporte des solutions concrètes à nos problématiques. Leur expertise et leur réactivité sont des atouts majeurs pour notre entreprise."
    ],
    [
        'initials' => 'SA',
        'name' => 'Sadouk Abderrahmane',
        'company' => 'LHS Promo',
        'message' => "Collaborer avec 17 FIDUS a été un excellent choix. Leur approche humaine combinée à une grande expertise technique nous apporte une réelle tranquillité d'esprit. Un cabinet que je recommande sans hésitation."
    ]
];

// Données des services
$services = [
    [
        'icon' => 'fa-calculator',
        'title' => 'Comptabilité',
        'description' => 'Tenue et révision comptable, situations intermédiaires, bilan, conseils de gestion.'
    ],
    [
        'icon' => 'fa-file-invoice',
        'title' => 'Fiscalité',
        'description' => 'Déclarations fiscales (IS, TVA, IR...), optimisation fiscale, veille réglementaire.'
    ],
    [
        'icon' => 'fa-gavel',
        'title' => 'Juridique',
        'description' => 'Création d\'entreprise, secrétariat juridique, modifications statutaires.'
    ],
    [
        'icon' => 'fa-briefcase',
        'title' => 'Social & Paie',
        'description' => 'Paye, déclarations sociales, conseils RH, assistance en cas de contrôle.'
    ],
    [
        'icon' => 'fa-chart-line',
        'title' => 'Conseil & Pilotage',
        'description' => 'Business plan, tableaux de bord, gestion de trésorerie, accompagnement dirigeant.'
    ]
];

// Données des engagements
$engagements = [
    [
        'icon' => 'fa-user-shield',
        'title' => 'Transparence',
        'description' => 'Honoraires clairs, pas de mauvaise surprise, communication honnête.'
    ],
    [
        'icon' => 'fa-handshake',
        'title' => 'Accompagnement humain',
        'description' => 'Un interlocuteur dédié, disponible, à l\'écoute de vos besoins.'
    ],
    [
        'icon' => 'fa-bolt',
        'title' => 'Réactivité',
        'description' => 'Des réponses rapides, des conseils concrets et une grande disponibilité.'
    ],
    [
        'icon' => 'fa-lightbulb',
        'title' => 'Conseil sur-mesure',
        'description' => 'Des solutions adaptées à votre secteur, taille et ambitions.'
    ]
];

// FAQ
$faqs = [
    [
        'question' => 'Quels sont vos tarifs ?',
        'answer' => 'Nos honoraires sont adaptés à chaque situation. Contactez-nous pour un devis personnalisé gratuit !'
    ],
    [
        'question' => 'Proposez-vous un accompagnement à distance ?',
        'answer' => 'Oui, nous sommes équipés pour travailler à distance sur tous vos dossiers, où que vous soyez.'
    ],
    [
        'question' => 'Gérez-vous les déclarations fiscales et sociales ?',
        'answer' => 'Oui, nous prenons en charge toutes vos obligations déclaratives, fiscales et sociales.'
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $site_title; ?></title>
    <meta name="description" content="<?php echo $site_description; ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #8b2121;
            --primary-dark: #701a1a;
            --accent: #c49c48;
            --secondary: #f8f1ee;
            --gray-bg: #f5f5f5;
            --gray-light: #ebebeb;
            --text: #222;
            --white: #fff;
            --shadow: 0 7px 28px rgba(139,33,33,0.08);
            --shadow-hover: 0 12px 35px rgba(139,33,33,0.15);
            --radius: 14px;
        }

        * { 
            box-sizing: border-box; 
            margin: 0; 
            padding: 0; 
            font-family: 'Poppins', sans-serif; 
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: linear-gradient(135deg, var(--secondary) 0%, var(--gray-bg) 100%);
            color: var(--text);
            font-size: 1.05rem;
            line-height: 1.7;
            overflow-x: hidden;
        }

        a { 
            color: var(--primary); 
            text-decoration: none; 
            transition: all .3s ease; 
        }

        a:hover { 
            color: var(--accent); 
        }

        h1, h2, h3, h4 { 
            font-weight: 700; 
            line-height: 1.2; 
            color: var(--primary); 
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* HEADER */
        .header {
            position: fixed; 
            top: 0; 
            left: 0; 
            width: 100%;
            background: rgba(255,255,255,0.98);
            backdrop-filter: blur(12px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.08);
            z-index: 1000;
            transition: all .3s ease;
        }

        .nav-container { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            padding: 18px 0; 
        }

        .logo { 
            display: flex; 
            align-items: center; 
            gap: 14px; 
        }

        .logo img { 
            height: 48px; 
            border-radius: 10px; 
            box-shadow: 0 3px 12px rgba(139,33,33,0.12);
        }

        .logo-text h1 { 
            font-size: 1.5rem; 
            color: var(--primary);
            margin: 0;
        }

        .logo-text p { 
            font-size: 0.88rem; 
            color: var(--text); 
            opacity: 0.75; 
            margin: 0;
        }

        .nav-links {
            display: flex; 
            gap: 32px;
            list-style: none;
            transition: all .3s ease;
        }

        .nav-links a {
            font-weight: 500; 
            font-size: 1.08rem; 
            color: var(--text);
            position: relative; 
            padding-bottom: 4px;
        }

        .nav-links a:after {
            content: ''; 
            position: absolute;
            width: 0; 
            left: 0; 
            bottom: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transition: width .25s ease;
            border-radius: 2px;
        }

        .nav-links a:hover { 
            color: var(--primary);
        }

        .nav-links a:hover:after { 
            width: 100%; 
        }

        .mobile-menu-btn { 
            display: none; 
            background: none; 
            border: none; 
            font-size: 1.9rem; 
            color: var(--primary); 
            cursor: pointer; 
            z-index: 1001;
        }

        /* HERO */
        .hero { 
            background: linear-gradient(135deg, #ffffff 0%, #fafafa 100%);
            padding-top: 130px; 
            padding-bottom: 90px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: -10%;
            width: 40%;
            height: 100%;
            background: linear-gradient(135deg, rgba(139,33,33,0.03) 0%, rgba(196,156,72,0.05) 100%);
            border-radius: 0 0 0 50%;
        }

        .hero-flex { 
            display: flex; 
            align-items: center; 
            gap: 50px; 
            flex-wrap: wrap;
            position: relative;
            z-index: 1;
        }

        .hero-left { 
            flex: 1 1 400px; 
        }

        .hero-right { 
            flex: 1 1 350px; 
            display: flex; 
            justify-content: center;
        }

        .hero-right img { 
            max-width: 420px; 
            width: 100%; 
            border-radius: 20px; 
            box-shadow: 0 15px 50px rgba(139,33,33,0.15);
            transition: transform .3s ease;
        }

        .hero-right img:hover {
            transform: scale(1.02) translateY(-5px);
        }

        .hero h1 { 
            font-size: 2.3rem; 
            margin-bottom: 16px;
            line-height: 1.3;
        }

        .hero h2 { 
            color: var(--accent); 
            font-size: 1.15rem; 
            margin-bottom: 10px;
            font-weight: 600;
        }

        .hero p { 
            font-size: 1.1rem; 
            margin-bottom: 32px; 
            color: #444;
            line-height: 1.8;
        }

        .hero-buttons { 
            display: flex; 
            gap: 18px; 
            flex-wrap: wrap;
        }

        .btn, .btn-outline {
            display: inline-block; 
            padding: 14px 32px; 
            font-weight: 600; 
            font-size: 1.06rem;
            border-radius: 10px; 
            box-shadow: var(--shadow); 
            border: none; 
            cursor: pointer; 
            outline: none;
            transition: all .3s cubic-bezier(.4,0,.2,1);
            letter-spacing: 0.3px;
        }

        .btn { 
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%); 
            color: var(--white);
        }

        .btn-outline { 
            border: 2px solid var(--primary); 
            background: transparent; 
            color: var(--primary);
        }

        .btn:hover {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }

        .btn-outline:hover { 
            background: var(--primary); 
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }

        /* SECTIONS */
        section { 
            padding: 90px 0; 
        }

        .section-title { 
            text-align: center; 
            margin-bottom: 60px;
        }

        .section-title h2 { 
            font-size: 2.3rem; 
            margin-bottom: 8px; 
            color: var(--primary);
        }

        .section-title:after {
            content: ''; 
            display: block; 
            margin: 18px auto 12px; 
            width: 60px; 
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--accent)); 
            border-radius: 2px;
        }

        .section-title p { 
            color: var(--text); 
            font-size: 1.1rem; 
            max-width: 700px; 
            margin: 0 auto;
            opacity: 0.85;
        }

        /* ANIMATIONS */
        .section-animate {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s cubic-bezier(.4,0,.2,1), transform 0.8s cubic-bezier(.4,0,.2,1);
        }

        .section-animate.visible {
            opacity: 1;
            transform: none;
        }

        /* ENGAGEMENTS */
        .engagements {
            background: var(--white);
        }

        .engagements-grid {
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 28px;
        }

        .engagement-card {
            background: linear-gradient(135deg, #ffffff 0%, #fafafa 100%);
            border-radius: var(--radius); 
            padding: 40px 28px;
            box-shadow: var(--shadow); 
            text-align: center; 
            border: 1px solid var(--gray-light);
            transition: all .3s ease;
        }

        .engagement-card:hover { 
            box-shadow: var(--shadow-hover);
            transform: translateY(-8px) scale(1.02);
            border-color: var(--accent);
        }

        .engagement-card i { 
            font-size: 2.5rem; 
            color: var(--primary); 
            margin-bottom: 20px;
            transition: all .3s ease;
        }

        .engagement-card:hover i {
            color: var(--accent);
            transform: scale(1.1);
        }

        .engagement-card h3 { 
            font-size: 1.2rem; 
            margin-bottom: 10px; 
            color: var(--primary);
        }

        .engagement-card p { 
            color: #555; 
            font-size: 1.02rem;
            line-height: 1.6;
        }

        /* SERVICES */
        .services-grid {
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--white);
            border-radius: var(--radius); 
            padding: 36px 24px;
            box-shadow: var(--shadow);
            text-align: center; 
            transition: all .3s ease;
            border: 1px solid var(--gray-light);
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transform: scaleX(0);
            transition: transform .3s ease;
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-card:hover { 
            box-shadow: var(--shadow-hover);
            transform: translateY(-8px);
        }

        .service-card i { 
            font-size: 2.4rem; 
            color: var(--primary); 
            margin-bottom: 16px;
            transition: all .3s ease;
        }

        .service-card:hover i {
            color: var(--accent);
            transform: rotateY(360deg);
        }

        .service-card h3 { 
            margin-bottom: 10px; 
            color: var(--primary);
            font-size: 1.18rem;
        }

        .service-card p { 
            font-size: 1.02rem; 
            color: #555;
            line-height: 1.6;
        }

        /* EQUIPE */
        .equipe {
            background: var(--white);
        }

        .equipe-content { 
            display: flex; 
            gap: 60px; 
            align-items: center; 
            flex-wrap: wrap;
        }

        .equipe-photo { 
            flex: 1 1 300px; 
            display: flex; 
            justify-content: center;
        }

        .equipe-photo img { 
            width: 280px; 
            max-width: 100%; 
            border-radius: 20px; 
            box-shadow: 0 12px 40px rgba(139,33,33,0.15);
            transition: transform .3s ease;
        }

        .equipe-photo img:hover {
            transform: scale(1.05);
        }

        .equipe-bio { 
            flex: 2 1 400px; 
        }

        .equipe-bio h3 { 
            color: var(--primary-dark); 
            font-size: 1.4rem; 
            margin-bottom: 6px;
        }

        .equipe-bio > p:first-of-type {
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 12px;
        }

        .equipe-bio p { 
            margin-bottom: 12px;
            line-height: 1.7;
            color: #444;
        }

        .equipe-bio ul { 
            margin-left: 20px; 
            margin-top: 16px;
        }

        .equipe-bio ul li { 
            margin-bottom: 8px; 
            list-style: none;
            position: relative;
            padding-left: 24px;
            color: #444;
        }

        .equipe-bio ul li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--accent);
            font-weight: bold;
        }

        /* TEMOIGNAGES */
        .temoignages-grid {
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .temoignage-card {
            background: var(--white);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 32px 26px; 
            display: flex; 
            gap: 20px; 
            align-items: flex-start;
            border: 1px solid var(--gray-light);
            transition: all .3s ease;
        }

        .temoignage-card:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-5px);
        }

        .temoignage-avatar {
            width: 65px; 
            height: 65px; 
            border-radius: 50%; 
            flex-shrink: 0; 
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
            font-weight: 700;
            box-shadow: 0 5px 15px rgba(139,33,33,0.25);
            transition: all .3s ease;
        }

        .temoignage-card:hover .temoignage-avatar {
            transform: scale(1.1) rotate(5deg);
        }

        .temoignage-content {
            flex: 1;
        }

        .temoignage-content p { 
            font-style: italic; 
            margin-bottom: 14px; 
            color: #444;
            font-size: 1.02rem;
            line-height: 1.7;
        }

        .temoignage-content h4 { 
            font-size: 1.08rem; 
            color: var(--primary); 
            margin-bottom: 3px;
        }

        .temoignage-content span { 
            color: #777; 
            font-weight: 500; 
            font-size: 0.94rem; 
        }

        /* FAQ */
        .faq {
            background: var(--white);
        }

        .faq-list { 
            max-width: 750px; 
            margin: 0 auto;
        }

        .faq-item { 
            border-bottom: 2px solid var(--gray-light);
            margin-bottom: 8px;
        }

        .faq-question {
            background: none; 
            border: none; 
            width: 100%; 
            text-align: left;
            font-size: 1.14rem; 
            color: var(--primary); 
            font-weight: 600;
            padding: 20px 0; 
            cursor: pointer; 
            outline: none; 
            transition: all .2s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-question:hover {
            color: var(--accent);
        }

        .faq-question::after {
            content: '+'; 
            font-size: 1.5rem; 
            font-weight: 700; 
            color: var(--accent); 
            transition: all .3s ease;
        }

        .faq-item.open .faq-question::after { 
            content: '−'; 
            color: var(--primary);
            transform: rotate(180deg);
        }

        .faq-answer { 
            max-height: 0; 
            overflow: hidden; 
            opacity: 0; 
            transition: all 0.3s ease; 
            padding-left: 8px;
        }

        .faq-item.open .faq-answer { 
            max-height: 250px; 
            opacity: 1; 
            padding-bottom: 20px;
        }

        .faq-answer p {
            color: #555;
            line-height: 1.7;
        }

        /* CONTACT */
        .contact-content { 
            display: flex; 
            gap: 50px; 
            flex-wrap: wrap;
        }

        .contact-infos { 
            flex: 1 1 280px; 
        }

        .contact-infos h3 { 
            color: var(--primary-dark);
            margin-bottom: 20px;
            font-size: 1.4rem;
        }

        .contact-infos p { 
            color: #333; 
            margin-bottom: 14px; 
            font-size: 1.04rem;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .contact-infos i {
            color: var(--primary);
            width: 22px;
        }

        .contact-infos a { 
            color: #333;
            transition: color .2s;
        }

        .contact-infos a:hover {
            color: var(--primary);
        }

        .contact-form { 
            flex: 2 1 380px; 
            background: var(--white);
            padding: 38px 30px; 
            border-radius: var(--radius); 
            box-shadow: var(--shadow);
        }

        .form-group { 
            margin-bottom: 22px;
        }

        .form-group label { 
            font-weight: 500; 
            margin-bottom: 8px; 
            display: block;
            color: var(--text);
        }

        .form-control {
            width: 100%; 
            padding: 13px 14px; 
            border: 1.5px solid var(--gray-light); 
            border-radius: 8px; 
            font-size: 1.02rem;
            background: #fafafa;
            transition: all .2s ease;
        }

        .form-control:focus { 
            border-color: var(--primary); 
            outline: none;
            background: var(--white);
            box-shadow: 0 0 0 3px rgba(139,33,33,0.1);
        }

        textarea.form-control { 
            min-height: 120px; 
            resize: vertical;
        }

        .alert {
            padding: 14px 18px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* FOOTER */
        footer { 
            background: linear-gradient(135deg, #2a241f 0%, #1a1613 100%);
            color: var(--white); 
            padding: 70px 0 20px 0;
        }

        .footer-content { 
            display: flex; 
            flex-wrap: wrap; 
            gap: 50px; 
            justify-content: space-between; 
            align-items: flex-start;
            margin-bottom: 30px;
        }

        .footer-content div { 
            flex: 1 1 200px; 
        }

        .footer-content img { 
            margin-bottom: 16px; 
        }

        .footer-content p { 
            color: #e0e0e0;
            line-height: 1.7;
        }

        .footer-content ul { 
            list-style: none; 
            margin: 0; 
            padding: 0;
        }

        .footer-content li { 
            margin-bottom: 10px;
        }

        .footer-content a { 
            color: #e0e0e0;
            transition: all .2s ease;
        }

        .footer-content a:hover { 
            color: var(--accent);
            padding-left: 5px;
        }

        .social-links { 
            display: flex; 
            gap: 14px; 
            margin-top: 14px;
        }

        .social-links a {
            display: inline-flex; 
            align-items: center; 
            justify-content: center; 
            width: 42px; 
            height: 42px;
            background: rgba(255,255,255,0.1); 
            border-radius: 50%; 
            font-size: 1.2rem; 
            color: var(--white);
            transition: all .3s ease;
        }

        .social-links a:hover { 
            background: var(--primary); 
            color: #fff; 
            transform: scale(1.15) translateY(-3px);
        }

        .footer-bottom { 
            text-align: center; 
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #c0c0c0; 
            font-size: 1rem;
        }

        /* RESPONSIVE */
        @media (max-width: 1050px) {
            .hero-flex, .equipe-content, .contact-content { 
                flex-direction: column; 
                gap: 40px;
            }
            
            .temoignages-grid {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .nav-links { 
                display: none; 
                position: fixed; 
                left: 0; 
                top: 84px; 
                width: 100%; 
                background: rgba(255,255,255,0.98);
                backdrop-filter: blur(10px);
                flex-direction: column; 
                gap: 0; 
                z-index: 999;
                box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            }
            
            .nav-links.active { 
                display: flex; 
            }
            
            .nav-links li { 
                border-bottom: 1px solid var(--gray-light);
            }
            
            .nav-links a {
                display: block;
                padding: 18px 24px;
            }
            
            .mobile-menu-btn { 
                display: block;
            }
            
            .section-title h2 { 
                font-size: 1.9rem;
            }
            
            .hero { 
                padding-top: 110px;
                padding-bottom: 60px;
            }
            
            .hero h1 { 
                font-size: 1.85rem;
            }
            
            .hero h2 {
                font-size: 1.05rem;
            }
            
            .hero-buttons {
                flex-direction: column;
            }
            
            .hero-buttons .btn,
            .hero-buttons .btn-outline {
                width: 100%;
                text-align: center;
            }
            
            section { 
                padding: 60px 0;
            }
            
            .engagements-grid,
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .temoignages-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 500px) {
            .container { 
                padding: 0 16px;
            }
            
            .logo-text h1 {
                font-size: 1.25rem;
            }
            
            .logo-text p {
                font-size: 0.82rem;
            }
            
            .logo img {
                height: 40px;
            }
            
            .hero h1 { 
                font-size: 1.5rem;
            }
            
            .section-title h2 { 
                font-size: 1.6rem;
            }
            
            .btn, .btn-outline { 
                padding: 12px 24px; 
                font-size: 1rem;
            }
            
            .temoignage-card {
                flex-direction: column;
                text-align: center;
            }
            
            .temoignage-avatar {
                margin: 0 auto;
            }
            
            .footer-content div {
                min-width: 100%;
            }
        }

        @media (max-width: 360px) {
            body {
                font-size: 0.98rem;
            }
            
            .hero h1 {
                font-size: 1.35rem;
            }
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <header class="header">
        <div class="container nav-container">
            <div class="logo">
                <img src="17fidus.png" alt="Logo 17 FIDUS">
                <div class="logo-text">
                    <h1>17 FIDUS</h1>
                    <p>Votre partenaire fiduciaire à Casablanca</p>
                </div>
            </div>
            <nav>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#accueil">Accueil</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#equipe">Équipe</a></li>
                    <li><a href="#engagements">Engagements</a></li>
                    <li><a href="#temoignages">Avis</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Menu mobile">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero section-animate" id="accueil">
        <div class="container hero-flex">
            <div class="hero-left">
                <h2>Expertise comptable, fiscale et juridique</h2>
                <h1>Un cabinet fiduciaire agréé par l'état au service de votre entreprise</h1>
                <p>17 FIDUS accompagne PME, entrepreneurs et professions libérales avec transparence, proximité et innovation.</p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn">Demander un devis</a>
                    <a href="#services" class="btn btn-outline">Voir nos services</a>
                </div>
            </div>
            <div class="hero-right">
                <img src="17.png" alt="Équipe 17 FIDUS" />
            </div>
        </div>
    </section>

    <!-- ENGAGEMENTS -->
    <section class="engagements section-animate" id="engagements">
        <div class="container">
            <div class="section-title">
                <h2>Nos Engagements</h2>
            </div>
            <div class="engagements-grid">
                <?php foreach ($engagements as $engagement): ?>
                <div class="engagement-card">
                    <i class="fas <?php echo $engagement['icon']; ?>"></i>
                    <h3><?php echo $engagement['title']; ?></h3>
                    <p><?php echo $engagement['description']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="services section-animate" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Nos Services</h2>
                <p>Des solutions adaptées à chaque étape de la vie de votre entreprise</p>
            </div>
            <div class="services-grid">
                <?php foreach ($services as $service): ?>
                <div class="service-card">
                    <i class="fas <?php echo $service['icon']; ?>"></i>
                    <h3><?php echo $service['title']; ?></h3>
                    <p><?php echo $service['description']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- EQUIPE -->
    <section class="equipe section-animate" id="equipe">
        <div class="container">
            <div class="section-title">
                <h2>Notre Équipe</h2>
            </div>
            <div class="equipe-content">
                <div class="equipe-photo">
                    <img src="17.png" alt="Équipe 17 FIDUS">
                </div>
                <div class="equipe-bio">
                    <h3>Adil Ben Serrakh</h3>
                    <p>Comptable agréé par l'état & fondateur</p>
                    <p>20+ ans d'expérience en accompagnement des entreprises et indépendants. Proximité et conseil au cœur de sa pratique.</p>
                    <ul>
                        <li>Expertise reconnue en fiscalité et gestion</li>
                        <li>Accompagnement de la création à la transmission</li>
                        <li>Équipe pluridisciplinaire & dynamique</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- TEMOIGNAGES -->
    <section class="temoignages section-animate" id="temoignages">
        <div class="container">
            <div class="section-title">
                <h2>Ils nous font confiance</h2>
            </div>
            <div class="temoignages-grid">
                <?php foreach ($testimonials as $testimonial): ?>
                <div class="temoignage-card">
                    <div class="temoignage-avatar"><?php echo $testimonial['initials']; ?></div>
                    <div class="temoignage-content">
                        <p>"<?php echo $testimonial['message']; ?>"</p>
                        <h4><?php echo $testimonial['name']; ?></h4>
                        <span><?php echo $testimonial['company']; ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq section-animate" id="faq">
        <div class="container">
            <div class="section-title">
                <h2>Questions fréquentes</h2>
            </div>
            <div class="faq-list">
                <?php foreach ($faqs as $faq): ?>
                <div class="faq-item">
                    <button class="faq-question"><?php echo $faq['question']; ?></button>
                    <div class="faq-answer">
                        <p><?php echo $faq['answer']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact section-animate" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contactez-nous</h2>
            </div>
            <div class="contact-content">
                <div class="contact-infos">
                    <h3>17 FIDUS</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 283, Bd YAACOUB El Mansour, 1er étage N°3, Casablanca</p>
                    <p><i class="fas fa-phone-alt"></i> <a href="tel:0522471234">0522 47 12 34</a></p>
                    <p><i class="fas fa-mobile-alt"></i> <a href="tel:0661991303">0661 99 13 03</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:17Fidus@gmail.com">17Fidus@gmail.com</a></p>
                </div>
                <form class="contact-form" method="POST" action="#contact">
                    <?php echo $form_message; ?>
                    <div class="form-group">
                        <label for="name">Nom complet *</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Sujet</label>
                        <input type="text" id="subject" name="subject" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                    </div>
                    <button type="submit" name="contact_submit" class="btn">Envoyer</button>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div>
                    <img src="17fidus.png" alt="Logo 17 FIDUS" style="height:42px;">
                    <p>Cabinet fiduciaire moderne à Casablanca. Expertise, proximité, solutions sur-mesure.</p>
                </div>
                <div>
                    <p><b>Liens utiles</b></p>
                    <ul>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#equipe">Notre équipe</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <p><b>Suivez-nous</b></p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> 17 FIDUS – Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menu mobile
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const navLinks = document.getElementById('navLinks');
            
            if (mobileMenuBtn) {
                mobileMenuBtn.addEventListener('click', function() {
                    navLinks.classList.toggle('active');
                    const icon = mobileMenuBtn.querySelector('i');
                    if (navLinks.classList.contains('active')) {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-times');
                    } else {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                });
                
                // Fermer le menu après clic
                navLinks.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', function() {
                        navLinks.classList.remove('active');
                        const icon = mobileMenuBtn.querySelector('i');
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    });
                });
            }

            // Scroll doux
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href');
                    if (targetId.length > 1) {
                        const targetEl = document.querySelector(targetId);
                        if (targetEl) {
                            e.preventDefault();
                            const headerHeight = document.querySelector('.header').offsetHeight || 0;
                            window.scrollTo({
                                top: targetEl.getBoundingClientRect().top + window.pageYOffset - headerHeight,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });

            // FAQ
            document.querySelectorAll('.faq-question').forEach(btn => {
                btn.addEventListener('click', function() {
                    const item = btn.parentElement;
                    const isOpen = item.classList.contains('open');
                    
                    // Fermer tous les items
                    document.querySelectorAll('.faq-item').forEach(other => {
                        other.classList.remove('open');
                    });
                    
                    // Ouvrir l'item cliqué si il était fermé
                    if (!isOpen) {
                        item.classList.add('open');
                    }
                });
            });

            // Animation au scroll
            const animatedSections = document.querySelectorAll('.section-animate');
            
            function onScrollAnimate() {
                animatedSections.forEach(sec => {
                    const rect = sec.getBoundingClientRect();
                    if (rect.top < window.innerHeight - 80) {
                        sec.classList.add('visible');
                    }
                });
            }
            
            window.addEventListener('scroll', onScrollAnimate);
            window.addEventListener('resize', onScrollAnimate);
            onScrollAnimate();
        });
    </script>
</body>
</html>
