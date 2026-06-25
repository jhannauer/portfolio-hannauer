<?php
$pageTitle = 'Justine Hannauer — Portfolio';
require __DIR__ . '/includes/header.php';

function indexIconBgClass(string $iconClass): string
{
  return match ($iconClass) {
    'blue' => 'bg-sky-100',
    'purple' => 'bg-violet-100',
    'green' => 'bg-lime-100',
    'teal' => 'bg-emerald-100',
    'amber' => 'bg-amber-100',
    'orange' => 'bg-orange-100',
    default => 'bg-pink-100',
  };
}

function indexTagClass(string $tagClass): string
{
  return match ($tagClass) {
    'blue' => 'bg-sky-100 text-sky-700',
    'purple' => 'bg-violet-100 text-violet-700',
    'green' => 'bg-lime-100 text-lime-800',
    'amber' => 'bg-amber-100 text-amber-800',
    'teal' => 'bg-emerald-100 text-emerald-800',
    'orange' => 'bg-orange-100 text-orange-700',
    'pink' => 'bg-pink-100 text-pink-700',
    default => 'bg-rose-100 text-rose-700',
  };
}
?>

  <div class="relative border-b border-slate-200 px-8 pt-16 pb-14 text-center" style="background: linear-gradient(135deg, #ddeeff 0%, #e8e6fa 50%, #d8f0e8 100%);">
