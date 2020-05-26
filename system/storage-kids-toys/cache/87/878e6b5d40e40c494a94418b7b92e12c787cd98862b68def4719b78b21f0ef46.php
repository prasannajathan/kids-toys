<?php

/* journal3/template/journal3/module/side_products.twig */
class __TwigTemplate_db1c0f13c15636b81858fc50a99519eb8ada78e58bc82792a2afd5fc5e364947 extends Twig_Template
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
  <div class=\"module-body side-products-";
        // line 25
        echo (isset($context["sectionsDisplay"]) ? $context["sectionsDisplay"] : null);
        echo "\">
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
                echo $context["self"]->getrenderSideProductsItem($context["item"], $context);
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
            echo "      <ul class=\"nav nav-tabs\">
        ";
            // line 40
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
                // line 41
                echo "          <li class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "tab_classes", array())), "method");
                echo "\">
            <a href=\"#";
                // line 42
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-tab-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" data-toggle=\"tab\">";
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
            // line 45
            echo "      </ul>
      <div class=\"tab-content\">
        ";
            // line 47
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
                // line 48
                echo "          <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-tab-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">
            ";
                // line 49
                echo $context["self"]->getrenderSideProductsItem($context["item"], $context);
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
            // line 52
            echo "      </div>
    ";
        }
        // line 54
        echo "    ";
        // line 55
        echo "    ";
        if (((isset($context["sectionsDisplay"]) ? $context["sectionsDisplay"] : null) == "accordion")) {
            // line 56
            echo "      <div class=\"panel-group\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "-collapse\">
        ";
            // line 57
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
                // line 58
                echo "          <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a href=\"#";
                // line 61
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse\" aria-expanded=\"false\">
                  ";
                // line 62
                echo $this->getAttribute($context["item"], "title", array());
                echo "
                  <i class=\"fa fa-caret-down\"></i>
                </a>
              </h4>
            </div>
            <div class=\"";
                // line 67
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "panel_classes", array())), "method");
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">
              <div class=\"panel-body\">
                ";
                // line 69
                echo $context["self"]->getrenderSideProductsItem($context["item"], $context);
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
            // line 74
            echo "      </div>
    ";
        }
        // line 76
        echo "  </div>
</div>
";
    }

    // line 1
    public function getrenderSideProductsItem($__item__ = null, $__context__ = null, ...$__varargs__)
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
        <div class=\"swiper-wrapper side-products\">
          ";
                // line 8
                $this->loadTemplate("journal3/template/journal3/side_products.twig", "journal3/template/journal3/module/side_products.twig", 8)->display(array_merge($context, (isset($context["context"]) ? $context["context"] : null)));
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
                echo "    <div class=\"side-products\">
      ";
                // line 19
                $this->loadTemplate("journal3/template/journal3/side_products.twig", "journal3/template/journal3/module/side_products.twig", 19)->display(array_merge($context, (isset($context["context"]) ? $context["context"] : null)));
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
        return "journal3/template/journal3/module/side_products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 20,  306 => 19,  303 => 18,  292 => 9,  290 => 8,  283 => 6,  276 => 5,  273 => 4,  270 => 3,  267 => 2,  254 => 1,  248 => 76,  244 => 74,  225 => 69,  216 => 67,  208 => 62,  200 => 61,  193 => 58,  176 => 57,  171 => 56,  168 => 55,  166 => 54,  162 => 52,  145 => 49,  136 => 48,  119 => 47,  115 => 45,  94 => 42,  89 => 41,  72 => 40,  69 => 39,  66 => 38,  64 => 37,  61 => 36,  51 => 33,  45 => 31,  43 => 30,  38 => 29,  33 => 28,  30 => 27,  26 => 25,  21 => 24,  19 => 23,);
    }
}
/* {% macro renderSideProductsItem(item, context) %}*/
/*   {% import _self as self %}*/
/*   {% set products = item.products %}*/
/*   {% if context.carousel %}*/
/*     <div class="swiper" data-items-per-row='{{ context.itemsPerRow|json_encode(constant('JSON_FORCE_OBJECT')) }}' data-options='{{ context.carouselOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}'>*/
/*       <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*         <div class="swiper-wrapper side-products">*/
/*           {% include "journal3/template/journal3/side_products.twig" with context %}*/
/*         </div>*/
/*       </div>*/
/*       <div class="swiper-buttons">*/
/*         <div class="swiper-button-prev"></div>*/
/*         <div class="swiper-button-next"></div>*/
/*       </div>*/
/*       <div class="swiper-pagination"></div>*/
/*     </div>*/
/*   {% else %}*/
/*     <div class="side-products">*/
/*       {% include "journal3/template/journal3/side_products.twig" with context %}*/
/*     </div>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* {% import _self as self %}*/
/* <div class="{{ j3.classes(classes) }}">*/
/*   <div class="module-body side-products-{{ sectionsDisplay }}">*/
/*     {# grid #}*/
/*     {% if sectionsDisplay == 'blocks' %}*/
/*       {% for item in items %}*/
/*         <div class="{{ j3.classes(item.classes) }}">*/
/*           {% if item.title %}*/
/*             <h3 class="title module-title">{{ item.title }}</h3>*/
/*           {% endif %}*/
/*           {{ self.renderSideProductsItem(item, _context) }}*/
/*         </div>*/
/*       {% endfor %}*/
/*     {% endif %}*/
/*     {# tabs #}*/
/*     {% if sectionsDisplay == 'tabs' %}*/
/*       <ul class="nav nav-tabs">*/
/*         {% for item in items %}*/
/*           <li class="{{ j3.classes(item.tab_classes) }}">*/
/*             <a href="#{{ id }}-tab-{{ loop.index }}" data-toggle="tab">{{ item.title }}</a>*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*       <div class="tab-content">*/
/*         {% for item in items %}*/
/*           <div class="{{ j3.classes(item.classes) }}" id="{{ id }}-tab-{{ loop.index }}">*/
/*             {{ self.renderSideProductsItem(item, _context) }}*/
/*           </div>*/
/*         {% endfor %}*/
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
/*                 {{ self.renderSideProductsItem(item, _context) }}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
