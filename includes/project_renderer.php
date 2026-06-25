<?php

function project_h(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function project_render_links(array $links): string
{
    if ($links === []) {
        return '';
    }

    $html = '<div class="quick-links">';
    foreach ($links as $link) {
        $href = project_h($link['href'] ?? '#');
        $label = project_h($link['label'] ?? 'Lien');
        $tagClass = project_h($link['class'] ?? 'teal');
        $target = project_h($link['target'] ?? '_blank');
        $rel = project_h($link['rel'] ?? 'noopener');
        $html .= '<a href="' . $href . '" class="quick-link tag ' . $tagClass . '" target="' . $target . '" rel="' . $rel . '">' . $label . '</a>';
    }
    $html .= '</div>';

    return $html;
}

function project_render_media(array $media): string
{
    if (($media['type'] ?? '') === 'image') {
        $source = project_h($media['src'] ?? '');
        $alt = project_h($media['alt'] ?? '');

        return '<img src="' . $source . '" alt="' . $alt . '" class="w-full rounded-xl border border-slate-200">';
    }

    if (($media['type'] ?? '') === 'video') {
        $source = project_h($media['src'] ?? '');
        $mime = project_h($media['mime'] ?? 'video/mp4');
        $fallback = project_h($media['fallback'] ?? 'Votre navigateur ne supporte pas la lecture de videos.');

        return '<div class="video-wrapper"><video controls><source src="' . $source . '" type="' . $mime . '" loading="lazy">' . $fallback . '</video></div>';
    }

    if (($media['type'] ?? '') === 'youtube') {
    $url = $media['src'] ?? '';
    preg_match(
    '/(?:youtube\.com\/(?:watch\?v=|shorts\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
    $url,
    $matches
    );
    $videoId = $matches[1] ?? '';
    if ($videoId === '') return '';

    return '<div class="video-wrapper">
        <iframe src="https://www.youtube.com/embed/' . $videoId . '" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>';
}

    return '';
}

function project_render_column(array $column): string
{
    $html = '<div class="col-card">';
    if (!empty($column['title'])) {
        $html .= '<h3>' . project_h((string) $column['title']) . '</h3>';
    }

    foreach ($column['paragraphs'] ?? [] as $paragraph) {
        $html .= '<p>' . project_h((string) $paragraph) . '</p>';
    }

    if (!empty($column['media'])) {
        foreach ((array) $column['media'] as $media) {
            if (($media['type'] ?? '') === 'image') {
                $html .= '<img src="' . project_h($media['src'] ?? '') . '" alt="' . project_h($media['alt'] ?? '') . '" class="w-full rounded-xl border border-slate-200">';
            } elseif (($media['type'] ?? '') === 'video') {
                $html .= project_render_media($media);
            }
        }
    }

    if (!empty($column['list'])) {
        $html .= '<ul>';
        foreach ((array) $column['list'] as $item) {
            if (is_array($item)) {
                $label = project_h((string) ($item['label'] ?? ''));
                $text = project_h((string) ($item['text'] ?? ''));
                $html .= '<li><strong>' . $label . '</strong> ' . $text . '</li>';
                continue;
            }
            $html .= '<li>' . project_h((string) $item) . '</li>';
        }
        $html .= '</ul>';
    }

    $html .= '</div>';

    return $html;
}

function project_render_section(array $section): string
{
    $label = project_h((string) ($section['label'] ?? ''));
    $type = $section['type'] ?? 'card';

    if ($type === 'columns') {
        $columns = $section['columns'] ?? [];
        if (count($columns) === 1) {
            $html = '<div class="section"><div class="section-label">' . $label . '</div>';
            foreach ($columns as $column) {
                $html .= project_render_column((array) $column);
            }
            $html .= '</div>';
            return $html;
        }

        $html = '<div class="section"><div class="section-label">' . $label . '</div><div class="two-cols">';
        foreach ($columns as $column) {
            $html .= project_render_column((array) $column);
        }
        $html .= '</div></div>';
        return $html;
    }

    $html = '<div class="section"><div class="section-label">' . $label . '</div><div class="description-card">';

    foreach ($section['paragraphs'] ?? [] as $paragraph) {
        $html .= '<p>' . project_h((string) $paragraph) . '</p>';
    }

    if (!empty($section['media'])) {
        $mediaItems = (array) $section['media'];
        $hasOnlyImages = count($mediaItems) > 1;
        foreach ($mediaItems as $media) {
            if (($media['type'] ?? '') !== 'image') {
                $hasOnlyImages = false;
                break;
            }
        }

        if ($hasOnlyImages) {
            $html .= '<div class="mt-4 grid grid-cols-1 gap-4 md:grid-cols-2">';
            foreach ($mediaItems as $media) {
                $html .= '<div>' . project_render_media((array) $media) . '</div>';
            }
            $html .= '</div>';
        } else {
            foreach ($mediaItems as $media) {
                $html .= project_render_media((array) $media);
            }
        }
    }

    if (!empty($section['links'])) {
        $html .= project_render_links((array) $section['links']);
    }

    $html .= '</div></div>';

    return $html;
}

function project_render_content(array|string $content): string
{
    if (is_string($content)) {
        return $content;
    }

    $html = '';
    foreach ($content['sections'] ?? [] as $section) {
        $html .= project_render_section((array) $section);
    }

    return $html;
}