<div class="mb-5 inline-flex rounded-full border border-sky-200 bg-white px-3.5 py-1 text-xs font-medium tracking-[0.04em] text-sky-700">Portfolio</div>    <h1 class="mb-2 text-3xl font-medium text-slate-900 md:text-4xl">Justine Hannauer</h1>
    <p class="mb-8 text-base text-violet-700">Développement web &amp; design créatif</p>
    <div class="flex flex-wrap justify-center gap-2.5">
      <a href="https://github.com/jhannauer" target="_blank" rel="noopener" class="no-underline rounded-full border border-violet-200 bg-white/75 px-5 py-2 text-sm text-violet-900 transition duration-150 hover:bg-white">GitHub</a>
      <a href="mailto:justine.hannauer@orange.fr" class="no-underline rounded-full border border-violet-200 bg-white/75 px-5 py-2 text-sm text-violet-900 transition duration-150 hover:bg-white">Me contacter</a>
      <a href="assets/CV_Justine_Hannauer.pdf" target="_blank" rel="noopener" class="no-underline rounded-full border border-violet-200 bg-white/75 px-5 py-2 text-sm text-violet-900 transition duration-150 hover:bg-white">Télécharger mon CV</a>
      <a href="https://www.linkedin.com/in/justine-hannauer-b38b27276/" target="_blank" rel="noopener" class="no-underline rounded-full border border-violet-200 bg-white/75 px-5 py-2 text-sm text-violet-900 transition duration-150 hover:bg-white">LinkedIn</a>
    </div>
  </div>

  <main>
    <div class="mx-auto max-w-5xl px-6 py-10">
      <div class="mb-4 text-xs font-medium uppercase tracking-[0.1em] text-slate-500">À propos</div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <p class="mb-5 text-sm leading-7 text-slate-600">
          Étudiante en Bachelor Universitaire de Technologie Métiers du Multimédia et de l'Internet (BUT MMI) à l'Université de Haguenau, je m'intéresse autant au développement web qu'au design graphique. J'aime créer des expériences visuelles soignées, de la maquette jusqu'au code. Ce portfolio regroupe mes projets depuis le lycée jusqu'à aujourd'hui.
        </p>
        <div class="flex flex-wrap gap-1.5">
          <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-medium text-sky-700">HTML</span>
          <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-medium text-sky-700">CSS</span>
          <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-medium text-sky-700">JavaScript</span>
          <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">PHP</span>
          <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">Python</span>
          <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">C</span>
          <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">Java</span>
          <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">SQL</span>
          <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-medium text-violet-700">Tailwind</span>
          <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-medium text-violet-700">Laravel</span>
          <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-medium text-violet-700">React</span>
          <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-medium text-violet-700">Symfony</span>
          <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-medium text-violet-700">Vue.js</span>
          <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-medium text-violet-700">Bootstrap</span>
          <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-medium text-violet-700">Three.js</span>
          <span class="inline-flex rounded-full bg-orange-100 px-3 py-1 text-xs font-medium text-orange-700">WordPress</span>
          <span class="inline-flex rounded-full bg-orange-100 px-3 py-1 text-xs font-medium text-orange-700">Drupal</span>
          <span class="inline-flex rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">Unity</span>
          <span class="inline-flex rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">Design graphique</span>
          <span class="inline-flex rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">UX Design</span>
          <span class="inline-flex rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">Android Studio</span>
          <span class="inline-flex rounded-full bg-lime-100 px-3 py-1 text-xs font-medium text-lime-800">Blender</span>
          <span class="inline-flex rounded-full bg-lime-100 px-3 py-1 text-xs font-medium text-lime-800">Figma</span>
          <span class="inline-flex rounded-full bg-lime-100 px-3 py-1 text-xs font-medium text-lime-800">InDesign</span>
          <span class="inline-flex rounded-full bg-lime-100 px-3 py-1 text-xs font-medium text-lime-800">Illustrator</span>
          <span class="inline-flex rounded-full bg-lime-100 px-3 py-1 text-xs font-medium text-lime-800">DaVinci Resolve</span>
          <span class="inline-flex rounded-full bg-lime-100 px-3 py-1 text-xs font-medium text-lime-800">After Effects</span>
          <span class="inline-flex rounded-full bg-pink-100 px-3 py-1 text-xs font-medium text-pink-700">Scrum</span>
          <span class="inline-flex rounded-full bg-pink-100 px-3 py-1 text-xs font-medium text-pink-700">Agile</span>
          <span class="inline-flex rounded-full bg-pink-100 px-3 py-1 text-xs font-medium text-pink-700">Méthode Agile</span>
          <span class="inline-flex rounded-full bg-pink-100 px-3 py-1 text-xs font-medium text-pink-700">Miro</span>
          <span class="inline-flex rounded-full bg-pink-100 px-3 py-1 text-xs font-medium text-pink-700">Trello</span>
          <span class="inline-flex rounded-full bg-pink-100 px-3 py-1 text-xs font-medium text-pink-700">Accessibilité</span>
          <span class="inline-flex rounded-full bg-rose-100 px-3 py-1 text-xs font-medium text-rose-700">3D</span>
          <span class="inline-flex rounded-full bg-rose-100 px-3 py-1 text-xs font-medium text-rose-700">IA générative</span>
          <span class="inline-flex rounded-full bg-rose-100 px-3 py-1 text-xs font-medium text-rose-700">Réalité virtuelle</span>
          <span class="inline-flex rounded-full bg-rose-100 px-3 py-1 text-xs font-medium text-rose-700">Réalité augmentée</span>

        </div>
      </div>
    </div>
    <div class="mx-auto max-w-5xl px-6 py-10">
      <div class="mb-4 text-xs font-medium uppercase tracking-[0.1em] text-slate-500">Mes années d'études</div>
      <div class="relative pl-8">
        <div class="absolute left-2.5 top-2 bottom-2 w-px bg-slate-200"></div>

        <div class="relative mb-8">
          <div class="absolute left-[-1.7rem] top-1/2 -translate-y-1/2 h-3 w-3 rounded-full border-2 border-slate-100 bg-violet-600"></div>
          <div class="rounded-2xl border border-slate-200 bg-white p-6">
            <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-medium text-violet-700">Depuis 2024</span>
            <strong class="mt-1.5 block text-sm font-medium text-slate-900">BUT MMI — Université de Haguenau</strong>
            <p class="mt-1 text-sm leading-7 text-slate-600">Développement web, design graphique, 3D, cybersécurité, frameworks et développement mobile.</p>
          </div>
        </div>

        <div class="relative mb-8">
          <div class="absolute left-[-1.7rem] top-1/2 -translate-y-1/2 h-3 w-3 rounded-full border-2 border-slate-100 bg-sky-600"></div>
          <div class="rounded-2xl border border-slate-200 bg-white p-6">
            <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-medium text-sky-700">2022 — 2024</span>
            <strong class="mt-1.5 block text-sm font-medium text-slate-900">Licence Math-Info — Université de Strasbourg</strong>
            <p class="mt-1 text-sm leading-7 text-slate-600">Projets en HTML, CSS, PHP, C, Python et Java.</p>
          </div>
        </div>

        <div class="relative">
          <div class="absolute left-[-1.7rem] top-1/2 -translate-y-1/2 h-3 w-3 rounded-full border-2 border-slate-100 bg-emerald-600"></div>
          <div class="rounded-2xl border border-slate-200 bg-white p-6">
            <span class="inline-flex rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-700">2020 — 2022</span>
            <strong class="mt-1.5 block text-sm font-medium text-slate-900">Baccalauréat option NSI</strong>
            <p class="mt-1 text-sm leading-7 text-slate-600">Découverte du développement web avec HTML, CSS et Python.</p>
          </div>
        </div>

      </div>
    </div>
    <div class="section">
      <div class="section-label">Mes projets</div>
      <div class="grid grid-cols-1 gap-3 md:grid-cols-2 xl:grid-cols-3">

        <a href="project.php?slug=lycee" class="block rounded-2xl border border-slate-200 bg-white p-5 transition duration-150 hover:border-sky-300 hover:shadow-lg hover:shadow-sky-900/5">
          <div class="card-icon mb-3 flex h-10 w-10 items-center justify-center rounded-xl text-xl <?= indexIconBgClass('blue') ?>"><i class="fa-solid fa-school"></i></div>
          <h3 class="mb-1.5 text-[15px] font-medium text-slate-900">Projet d'année lycée</h3>
          <p class="mb-3.5 text-sm leading-6 text-slate-600">Premier projet web, découverte du HTML et du CSS.</p>
          <div class="flex flex-wrap gap-1.5">
            <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-medium text-sky-700">HTML</span>
            <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-medium text-sky-700">CSS</span>
            <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">Python</span>
            <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">SQL</span>
          </div>
        </a>

        <a href="page.php?slug=faculte" class="block rounded-2xl border border-slate-200 bg-white p-5 transition duration-150 hover:border-sky-300 hover:shadow-lg hover:shadow-sky-900/5">
          <div class="card-icon mb-3 flex h-10 w-10 items-center justify-center rounded-xl text-xl <?= indexIconBgClass('green') ?>"><i class="fa-solid fa-graduation-cap"></i></div>
          <h3 class="mb-1.5 text-[15px] font-medium text-slate-900">Projets en années en faculté</h3>
          <p class="mb-3.5 text-sm leading-6 text-slate-600">Introduction au JavaScript et aux bases de PHP.</p>
          <div class="flex flex-wrap gap-1.5">
            <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-medium text-sky-700">HTML</span>
            <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-medium text-sky-700">CSS</span>
            <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-medium text-sky-700">JS</span>
            <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">PHP</span>
            <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">C</span>
            <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">Python</span>
            <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">Java</span>
          </div>
        </a>

        <a href="page.php?slug=deuxieme" class="block rounded-2xl border border-slate-200 bg-white p-5 transition duration-150 hover:border-sky-300 hover:shadow-lg hover:shadow-sky-900/5">
          <div class="card-icon mb-3 flex h-10 w-10 items-center justify-center rounded-xl text-xl <?= indexIconBgClass('purple') ?>"><i class="fa-solid fa-laptop-code"></i></div>
          <h3 class="mb-1.5 text-[15px] font-medium text-slate-900">Projets de deuxième année de BUT</h3>
          <p class="mb-3.5 text-sm leading-6 text-slate-600">Projets avancés, frameworks et design interactif, Unity, jeu snake.</p>
          <div class="flex flex-wrap gap-1.5">
            <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-medium text-sky-700">HTML</span>
            <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-medium text-sky-700">CSS</span>
            <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-medium text-sky-700">JS</span>
            <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">PHP</span>
            <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">SQLite</span>
            <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">C#</span>
            <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-medium text-violet-700">Bootstrap</span>
            <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-medium text-violet-700">Symfony</span>
            <span class="inline-flex rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">Design Graphique</span>
            <span class="inline-flex rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">UX Design</span>
            <span class="inline-flex rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">Unity</span>
            <span class="inline-flex rounded-full bg-lime-100 px-3 py-1 text-xs font-medium text-lime-800">Blender</span>
            <span class="inline-flex rounded-full bg-lime-100 px-3 py-1 text-xs font-medium text-lime-800">Figma</span>
            <span class="inline-flex rounded-full bg-lime-100 px-3 py-1 text-xs font-medium text-lime-800">InDesign</span>
            <span class="inline-flex rounded-full bg-lime-100 px-3 py-1 text-xs font-medium text-lime-800">Illustrator</span>
            <span class="inline-flex rounded-full bg-lime-100 px-3 py-1 text-xs font-medium text-lime-800">DaVinci Resolve</span>
            <span class="inline-flex rounded-full bg-lime-100 px-3 py-1 text-xs font-medium text-lime-800">After Effects</span>
            <span class="inline-flex rounded-full bg-pink-100 px-3 py-1 text-xs font-medium text-pink-700">Scrum</span>
            <span class="inline-flex rounded-full bg-pink-100 px-3 py-1 text-xs font-medium text-pink-700">Agile</span>
            <span class="inline-flex rounded-full bg-pink-100 px-3 py-1 text-xs font-medium text-pink-700">Miro</span>
            <span class="inline-flex rounded-full bg-pink-100 px-3 py-1 text-xs font-medium text-pink-700">Trello</span>
            <span class="inline-flex rounded-full bg-rose-100 px-3 py-1 text-xs font-medium text-rose-700">3D</span>
          </div>
        </a>

        <a href="page.php?slug=troisieme" class="block rounded-2xl border border-slate-200 bg-white p-5 transition duration-150 hover:border-sky-300 hover:shadow-lg hover:shadow-sky-900/5">
          <div class="card-icon mb-3 flex h-10 w-10 items-center justify-center rounded-xl text-xl <?= indexIconBgClass('teal') ?>"><i class="fa-solid fa-box-open"></i></div>
          <h3 class="mb-1.5 text-[15px] font-medium text-slate-900">Projets de troisième année de BUT</h3>
          <p class="mb-3.5 text-sm leading-6 text-slate-600">Three.js, 3D, androidStudio,  et projets de fin de cursus.</p>
          <div class="flex flex-wrap gap-1.5">
            <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-medium text-sky-700">JS</span>
            <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">SQLite</span>
            <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">Strapi</span>
            <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">C#</span>
            <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">Python</span>
            <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-medium text-violet-700">Tailwind</span>
            <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-medium text-violet-700">Laravel</span>
            <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-medium text-violet-700">Three.js</span>
            <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-medium text-violet-700">React</span>
            <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-medium text-violet-700">Vue.js</span>
            <span class="inline-flex rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">Unity</span>
            <span class="inline-flex rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">Android Studio</span>
            <span class="inline-flex rounded-full bg-orange-100 px-3 py-1 text-xs font-medium text-orange-700">Drupal</span>
            <span class="inline-flex rounded-full bg-orange-100 px-3 py-1 text-xs font-medium text-orange-700">WordPress</span>
            <span class="inline-flex rounded-full bg-lime-100 px-3 py-1 text-xs font-medium text-lime-800">Figma</span>
            <span class="inline-flex rounded-full bg-lime-100 px-3 py-1 text-xs font-medium text-lime-800">DaVinci Resolve</span>
            <span class="inline-flex rounded-full bg-pink-100 px-3 py-1 text-xs font-medium text-pink-700">Scrum</span>
            <span class="inline-flex rounded-full bg-pink-100 px-3 py-1 text-xs font-medium text-pink-700">Agile</span>
            <span class="inline-flex rounded-full bg-pink-100 px-3 py-1 text-xs font-medium text-pink-700">Miro</span>
            <span class="inline-flex rounded-full bg-pink-100 px-3 py-1 text-xs font-medium text-pink-700">Trello</span>
            <span class="inline-flex rounded-full bg-pink-100 px-3 py-1 text-xs font-medium text-pink-700">Accessibilité</span>
            <span class="inline-flex rounded-full bg-rose-100 px-3 py-1 text-xs font-medium text-rose-700">3D</span>
            <span class="inline-flex rounded-full bg-rose-100 px-3 py-1 text-xs font-medium text-rose-700">IA générative</span>
            <span class="inline-flex rounded-full bg-rose-100 px-3 py-1 text-xs font-medium text-rose-700">Réalité virtuelle</span>
            <span class="inline-flex rounded-full bg-rose-100 px-3 py-1 text-xs font-medium text-rose-700">Réalité augmentée</span>

          </div>
        </a>
      </div>
    </div>

    <div class="mx-auto max-w-5xl px-6 py-10">
      <div class="mb-4 text-xs font-medium uppercase tracking-[0.1em] text-slate-500">Stages</div>
      <div class="flex flex-col gap-3">
        <div class="rounded-2xl border border-slate-200 bg-white px-5 py-4">
          <div class="flex items-start justify-between gap-3">
            <div class="flex items-center gap-3">
              <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-violet-100 text-base text-violet-900"><i class="fa-solid fa-briefcase"></i></div>
              <div>
                <div class="text-sm font-medium text-slate-900">SPA de Strasbourg</div>
                <div class="mt-0.5 text-xs text-slate-500">Developpeuse web</div>
              </div>
            </div>
            <div class="whitespace-nowrap text-xs font-medium text-slate-400">Avr. — Juin 2026</div>
          </div>
          <p class="mt-3 text-sm leading-6 text-slate-600">Refonte du site web de la SPA de Strasbourg, ainsi que la réalisation d'une maquette wireframe et de visuels pour les réseaux sociaux.</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white px-5 py-4">
          <div class="flex items-start justify-between gap-3">
            <div class="flex items-center gap-3">
              <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-violet-100 text-base text-violet-900"><i class="fa-solid fa-briefcase"></i></div>
              <div>
                <div class="text-sm font-medium text-slate-900">SPA de Strasbourg</div>
                <div class="mt-0.5 text-xs text-slate-500">Developpeuse web</div>
              </div>
            </div>
            <div class="whitespace-nowrap text-xs font-medium text-slate-400">Fév. — Avr. 2026</div>
          </div>
          <p class="mt-3 text-sm leading-6 text-slate-600">Refonte du site web de l'association Alsace Digitale, avec une méthode agile et des réunions de planification régulières.</p>
        </div>
      </div>
    </div>

    <div class="mx-auto max-w-5xl px-6 py-10">
  <div class="mb-4 text-xs font-medium uppercase tracking-[0.1em] text-slate-500">Mes autres compétences</div>
  <div class="grid grid-cols-1 gap-3 md:grid-cols-2 xl:grid-cols-3">
    <div class="flex items-start gap-3 rounded-2xl border border-slate-200 bg-white p-4">
      <div class="mt-0.5 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-xl text-violet-900"><i class="fa-solid fa-paint-brush"></i></div>
      <div class="text-sm leading-6 text-slate-600"><strong class="mb-0.5 block text-sm font-medium text-slate-900">Design graphique</strong>Figma, InDesign, Illustrator — maquettes et illustrations</div>
    </div>
    <div class="flex items-start gap-3 rounded-2xl border border-slate-200 bg-white p-4">
      <div class="mt-0.5 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-sky-100 text-xl text-violet-900"><i class="fa-solid fa-user-friends"></i></div>
      <div class="text-sm leading-6 text-slate-600"><strong class="mb-0.5 block text-sm font-medium text-slate-900">UX Design</strong>Interfaces intuitives et esthétiques, prototypage</div>
    </div>
    <div class="flex items-start gap-3 rounded-2xl border border-slate-200 bg-white p-4">
      <div class="mt-0.5 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-lime-100 text-xl text-violet-900"><i class="fa-solid fa-film"></i></div>
      <div class="text-sm leading-6 text-slate-600"><strong class="mb-0.5 block text-sm font-medium text-slate-900">Vidéo & animation</strong>DaVinci Resolve, After Effects</div>
    </div>
    <div class="flex items-start gap-3 rounded-2xl border border-slate-200 bg-white p-4">
      <div class="mt-0.5 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-amber-100 text-xl text-violet-900"><i class="fa-solid fa-handshake"></i></div>
      <div class="text-sm leading-6 text-slate-600"><strong class="mb-0.5 block text-sm font-medium text-slate-900">Travail en équipe</strong>Communication, méthode agile, Scrum</div>
    </div>
    <div class="flex items-start gap-3 rounded-2xl border border-slate-200 bg-white p-4">
      <div class="mt-0.5 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-violet-100 text-xl text-violet-900"><i class="fa-solid fa-lightbulb"></i></div>
      <div class="text-sm leading-6 text-slate-600"><strong class="mb-0.5 block text-sm font-medium text-slate-900">Curiosité & créativité</strong>Veille technologique, nouvelles technologies</div>
    </div>
  </div>
