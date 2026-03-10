<?php
// SEO helper for metadata and robots control

function seo_meta($title = '', $description = '', $keywords = '') {
    // title + optional meta-title
    if ($title) {
        echo "<title>" . htmlspecialchars($title) . "</title>\n";
        echo '<meta name="title" content="' . htmlspecialchars($title) . '">\n';
    }

    // description
    if ($description) {
        echo '<meta name="description" content="' . htmlspecialchars($description) . '">\n';
    }

    // keywords (optional, not used by major engines but harmless)
    if ($keywords) {
        echo '<meta name="keywords" content="' . htmlspecialchars($keywords) . '">\n';
    }

    // canonical URL (strip query parameters)
    $url = 'https://' . ($_SERVER['HTTP_HOST'] ?? 'retrodtech.com') . ($_SERVER['REQUEST_URI'] ?? '/');
    $url = strtok($url, '?');
    echo '<link rel="canonical" href="' . htmlspecialchars($url) . '">\n';

    // robots directive: noindex for admin/api/screen paths, index otherwise
    if (preg_match('#^/(admin|api|screen)(/|$)#', $_SERVER['REQUEST_URI'])) {
        echo '<meta name="robots" content="noindex, nofollow">\n';
    } else {
        echo '<meta name="robots" content="index, follow">\n';
    }
}

// convenience output for organization structured data
function seo_organization_jsonld($options = []) {
    $base = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $options['name'] ?? 'Retrod Technologies',
        'url' => $options['url'] ?? 'https://retrodtech.com',
        'logo' => $options['logo'] ?? 'https://retrodtech.com/img/retrod_logo_travel_tech.png',
        'sameAs' => $options['sameAs'] ?? []
    ];
    echo '<script type="application/ld+json">' . json_encode($base, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>\n';
}
