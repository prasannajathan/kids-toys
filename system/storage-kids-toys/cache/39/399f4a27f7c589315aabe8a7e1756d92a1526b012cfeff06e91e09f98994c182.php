<?php

/* journal3/template/common/header.twig */
class __TwigTemplate_5422deacc169f7a63f5d40894545d06d9acba2d9526c496eeb2b75b2b1598295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ( !array_key_exists("j3", $context)) {
            // line 2
            echo "  <style>
    body {
      display: none !important;
    }
  </style>
  <script>
    window.location = 'index.php?route=journal3/startup/error';
  </script>
";
        }
        // line 11
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 12
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"";
        echo twig_join_filter($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getClasses", array(), "method"), " ");
        echo "\" data-jv=\"";
        echo ((array_key_exists("j3", $context)) ? (twig_constant("JOURNAL3_VERSION")) : (""));
        echo "\" data-ov=\"";
        echo twig_constant("VERSION");
        echo "\">
<head typeof=\"og:website\">
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 17
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 18
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 19
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 20
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 22
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 23
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 25
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/seo/meta_tags"), "method"));
            foreach ($context['_seq'] as $context["key"] => $context["tag"]) {
                // line 27
                echo "<meta ";
                echo $this->getAttribute($context["tag"], "type", array());
                echo "=\"";
                echo $context["key"];
                echo "\" content=\"";
                echo $this->getAttribute($context["tag"], "content", array());
                echo "\"/>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 30
        echo "<script>window['Journal'] = ";
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getJs", array(), "method"));
        echo ";</script>
";
        // line 31
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 32
            echo "<script>";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/mql"), "method");
            echo "</script>
";
        }
        // line 34
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasFonts", array(), "method")) {
            // line 35
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceAsyncFontsStatus"), "method")) {
                // line 36
                echo "<script>WebFontConfig = { google: { families: ";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getFonts", array(0 => true), "method");
                echo " } };</script>
";
            } else {
                // line 38
                echo "<link href=\"https://fonts.googleapis.com/css?family=";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getFonts", array(0 => false), "method");
                echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
            }
        }
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getStyles", array(0 => (isset($context["styles"]) ? $context["styles"] : null)), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 42
            if ($this->getAttribute($context["style"], "content", array())) {
                // line 43
                echo "<style>";
                echo $this->getAttribute($context["style"], "content", array());
                echo "</style>
";
            } else {
                // line 45
                echo "<link href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "staticUrl", array(0 => $this->getAttribute($context["style"], "href", array()), 1 => false), "method");
                echo "\" type=\"text/css\" rel=\"";
                echo $this->getAttribute($context["style"], "rel", array());
                echo "\" media=\"all\" />
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 49
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 52
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "<style>
";
        // line 55
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getCss", array(), "method");
        echo "
</style>
";
        // line 57
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "customCSS"), "method")) {
            // line 58
            echo "<style>";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "customCSS"), "method");
            echo "</style>
";
        }
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getScripts", array(0 => "header", 1 => (isset($context["scripts"]) ? $context["scripts"] : null)), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 61
            echo "<script src=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "staticUrl", array(0 => $context["script"], 1 => false), "method");
            echo "\" ";
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceJSDefer"), "method")) {
                echo " defer ";
            }
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "customCodeHeader"), "method")) {
            // line 64
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "customCodeHeader"), "method");
            echo "
";
        }
        // line 66
        echo "</head>
<body class=\"";
        // line 67
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\" ";
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isMobile", array(), "method")) {
            echo "ontouchstart";
        }
        echo ">

