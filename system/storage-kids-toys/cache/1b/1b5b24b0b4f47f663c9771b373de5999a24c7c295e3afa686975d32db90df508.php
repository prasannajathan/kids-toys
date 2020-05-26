<?php

/* journal3/template/journal3/module/banners.twig */
class __TwigTemplate_b506329ff5cae4c478801a808e8156cb2e15fa768713ca5b49cc3adb4e5619f0 extends Twig_Template
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
        // line 25
        $context["self"] = $this;
        // line 26
        echo "<div id=\"";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\" class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">
  ";
        // line 27
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 28
            echo "    <h3 class=\"title module-title\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h3>
  ";
        }
        // line 30
        echo "  <div class=\"module-body\">
    ";
        // line 32
        echo "    ";
        if ( !(isset($context["carousel"]) ? $context["carousel"] : null)) {
            // line 33
            echo "      ";
            echo $context["self"]->getrenderBanner((isset($context["j3"]) ? $context["j3"] : null), $context);
            echo "
    ";
        }
        // line 35
        echo "    ";
        // line 36
        echo "    ";
        if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
            // line 37
            echo "      <div class=\"swiper\" data-items-per-row='";
            echo twig_jsonencode_filter((isset($context["itemsPerRow"]) ? $context["itemsPerRow"] : null), twig_constant("JSON_FORCE_OBJECT"));
            echo "' data-options='";
            echo twig_jsonencode_filter((isset($context["carouselOptions"]) ? $context["carouselOptions"] : null));
            echo "'>
        <div class=\"swiper-container\" ";
            // line 38
            if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                echo "dir=\"rtl\"";
            }
            echo ">
          <div class=\"swiper-wrapper\">
            ";
            // line 40
            echo $context["self"]->getrenderBanner((isset($context["j3"]) ? $context["j3"] : null), $context);
            echo "
          </div>
        </div>
        <div class=\"swiper-buttons\">
          <div class=\"swiper-button-prev\"></div>
          <div class=\"swiper-button-next\"></div>
        </div>
        <div class=\"swiper-pagination\"></div>
      </div>
    ";
        }
        // line 50
        echo "  </div>
