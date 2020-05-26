<?php

/* journal3/template/journal3/module/info_blocks.twig */
class __TwigTemplate_d80b2eb323f2888510d3db44a0c4ba94b7f682c1dc130c4e68c4363f82386748 extends Twig_Template
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
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">
  <div class=\"module-body\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "      <div class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
            echo "\">
        ";
            // line 5
            if ($this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                // line 6
                echo "          <a href=\"";
                echo $this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array());
                echo "\" class=\"info-block\" ";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["item"], "link", array())), "method");
                echo ">
            ";
                // line 7
                if (($this->getAttribute($context["item"], "type", array()) == "image")) {
                    // line 8
                    echo "              <img src=\"";
                    echo $this->getAttribute($context["item"], "image", array());
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "image2x", array())) {
                        echo " srcset=\"";
                        echo $this->getAttribute($context["item"], "image", array());
                        echo " 1x, ";
                        echo $this->getAttribute($context["item"], "image2x", array());
                        echo " 2x\" ";
                    }
                    echo " width=\"";
                    echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "width", array());
                    echo "\" height=\"";
                    echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "height", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\" class=\"info-block-img\"/>
            ";
                }
                // line 10
                echo "            <div class=\"info-block-content\">
              <div class=\"info-block-title\">";
                // line 11
                echo $this->getAttribute($context["item"], "title", array());
                echo "</div>
              <div class=\"info-block-text\">";
                // line 12
                echo $this->getAttribute($context["item"], "content", array());
                echo "</div>
            </div>
            ";
                // line 14
                if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "link", array()), "total", array()))) {
                    // line 15
                    echo "              <span class=\"count-badge\">";
                    echo $this->getAttribute($this->getAttribute($context["item"], "link", array()), "total", array());
                    echo "</span>
            ";
                }
                // line 17
                echo "          </a>
        ";
            } else {
                // line 19
                echo "          <div class=\"info-block\">
            ";
                // line 20
                if (($this->getAttribute($context["item"], "type", array()) == "image")) {
                    // line 21
                    echo "              <img src=\"";
                    echo $this->getAttribute($context["item"], "image", array());
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "image2x", array())) {
                        echo " srcset=\"";
                        echo $this->getAttribute($context["item"], "image", array());
                        echo " 1x, ";
                        echo $this->getAttribute($context["item"], "image2x", array());
                        echo " 2x\" ";
                    }
                    echo " width=\"";
                    echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "width", array());
                    echo "\" height=\"";
                    echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "height", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\" class=\"info-block-img\"/>
            ";
                }
                // line 23
                echo "            <div class=\"info-block-content\">
              <div class=\"info-block-title\">";
                // line 24
                echo $this->getAttribute($context["item"], "title", array());
                echo "</div>
              <div class=\"info-block-text\">";
                // line 25
                echo $this->getAttribute($context["item"], "content", array());
                echo "</div>
            </div>
          </div>
        ";
            }
            // line 29
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/info_blocks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 31,  128 => 29,  121 => 25,  117 => 24,  114 => 23,  94 => 21,  92 => 20,  89 => 19,  85 => 17,  79 => 15,  77 => 14,  72 => 12,  68 => 11,  65 => 10,  45 => 8,  43 => 7,  36 => 6,  34 => 5,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <div class="{{ j3.classes(classes) }}">*/
/*   <div class="module-body">*/
/*     {% for item in items %}*/
/*       <div class="{{ j3.classes(item.classes) }}">*/
/*         {% if item.link.href %}*/
/*           <a href="{{ item.link.href }}" class="info-block" {{ j3.linkAttrs(item.link) }}>*/
/*             {% if item.type == 'image' %}*/
/*               <img src="{{ item.image }}" {% if item.image2x %} srcset="{{ item.image }} 1x, {{ item.image2x }} 2x" {% endif %} width="{{ imageDimensions.width }}" height="{{ imageDimensions.height }}" alt="{{ item.title }}" class="info-block-img"/>*/
/*             {% endif %}*/
/*             <div class="info-block-content">*/
/*               <div class="info-block-title">{{ item.title }}</div>*/
/*               <div class="info-block-text">{{ item.content }}</div>*/
/*             </div>*/
/*             {% if item.link.total is not null %}*/
/*               <span class="count-badge">{{ item.link.total }}</span>*/
/*             {% endif %}*/
/*           </a>*/
/*         {% else %}*/
/*           <div class="info-block">*/
/*             {% if item.type == 'image' %}*/
/*               <img src="{{ item.image }}" {% if item.image2x %} srcset="{{ item.image }} 1x, {{ item.image2x }} 2x" {% endif %} width="{{ imageDimensions.width }}" height="{{ imageDimensions.height }}" alt="{{ item.title }}" class="info-block-img"/>*/
/*             {% endif %}*/
/*             <div class="info-block-content">*/
/*               <div class="info-block-title">{{ item.title }}</div>*/
/*               <div class="info-block-text">{{ item.content }}</div>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
