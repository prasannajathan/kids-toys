<?php

/* journal3/template/journal3/module/testimonials.twig */
class __TwigTemplate_b88e1c3773180110901147499014628cead9b491a54800aa89d9735d67521346 extends Twig_Template
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
        // line 18
        $context["self"] = $this;
        // line 19
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">
  ";
        // line 20
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 21
            echo "    <h3 class=\"title module-title\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h3>
  ";
        }
        // line 23
        echo "  <div class=\"module-body\">
  ";
        // line 25
        echo "  ";
        if ((((isset($context["display"]) ? $context["display"] : null) == "grid") &&  !(isset($context["carousel"]) ? $context["carousel"] : null))) {
            // line 26
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "      <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
        ";
                // line 28
                echo $context["self"]->getrenderTestimonialsItem($context["item"], $context);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "  ";
        }
        // line 32
        echo "  ";
        // line 33
        echo "  ";
        if ((((isset($context["display"]) ? $context["display"] : null) == "grid") && (isset($context["carousel"]) ? $context["carousel"] : null))) {
            // line 34
            echo "    <div class=\"swiper\" data-items-per-row='";
            echo twig_jsonencode_filter((isset($context["itemsPerRow"]) ? $context["itemsPerRow"] : null), twig_constant("JSON_FORCE_OBJECT"));
            echo "' data-options='";
            echo twig_jsonencode_filter((isset($context["carouselOptions"]) ? $context["carouselOptions"] : null), twig_constant("JSON_FORCE_OBJECT"));
            echo "'>
      <div class=\"swiper-container\" ";
            // line 35
            if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                echo "dir=\"rtl\"";
            }
            echo ">
        <div class=\"swiper-wrapper\">
          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 38
                echo "            <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
              ";
                // line 39
                echo $context["self"]->getrenderTestimonialsItem($context["item"], $context);
                echo "
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
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
        // line 51
        echo "  ";
        // line 52
        echo "  ";
        if (((isset($context["display"]) ? $context["display"] : null) == "tabs")) {
            // line 53
            echo "    <div class=\"tabs-container\">
      <ul class=\"nav nav-tabs\">
        ";
            // line 55
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
                // line 56
                echo "          <li class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "tab_classes", array())), "method");
                echo "\">
            ";
                // line 57
                if ($this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                    // line 58
                    echo "              <a href=\"";
                    echo $this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a>
            ";
                } else {
                    // line 60
                    echo "              <a href=\"#";
                    echo (isset($context["id"]) ? $context["id"] : null);
                    echo "-tab-";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" data-toggle=\"tab\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a>
            ";
                }
                // line 62
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
            // line 64
            echo "      </ul>
      <div class=\"tab-content\">
        ";
            // line 66
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
                // line 67
                echo "          <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-tab-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">
            ";
                // line 68
                echo $context["self"]->getrenderTestimonialsItem($context["item"], $context);
                echo "
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
            // line 71
            echo "      </div>
    </div>
  ";
        }
        // line 74
        echo "  ";
        // line 75
        echo "  ";
        if (((isset($context["display"]) ? $context["display"] : null) == "accordion")) {
            // line 76
            echo "    <div class=\"panel-group\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "-collapse\">
      ";
            // line 77
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
                // line 78
                echo "        <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
              <a href=\"#";
                // line 81
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse\" aria-expanded=\"false\">
                ";
                // line 82
                echo $this->getAttribute($context["item"], "title", array());
                echo "
                <i class=\"fa fa-caret-down\"></i>
              </a>
            </h4>
          </div>
          <div class=\"";
                // line 87
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "panel_classes", array())), "method");
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">
            <div class=\"panel-body\">
              ";
                // line 89
                echo $context["self"]->getrenderTestimonialsItem($context["item"], $context);
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
            // line 94
            echo "    </div>
  ";
        }
        // line 96
        echo "  </div>
