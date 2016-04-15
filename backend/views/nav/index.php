<div class="site-index">

    <article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-yii2-widget-sidenav" class="anchor" href="#yii2-widget-sidenav" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" role="img" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>yii2-widget-sidenav</h1>

        <p><a href="https://packagist.org/packages/kartik-v/yii2-widget-sidenav"><img src="https://camo.githubusercontent.com/ea3b552a621b2b196e14dc5348f88b7c002a4112/68747470733a2f2f706f7365722e707567782e6f72672f6b617274696b2d762f796969322d7769646765742d736964656e61762f762f737461626c65" alt="Latest Stable Version" data-canonical-src="https://poser.pugx.org/kartik-v/yii2-widget-sidenav/v/stable" style="max-width:100%;"></a>
            <a href="https://packagist.org/packages/kartik-v/yii2-widget-sidenav"><img src="https://camo.githubusercontent.com/f9145fc5c57ef14857baf34f533373d2f3fe8993/68747470733a2f2f706f7365722e707567782e6f72672f6b617274696b2d762f796969322d7769646765742d736964656e61762f6c6963656e7365" alt="License" data-canonical-src="https://poser.pugx.org/kartik-v/yii2-widget-sidenav/license" style="max-width:100%;"></a>
            <a href="https://packagist.org/packages/kartik-v/yii2-widget-sidenav"><img src="https://camo.githubusercontent.com/2d313e69f0f92ea65dd41fa2a1de537d8d13cb8d/68747470733a2f2f706f7365722e707567782e6f72672f6b617274696b2d762f796969322d7769646765742d736964656e61762f646f776e6c6f616473" alt="Total Downloads" data-canonical-src="https://poser.pugx.org/kartik-v/yii2-widget-sidenav/downloads" style="max-width:100%;"></a>
            <a href="https://packagist.org/packages/kartik-v/yii2-widget-sidenav"><img src="https://camo.githubusercontent.com/1f6f7f111015ac4fdf83b79ffac19ed4b26324ca/68747470733a2f2f706f7365722e707567782e6f72672f6b617274696b2d762f796969322d7769646765742d736964656e61762f642f6d6f6e74686c79" alt="Monthly Downloads" data-canonical-src="https://poser.pugx.org/kartik-v/yii2-widget-sidenav/d/monthly" style="max-width:100%;"></a>
            <a href="https://packagist.org/packages/kartik-v/yii2-widget-sidenav"><img src="https://camo.githubusercontent.com/6234b6492f12d38721a7b90d80b3ffdf10a31128/68747470733a2f2f706f7365722e707567782e6f72672f6b617274696b2d762f796969322d7769646765742d736964656e61762f642f6461696c79" alt="Daily Downloads" data-canonical-src="https://poser.pugx.org/kartik-v/yii2-widget-sidenav/d/daily" style="max-width:100%;"></a></p>

        <p>This widget is a collapsible side navigation menu built to seamlessly work with Bootstrap framework. It is built over Bootstrap <a href="http://getbootstrap.com/components/#nav-pills">stacked nav</a> component. This widget class extends the <a href="https://github.com/yiisoft/yii2/blob/master/framework/widgets/Menu.php">Yii Menu widget</a>. Upto 3 levels of submenus are by default supported by the CSS styles to balance performance and useability. You can choose to extend it to more or less levels by customizing the <a href="https://github.com/kartik-v/yii2-widgets/blob/master/assets/css/sidenav.css">CSS</a>. </p>

        <blockquote>
            <p>NOTE: This extension is a sub repo split of <a href="https://github.com/kartik-v/yii2-widgets">yii2-widgets</a>. The split has been done since 08-Nov-2014 to allow developers to install this specific widget in isolation if needed. One can also use the extension the previous way with the whole suite of <a href="http://demos.krajee.com/widgets">yii2-widgets</a>.</p>
        </blockquote>

        <h2><a id="user-content-installation" class="anchor" href="#installation" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" role="img" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Installation</h2>

        <p>The preferred way to install this extension is through <a href="http://getcomposer.org/download/">composer</a>. Check the <a href="https://github.com/kartik-v/yii2-widget-sidenav/blob/master/composer.json">composer.json</a> for this extension's requirements and dependencies. Read this <a href="http://webtips.krajee.com/setting-composer-minimum-stability-application/">web tip /wiki</a> on setting the <code>minimum-stability</code> settings for your application's composer.json.</p>

        <p>To install, either run</p>

<pre><code>$ php composer.phar require kartik-v/yii2-widget-sidenav "*"
    </code></pre>

        <p>or add</p>

