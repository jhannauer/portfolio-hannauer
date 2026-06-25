<?php
$catalog = require __DIR__ . '/includes/page_catalog.php';
$slug = $_GET['slug'] ?? '';

if (!is_string($slug) || !isset($catalog[$slug])) {
    http_response_code(404);
    $pageTitle = 'Page introuvable — Portfolio';
    require __DIR__ . '/includes/header.php';
    ?>
    <div class="relative border-b border-slate-200 px-8 pt-16 pb-14 text-center" style="background: linear-gradient(135deg, #ddeeff 0%, #e8e6fa 50%, #d8f0e8 100%);">
      <a href="index.php" class="absolute left-6 top-5 inline-flex items-center gap-1.5 rounded-full border border-violet-200 bg-white/75 px-4 py-1.5 text-sm text-violet-900 transition duration-150 hover:bg-white">← <span>Retour au portfolio</span></a>
      <div class="mb-5 inline-flex rounded-full border border-sky-200 bg-white px-3.5 py-1 text-xs font-medium tracking-[0.04em] text-sky-700">Erreur 404</div>
      <h1 class="mb-2 text-3xl font-medium text-slate-900 md:text-4xl">Page introuvable</h1>
      <p class="mb-8 text-base text-violet-700">Le contenu demande n'existe pas.</p>
    </div>
    <?php require __DIR__ . '/includes/footer.php'; ?>
    <?php
    exit;
}

$page = $catalog[$slug];

function h(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function iconBgClass(string $iconClass): string
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

function tagClass(string $tagClass): string
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

$pageTitle = $page['title'];
require __DIR__ . '/includes/header.php';
?>

<div class="relative border-b border-slate-200 px-8 pt-16 pb-14 text-center" style="background: linear-gradient(135deg, #ddeeff 0%, #e8e6fa 50%, #d8f0e8 100%);">
  <a href="index.php" class="absolute left-6 top-5 inline-flex items-center gap-1.5 rounded-full border border-violet-200 bg-white/75 px-4 py-1.5 text-sm text-violet-900 transition duration-150 hover:bg-white">← <span>Retour au portfolio</span></a>
  <div class="mb-5 inline-flex rounded-full border border-sky-200 bg-white px-3.5 py-1 text-xs font-medium tracking-[0.04em] text-sky-700"><?= h($page['badge']) ?></div>
  <h1 class="mb-2 text-3xl font-medium text-slate-900 md:text-4xl"><?= h($page['heading']) ?></h1>
  <p class="mb-8 text-base text-violet-700"><?= h($page['subtitle']) ?></p>
</div>

<main>
  <div class="mx-auto max-w-5xl px-6 py-10">
    <div class="mb-4 text-xs font-medium uppercase tracking-[0.1em] text-slate-500"><?= h($page['sectionLabel']) ?></div>
    <div class="grid grid-cols-1 gap-3 md:grid-cols-2 xl:grid-cols-3">
      <?php foreach ($page['cards'] as $card): ?>
        <a href="<?= h($card['href']) ?>" class="block rounded-2xl border border-slate-200 bg-white p-5 transition duration-150 hover:border-sky-300 hover:shadow-lg hover:shadow-sky-900/5">
          <div class="card-icon mb-3 flex h-10 w-10 items-center justify-center rounded-xl text-xl <?= h(iconBgClass($card['iconClass'])) ?>"><i class="<?= h($card['icon']) ?>"></i></div>
          <h3 class="mb-1.5 text-[15px] font-medium text-slate-900"><?= h($card['title']) ?></h3>
          <p class="mb-3.5 text-sm leading-6 text-slate-600"><?= h($card['description']) ?></p>
          <div class="flex flex-wrap gap-1.5">
            <?php foreach ($card['tags'] as $tag): ?>
              <span class="inline-flex rounded-full px-3 py-1 text-xs font-medium <?= h(tagClass($tag['class'])) ?>"><?= h($tag['label']) ?></span>
            <?php endforeach; ?>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