</div>
";
    }

    // line 1
    public function getrenderTestimonialsItem($__item__ = null, $__context__ = null, ...$__varargs__)
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
            echo "  <div class=\"block-body\">
    ";
            // line 4
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "header", array()) == "image")) {
                // line 5
                echo "      <div class=\"block-header\"><img src=\"";
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image", array());
                echo "\" alt=\"\" class=\"block-image\" width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "imageDimensions", array()), "width", array());
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "imageDimensions", array()), "height", array());
                echo "\"/></div>
    ";
            } elseif (($this->getAttribute(            // line 6
(isset($context["item"]) ? $context["item"] : null), "header", array()) == "icon")) {
                // line 7
                echo "      <div class=\"block-header\"><i class=\"icon icon-block\"></i></div>
    ";
            }
            // line 9
            echo "    <div class=\"block-content block-";
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "contentType", array());
            echo "\">";
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "content", array());
            echo "</div>
    ";
            // line 10
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "footerText", array())) {
                // line 11
                echo "      <div class=\"block-footer\">";
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "footerText", array());
                echo "</div>
    ";
            }
            // line 13
            echo "    ";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "expandButton", array())) {
                // line 14
                echo "      <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
    ";
            }
            // line 16
            echo "  </div>
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
        return "journal3/template/journal3/module/testimonials.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 16,  370 => 14,  367 => 13,  361 => 11,  359 => 10,  352 => 9,  348 => 7,  346 => 6,  337 => 5,  335 => 4,  332 => 3,  329 => 2,  316 => 1,  310 => 96,  306 => 94,  287 => 89,  278 => 87,  270 => 82,  262 => 81,  255 => 78,  238 => 77,  233 => 76,  230 => 75,  228 => 74,  223 => 71,  206 => 68,  197 => 67,  180 => 66,  176 => 64,  161 => 62,  151 => 60,  143 => 58,  141 => 57,  136 => 56,  119 => 55,  115 => 53,  112 => 52,  110 => 51,  99 => 42,  90 => 39,  85 => 38,  81 => 37,  74 => 35,  67 => 34,  64 => 33,  62 => 32,  59 => 31,  50 => 28,  45 => 27,  40 => 26,  37 => 25,  34 => 23,  28 => 21,  26 => 20,  21 => 19,  19 => 18,);
    }
}
/* {% macro renderTestimonialsItem(item, context) %}*/
/*   {% import _self as self %}*/
/*   <div class="block-body">*/
/*     {% if item.header == 'image' %}*/
/*       <div class="block-header"><img src="{{ item.image }}" alt="" class="block-image" width="{{ context.imageDimensions.width }}" height="{{ context.imageDimensions.height }}"/></div>*/
/*     {% elseif item.header == 'icon' %}*/
/*       <div class="block-header"><i class="icon icon-block"></i></div>*/
/*     {% endif %}*/
/*     <div class="block-content block-{{ item.contentType }}">{{ item.content }}</div>*/
/*     {% if item.footerText %}*/
/*       <div class="block-footer">{{ item.footerText }}</div>*/
/*     {% endif %}*/
/*     {% if item.expandButton %}*/
/*       <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*     {% endif %}*/
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
/*         {{ self.renderTestimonialsItem(item, _context) }}*/
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
/*               {{ self.renderTestimonialsItem(item, _context) }}*/
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
/*               <a href="{{ item.link.href }}">{{ item.title }}</a>*/
/*             {% else %}*/
/*               <a href="#{{ id }}-tab-{{ loop.index }}" data-toggle="tab">{{ item.title }}</a>*/
/*             {% endif %}*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*       <div class="tab-content">*/
/*         {% for item in items %}*/
/*           <div class="{{ j3.classes(item.classes) }}" id="{{ id }}-tab-{{ loop.index }}">*/
/*             {{ self.renderTestimonialsItem(item, _context) }}*/
/*           </div>*/
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
/*               {{ self.renderTestimonialsItem(item, _context) }}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
