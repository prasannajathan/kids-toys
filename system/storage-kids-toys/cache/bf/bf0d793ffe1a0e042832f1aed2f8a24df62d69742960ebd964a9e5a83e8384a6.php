<?php

/* journal3/template/journal3/module/blocks.twig */
class __TwigTemplate_2ee438b5159796158a58b7757c2b57de6db731a04115476dd5e0e11d8f53251c extends Twig_Template
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
        // line 32
        $context["self"] = $this;
        // line 33
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">
  ";
        // line 34
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 35
            echo "    <h3 class=\"title module-title\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h3>
  ";
        }
        // line 37
        echo "  <div class=\"module-body\">
  ";
        // line 39
        echo "  ";
        if ((((isset($context["display"]) ? $context["display"] : null) == "grid") &&  !(isset($context["carousel"]) ? $context["carousel"] : null))) {
            // line 40
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo "      <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
        ";
                // line 42
                echo $context["self"]->getrenderBlocksItem($context["item"], $context);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "  ";
        }
        // line 46
        echo "  ";
        // line 47
        echo "  ";
        if ((((isset($context["display"]) ? $context["display"] : null) == "grid") && (isset($context["carousel"]) ? $context["carousel"] : null))) {
            // line 48
            echo "    <div class=\"swiper\" data-items-per-row='";
            echo twig_jsonencode_filter((isset($context["itemsPerRow"]) ? $context["itemsPerRow"] : null), twig_constant("JSON_FORCE_OBJECT"));
            echo "' data-options='";
            echo twig_jsonencode_filter((isset($context["carouselOptions"]) ? $context["carouselOptions"] : null), twig_constant("JSON_FORCE_OBJECT"));
            echo "'>
      <div class=\"swiper-container\" ";
            // line 49
            if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                echo "dir=\"rtl\"";
            }
            echo ">
        <div class=\"swiper-wrapper\">
          ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 52
                echo "            <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
              ";
                // line 53
                echo $context["self"]->getrenderBlocksItem($context["item"], $context);
                echo "
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </div>
      </div>
      <div class=\"swiper-buttons\">
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
      <div class=\"swiper-pagination\"></div>
    </div>
  ";
        }
        // line 65
        echo "  ";
        // line 66
        echo "  ";
        if (((isset($context["display"]) ? $context["display"] : null) == "tabs")) {
            // line 67
            echo "    <div class=\"tabs-container\">
      <ul class=\"nav nav-tabs\">
        ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 70
                echo "          <li class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "tab_classes", array())), "method");
                echo "\">
            ";
                // line 71
                if ($this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                    // line 72
                    echo "              <a href=\"";
                    echo $this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array());
                    echo "\" ";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["item"], "link", array())), "method");
                    echo ">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a>
            ";
                } else {
                    // line 74
                    echo "              <a href=\"#";
                    echo (isset($context["id"]) ? $context["id"] : null);
                    echo "-tab-";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" data-toggle=\"tab\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a>
            ";
                }
                // line 76
                echo "          </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "      </ul>
      <div class=\"tab-content\">
        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 81
                echo "          ";
                if ( !$this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                    // line 82
                    echo "            <div class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                    echo "\" id=\"";
                    echo (isset($context["id"]) ? $context["id"] : null);
                    echo "-tab-";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\">
              ";
                    // line 83
                    echo $context["self"]->getrenderBlocksItem($context["item"], $context);
                    echo "
            </div>
          ";
                }
                // line 86
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "      </div>
    </div>
  ";
        }
        // line 90
        echo "  ";
        // line 91
        echo "  ";
        if (((isset($context["display"]) ? $context["display"] : null) == "accordion")) {
            // line 92
            echo "    <div class=\"panel-group\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "-collapse\">
      ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 94
                echo "        <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
              <a href=\"#";
                // line 97
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse\" aria-expanded=\"false\">
                ";
                // line 98
                echo $this->getAttribute($context["item"], "title", array());
                echo "
                <i class=\"fa fa-caret-down\"></i>
              </a>
            </h4>
          </div>
          <div class=\"";
                // line 103
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "panel_classes", array())), "method");
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">
            <div class=\"panel-body\">
              ";
                // line 105
                echo $context["self"]->getrenderBlocksItem($context["item"], $context);
                echo "
            </div>
          </div>
        </div>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "    </div>
  ";
        }
        // line 112
        echo "  </div>