";
        // line 69
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserStatus"), "method")) {
            // line 70
            echo "<div class=\"old-browser\">
  <div class=\"ob-content\">
    <h2 class=\"ob-title\">";
            // line 72
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserTitle"), "method");
            echo "</h2>
    <span class=\"ob-text\">";
            // line 73
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserText"), "method");
            echo "</span>
    <div class=\"ob-links\">
      <a href=\"https://www.google.com/chrome/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 76
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserChrome"), "method");
            echo "\" alt=\"Chrome\" />
        <span class=\"ob-name\">Chrome</span>
      </a>
      <a href=\"https://www.mozilla.org/firefox/new/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 80
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserFirefox"), "method");
            echo "\" alt=\"Firefox\" />
        <span class=\"ob-name\">Firefox</span>
      </a>
      <a href=\"https://www.microsoft.com/en-us/windows/microsoft-edge\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 84
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserEdge"), "method");
            echo "\" alt=\"edge\" />
        <span class=\"ob-name\">Microsoft Edge</span>
      </a>
      <a href=\"https://www.opera.com/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 88
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserOpera"), "method");
            echo "\" alt=\"opera\" />
        <span class=\"ob-name\">Opera</span>
      </a>
      <a href=\"https://www.apple.com/lae/safari/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 92
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserSafari"), "method");
            echo "\" alt=\"safari\" />
        <span class=\"ob-name\">Safari on Mac</span>
      </a>
    </div>
  </div>
</div>
";
        }
        // line 99
        echo "
";
        // line 100
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 101
            echo "<div class=\"mobile-container mobile-main-menu-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 103
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "headerMobileMenuTitle"), "method");
            echo "</span>
    ";
            // line 104
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileLangPosition"), "method") == "menu")) {
                // line 105
                echo "      <div class=\"language-currency top-menu\">
        <div class=\"mobile-currency-wrapper\">
            ";
                // line 107
                echo (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "mobile-header-active"), "method")) ? ((isset($context["currency"]) ? $context["currency"] : null)) : (""));
                echo "
        </div>
        <div class=\"mobile-language-wrapper\">
            ";
                // line 110
                echo (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "mobile-header-active"), "method")) ? ((isset($context["language"]) ? $context["language"] : null)) : (""));
                echo "
        </div>
      </div>
    ";
            }
            // line 114
            echo "    <a class=\"x\"></a>
  </div>
  <div class=\"mobile-main-menu-wrapper\">
    ";
            // line 117
            echo ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPhone", array(), "method") || ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isTablet", array(), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileHeaderOn"), "method") == "tablet")))) ? ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobile_main_menu"), "method")) : (""));
            echo "
  </div>
</div>

<div class=\"mobile-container mobile-filter-container\">
  <div class=\"mobile-wrapper-header\"></div>
  <div class=\"mobile-filter-wrapper\"></div>
</div>

<div class=\"mobile-container mobile-cart-content-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 128
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "headerMobileCartTitle"), "method");
            echo "</span>
    <a class=\"x\"></a>
  </div>
  <div class=\"mobile-cart-content-wrapper cart-content\"></div>
</div>
";
        }
        // line 134
        echo "
";
        // line 135
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "popup"), "method");
        echo "