</div>
";
    }

    // line 1
    public function getrenderBanner($__j3__ = null, $__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "j3" => $__j3__,
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
            $context["index"] = 0;
            // line 4
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "    <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
      <a ";
                // line 6
                if ($this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                    echo "href=\"";
                    echo $this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array());
                    echo "\"";
                }
                echo " ";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["item"], "link", array())), "method");
                echo ">
        ";
                // line 7
                if (0) {
                    // line 8
                    echo "          <img src=\"";
                    echo $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "dummy_image", array());
                    echo "\" data-src=\"";
                    echo $this->getAttribute($context["item"], "image", array());
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "image2x", array())) {
                        echo "data-srcset=\"";
                        echo $this->getAttribute($context["item"], "image", array());
                        echo " 1x, ";
                        echo $this->getAttribute($context["item"], "image2x", array());
                        echo " 2x\" ";
                    }
                    echo " alt=\"";
                    echo $this->getAttribute($context["item"], "alt", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "imageDimensions", array()), "width", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "imageDimensions", array()), "height", array());
                    echo "\" class=\"lazyload\"/>
        ";
                } else {
                    // line 10
                    echo "          <img src=\"";
                    echo $this->getAttribute($context["item"], "image", array());
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "image2x", array())) {
                        echo "srcset=\"";
                        echo $this->getAttribute($context["item"], "image", array());
                        echo " 1x, ";
                        echo $this->getAttribute($context["item"], "image2x", array());
                        echo " 2x\" ";
                    }
                    echo " alt=\"";
                    echo $this->getAttribute($context["item"], "alt", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "imageDimensions", array()), "width", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "imageDimensions", array()), "height", array());
                    echo "\"/>
        ";
                }
                // line 12
                echo "        ";
                if ($this->getAttribute($context["item"], "title", array())) {
                    // line 13
                    echo "        <div class=\"banner-text banner-caption\"><span>";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</span></div>
        ";
                }
                // line 15
                echo "        ";
                if ($this->getAttribute($context["item"], "title2", array())) {
                    // line 16
                    echo "        <div class=\"banner-text banner-caption-2\"><span>";
                    echo $this->getAttribute($context["item"], "title2", array());
                    echo "</span></div>
        ";
                }
                // line 18
                echo "      </a>
      ";
                // line 19
                if ($this->getAttribute($context["item"], "title3", array())) {
                    // line 20
                    echo "      <div class=\"banner-caption-3\"><span>";
                    echo $this->getAttribute($context["item"], "title3", array());
                    echo "</span></div>
      ";
                }
                // line 22
                echo "    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "journal3/template/journal3/module/banners.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 22,  192 => 20,  190 => 19,  187 => 18,  181 => 16,  178 => 15,  172 => 13,  169 => 12,  149 => 10,  127 => 8,  125 => 7,  115 => 6,  110 => 5,  105 => 4,  102 => 3,  99 => 2,  86 => 1,  80 => 50,  67 => 40,  60 => 38,  53 => 37,  50 => 36,  48 => 35,  42 => 33,  39 => 32,  36 => 30,  30 => 28,  28 => 27,  21 => 26,  19 => 25,);
    }
}
/* {% macro renderBanner(j3, context) %}*/
/*   {% import _self as self %}*/
/*   {% set index = 0 %}*/
/*   {% for item in context.items %}*/
/*     <div class="{{ j3.classes(item.classes) }}">*/
/*       <a {% if item.link.href %}href="{{ item.link.href }}"{% endif %} {{ j3.linkAttrs(item.link) }}>*/
/*         {% if 0 %}*/
/*           <img src="{{ context.dummy_image }}" data-src="{{ item.image }}" {% if item.image2x %}data-srcset="{{ item.image }} 1x, {{ item.image2x }} 2x" {% endif %} alt="{{ item.alt }}" width="{{ context.imageDimensions.width }}" height="{{ context.imageDimensions.height }}" class="lazyload"/>*/
/*         {% else %}*/
/*           <img src="{{ item.image }}" {% if item.image2x %}srcset="{{ item.image }} 1x, {{ item.image2x }} 2x" {% endif %} alt="{{ item.alt }}" width="{{ context.imageDimensions.width }}" height="{{ context.imageDimensions.height }}"/>*/
/*         {% endif %}*/
/*         {% if item.title %}*/
/*         <div class="banner-text banner-caption"><span>{{ item.title }}</span></div>*/
/*         {% endif %}*/
/*         {% if item.title2 %}*/
/*         <div class="banner-text banner-caption-2"><span>{{ item.title2 }}</span></div>*/
/*         {% endif %}*/
/*       </a>*/
/*       {% if item.title3 %}*/
/*       <div class="banner-caption-3"><span>{{ item.title3 }}</span></div>*/
/*       {% endif %}*/
/*     </div>*/
/*   {% endfor %}*/
/* {% endmacro %}*/
/* {% import _self as self %}*/
/* <div id="{{ id }}" class="{{ j3.classes(classes) }}">*/
/*   {% if title %}*/
/*     <h3 class="title module-title">{{ title }}</h3>*/
/*   {% endif %}*/
/*   <div class="module-body">*/
/*     {# grid #}*/
/*     {% if not carousel %}*/
/*       {{ self.renderBanner(j3, _context) }}*/
/*     {% endif %}*/
/*     {# grid + carousel #}*/
/*     {% if carousel %}*/
/*       <div class="swiper" data-items-per-row='{{ itemsPerRow|json_encode(constant('JSON_FORCE_OBJECT')) }}' data-options='{{ carouselOptions|json_encode }}'>*/
/*         <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*           <div class="swiper-wrapper">*/
/*             {{ self.renderBanner(j3, _context) }}*/
/*           </div>*/
/*         </div>*/
/*         <div class="swiper-buttons">*/
/*           <div class="swiper-button-prev"></div>*/
/*           <div class="swiper-button-next"></div>*/
/*         </div>*/
/*         <div class="swiper-pagination"></div>*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
