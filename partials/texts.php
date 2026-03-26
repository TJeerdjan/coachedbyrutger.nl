<?php
/**
 * Website Text Helper
 * Fetches texts from the API and provides a helper function to get text by key
 */

$API_KEY = '3b1f7c9e5a2d4f8c6e1b9a7d3c5f2e8a6d4b1c9f7e3a5d2c8b6f1a9e4c7d3b5f';
$WEBSITE_TEXTS = [];
$TEXTS_LOADED = false;

// Fetch texts from API
function loadWebsiteTexts() {
    global $API_KEY, $WEBSITE_TEXTS, $TEXTS_LOADED;
    
    $TEXTS_LOADED = true;
    
    // Use the external production API URL (not localhost to avoid deadlock with PHP built-in server)
    $base_url = 'https://coachedbyrutger.nl';
    $api_url = $base_url . '/api/api.php?key=' . urlencode($API_KEY) . '&type=texts';
    
    $context = stream_context_create([
        'http' => ['timeout' => 2],
        'ssl' => ['verify_peer' => false, 'verify_peer_name' => false]
    ]);
    $response = @file_get_contents($api_url, false, $context);
    
    if ($response === false) {
        return [];
    }
    
    $data = json_decode($response, true);
    
    if (!$data || $data['status'] !== 'success' || !isset($data['texts'])) {
        return [];
    }
    
    // Index texts by db_key for easy lookup
    $indexed = [];
    foreach ($data['texts'] as $text) {
        $key = $text['db_key'];
        $indexed[$key] = $text;
    }
    
    $WEBSITE_TEXTS = $indexed;
    return $indexed;
}

/**
 * Get text by database key
 * 
 * @param string $key The db_key from the database (e.g., 'hero.hero_eyebrow')
 * @param string $fallback Default text if key not found
 * @return string The text value
 */
function t($key, $fallback = '') {
    global $WEBSITE_TEXTS, $TEXTS_LOADED;
    
    if (!$TEXTS_LOADED) {
        loadWebsiteTexts();
    }
    
    if (isset($WEBSITE_TEXTS[$key])) {
        $text = $WEBSITE_TEXTS[$key];
        
        // Check if text is hidden
        if ($text['is_hidden']) {
            return '';
        }
        
        return $text['text_nl'] ?? $fallback;
    }
    
    return $fallback;
}

/**
 * Check if a text element should be shown
 * 
 * @param string $key The db_key
 * @return bool True if visible, false if hidden
 */
function isVisible($key) {
    global $WEBSITE_TEXTS, $TEXTS_LOADED;
    
    if (!$TEXTS_LOADED) {
        loadWebsiteTexts();
    }
    
    if (isset($WEBSITE_TEXTS[$key])) {
        return !$WEBSITE_TEXTS[$key]['is_hidden'];
    }
    
    return true; // Default to visible if not found
}

/**
 * Load testimonials from the API (testimonials table)
 * 
 * @return array List of testimonials
 */
function loadTestimonials() {
    global $API_KEY;
    
    // Fallback testimonials
    $fallback = [
        [
            'client_name' => 'Linda',
            'client_title' => '38 jaar · 6 maanden traject',
            'quote' => '"Na jaren van diëten en frustratie heb ik eindelijk geleerd om naar mijn lichaam te luisteren. De Kaizen-aanpak werkt echt. Kleine stappen, maar ik voel me beter dan ooit."',
            'rating' => 5
        ],
        [
            'client_name' => 'Marieke',
            'client_title' => '31 jaar · 6 maanden traject',
            'quote' => '"Rutger legt alles zo helder uit. Voor het eerst begrijp ik waarom mijn energie zo schommelde. De combinatie van voeding en cyclusbewustzijn heeft alles veranderd."',
            'rating' => 5
        ],
        [
            'client_name' => 'Sophie',
            'client_title' => '35 jaar · 6 maanden traject',
            'quote' => '"Geen strenge regels, geen schuldgevoel. Gewoon een aanpak die past bij mijn drukke leven als moeder. De wekelijkse check-ins houden me op koers."',
            'rating' => 5
        ]
    ];
    
    try {
        $base_url = 'https://coachedbyrutger.nl';
        $api_url = $base_url . '/api/api.php?key=' . urlencode($API_KEY) . '&type=testimonials';
        
        $context = stream_context_create([
            'http' => ['timeout' => 2],
            'ssl' => ['verify_peer' => false, 'verify_peer_name' => false]
        ]);
        $response = @file_get_contents($api_url, false, $context);
        
        if ($response !== false) {
            $data = json_decode($response, true);
            if ($data && isset($data['status']) && $data['status'] === 'success' && !empty($data['testimonials'])) {
                return $data['testimonials'];
            }
        }
    } catch (Exception $e) {
        // API niet beschikbaar, gebruik fallback
    }
    
    return $fallback;
}

// Pre-load texts
loadWebsiteTexts();
?>
