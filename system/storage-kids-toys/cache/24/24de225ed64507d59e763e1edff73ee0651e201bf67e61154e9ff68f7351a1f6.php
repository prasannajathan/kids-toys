<?php

/* journal3/template/journal3/category_grid.twig */
class __TwigTemplate_cb198d408e77831ad0bb82e7fbfab62d0f25bc4f06309c2c8b167f26a81f393b extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "  <div class=\"category-layout ";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["category"], "classes", array())), "method");
            echo "\">
    <div class=\"category-thumb\">
      <div class=\"image\">
        <a href=\"";
            // line 5
            echo $this->getAttribute($context["category"], "href", array());
            echo "\">
          ";
            // line 6
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceLazyLoadImagesStatus"), "method")) {
                // line 7
                echo "            <img src=\"";
                echo (isset($context["dummy_image"]) ? $context["dummy_image"] : null);
                echo "\" data-src=\"";
                echo $this->getAttribute($context["category"], "thumb", array());
                echo "\" ";
                if ($this->getAttribute($context["category"], "thumb2x", array())) {
                    echo "data-srcset=\"";
                    echo $this->getAttribute($context["category"], "thumb", array());
                    echo " 1x, ";
                    echo $this->getAttribute($context["category"], "thumb2x", array());
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo (isset($context["image_width"]) ? $context["image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["image_height"]) ? $context["image_height"] : null);
                echo "\" alt=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\" class=\"img-responsive lazyload\"/>
          ";
            } else {
                // line 9
                echo "            <img src=\"";
                echo $this->getAttribute($context["category"], "thumb", array());
                echo "\" ";
                if ($this->getAttribute($context["category"], "thumb2x", array())) {
                    echo "srcset=\"";
                    echo $this->getAttribute($context["category"], "thumb", array());
                    echo " 1x, ";
                    echo $this->getAttribute($context["category"], "thumb2x", array());
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo (isset($context["image_width"]) ? $context["image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["image_height"]) ? $context["image_height"] : null);
                echo "\" alt=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\" class=\"img-responsive\"/>
          ";
            }
            // line 11
            echo "        </a>
      </div>

      <div class=\"caption\">
        <div class=\"name\"><a href=\"";
            // line 15
            echo $this->getAttribute($context["category"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category"], "name", array());
            echo "</a></div>

        <div class=\"description\">";
            // line 17
            echo $this->getAttribute($context["category"], "description", array());
            echo "</div>

        <div class=\"button-group\">
          <a class=\"btn btn-view-more\" href=\"";
            // line 20
            echo $this->getAttribute($context["category"], "href", array());
            echo "\" ";
            if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => "CategoryButtonDisplay", 1 => $context), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => "CategoryButtonTooltipStatus", 1 => $context), "method"))) {
                echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                echo (((isset($context["module_id"]) ? $context["module_id"] : null)) ? ((("module-categories-" . (isset($context["module_id"]) ? $context["module_id"] : null)) . " module-categories-grid")) : ("category-grid"));
                echo " view-more-tooltip\" data-placement=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => "CategoryButtonTooltipPosition", 1 => $context), "method");
                echo "\" title=\"";
                echo (isset($context["viewMoreText"]) ? $context["viewMoreText"] : null);
                echo "\" ";
            }
            echo ">
            <span class=\"btn-text\">";
            // line 21
            echo (isset($context["viewMoreText"]) ? $context["viewMoreText"] : null);
            echo "</span>
          </a>
        </div>
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/category_grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 21,  101 => 20,  95 => 17,  88 => 15,  82 => 11,  60 => 9,  36 => 7,  34 => 6,  30 => 5,  23 => 2,  19 => 1,);
    }
}
/* {% for category in categories %}*/
/*   <div class="category-layout {{ j3.classes(category.classes) }}">*/
/*     <div class="category-thumb">*/
/*       <div class="image">*/
/*         <a href="{{ category.href }}">*/
/*           {% if j3.settings.get('performanceLazyLoadImagesStatus') %}*/
/*             <img src="{{ dummy_image }}" data-src="{{ category.thumb }}" {% if category.thumb2x %}data-srcset="{{ category.thumb }} 1x, {{ category.thumb2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ category.name }}" title="{{ category.name }}" class="img-responsive lazyload"/>*/
/*           {% else %}*/
/*             <img src="{{ category.thumb }}" {% if category.thumb2x %}srcset="{{ category.thumb }} 1x, {{ category.thumb2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ category.name }}" title="{{ category.name }}" class="img-responsive"/>*/
/*           {% endif %}*/
/*         </a>*/
/*       </div>*/
/* */
/*       <div class="caption">*/
/*         <div class="name"><a href="{{ category.href }}">{{ category.name }}</a></div>*/
/* */
/*         <div class="description">{{ category.description }}</div>*/
/* */
/*         <div class="button-group">*/
/*           <a class="btn btn-view-more" href="{{ category.href }}" {% if (j3.settings.getIn('CategoryButtonDisplay', _context) == "icon") and (j3.settings.getIn('CategoryButtonTooltipStatus', _context)) %} data-toggle="tooltip" data-tooltip-class="{{ module_id ? 'module-categories-' ~ module_id ~ ' module-categories-grid' : 'category-grid' }} view-more-tooltip" data-placement="{{ j3.settings.getIn('CategoryButtonTooltipPosition', _context) }}" title="{{ viewMoreText }}" {% endif %}>*/
/*             <span class="btn-text">{{ viewMoreText }}</span>*/
/*           </a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endfor %}*/
/* */