<pre><code>"kartik-v/yii2-widget-sidenav": "*"
    </code></pre>

        <p>to the <code>require</code> section of your <code>composer.json</code> file.</p>

        <h2><a id="user-content-latest-release" class="anchor" href="#latest-release" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" role="img" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Latest Release</h2>

        <blockquote>
            <p>NOTE: The latest version of the module is v1.0.0 released on 08-Nov-2014. Refer the <a href="https://github.com/kartik-v/yii2-widget-sidenav/blob/master/CHANGE.md">CHANGE LOG</a> for details.</p>
        </blockquote>

        <h2><a id="user-content-demo" class="anchor" href="#demo" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" role="img" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Demo</h2>

        <p>You can refer detailed <a href="http://demos.krajee.com/widget-details/sidenav">documentation and demos</a> on usage of the extension.</p>

        <h2><a id="user-content-usage" class="anchor" href="#usage" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" role="img" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Usage</h2>

        <div class="highlight highlight-text-html-php"><pre><span class="pl-s1"><span class="pl-k">use</span> <span class="pl-c1">kartik\sidenav\SideNav</span>;</span>
<span class="pl-s1"></span>
<span class="pl-s1"><span class="pl-c1">echo</span> <span class="pl-c1">SideNav</span><span class="pl-k">::</span>widget([</span>
<span class="pl-s1">    <span class="pl-s"><span class="pl-pds">'</span>type<span class="pl-pds">'</span></span> <span class="pl-k">=&gt;</span> <span class="pl-c1">SideNav</span><span class="pl-k">::</span><span class="pl-c1">TYPE_DEFAULT</span>,</span>
<span class="pl-s1">    <span class="pl-s"><span class="pl-pds">'</span>heading<span class="pl-pds">'</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">'</span>Options<span class="pl-pds">'</span></span>,</span>
<span class="pl-s1">    <span class="pl-s"><span class="pl-pds">'</span>items<span class="pl-pds">'</span></span> <span class="pl-k">=&gt;</span> [</span>
<span class="pl-s1">        [</span>
<span class="pl-s1">            <span class="pl-s"><span class="pl-pds">'</span>url<span class="pl-pds">'</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">'</span>#<span class="pl-pds">'</span></span>,</span>
<span class="pl-s1">            <span class="pl-s"><span class="pl-pds">'</span>label<span class="pl-pds">'</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">'</span>Home<span class="pl-pds">'</span></span>,</span>
<span class="pl-s1">            <span class="pl-s"><span class="pl-pds">'</span>icon<span class="pl-pds">'</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">'</span>home<span class="pl-pds">'</span></span></span>
<span class="pl-s1">        ],</span>
<span class="pl-s1">        [</span>
<span class="pl-s1">            <span class="pl-s"><span class="pl-pds">'</span>label<span class="pl-pds">'</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">'</span>Help<span class="pl-pds">'</span></span>,</span>
<span class="pl-s1">            <span class="pl-s"><span class="pl-pds">'</span>icon<span class="pl-pds">'</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">'</span>question-sign<span class="pl-pds">'</span></span>,</span>
<span class="pl-s1">            <span class="pl-s"><span class="pl-pds">'</span>items<span class="pl-pds">'</span></span> <span class="pl-k">=&gt;</span> [</span>
<span class="pl-s1">                [<span class="pl-s"><span class="pl-pds">'</span>label<span class="pl-pds">'</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">'</span>About<span class="pl-pds">'</span></span>, <span class="pl-s"><span class="pl-pds">'</span>icon<span class="pl-pds">'</span></span><span class="pl-k">=&gt;</span><span class="pl-s"><span class="pl-pds">'</span>info-sign<span class="pl-pds">'</span></span>, <span class="pl-s"><span class="pl-pds">'</span>url<span class="pl-pds">'</span></span><span class="pl-k">=&gt;</span><span class="pl-s"><span class="pl-pds">'</span>#<span class="pl-pds">'</span></span>],</span>
<span class="pl-s1">                [<span class="pl-s"><span class="pl-pds">'</span>label<span class="pl-pds">'</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">'</span>Contact<span class="pl-pds">'</span></span>, <span class="pl-s"><span class="pl-pds">'</span>icon<span class="pl-pds">'</span></span><span class="pl-k">=&gt;</span><span class="pl-s"><span class="pl-pds">'</span>phone<span class="pl-pds">'</span></span>, <span class="pl-s"><span class="pl-pds">'</span>url<span class="pl-pds">'</span></span><span class="pl-k">=&gt;</span><span class="pl-s"><span class="pl-pds">'</span>#<span class="pl-pds">'</span></span>],</span>
<span class="pl-s1">            ],</span>
<span class="pl-s1">        ],</span>
<span class="pl-s1">    ],</span>
<span class="pl-s1">]);</span></pre></div>

        <h2><a id="user-content-license" class="anchor" href="#license" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" role="img" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>License</h2>

        <p><strong>yii2-widget-sidenav</strong> is released under the BSD 3-Clause License. See the bundled <code>LICENSE.md</code> for details.</p>
    </article>

</div>