</div>

<div class="mx-auto max-w-5xl px-6 py-10">
  <div class="mb-4 text-xs font-medium uppercase tracking-[0.1em] text-slate-500">Certifications</div>
    <div class="flex flex-col gap-3">
      <div class="flex items-center justify-between gap-3 rounded-2xl border border-slate-200 bg-white px-5 py-4">
        <div class="flex items-center gap-3">
          <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-sky-100 text-base text-violet-900"><i class="fa-solid fa-trophy"></i></div>
          <div>
            <div class="text-sm font-medium text-slate-900">Pix</div>
            <div class="mt-0.5 text-xs text-slate-500">Certification en compétences numériques — 556 points</div>
          </div>
        </div>
        <div class="whitespace-nowrap text-xs font-medium text-slate-400">Juin 2026</div>
      </div>
      <div class="flex items-center justify-between gap-3 rounded-2xl border border-slate-200 bg-white px-5 py-4">
        <div class="flex items-center gap-3">
          <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-violet-100 text-base text-violet-900"><i class="fa-solid fa-wheelchair"></i></div>
          <div>
            <div class="text-sm font-medium text-slate-900">Opquast</div>
            <div class="mt-0.5 text-xs text-slate-500">Certification en accessibilité web</div>
          </div>
        </div>
        <div class="whitespace-nowrap text-xs font-medium text-slate-400">Jan. 2026</div>
      </div>
      <div class="flex items-center justify-between gap-3 rounded-2xl border border-slate-200 bg-white px-5 py-4">
        <div class="flex items-center gap-3">
          <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-lime-100 text-base text-violet-900"><i class="fa-solid fa-ambulance"></i></div>
          <div>
            <div class="text-sm font-medium text-slate-900">PSC1</div>
            <div class="mt-0.5 text-xs text-slate-500">Formation aux premiers secours</div>
          </div>
        </div>
        <div class="whitespace-nowrap text-xs font-medium text-slate-400">Août 2024</div>
      </div>
    </div>

    <div class="mt-6 mb-4 text-xs font-medium uppercase tracking-[0.1em] text-slate-500">Langues</div>
    <div class="mt-2.5 flex flex-wrap gap-3">
      <div class="flex items-center justify-between gap-3 rounded-2xl border border-slate-200 bg-white px-5 py-3">
        <div>
          <strong class="block text-sm font-medium text-slate-900">Français</strong>
          <span class="text-xs text-slate-500">Langue maternelle</span>
        </div>
        <span class="rounded-full bg-violet-100 px-2 py-0.5 text-xs font-medium text-violet-700">Natif</span>
      </div>
      <div class="flex items-center justify-between gap-3 rounded-2xl border border-slate-200 bg-white px-5 py-3">
        <div>
          <strong class="block text-sm font-medium text-slate-900">Anglais</strong>
          <span class="text-xs text-slate-500">Niveau courant</span>
        </div>
        <span class="rounded-full bg-violet-100 px-2 py-0.5 text-xs font-medium text-violet-700">B2</span>
      </div>
      <div class="flex items-center justify-between gap-3 rounded-2xl border border-slate-200 bg-white px-5 py-3">
        <div>
          <strong class="block text-sm font-medium text-slate-900">Allemand</strong>
          <span class="text-xs text-slate-500">Niveau débutant</span>
        </div>
        <span class="rounded-full bg-violet-100 px-2 py-0.5 text-xs font-medium text-violet-700">A1</span>
      </div>
    </div>
  </div>
  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>