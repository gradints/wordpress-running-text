<?php
require_once 'utils.php';
use function Running_Text\Utility\{feature_absolute_dir, feature_dir};

add_shortcode('running_text', function($atts) {
    // Custom Slider CSS & JS
    wp_enqueue_style('running_text-style', feature_dir('running_text.css'), array (), filemtime(feature_absolute_dir('running_text.css')));
    wp_enqueue_script('running_text-script', feature_dir('running_text.js'), array (), filemtime(feature_absolute_dir('running_text.js')), true);
    
    $attr = shortcode_atts([
        'text' => 'Lets Discuss Today! Are You Interested?',
        'toggle' => ''
    ], $atts);
    ob_start();
    ?>
    <div class="move-container" data-toggle="<?= $attr['toggle'] ?>">
        <div class="move-wrapper">
            <div class="move-element"></div>
            <div class="text-scroll-wrapper">
                <p class="mb-0 text-scroll text-white"><?= $attr['text'] ?></p>
                <p class="mb-0 text-scroll text-white"><?= $attr['text'] ?></p>
                <p class="mb-0 text-scroll text-white"><?= $attr['text'] ?></p>
                <p class="mb-0 text-scroll text-white"><?= $attr['text'] ?></p>
            </div>
        </div>
    </div>
    <?php
    $res = ob_get_contents();
    ob_end_clean();
    return $res;
});