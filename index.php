<?php
$site_title = "Découvrir l'Islam";
$site_description = "Site de présentation en français sur les bases de l'islam : croyances, pratiques, éthique et ressources.";

$sections = [
    [
        'id' => 'croyance',
        'title' => 'Les 6 piliers de la foi',
        'items' => [
            "Croire en Allah, Dieu Unique.",
            "Croire aux anges.",
            "Croire aux Livres révélés (dont le Coran).",
            "Croire aux prophètes (dont Muhammad, paix et bénédictions sur lui).",
            "Croire au Jour dernier.",
            "Croire au destin, dans le bien comme dans l'épreuve."
        ]
    ],
    [
        'id' => 'pratique',
        'title' => 'Les 5 piliers de l\'islam',
        'items' => [
            "La shahada : attester qu'il n'y a de divinité qu'Allah et que Muhammad est Son messager.",
            "La salat : accomplir les 5 prières quotidiennes.",
            "La zakat : donner une part de ses biens aux personnes dans le besoin.",
            "Le sawm : jeûner le mois de Ramadan.",
            "Le hajj : accomplir le pèlerinage à La Mecque pour qui en a la capacité."
        ]
    ],
    [
        'id' => 'valeurs',
        'title' => 'Valeurs essentielles',
        'items' => [
            "La miséricorde et la bienveillance envers tous.",
            "La justice, l'honnêteté et la responsabilité.",
            "Le respect des parents, de la famille et des voisins.",
            "La recherche du savoir et l'amélioration de soi.",
            "La patience, la gratitude et l'humilité."
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $site_title; ?></title>
  <meta name="description" content="<?php echo $site_description; ?>">
  <style>
    :root {
      --bg: #f8fafc;
      --card: #ffffff;
      --text: #0f172a;
      --muted: #475569;
      --primary: #0f766e;
      --primary-dark: #115e59;
      --accent: #d4af37;
      --border: #e2e8f0;
    }

    * { box-sizing: border-box; }

    body {
      margin: 0;
      font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
      background: linear-gradient(180deg, #ecfeff 0%, var(--bg) 25%);
      color: var(--text);
      line-height: 1.65;
    }

    header {
      background: #0f766e;
      color: #fff;
      padding: 4rem 1.25rem 3rem;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: clamp(2rem, 5vw, 3rem);
      letter-spacing: 0.5px;
    }

    header p {
      max-width: 760px;
      margin: 1rem auto 0;
      opacity: 0.95;
    }

    .container {
      max-width: 980px;
      margin: 0 auto;
      padding: 2rem 1.25rem 4rem;
    }

    .intro {
      background: var(--card);
      border: 1px solid var(--border);
      border-left: 5px solid var(--accent);
      border-radius: 14px;
      padding: 1rem 1.2rem;
      margin-top: -2rem;
      box-shadow: 0 8px 22px rgba(2, 8, 23, 0.05);
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 1rem;
      margin-top: 1.4rem;
    }

    section {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 1rem 1.1rem;
      box-shadow: 0 8px 20px rgba(15, 23, 42, 0.04);
    }

    section h2 {
      margin-top: 0;
      color: var(--primary-dark);
      font-size: 1.2rem;
    }

    ul {
      padding-left: 1.2rem;
      margin: 0.5rem 0 0;
    }

    li + li { margin-top: 0.4rem; }

    .quote {
      margin-top: 1.4rem;
      border-radius: 14px;
      background: #f0fdfa;
      border: 1px dashed #5eead4;
      padding: 1rem 1.1rem;
      color: #134e4a;
      font-style: italic;
    }

    footer {
      text-align: center;
      padding: 1.4rem;
      color: var(--muted);
      border-top: 1px solid var(--border);
      background: #fff;
      font-size: 0.95rem;
    }
  </style>
</head>
<body>
  <header>
    <h1>Découvrir l'Islam</h1>
    <p>Un site simple pour comprendre les fondements de l'islam : foi, pratique et comportement. Cette page a une vocation informative et respectueuse.</p>
  </header>

  <main class="container">
    <article class="intro">
      <p>
        L'islam est une religion monothéiste qui invite à adorer Dieu (Allah), à faire le bien, à cultiver la justice,
        et à vivre avec équilibre entre spiritualité et responsabilité sociale.
      </p>
    </article>

    <div class="grid">
      <?php foreach ($sections as $section): ?>
      <section id="<?php echo $section['id']; ?>">
        <h2><?php echo $section['title']; ?></h2>
        <ul>
          <?php foreach ($section['items'] as $item): ?>
          <li><?php echo $item; ?></li>
          <?php endforeach; ?>
        </ul>
      </section>
      <?php endforeach; ?>
    </div>

    <div class="quote">
      « Le meilleur d'entre vous est celui qui est le meilleur en comportement. »
      <br>
      <small>— Sens rapporté dans la tradition prophétique</small>
    </div>
  </main>

  <footer>
    © <?php echo date('Y'); ?> • Site éducatif sur l'islam • Paix, respect et connaissance.
  </footer>
</body>
</html>
