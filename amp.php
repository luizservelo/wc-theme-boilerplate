<!doctype html>
<html lang="pt-br" amp>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

        <title><?= $SEO->getTitle(); ?></title>

        <meta name="description" content="<?= $SEO->getDescription(); ?>"/>
        <meta name="robots" content="index, follow"/>
        <meta name="theme-color" content="#2196F3">

        <link rel="base" href="<?= BASE; ?>"/>
        <link rel="canonical" href="<?= BASE; ?>/<?= str_replace('/amp', '', $getURL); ?>"/>
        <link rel="alternate" type="application/rss+xml" href="<?= BASE; ?>/rss.xml"/>
        <link rel="sitemap" type="application/xml" href="<?= BASE; ?>/sitemap.xml" />
        <?php
        if (SITE_SOCIAL_GOOGLE):
            echo '<link rel="author" href="https://plus.google.com/' . SITE_SOCIAL_GOOGLE_AUTHOR . '/posts"/>';
            echo '        <link rel="publisher" href="https://plus.google.com/' . SITE_SOCIAL_GOOGLE_PAGE . '"/>';
        endif;
        ?>

        <meta itemprop="name" content="<?= $SEO->getTitle(); ?>"/>
        <meta itemprop="description" content="<?= $SEO->getDescription(); ?>"/>
        <meta itemprop="image" content="<?= $SEO->getImage(); ?>"/>
        <meta itemprop="url" content="<?= BASE; ?>/<?= str_replace('/amp', '', $getURL); ?>"/>

        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?= $SEO->getTitle(); ?>" />
        <meta property="og:description" content="<?= $SEO->getDescription(); ?>" />
        <meta property="og:image" content="<?= $SEO->getImage(); ?>" />
        <meta property="og:url" content="<?= BASE; ?>/<?= str_replace('/amp', '', $getURL); ?>" />
        <meta property="og:site_name" content="<?= SITE_NAME; ?>" />
        <meta property="og:locale" content="pt_BR" />
        <?php
        if (SITE_SOCIAL_FB):
            if (SITE_SOCIAL_FB_APP):
                echo '<meta property="og:app_id" content="' . SITE_SOCIAL_FB_APP . '" />' . "\r\n";
            endif;
            echo '        <meta property="article:author" content="https://www.facebook.com/' . SITE_SOCIAL_FB_AUTHOR . '" />';
            echo '        <meta property="article:publisher" content="https://www.facebook.com/' . SITE_SOCIAL_FB_PAGE . '" />';

            if (SEGMENT_FB_PAGE_ID):
                echo '      <meta property="fb:pages" content="' . SEGMENT_FB_PAGE_ID . '" />';
            endif;
        endif;
        ?>

        <meta property="twitter:card" content="summary_large_image" />
        <?php
        if (SITE_SOCIAL_TWITTER):
            echo '<meta property="twitter:site" content="@' . SITE_SOCIAL_TWITTER . '" />';
        endif;
        ?>
        <meta property="twitter:domain" content="<?= BASE; ?>" />
        <meta property="twitter:title" content="<?= $SEO->getTitle(); ?>" />
        <meta property="twitter:description" content="<?= $SEO->getDescription(); ?>" />
        <meta property="twitter:image" content="<?= $SEO->getImage(); ?>" />
        <meta property="twitter:url" content="<?= BASE; ?>/<?= str_replace('/amp', '', $getURL); ?>" />  

        <link rel="shortcut icon" href="<?= INCLUDE_PATH; ?>/favicon.png"/>

        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
        <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
        <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
        <script async custom-element="amp-user-notification" src="https://cdn.ampproject.org/v0/amp-user-notification-0.1.js"></script>
        <script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
        <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.1.js"></script>

        <script type="application/ld+json">
            {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": "<?= BASE; ?>/<?= str_replace('/amp', '', $getURL); ?>",
            "headline": "<?= $SEO->getTitle(); ?>",
            "datePublished": "<?= date('D, d M Y H:i:s O', strtotime($SEO->getData())); ?>",
            "dateModified": "<?= date('D, d M Y H:i:s O', strtotime($SEO->getData())); ?>",
            "description": "<?= $SEO->getDescription(); ?>", 
            "author": {
            "@type": "Person",
            "name": "<?= ADMIN_NAME; ?>"
            },
            "publisher": {
            "@type": "Organization",
            "name": "<?= SITE_SOCIAL_NAME; ?>",
            "logo": {
            "@type": "ImageObject",
            "url": "<?= BASE; ?>/images/default.jpg",
            "width": 600,
            "height": 60
            }
            },
            "image": {
            "@type": "ImageObject",
            "url": "<?= $SEO->getImage(); ?>",
            "height": 1280,
            "width": 857
            }
            }
        </script>

        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>


        <style amp-custom>
            .content amp-img {max-width: 100%;}
            .title-bar div {max-width: 600px; margin: 0 auto;}

            .content {/*padding: 16px;*/ overflow-wrap: break-word; word-wrap: break-word; font-weight: 400; color: #333;}
            .title {margin: 16px 0 0 0; font-size: 36px; line-height: 1.258; font-weight: 700; color: #333; font-family: sans-serif;}

            .content h1:not(.title), .content h2, .content h3, .content h4, .content h5, .content h6 {color: #333; font-family: sans-serif;}
            .meta {margin-bottom: 16px;}

            p, ol, ul, figure {margin: 0 0 24px 0;}

            .meta, nav.title-bar, .wp-caption-text {font-family: sans-serif; font-size: 12px;}

            ul.meta li {
                list-style: none;
                display: inline-block;
                margin: 0 8px 0 0;
                line-height: 14px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                max-width: 300px;
                text-transform: uppercase;
            }

            .meta, .meta a {color: #4F748E;}

            /*
            .byline amp-img {
                border-radius: 50%;
                border: 0;
                background: #f3f6f8;
                position: relative;
                top: 6px;
                margin-right: 6px;
            }*/
            /* Header Image */

            .thumbnail>amp-img {width: 100%;}
            /* Titlebar */

            nav.title-bar {
                padding: 0 16px;
            }

            nav.title-bar {
                border-bottom-width: 1px;
                border-bottom-color: #444444;
                border-bottom-style: solid;
            }

            nav.title-bar div {
                color: #fff;
            }

            nav.title-bar a {
                text-decoration: none;
                color: #000;
            }

            nav.title-bar amp-img {
                margin: 20px 0px;
            }

            /* Quotes */

            blockquote {
                padding: 16px;
                padding-top: 0px;
                padding-bottom: 0px;
                margin: 8px 0 24px 0;
                border-left: 2px solid #333;
                color: #333;
                font-family: sans-serif;
            }

            blockquote p:last-child {
                margin-bottom: 0;
            }

            /* Other Elements */
            a,
            a:active,
            a:visited {
                text-decoration: underline;
            }


            /* outro */
            .hljs{display:block;padding:0;color:#333;height:100%;}
            .hljs-comment, .hljs-quote{color:#998;font-style:italic;} 
            .hljs-keyword, .hljs-selector-tag, .hljs-subst{color:#333;} 
            .hljs-literal, .hljs-number, .hljs-tag .hljs-attr, .hljs-template-variable, .hljs-variable{color:teal;} 
            .hljs-doctag, .hljs-string{color:#D14;} 
            .hljs-section, .hljs-selector-id, .hljs-title{color:#900; font-weight:700;} 
            .hljs-subst{font-weight:400;} 
            .hljs-class .hljs-title, .hljs-type{color:#458; font-weight:700;} 
            .hljs-attribute, .hljs-name, .hljs-tag{color:navy; font-weight:400;} 
            .hljs-meta, .hljs-strong{font-weight:700;} 
            .hljs-link, .hljs-regexp{color:#009926;} 
            .hljs-bullet, .hljs-symbol{color:#990073;} 
            .hljs-built_in, .hljs-builtin-name{color:#0086b3;} 
            .hljs-meta{color:#999} .hljs-deletion{background:#fdd;} 
            .hljs-addition{background:#dfd;} 
            .hljs-emphasis{font-style:italic;} 

            blockquote, h1{line-height:1.35} 
            address,h5{line-height:1} 
            html{color:rgba(0,0,0,.87)}

            ::-moz-selection{background:#B3D4FC; text-shadow:none;}
            ::selection{background:#B3D4FC; text-shadow:none;} 

            hr{display:block; height:1px; border:0; border-top:1px solid #CCC; margin:1em 0; padding:0} 

            audio, canvas, iframe, img, svg, video{vertical-align:middle;}
            fieldset{border:0; margin:0; padding:0} 
            textarea{resize:vertical} 

            .browserupgrade{margin:.2em 0; background:#CCC; color:#000; padding:.2em 0}
            .hidden{display:none} 
            .visuallyhidden{border:0; clip:rect(0 0 0 0); height:1px; margin:-1px; overflow: hidden; padding:0; position:absolute; width:1px;} 
            .visuallyhidden.focusable:active, .visuallyhidden.focusable:focus{clip:auto; height:auto; margin:0; overflow:visible; position:static; width:auto;}

            body, html{width:100%;}
            .invisible{visibility:hidden;}
            .clearfix:after,.clearfix:before{content:" "; display:table;} 
            .clearfix:after{clear:both;}

            @media print{
                blockquote, img, pre, tr{page-break-inside:avoid;} 
                *,:after,:before,:first-letter,:first-line{background:0 0; color:#000; box-shadow:none; text-shadow:none;}
                a,a:visited{text-decoration:underline;}
                a[href]:after{content:" (" attr(href) ")";}
                abbr[title]:after{content:" (" attr(title) ")";}
                a[href^="#"]:after, a[href^="javascript:"]:after{content:"";}
                blockquote, pre{border:1px solid #999} 
                thead{display:table-header-group;} 
                img{max-width:100%} 
                h2, h3, p{orphans:3;widows:3;}
                h2,h3{page-break-after:avoid}}

            .mdl-accordion, .mdl-button, .mdl-card, .mdl-checkbox, .mdl-dropdown-menu, .mdl-icon-toggle, .mdl-item, .mdl-radio, .mdl-slider, 
            .mdl-switch, .mdl-tabs__tab, a{-webkit-tap-highlight-color:transparent;-webkit-tap-highlight-color:rgba(255,255,255,0);}
            html{height:100%; -ms-touch-action:manipulation; touch-action:manipulation;} 
            body{min-height:100%;margin:0;} 
            main{display:block;}
            [hidden]{display:none}
            body, html{font-family:Helvetica, Arial, sans-serif; font-size:14px; font-weight:400; line-height:20px;}
            h1, h2, h3, h4, h5, h6, p{margin:0;padding:0;}
            h1, h2, h3{margin-bottom:24px; font-weight:400;} 
            h4, h5, h6{margin-top:24px; margin-bottom:16px;} 
            h1 small, h2 small, h3 small, h4 small, h5 small, h6 small{font-weight:400; line-height:1.35; letter-spacing:-.02em; opacity:.54; font-size:.6em}
            h1{font-size:56px; letter-spacing:-.02em; margin-top:24px;}
            h2{font-size:45px; line-height:48px; margin-top:24px;}
            h3{font-size:34px; line-height:40px; margin-top:24px}
            h4{font-size:24px; font-weight:400; line-height:32px; -moz-osx-font-smoothing:grayscale;} 
            h5{font-size:20px; font-weight:500; letter-spacing:.02em;} 
            h6, p{font-weight:400; line-height:24px;} 
            h6{font-size:16px; letter-spacing:.04em;}
            p{font-size:14px; letter-spacing:0; margin-bottom:8px;}
            a{color:#ff4081; font-weight:500;} 
            blockquote{position:relative; font-size:24px; font-weight:300; font-style:italic; letter-spacing:.08em} 
            blockquote:before{position:absolute;left:-.5em;content:'“'}
            blockquote:after{content:'”';margin-left:-.05em}mark{background-color:#f4ff81}
            dt{font-weight:700}
            address,ol,ul{font-weight:400;letter-spacing:0}
            address{font-size:12px;font-style:normal}
            ol,ul{font-size:14px;line-height:24px}
            .button,body a,button{cursor:pointer;text-decoration:none}
            .anchor,.button,button{position:relative;vertical-align:middle}
            figure,ol,ul{margin:0;padding:0}
            body{background:#fafafa;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;min-height:100vh} 
            article,main{flex:1;width:100%}
            div.preview>a,figcaption,h1,h2,h3,h4,h5,h6,p{padding:0 16px}
            ol,ul{margin:0 16px;padding:16px}
            article{padding:0;max-width:2400px;margin:auto}
            article #title{text-align:center;margin:0;padding-top:24px;padding-bottom:24px}
            code,pre{background:#ECEFF1; padding: 20px;}
            .box,.doc,.doc pre,.doc pre>code{background-color:#fff}
            .box{clear:both;min-height:-webkit-min-content;min-height:-moz-min-content;min-height:min-content;display:flex;box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24)}
            .anchor-trigger:hover+.anchor,.doc amp-img{display:block}
            .column{flex:1;max-width:800px;margin:0 auto;width:0}
            .doc code{padding:1px 5px}
            .doc a{text-decoration:none}
            .code,code{background-color:#ECEFF1}
            .doc pre{padding:16px;margin:0}
            .doc amp-img{margin:0 auto}
            .anchor-trigger{float:left}
            .anchor-target{margin:0;padding:0}
            .anchor{left:-16px;top:30px;display:none}
            .anchor:hover{display:block}
            .anchor-img{background-image:-webkit-image-set(url(/img/ic_link_black_1x_web_18dp.png) 1x,url(/img/ic_link_black_2x_web_18dp.png) 2x);width:18px;height:18px}
            .code{padding-left:8px;padding-right:8px;padding-bottom:8px}
            pre{white-space:pre-wrap;margin:0;width:auto;line-height:20px;overflow-wrap:break-word}
            code{font-size:12px;font-family:Consolas,Menlo,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New,monospace,sans-serif}
            .preview{background-color:#CFD8DC}
            .button,button{background:0 0;border:none;border-radius:2px;height:36px;margin:0;min-width:64px;padding:0 16px;display:inline-block;font-family:Roboto,Helvetica,Arial,sans-serif;font-size:14px;font-weight:500;text-transform:uppercase;letter-spacing:0;will-change:box-shadow;transition:box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);outline:0;text-align:center;line-height:36px}
            section:not([expanded]).hidden-section,section[expanded].hidden-section{transition:all .3s cubic-bezier(.25,.8,.25,1)}
            .button-primary{color:#fff;background-color:#eb407a;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}
            .button-inactive{color:#666;background-color:#aaa;cursor:default}
            section[expanded].hidden-section{margin:8px 0;box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24)}
            .hidden-section .hidden-section-show-less,.hidden-section .hidden-section-show-more{padding-left:36px;font-size:14px;font-weight:400;text-transform:uppercase;background-position:left 0 center;background-repeat:no-repeat;transition:all .3s cubic-bezier(.25,.8,.25,1)}
            .amp-experiment,.amp-experiment-large,.amp-experiment-medium{background-position:100% center}
            section:not([expanded]).hidden-section .hidden-section-show-less,section[expanded].hidden-section .hidden-section-show-more{display:none}
            .hidden-section .hidden-section-show-less{background-image:-webkit-image-set(url(/img/ic_indeterminate_check_box_black_24dp_1x.png) 1x,url(/img/ic_indeterminate_check_box_black_24dp_2x.png) 2x)}
            .hidden-section .hidden-section-show-more{background-image:-webkit-image-set(url(/img/ic_add_box_black_24dp_1x.png) 1x,url(/img/ic_add_box_black_24dp_2x.png) 2x)}
            .hidden-section .code,.hidden-section .doc,.hidden-section .preview{line-height:40px;padding-bottom:0}
            .hidden-section-accordion .code pre.hljs{padding:8px 0}
            .hidden-section>header{padding:0;border:none;box-shadow:none}
            #experiment-container{display:flex;justify-content:space-between;flex-wrap:wrap}
            #canary-toggle,#experiment-toggle{padding:0;margin:0 auto;display:inline-block;width:160px}
            .amp-experiment-list span:not(:last-of-type)::after{content:", "}
            .amp-experiment{padding-right:24px;background-repeat:no-repeat;background-image:-webkit-image-set(url(/img/ic_experiment_black_1x_web_18dp.png) 1x,url(/img/ic_experiment_black_2x_web_18dp.png) 2x)}
            .amp-experiment-medium{padding-right:36px;background-repeat:no-repeat;background-image:-webkit-image-set(url(/img/ic_experiment_black_1x_web_24dp.png) 1x,url(/img/ic_experiment_black_2x_web_24dp.png) 2x)}
            .amp-experiment-large{padding-right:44px;background-repeat:no-repeat;background-image:-webkit-image-set(url(/img/ic_experiment_black_1x_web_36dp.png) 1x,url(/img/ic_experiment_black_2x_web_36dp.png) 2x)}
            .gist,.show-preview{background-position:right 8px center;background-repeat:no-repeat}.gist{background-image:url(/img/gist.png)}
            .show-preview{background-image:-webkit-image-set(url(/img/ic_play_circle_filled_black_1x_web_24dp.png) 1x,url(/img/ic_play_circle_filled_black_2x_web_24dp.png) 2x)}
            header{background-color:#607D8B;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);display:flex;flex-direction:column;align-items:center;justify-content:space-between}
            header #logo{align-self:flex-start;margin:0 auto;background-position:left center;background-repeat:no-repeat;height:62px;width:500px;background-image:url(/img/logo.svg)}
            header .button{margin-left:16px;padding:0;height:40px;min-width:40px;display:block;float:left}
            header .button>amp-img{margin:8px;float:left}
            header .button>span{display:inline-block;font-weight:300;line-height:40px;color:#fff;text-transform:uppercase}
            header #hamburger{align-self:flex-start;padding:8px;margin-left:8px;margin-top:4px}
            header #actions{max-width:50%;padding:0 16px;align-self:flex-start;margin-left:auto;margin-right:12px}
            #drawermenu{width:320px;background-color:#fff}
            #drawermenu amp-accordion{padding-bottom:24px}
            #drawermenu amp-accordion>*{-webkit-tap-highlight-color:#e5e5e5}
            #drawermenu .close{float:right;top:16px;margin-right:16px;cursor:pointer}
            #drawermenu .close:hover{background-color:#ccc}
            #drawermenu .expanded,#drawermenu .item a:active{background-color:#eee}
            #drawermenu .item a{color:#333;display:block;font-weight:400;letter-spacing:.1px;padding:10px 24px 10px 32px;white-space:nowrap;font-size:13px;-webkit-tap-highlight-color:#e5e5e5}
            .amp-mode-touch #drawermenu .item a{padding-top:18px;padding-bottom:17px}
            #drawermenu .item amp-img{margin-left:4px;vertical-align:text-bottom}
            #drawermenu .item .selected{font-weight:700;color:#eb407a}
            #drawermenu .category{padding-left:16px}
            #drawermenu .category a{color:#333}
            #drawermenu h4{font-weight:700;font-size:13px;padding:0;border:0;background-color:#fff;width:100%;line-height:40px}
            #drawermenu .topheader{margin-top:16px;margin-left:16px}
            #drawermenu .home{text-align:left;font-weight:500;font-size:16px;text-transform:uppercase;line-height:36px;color:rgba(0,0,0,.87);padding-left:0}
            footer ul,footer ul li a{margin:0;line-height:12px}
            #drawermenu section:not([expanded]) .show-less,#drawermenu section[expanded] .show-more{display:none}
            footer{background:#607D8B;padding-top:36px;padding-bottom:36px}
            footer ul{display:flex;flex-flow:row;justify-content:center;padding:0}
            footer li{display:block;padding:0 1em;border-left:1px solid #fff}
            .fab,footer ul li a{color:#fff;padding:0;cursor:pointer}
            footer ul li:first-child{border-left:none}
            footer ul li a{flex-flow:row wrap;justify-content:center;text-align:center;text-decoration:none;font-weight:400}.fab{position:fixed;bottom:5%;right:5%;z-index:1000;background:#eb407a;line-height:24px;border-radius:50%;height:56px;margin:auto;min-width:56px;width:56px;box-shadow:0 1px 1.5px 0 rgba(0,0,0,.12),0 1px 1px 0 rgba(0,0,0,.24);outline:0}
            .fab amp-img{vertical-align:middle;position:absolute;top:50%;left:50%;transform:translate(-12px,-12px);line-height:24px;width:24px}.card{box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);float:none;overflow:hidden;padding:8px;margin:16px;border-radius:2px;-webkit-tap-highlight-color:rgba(255,255,255,0)}
            .card h4{margin-top:0;padding:0}
            .card p{margin-top:8px;padding:0}
            a.card:active{opacity:.8;background-color:#e5e5e5}
            .info{background:#ccc}
            .important{background:#FFF9C4}
            .show-on-mobile{display:none}
            .hide-on-mobile{display:block}
            .hide{display:none}

            @media (max-width:700px){
                .hljs{padding:0 16px}
                article{padding:0}
            }

            @media (max-width:1024px){
                header .button>span,header .hide-on-mobile{display:none}
                .anchor-trigger,.doc{float:none}
                body{background:#fff}
                article #title{margin-top:56px;padding-bottom:0}
                header{height:56px;flex-direction:row;position:fixed;top:0;width:100%;z-index:1000}
                header #actions{padding:8px 16px;margin-right:0}
                header #hamburger{padding:8px;margin:0}
                header #logo{width:200px;margin:0;padding:0;align-self:center}
                .card{margin:16px}
                .column{flex:none;width:auto;max-width:1280px}
                .box{box-shadow:none;display:block;margin:0}
                .doc{padding:0;margin:0}
                .code{padding:8px;margin:16px 0}
                .preview{padding:0;margin:16px 0}
                .anchor-trigger:hover+.anchor,
                .hide-on-mobile{display:none}
                .show-on-mobile{display:block}
            }

            form{display:-webkit-flex;display:-ms-flexbox;display:flex;flex-flow:row wrap;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;padding:16px;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;margin:0;color:#616161}
            input[type=date],input[type=email],input[type=text]{display:block;font-family:Helvetica,Arial,sans-serif;margin:0 0 16px;width:100%;text-align:left;color:inherit;outline:0}
            .data-input{border:none;border-bottom:1px solid rgba(0,0,0,.12);font-size:16px;margin-bottom:16px;padding:4px 0;color:inherit;outline:0;background:0 0}
            .search-input{float:left;border:1px solid #ddd;height:43px;padding:0;font-size:20px}
            .search-input-submit{top:-61px;float:right;font-size:16px;margin-top:1px;background-color:#4285f4;height:43px}
            select{height:36px;line-height:36px;font-size:14px;margin:16px} 
            body{background:#f5f5f5;text-align:left}
            p{text-align:justify}
            article#preview{padding:1px 0 16px;background:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}
            #close-preview{padding:4px 0;text-align:right;background-color:#eb407a}
            #exit{color:#fff;background-position:right 4px center;background-repeat:no-repeat;background-image:-webkit-image-set(url(/img/ic_code_white_1x_web_24dp.png) 1x,url(/img/ic_code_white_2x_web_24dp.png) 2x);text-decoration:none;text-align:right;margin:0 8px;line-height:36px;min-width:64px;font-size:14px;font-weight:500;text-transform:uppercase;-webkit-tap-highlight-color:#d63e71;padding:8px 36px 8px 8px}
            #exit:active{background-color:#d63e71}
            #experiment-container{margin-bottom:8px}
            #close-preview,#experimental-mode,article#preview{max-width:740px;margin:0 auto;width:100%;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}
            figcaption,h1,h2,h3,h4,h5,h6,p{padding:0 16px}
            ol,ul{margin:16px;padding:0}
            figcaption{margin-top:8px;color:#656565;font-size:13px}
            amp-brightcove,amp-facebook,amp-iframe,amp-instagram,amp-twitter,amp-video,amp-vimeo,amp-vine,amp-youtube,daily-motion,figure{margin:24px 0}
            .amp-ad-container{background:#eee;border-top:.0625rem solid #dfdfdf;float:right;height:286px;width:316px;margin:16px;display:flex;flex-direction:column;justify-content:center;align-items:center}
            .amp-ad-container>span{position:relative;font-size:12px;top:-4px;left:8px;color:#666}

            @media (max-width:600px){
                article{top:0;margin-bottom:0}
                .amp-ad-container{background:#eee;float:none;width:100%;margin:16px 0}
            }

            amp-carousel{margin:10px 0 24px 0}
            amp-iframe{margin:0 -16px}

            .carousel .slide > amp-img > img {
                object-fit: contain;
            }

            .heading {
                padding-bottom: 8px;
            }
            .heading > #summary {
                font-weight: 500;
            }
            .heading > small {
                color: #656565;
            }
            .related {
                background-color: #f5f5f5;
                margin: 16px 16px;
                display: block;
                color: #111;
                height: 75px;
                padding: 0;
            }
            .related > span {
                font-size: 16px;
                line-height: 75px;
                font-weight: 400;
                vertical-align: top;
                margin: 8px;
            }
            .related:hover {
                background-color: #ccc;
            }
            amp-user-notification {
                padding: 8px;
                background: #bbb;
                text-align: center;
                color: white;
            }

            a {color: #0E96E5; text-decoration: underline;}

            a:hover, a:active, a:focus {color: #0073AA; text-decoration: underline;}
            .logo_header{text-align: center;}
        </style>
        <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    </head>
    <body>
        <article id="preview">
            <amp-analytics type="googleanalytics">
                <script type="application/json">
                    { "vars": { "account": "<?= SEGMENT_GL_ANALYTICS_UA; ?>" }, "triggers": { "trackPageview" : { "on": "visible", "request": "pageview" } } }
                </script>
            </amp-analytics>

            <?php
            if (!$Read):
                $Read = new Read;
            endif;

            $Read->ExeRead(DB_POSTS, "WHERE post_name = :nm AND post_status = 1 AND post_date <= NOW()", "nm={$URL[1]}");
            if (!$Read->getResult()):
                require REQUIRE_PATH . '/404.php';
                return;
            else:
                extract($Read->getResult()[0]);
                $Update = new Update;
                $UpdateView = ['post_views' => $post_views + 1, 'post_lastview' => date('Y-m-d H:i:s')];
                $Update->ExeUpdate(DB_POSTS, $UpdateView, "WHERE post_id = :id", "id={$post_id}");
            endif;


            /* Dados do Autor */
            $Read->ExeRead("ws_users", "WHERE user_id = :id ", "id={$post_author}");
            $aut = $Read->getResult()[0];
            ?>

            <nav class="title-bar">
                <div class="logo_header">
                    <a href="<?= BASE; ?>">
                        <amp-img src="<?= BASE; ?>/tim.php?src=<?= REQUIRE_PATH; ?>/images/workcontrol-vertical.png&w=400" width="400" height="57" class="site-icon"></amp-img>
                    </a>
                </div>
            </nav>

            <div class="thumbnail">
                <amp-img src="<?= BASE . '/uploads/' . $post_cover; ?>" layout="responsive" width="680" height="380"></amp-img>
            </div>

            <div class="content">
                <h1 class="title"><?= $post_title; ?></h1>

                <ul class="meta">
                    <li class="byline">
                        <span class="author"><?= $aut['user_name'] . ' ' . $aut['user_lastname']; ?></span>
                    </li>
                    <li class="posted-on">
                        <time datetime="<?= date('D, d M Y H:i:s O', strtotime($post_date)); ?>"><?= date('d/m/Y', strtotime($post_date)); ?></time>
                    </li>
                </ul>

                <p class="heading">
                <amp-social-share type="twitter" width="45" height="33"></amp-social-share>
                <amp-social-share type="facebook" width="45" height="33" data-param-app_id="<?= SITE_SOCIAL_FB_APP; ?>"></amp-social-share>
                <amp-social-share type="gplus" width="45" height="33"></amp-social-share>
                <amp-social-share type="email" width="45" height="33"></amp-social-share>
                </p>

                <?php

                function AmpProject($Content) {
                    // Resto
                    $Content = preg_replace('/<p><br><\/p>|<p><\/p>|<p> <\/p>|<p>&nbsp;<\/p>|<p lingdex="2"><br><\/p>|<p lingdex="3"><br><\/p>|<p lingdex="4"><br><\/p>|<p lingdex="5"><br><\/p>|<p lingdex="6"><br><\/p>|<p lingdex="7"><br><\/p>|<p lingdex="8"><br><\/p>|<p lingdex="9"><br><\/p>|<p lingdex="10"><br><\/p>|<p lingdex="11"><br><\/p>|<p lingdex="12"><br><\/p>|<p lingdex="13"><br><\/p>/', '', $Content);

                    $Content = preg_replace('#<span.*?>(.*?)</span>#i', '$1', $Content);
                    $Content = preg_replace('#<p.*?>(.*?)</p>#i', '<p>$1</p>', $Content);

                    $Content = str_replace(
                            array('src="//www.youtube.com', 'src="//', "src='//", 'http://'), array('src="https://www.youtube.com', 'src="http://', 'src="http://', 'https://'), $Content);

                    // Remove a TAG img e pega só o src
                    $Content = preg_replace('/<img (?:.*?)src=(?:"|\'){1}(.*?)(?:"|\'){1}.*?>/is', '<figure><amp-img src="$1" width=1280 height=768 layout=responsive></amp-img></figure>', $Content);

                    // Remove a TAG iframe e pega só o src
                    $Content = preg_replace('/<iframe.*?src=[\'"](.*?)[\'"].*?<\/iframe>/si', '<amp-iframe width="500" height="281" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" allowfullscreen frameborder="0" src="$1"></amp-iframe>', $Content);


                    return $Content;
                }

                echo AmpProject($post_content);
                ?>

                <!-- galeria -->
                <?php
                $Read->ExeRead("ws_posts_images", "WHERE post_id = :postid", "postid={$post_id}");
                if ($Read->getResult()):
                    ?>
                    <h4>Galeria do Artigo</h4>
                    <amp-carousel width="1280" height="970" layout="responsive" type="slides">
                        <?php
                        $gb = 0;
                        foreach ($Read->getResult() as $gallery):
                            $gb++;
                            extract($gallery);
                            ?>
                            <amp-img src="<?= BASE; ?>/uploads/<?= $image; ?>" width="1280" height="960" layout="responsive" attribution="<?= BASE; ?>"></amp-img>
                            <?php
                        endforeach;
                        ?>
                    </amp-carousel>
                <?php endif; ?>
            </div>

        </article>
    </body>
</html>