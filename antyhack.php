<?php
function antyhack($input)
{
    $search = array(
        '@<script[^>]*?>.*?</script>@si',   // Javascript tag
        '@<[\/\!]*?[^<>]*?>@si',            // HTML tags
        '@<style[^>]*?>.*?</style>@siU',    // Style tags
        '@<![\s\S]*?--[ \t\n\r]*>@'         // Multi-line
    );

    $output = preg_replace($search, '', $input);
    return $output;
}
