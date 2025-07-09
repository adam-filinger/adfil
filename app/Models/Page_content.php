<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Page_content
{

    public static $content = [
        'home' => '<p>Welcome to my portfolio! I am a web developer with a passion for creating beautiful and functional websites.</p>',
        'about' => '<p>Welcome to my personal page. Here you can find information about me, my work, and how to contact me.</p>
    <p>This page is built using Laravel and Vue.js, showcasing my skills in modern web development.</p>
    <p>Feel free to explore the different sections to learn more about my projects, interests, and how to get in touch with me.</p>
    <p>Thank you for visiting!</p>',
        'contact' => '<p>Feel free to reach out to me via email or through my social media channels. I look forward to hearing from you!</p>'
    ];

    public static function getContent($page)
    {
        return Arr::get(static::$content, $page, 'Page not found');
    }

}
