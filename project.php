<?php
$projects = require __DIR__ . '/includes/project_catalog.php';
$projectContent = require __DIR__ . '/includes/project_content.php';
require __DIR__ . '/includes/project_renderer.php';
$slug = $_GET['slug'] ?? '';

function h(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function projectTagClass(string $tagClass): string
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

if (!is_string($slug) || !isset($projects[$slug])) {
    http_response_code(404);
    $pageTitle = 'Projet introuvable — Portfolio';
    require __DIR__ . '/includes/header.php';
    ?>
    <div class="relative border-b border-slate-200 px-8 pt-16 pb-14 text-center" style="background: linear-gradient(135deg, #ddeeff 0%, #e8e6fa 50%, #d8f0e8 100%);">
      <a href="index.php" class="absolute left-6 top-5 inline-flex items-center gap-1.5 rounded-full border border-violet-200 bg-white/75 px-4 py-1.5 text-sm text-violet-900 transition duration-150 hover:bg-white">← <span>Retour au portfolio</span></a>
      <div class="mb-5 inline-flex rounded-full border border-sky-200 bg-white px-3.5 py-1 text-xs font-medium tracking-[0.04em] text-sky-700">Erreur 404</div>
      <h1 class="mb-2 text-3xl font-medium text-slate-900 md:text-4xl">Projet introuvable</h1>
      <p class="mb-8 text-base text-violet-700">Le projet demande n'existe pas.</p>
    </div>
    <?php require __DIR__ . '/includes/footer.php'; ?>
    <?php
    exit;
}

$project = $projects[$slug];

$pageTitle = $project['title'];
require __DIR__ . '/includes/header.php';

$contentHtml = $projectContent[$slug] ?? null;
$parentPageSlug = $project['parentPageSlug'] ?? 'troisieme';
$backLabelMap = [
  'faculte' => 'Retour aux projets de premiere annee',
  'deuxieme' => 'Retour aux projets de deuxieme annee',
  'troisieme' => 'Retour aux projets de troisieme annee',
];
$backLabel = $backLabelMap[$parentPageSlug] ?? 'Retour au portfolio';
?>

<div class="relative border-b border-slate-200 px-8 pt-16 pb-14 text-center" style="background: linear-gradient(135deg, #ddeeff 0%, #e8e6fa 50%, #d8f0e8 100%);">
  <a href="<?= empty($parentPageSlug) ? 'index.php' : 'page.php?slug=' . h($parentPageSlug) ?>" class="absolute left-6 top-5 inline-flex items-center gap-1.5 rounded-full border border-violet-200 bg-white/75 px-4 py-1.5 text-sm text-violet-900 transition duration-150 hover:bg-white">← <span><?= h($backLabel) ?></span></a>
  <div class="mb-5 inline-flex rounded-full border border-sky-200 bg-white px-3.5 py-1 text-xs font-medium tracking-[0.04em] text-sky-700"><?= h($project['badge']) ?></div>
  <h1 class="mb-2 text-3xl font-medium text-slate-900 md:text-4xl"><?= h($project['heading']) ?></h1>
  <p class="mb-8 text-base text-violet-700"><?= h($project['subtitle']) ?></p>
</div>

<main>
  <?php if (!empty($contentHtml)): ?>
  <?= project_render_content($contentHtml) ?>
  <?php else: ?>
  <div class="mx-auto max-w-5xl px-6 py-10">
    <div class="mb-4 text-xs font-medium uppercase tracking-[0.1em] text-slate-500">Presentation</div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6">
      <p class="text-sm leading-7 text-slate-600"><?= h($project['summary']) ?></p>
    </div>
  </div>

  <div class="mx-auto max-w-5xl px-6 py-10">
    <div class="mb-4 text-xs font-medium uppercase tracking-[0.1em] text-slate-500">Technologies</div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6">
      <div class="flex flex-wrap gap-1.5">
        <?php foreach ($project['tags'] as $tag): ?>
          <span class="inline-flex rounded-full px-3 py-1 text-xs font-medium <?= h(projectTagClass($tag['class'])) ?>"><?= h($tag['label']) ?></span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
