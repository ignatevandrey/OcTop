<!DOCTYPE html>
<html lang="ru">
<head>
    <title>{$meta->title}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1">
    <meta name="description" content="{$meta->description}">
    <meta name="keywords" content="{$meta->keywords}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{$meta->url}">
    <meta property="og:title" content="{$meta->title}">
    <meta property="og:description" content="{$meta->description}">
    <meta property="og:image" content="{$meta->image}">

    <link rel="canonical" href="{$meta->url}">
    
    <!-- Подключаю ЯндексКарты -->
    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

    {include "views/favicons.tpl"}

    <style>
        @font-face {
        font-family: 'Raleway';
        font-weight: 700;
        font-style: normal;
        font-display: swap;
        src: url('/fonts/Raleway-ExtraBold.woff2') format('woff2'),
        url('/fonts/Raleway-ExtraBold.woff') format('woff');
        }

        @font-face {
            font-family: 'Raleway';
            font-weight: 400;
            font-style: normal;
            font-display: swap;
            src: url('/fonts/Raleway-Medium.woff2') format('woff2'),
            url('/fonts/Raleway-Medium.woff') format('woff');
        }

        @font-face {
            font-family: 'Raleway';
            font-weight: 300;
            font-style: normal;
            font-display: swap;
            src: url('/fonts/Raleway-Regular.woff2') format('woff2'),
            url('/fonts/Raleway-Regular.woff') format('woff');
        }

        @font-face {
            font-family: 'Montserrat';
            font-weight: 400;
            font-style: normal;
            font-display: swap;
            src: url('/fonts/Montserrat-Medium.woff2') format('woff2'),
            url('/fonts/Montserrat-Medium.woff') format('woff');
        }

        @font-face {
            font-family: 'Gilroy';
            font-weight: 400;
            font-style: normal;
            font-display: swap;
            src: url('/fonts/Gilroy-Regular.woff2') format('woff2'),
            url('/fonts/Gilroy-Regular.woff') format('woff');
        }
    </style>

    {$common_styles}

    {if !empty($page->styles)}
        {$page->styles}
    {/if}

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "url": "{$meta->url}",
            "name": "{$meta->title}",
            "image": "{$meta->image}",
            "description": "{$meta->description}",
            "telephone": "{$phone->title}",
            "email": "{$email->title}",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "г. Анапа",
                "streetAddress": "",
                "postalCode": ""
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "sales",
                "name": "Менеджер",
                "telephone": "{$phone->title}"
            }
        }
    </script>

    {$inline_scripts}
</head>
<body class="page page-{$page->name}">

{include "blocks/header.tpl"}

<main class="page__main page__main-{$page->name}">
    {block main}{/block}
</main>

{include "blocks/footer.tpl"}

<div class="intopModal__wrap">
    {include "modal/alert.tpl" eng="alert" close_color="black" class="bg-green"}
    {include "modal/thanks.tpl" eng="thanks" close_color="white" class="bg-white"}
    {include "modal/request.tpl" eng="request" close_color="white" class="bg-green"}
    {include "modal/privacy.tpl" eng="privacy" close_color="black" class="bg-green"}
</div>

{$vendor_scripts}
<script>
    var $body = $("body");
</script>
{$common_scripts}

{if !empty($page->scripts)}
    {$page->scripts}
{/if}

</body>
</html>