<div class=\"site-wrapper\">

  ";
        // line 139
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "header_notice"), "method");
        echo "

  ";
        // line 141
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 142
            echo "  <header class=\"header-";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "headerType"), "method");
            echo "\">
    ";
            // line 143
            if (( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "mobile-header-active"), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "headerType"), "method"))) {
                // line 144
                echo "      ";
                $this->loadTemplate((("journal3/template/journal3/headers/desktop/" . $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "headerType"), "method")) . ".twig"), "journal3/template/common/header.twig", 144)->display($context);
                // line 145
                echo "    ";
            }
            // line 146
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileHeaderType"), "method")) {
                // line 147
                echo "      ";
                $this->loadTemplate((("journal3/template/journal3/headers/mobile/header_mobile_" . $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileHeaderType"), "method")) . ".twig"), "journal3/template/common/header.twig", 147)->display($context);
                // line 148
                echo "    ";
            }
            // line 149
            echo "  </header>
  ";
        }
        // line 151
        echo "
  ";
        // line 152
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "fullscreen_slider"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 152,  385 => 151,  381 => 149,  378 => 148,  375 => 147,  372 => 146,  369 => 145,  366 => 144,  364 => 143,  359 => 142,  357 => 141,  352 => 139,  345 => 135,  342 => 134,  333 => 128,  319 => 117,  314 => 114,  307 => 110,  301 => 107,  297 => 105,  295 => 104,  291 => 103,  287 => 101,  285 => 100,  282 => 99,  272 => 92,  265 => 88,  258 => 84,  251 => 80,  244 => 76,  238 => 73,  234 => 72,  230 => 70,  228 => 69,  219 => 67,  216 => 66,  211 => 64,  209 => 63,  196 => 61,  192 => 60,  186 => 58,  184 => 57,  179 => 55,  176 => 54,  168 => 52,  164 => 51,  153 => 49,  149 => 48,  137 => 45,  131 => 43,  129 => 42,  125 => 41,  118 => 38,  112 => 36,  110 => 35,  108 => 34,  102 => 32,  100 => 31,  95 => 30,  81 => 27,  77 => 26,  75 => 25,  69 => 23,  67 => 22,  61 => 20,  59 => 19,  55 => 18,  51 => 17,  35 => 12,  32 => 11,  21 => 2,  19 => 1,);
    }
}
/* {% if j3 is not defined %}*/
/*   <style>*/
/*     body {*/
/*       display: none !important;*/
/*     }*/
/*   </style>*/
/*   <script>*/
/*     window.location = 'index.php?route=journal3/startup/error';*/
/*   </script>*/
/* {% endif %}*/
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}" class="{{ j3.document.getClasses() | join(' ') }}" data-jv="{{ j3 is defined ? constant('JOURNAL3_VERSION') : '' }}" data-ov="{{ constant('VERSION') }}">*/
/* <head typeof="og:website">*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* {% if not j3.document.isPopup() %}*/
/* {% for key, tag in j3.loadController('journal3/seo/meta_tags') %}*/
/* <meta {{ tag.type }}="{{ key }}" content="{{ tag.content }}"/>*/
/* {% endfor %}*/
/* {% endif %}*/
/* <script>window['Journal'] = {{ j3.document.getJs() | json_encode }};</script>*/
/* {% if not j3.document.isPopup() %}*/
/* <script>{{ j3.loadController('journal3/mql') }}</script>*/
/* {% endif %}*/
/* {% if j3.document.hasFonts() %}*/
/* {% if j3.settings.get('performanceAsyncFontsStatus') %}*/
/* <script>WebFontConfig = { google: { families: {{ j3.document.getFonts(true) }} } };</script>*/
/* {% else %}*/
/* <link href="https://fonts.googleapis.com/css?family={{ j3.document.getFonts(false) }}" type="text/css" rel="stylesheet"/>*/
/* {% endif %}*/
/* {% endif %}*/
/* {% for style in j3.document.getStyles(styles) %}*/
/* {% if style.content %}*/
/* <style>{{ style.content }}</style>*/
/* {% else %}*/
/* <link href="{{ j3.document.staticUrl(style.href, false) }}" type="text/css" rel="{{ style.rel }}" media="all" />*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* <style>*/
/* {{ j3.document.getCss() }}*/
/* </style>*/
/* {% if j3.settings.get('customCSS') %}*/
/* <style>{{ j3.settings.get('customCSS') }}</style>*/
/* {% endif %}*/
/* {% for script in j3.document.getScripts('header', scripts) %}*/
/* <script src="{{ j3.document.staticUrl(script, false) }}" {% if j3.settings.get('performanceJSDefer') %} defer {% endif %}></script>*/
/* {% endfor %}*/
/* {% if j3.settings.get('customCodeHeader') %}*/
/* {{ j3.settings.get('customCodeHeader') }}*/
/* {% endif %}*/
/* </head>*/
/* <body class="{{ class }}" {% if j3.document.isMobile() %}ontouchstart{% endif %}>*/
/* */
/* {% if j3.settings.get('oldBrowserStatus') %}*/
/* <div class="old-browser">*/
/*   <div class="ob-content">*/
/*     <h2 class="ob-title">{{ j3.settings.get('oldBrowserTitle') }}</h2>*/
/*     <span class="ob-text">{{ j3.settings.get('oldBrowserText') }}</span>*/
/*     <div class="ob-links">*/
/*       <a href="https://www.google.com/chrome/" target="_blank" rel="nofollow">*/
/*         <img src="{{ j3.settings.get('oldBrowserChrome') }}" alt="Chrome" />*/
/*         <span class="ob-name">Chrome</span>*/
/*       </a>*/
/*       <a href="https://www.mozilla.org/firefox/new/" target="_blank" rel="nofollow">*/
/*         <img src="{{ j3.settings.get('oldBrowserFirefox') }}" alt="Firefox" />*/
/*         <span class="ob-name">Firefox</span>*/
/*       </a>*/
/*       <a href="https://www.microsoft.com/en-us/windows/microsoft-edge" target="_blank" rel="nofollow">*/
/*         <img src="{{ j3.settings.get('oldBrowserEdge') }}" alt="edge" />*/
/*         <span class="ob-name">Microsoft Edge</span>*/
/*       </a>*/
/*       <a href="https://www.opera.com/" target="_blank" rel="nofollow">*/
/*         <img src="{{ j3.settings.get('oldBrowserOpera') }}" alt="opera" />*/
/*         <span class="ob-name">Opera</span>*/
/*       </a>*/
/*       <a href="https://www.apple.com/lae/safari/" target="_blank" rel="nofollow">*/
/*         <img src="{{ j3.settings.get('oldBrowserSafari') }}" alt="safari" />*/
/*         <span class="ob-name">Safari on Mac</span>*/
/*       </a>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% if not j3.document.isPopup() %}*/
/* <div class="mobile-container mobile-main-menu-container">*/
/*   <div class="mobile-wrapper-header">*/
/*     <span>{{ j3.settings.get('headerMobileMenuTitle') }}</span>*/
/*     {% if j3.settings.get('mobileLangPosition') == 'menu' %}*/
/*       <div class="language-currency top-menu">*/
/*         <div class="mobile-currency-wrapper">*/
/*             {{ j3.document.hasClass('mobile-header-active') ? currency : '' }}*/
/*         </div>*/
/*         <div class="mobile-language-wrapper">*/
/*             {{ j3.document.hasClass('mobile-header-active') ? language : '' }}*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*     <a class="x"></a>*/
/*   </div>*/
/*   <div class="mobile-main-menu-wrapper">*/
/*     {{ j3.document.isPhone() or (j3.document.isTablet() and j3.settings.get('mobileHeaderOn') == 'tablet') ? j3.settings.get('mobile_main_menu') : '' }}*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="mobile-container mobile-filter-container">*/
/*   <div class="mobile-wrapper-header"></div>*/
/*   <div class="mobile-filter-wrapper"></div>*/
/* </div>*/
/* */
/* <div class="mobile-container mobile-cart-content-container">*/
/*   <div class="mobile-wrapper-header">*/
/*     <span>{{ j3.settings.get('headerMobileCartTitle') }}</span>*/
/*     <a class="x"></a>*/
/*   </div>*/
/*   <div class="mobile-cart-content-wrapper cart-content"></div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {{ j3.loadController('journal3/layout', 'popup') }}*/
/* */
/* <div class="site-wrapper">*/
/* */
/*   {{ j3.loadController('journal3/layout', 'header_notice') }}*/
/* */
/*   {% if not j3.document.isPopup() %}*/
/*   <header class="header-{{ j3.settings.get('headerType') }}">*/
/*     {% if not j3.document.hasClass('mobile-header-active') and j3.settings.get('headerType') %}*/
/*       {% include 'journal3/template/journal3/headers/desktop/' ~ j3.settings.get('headerType') ~ '.twig' %}*/
/*     {% endif %}*/
/*     {% if j3.settings.get('mobileHeaderType') %}*/
/*       {% include 'journal3/template/journal3/headers/mobile/header_mobile_' ~ j3.settings.get('mobileHeaderType') ~ '.twig' %}*/
/*     {% endif %}*/
/*   </header>*/
/*   {% endif %}*/
/* */
/*   {{ j3.loadController('journal3/layout', 'fullscreen_slider') }}*/
/* */