</div>
";
    }

    // line 1
    public function getrenderBlocksItem($__item__ = null, $__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            $context["self"] = $this;
            // line 3
            echo "  <div class=\"block-body expand-block\">
    ";
            // line 4
            if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "display", array()) == "grid") && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()))) {
                // line 5
                echo "      <h3 class=\"title module-title block-title\">";
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array());
                echo "</h3>
    ";
            }
            // line 7
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "header", array()) == "image")) {
                // line 8
                echo "      <div class=\"block-header\"><img src=\"";
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image", array());
                echo "\" ";
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image2x", array())) {
                    echo " srcset=\"";
                    echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image", array());
                    echo " 1x, ";
                    echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image2x", array());
                    echo " 2x\" ";
                }
                echo " alt=\"\" class=\"block-image\" width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "imageDimensions", array()), "width", array());
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "imageDimensions", array()), "height", array());
                echo "\"/></div>
    ";
            } elseif (($this->getAttribute(            // line 9
(isset($context["item"]) ? $context["item"] : null), "header", array()) == "icon")) {
                // line 10
                echo "      <div class=\"block-header\"><i class=\"icon icon-block\"></i></div>
    ";
            } elseif (($this->getAttribute(            // line 11
(isset($context["item"]) ? $context["item"] : null), "header", array()) == "text")) {
                // line 12
                echo "      <div class=\"block-header\"><span class=\"block-header-text\">";
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text", array());
                echo "</span></div>
    ";
            }
            // line 14
            echo "    <div class=\"block-wrapper\">
      <div class=\"block-content ";
            // line 15
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "expandButton", array())) {
                echo "expand-content";
            }
            echo " block-";
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "contentType", array());
            echo "\">
        ";
            // line 16
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "contentType", array()) == "map")) {
                // line 17
                echo "        <div class=\"journal-loading\"><i class=\"fa fa-spinner fa-spin\"></i></div>
        ";
            }
            // line 19
            echo "        ";
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "content", array());
            echo "
        ";
            // line 20
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "expandButton", array())) {
                // line 21
                echo "          <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
        ";
            }
            // line 23
            echo "      </div>
      ";
            // line 24
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "footer", array()) == "text")) {
                // line 25
                echo "        <div class=\"block-footer\">";
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "footerText", array());
                echo "</div>
      ";
            } elseif (($this->getAttribute(            // line 26
(isset($context["item"]) ? $context["item"] : null), "footer", array()) == "button")) {
                // line 27
                echo "        <div class=\"block-footer\"><a class=\"btn\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "footerButtonLink", array()), "href", array());
                echo "\" ";
                echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "j3", array()), "linkAttrs", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "footerButtonLink", array())), "method");
                echo ">";
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "footerButton", array());
                echo "</a></div>
      ";
            }
            // line 29
            echo "    </div>
  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/blocks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 29,  424 => 27,  422 => 26,  417 => 25,  415 => 24,  412 => 23,  408 => 21,  406 => 20,  401 => 19,  397 => 17,  395 => 16,  387 => 15,  384 => 14,  378 => 12,  376 => 11,  373 => 10,  371 => 9,  354 => 8,  351 => 7,  345 => 5,  343 => 4,  340 => 3,  337 => 2,  324 => 1,  318 => 112,  314 => 110,  295 => 105,  286 => 103,  278 => 98,  270 => 97,  263 => 94,  246 => 93,  241 => 92,  238 => 91,  236 => 90,  231 => 87,  217 => 86,  211 => 83,  202 => 82,  199 => 81,  182 => 80,  178 => 78,  163 => 76,  153 => 74,  143 => 72,  141 => 71,  136 => 70,  119 => 69,  115 => 67,  112 => 66,  110 => 65,  99 => 56,  90 => 53,  85 => 52,  81 => 51,  74 => 49,  67 => 48,  64 => 47,  62 => 46,  59 => 45,  50 => 42,  45 => 41,  40 => 40,  37 => 39,  34 => 37,  28 => 35,  26 => 34,  21 => 33,  19 => 32,);
    }
}
/* {% macro renderBlocksItem(item, context) %}*/
/*   {% import _self as self %}*/
/*   <div class="block-body expand-block">*/
/*     {% if context.display == 'grid' and item.title %}*/
/*       <h3 class="title module-title block-title">{{ item.title }}</h3>*/
/*     {% endif %}*/
/*     {% if item.header == 'image' %}*/
/*       <div class="block-header"><img src="{{ item.image }}" {% if item.image2x %} srcset="{{ item.image }} 1x, {{ item.image2x }} 2x" {% endif %} alt="" class="block-image" width="{{ context.imageDimensions.width }}" height="{{ context.imageDimensions.height }}"/></div>*/
/*     {% elseif item.header == 'icon' %}*/
/*       <div class="block-header"><i class="icon icon-block"></i></div>*/
/*     {% elseif item.header == 'text' %}*/
/*       <div class="block-header"><span class="block-header-text">{{ item.text }}</span></div>*/
/*     {% endif %}*/
/*     <div class="block-wrapper">*/
/*       <div class="block-content {% if item.expandButton %}expand-content{% endif %} block-{{ item.contentType }}">*/
/*         {% if item.contentType == 'map' %}*/
/*         <div class="journal-loading"><i class="fa fa-spinner fa-spin"></i></div>*/
/*         {% endif %}*/
/*         {{ item.content }}*/
/*         {% if item.expandButton %}*/
/*           <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*         {% endif %}*/
/*       </div>*/
/*       {% if item.footer == 'text' %}*/
/*         <div class="block-footer">{{ item.footerText }}</div>*/
/*       {% elseif item.footer == 'button' %}*/
/*         <div class="block-footer"><a class="btn" href="{{ item.footerButtonLink.href }}" {{ context.j3.linkAttrs(item.footerButtonLink) }}>{{ item.footerButton }}</a></div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endmacro %}*/
/* {% import _self as self %}*/
/* <div class="{{ j3.classes(classes) }}">*/
/*   {% if title %}*/
/*     <h3 class="title module-title">{{ title }}</h3>*/
/*   {% endif %}*/
/*   <div class="module-body">*/
/*   {# grid #}*/
/*   {% if display == 'grid' and not carousel %}*/
/*     {% for item in items %}*/
/*       <div class="{{ j3.classes(item.classes) }}">*/
/*         {{ self.renderBlocksItem(item, _context) }}*/
/*       </div>*/
/*     {% endfor %}*/
/*   {% endif %}*/
/*   {# grid + carousel #}*/
/*   {% if display == 'grid' and carousel %}*/
/*     <div class="swiper" data-items-per-row='{{ itemsPerRow|json_encode(constant('JSON_FORCE_OBJECT')) }}' data-options='{{ carouselOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}'>*/
/*       <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*         <div class="swiper-wrapper">*/
/*           {% for item in items %}*/
/*             <div class="{{ j3.classes(item.classes) }}">*/
/*               {{ self.renderBlocksItem(item, _context) }}*/
/*             </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*       <div class="swiper-buttons">*/
/*         <div class="swiper-button-prev"></div>*/
/*         <div class="swiper-button-next"></div>*/
/*       </div>*/
/*       <div class="swiper-pagination"></div>*/
/*     </div>*/
/*   {% endif %}*/
/*   {# tabs #}*/
/*   {% if display == 'tabs' %}*/
/*     <div class="tabs-container">*/
/*       <ul class="nav nav-tabs">*/
/*         {% for item in items %}*/
/*           <li class="{{ j3.classes(item.tab_classes) }}">*/
/*             {% if item.link.href %}*/
/*               <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }}>{{ item.title }}</a>*/
/*             {% else %}*/
/*               <a href="#{{ id }}-tab-{{ loop.index }}" data-toggle="tab">{{ item.title }}</a>*/
/*             {% endif %}*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*       <div class="tab-content">*/
/*         {% for item in items %}*/
/*           {% if not item.link.href %}*/
/*             <div class="{{ j3.classes(item.classes) }}" id="{{ id }}-tab-{{ loop.index }}">*/
/*               {{ self.renderBlocksItem(item, _context) }}*/
/*             </div>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   {# accordion #}*/
/*   {% if display == 'accordion' %}*/
/*     <div class="panel-group" id="{{ id }}-collapse">*/
/*       {% for item in items %}*/
/*         <div class="{{ j3.classes(item.classes) }}">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">*/
/*               <a href="#{{ id }}-collapse-{{ loop.index }}" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#{{ id }}-collapse" aria-expanded="false">*/
/*                 {{ item.title }}*/
/*                 <i class="fa fa-caret-down"></i>*/
/*               </a>*/
/*             </h4>*/
/*           </div>*/
/*           <div class="{{ j3.classes(item.panel_classes) }}" id="{{ id }}-collapse-{{ loop.index }}">*/
/*             <div class="panel-body">*/
/*               {{ self.renderBlocksItem(item, _context) }}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
