<?php

/* journal3/template/journal3/module/products.twig */
class __TwigTemplate_e48238f7ff45d75d209b3af6c776b04b7def30be078f1bf4bd7a23b824159e86 extends Twig_Template
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
        // line 23
        $context["self"] = $this;
        // line 24
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">
  <div class=\"module-body\">
    ";
        // line 27
        echo "    ";
        if (((isset($context["sectionsDisplay"]) ? $context["sectionsDisplay"] : null) == "blocks")) {
            // line 28
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "        <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
          ";
                // line 30
                if ($this->getAttribute($context["item"], "title", array())) {
                    // line 31
                    echo "            <h3 class=\"title module-title\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h3>
          ";
                }
                // line 33
                echo "          ";
                echo $context["self"]->getrenderProductsItem($context["item"], $context);
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        // line 38
        echo "    ";
        if (((isset($context["sectionsDisplay"]) ? $context["sectionsDisplay"] : null) == "tabs")) {
            // line 39
            echo "      <div class=\"tab-container\">
        <ul class=\"nav nav-tabs\">
          ";
            // line 41
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
                // line 42
                echo "            <li class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "tab_classes", array())), "method");
                echo "\">
              ";
                // line 43
                if ($this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                    // line 44
                    echo "                <a href=\"";
                    echo $this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a>
              ";
                } else {
                    // line 46
                    echo "                <a href=\"#";
                    echo (isset($context["id"]) ? $context["id"] : null);
                    echo "-tab-";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" data-toggle=\"tab\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a>
              ";
                }
                // line 48
                echo "            </li>
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
            // line 50
            echo "        </ul>
        <div class=\"tab-content\">
          ";
            // line 52
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
                // line 53
                echo "            ";
                if ( !$this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                    // line 54
                    echo "              <div class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                    echo "\" id=\"";
                    echo (isset($context["id"]) ? $context["id"] : null);
                    echo "-tab-";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\">
                ";
                    // line 55
                    echo $context["self"]->getrenderProductsItem($context["item"], $context);
                    echo "
              </div>
            ";
                }
                // line 58
                echo "          ";
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
            // line 59
            echo "        </div>
      </div>
    ";
        }
        // line 62
        echo "    ";
        // line 63
        echo "    ";
        if (((isset($context["sectionsDisplay"]) ? $context["sectionsDisplay"] : null) == "accordion")) {
            // line 64
            echo "      <div class=\"panel-group\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "-collapse\">
        ";
            // line 65
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
                // line 66
                echo "          <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a href=\"#";
                // line 69
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse\" aria-expanded=\"false\">
                  ";
                // line 70
                echo $this->getAttribute($context["item"], "title", array());
                echo "
                  <i class=\"fa fa-caret-down\"></i>
                </a>
              </h4>
            </div>
            <div class=\"";
                // line 75
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "panel_classes", array())), "method");
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">
              <div class=\"panel-body\">
                ";
                // line 77
                echo $context["self"]->getrenderProductsItem($context["item"], $context);
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
            // line 82
            echo "      </div>
    ";
        }
        // line 84
        echo "    ";
        // line 85
        echo "    ";
        if (((isset($context["sectionsDisplay"]) ? $context["sectionsDisplay"] : null) == "isotope")) {
            // line 86
            echo "      <ul class=\"nav nav-tabs\">
        ";
            // line 87
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
                // line 88
                echo "          <li class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "tab_classes", array())), "method");
                echo "\">
            <a data-filter=\".";
                // line 89
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-section-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
          </li>
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
            // line 92
            echo "      </ul>
      <div class=\"product-grid isotope-grid\">
        ";
            // line 94
            $this->loadTemplate("journal3/template/journal3/product_card.twig", "journal3/template/journal3/module/products.twig", 94)->display(array_merge($context, $context));
            // line 95
            echo "      </div>
    ";
        }
        // line 97
        echo "  </div>
