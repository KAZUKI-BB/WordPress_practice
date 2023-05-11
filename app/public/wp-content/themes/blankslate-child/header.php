<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body<?php wp_head(); ?>>
    <header id="header">
        <img id="head_img" src="<?php echo get_theme_file_uri('/img/img_head.png'); ?>" alt="">
        <nav id="header_nav">
            <a href="/m4">ホーム</a>
            <a href="/contact">お知らせ</a>
            <a href="/company">お問い合わせ</a>
            <a href="/tiket">チケット購入</a>
        </nav>
    </header>
<?php wp_body_open(); ?>