</div>
";
    }

    // line 1
    public function getrenderProductsItem($__item__ = null, $__context__ = null, ...$__varargs__)
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
            echo "  ";
            $context["products"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "products", array());
            // line 4
            echo "  ";
            if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "carousel", array())) {
                // line 5
                echo "    <div class=\"swiper\" data-items-per-row='";
                echo twig_jsonencode_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "itemsPerRow", array()), twig_constant("JSON_FORCE_OBJECT"));
                echo "' data-options='";
                echo twig_jsonencode_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "carouselOptions", array()), twig_constant("JSON_FORCE_OBJECT"));
                echo "'>
      <div class=\"swiper-container\" ";
                // line 6
                if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                    echo "dir=\"rtl\"";
                }
                echo ">
        <div class=\"swiper-wrapper product-";
                // line 7
                echo $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "display", array());
                echo "\">
          ";
                // line 8
                $this->loadTemplate("journal3/template/journal3/product_card.twig", "journal3/template/journal3/module/products.twig", 8)->display(array_merge($context, (isset($context["context"]) ? $context["context"] : null)));
                // line 9
                echo "        </div>
      </div>
      <div class=\"swiper-buttons\">
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
      <div class=\"swiper-pagination\"></div>
    </div>
  ";
            } else {
                // line 18
                echo "    <div class=\"product-";
                echo $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "display", array());
                echo "\">
      ";
                // line 19
                $this->loadTemplate("journal3/template/journal3/product_card.twig", "journal3/template/journal3/module/products.twig", 19)->display(array_merge($context, (isset($context["context"]) ? $context["context"] : null)));
                // line 20
                echo "    </div>
  ";
            }
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
        return "journal3/template/journal3/module/products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 20,  391 => 19,  386 => 18,  375 => 9,  373 => 8,  369 => 7,  363 => 6,  356 => 5,  353 => 4,  350 => 3,  347 => 2,  334 => 1,  328 => 97,  324 => 95,  322 => 94,  318 => 92,  297 => 89,  292 => 88,  275 => 87,  272 => 86,  269 => 85,  267 => 84,  263 => 82,  244 => 77,  235 => 75,  227 => 70,  219 => 69,  212 => 66,  195 => 65,  190 => 64,  187 => 63,  185 => 62,  180 => 59,  166 => 58,  160 => 55,  151 => 54,  148 => 53,  131 => 52,  127 => 50,  112 => 48,  102 => 46,  94 => 44,  92 => 43,  87 => 42,  70 => 41,  66 => 39,  63 => 38,  61 => 37,  58 => 36,  48 => 33,  42 => 31,  40 => 30,  35 => 29,  30 => 28,  27 => 27,  21 => 24,  19 => 23,);
    }
}
/* {% macro renderProductsItem(item, context) %}*/
/*   {% import _self as self %}*/
/*   {% set products = item.products %}*/
/*   {% if context.carousel %}*/
/*     <div class="swiper" data-items-per-row='{{ context.itemsPerRow|json_encode(constant('JSON_FORCE_OBJECT')) }}' data-options='{{ context.carouselOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}'>*/
/*       <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*         <div class="swiper-wrapper product-{{ context.display }}">*/
/*           {% include "journal3/template/journal3/product_card.twig" with context %}*/
/*         </div>*/
/*       </div>*/
/*       <div class="swiper-buttons">*/
/*         <div class="swiper-button-prev"></div>*/
/*         <div class="swiper-button-next"></div>*/
/*       </div>*/
/*       <div class="swiper-pagination"></div>*/
/*     </div>*/
/*   {% else %}*/
/*     <div class="product-{{ context.display }}">*/
/*       {% include "journal3/template/journal3/product_card.twig" with context %}*/
/*     </div>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* {% import _self as self %}*/
/* <div class="{{ j3.classes(classes) }}">*/
/*   <div class="module-body">*/
/*     {# grid #}*/
/*     {% if sectionsDisplay == 'blocks' %}*/
/*       {% for item in items %}*/
/*         <div class="{{ j3.classes(item.classes) }}">*/
/*           {% if item.title %}*/
/*             <h3 class="title module-title">{{ item.title }}</h3>*/
/*           {% endif %}*/
/*           {{ self.renderProductsItem(item, _context) }}*/
/*         </div>*/
/*       {% endfor %}*/
/*     {% endif %}*/
/*     {# tabs #}*/
/*     {% if sectionsDisplay == 'tabs' %}*/
/*       <div class="tab-container">*/
/*         <ul class="nav nav-tabs">*/
/*           {% for item in items %}*/
/*             <li class="{{ j3.classes(item.tab_classes) }}">*/
/*               {% if item.link.href %}*/
/*                 <a href="{{ item.link.href }}">{{ item.title }}</a>*/
/*               {% else %}*/
/*                 <a href="#{{ id }}-tab-{{ loop.index }}" data-toggle="tab">{{ item.title }}</a>*/
/*               {% endif %}*/
/*             </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*         <div class="tab-content">*/
/*           {% for item in items %}*/
/*             {% if not item.link.href %}*/
/*               <div class="{{ j3.classes(item.classes) }}" id="{{ id }}-tab-{{ loop.index }}">*/
/*                 {{ self.renderProductsItem(item, _context) }}*/
/*               </div>*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*     {# accordion #}*/
/*     {% if sectionsDisplay == 'accordion' %}*/
/*       <div class="panel-group" id="{{ id }}-collapse">*/
/*         {% for item in items %}*/
/*           <div class="{{ j3.classes(item.classes) }}">*/
/*             <div class="panel-heading">*/
/*               <h4 class="panel-title">*/
/*                 <a href="#{{ id }}-collapse-{{ loop.index }}" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#{{ id }}-collapse" aria-expanded="false">*/
/*                   {{ item.title }}*/
/*                   <i class="fa fa-caret-down"></i>*/
/*                 </a>*/
/*               </h4>*/
/*             </div>*/
/*             <div class="{{ j3.classes(item.panel_classes) }}" id="{{ id }}-collapse-{{ loop.index }}">*/
/*               <div class="panel-body">*/
/*                 {{ self.renderProductsItem(item, _context) }}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     {% endif %}*/
/*     {# isotope #}*/
/*     {% if sectionsDisplay == 'isotope' %}*/
/*       <ul class="nav nav-tabs">*/
/*         {% for item in items %}*/
/*           <li class="{{ j3.classes(item.tab_classes) }}">*/
/*             <a data-filter=".{{ id }}-section-{{ loop.index }}">{{ item.title }}</a>*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*       <div class="product-grid isotope-grid">*/
/*         {% include "journal3/template/journal3/product_card.twig" with _context %}*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
