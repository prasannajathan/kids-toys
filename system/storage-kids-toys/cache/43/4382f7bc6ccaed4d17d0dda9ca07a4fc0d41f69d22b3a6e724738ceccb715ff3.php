<?php

/* journal3/template/journal3/module/product_tabs.twig */
class __TwigTemplate_615cb8e8d6f0874551d8466ec54ff1a77f48b37b4d4df53a8c3d2d44277cd6df extends Twig_Template
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
        if (((isset($context["display"]) ? $context["display"] : null) == "tabs")) {
            // line 2
            echo "  <div class=\"tabs-container ";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">
    <ul class=\"nav nav-tabs\">
      ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "        <li class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "tab_classes", array())), "method");
                echo "\">
          <a href=\"#";
                // line 6
                echo $this->getAttribute($context["item"], "id", array());
                echo "\" data-toggle=\"tab\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    </ul>
    <div class=\"tab-content\">
      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "        <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\" id=\"";
                echo $this->getAttribute($context["item"], "id", array());
                echo "\">
          <div class=\"block-body expand-block\">
            <div class=\"block-wrapper\">
              <div class=\"block-content ";
                // line 15
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    echo "expand-content";
                }
                echo "\">
                ";
                // line 16
                echo $this->getAttribute($context["item"], "content", array());
                echo "
                ";
                // line 17
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    // line 18
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
                }
                // line 20
                echo "              </div>
            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </div>
  </div>
";
        } elseif ((        // line 27
(isset($context["display"]) ? $context["display"] : null) == "accordion")) {
            // line 28
            echo "  <div class=\"panel-group ";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">
    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 30
                echo "      <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
        <div class=\"panel-heading\">
          <h4 class=\"panel-title\">
            <a href=\"#";
                // line 33
                echo $this->getAttribute($context["item"], "id", array());
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\">
              ";
                // line 34
                echo $this->getAttribute($context["item"], "title", array());
                echo "
              <i class=\"fa fa-caret-down\"></i>
            </a>
          </h4>
        </div>
        <div class=\"";
                // line 39
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "panel_classes", array())), "method");
                echo "\" id=\"";
                echo $this->getAttribute($context["item"], "id", array());
                echo "\">
          <div class=\"block-body expand-block\">
            <div class=\"block-wrapper\">
              <div class=\"panel-body block-content ";
                // line 42
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    echo "expand-content";
                }
                echo "\">
                ";
                // line 43
                echo $this->getAttribute($context["item"], "content", array());
                echo "
                ";
                // line 44
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    // line 45
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
                }
                // line 47
                echo "              </div>
            </div>
          </div>
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "  </div>
";
        } else {
            // line 55
            echo "  <div class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">
    ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 57
                echo "      <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
        ";
                // line 58
                if ($this->getAttribute($context["item"], "title", array())) {
                    // line 59
                    echo "        <h3 class=\"title module-title\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h3>
        ";
                }
                // line 61
                echo "        <div class=\"block-body expand-block\">
          <div class=\"block-wrapper\">
            <div class=\"block-content ";
                // line 63
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    echo "expand-content";
                }
                echo "\">
              ";
                // line 64
                echo $this->getAttribute($context["item"], "content", array());
                echo "
              ";
                // line 65
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    // line 66
                    echo "                <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
              ";
                }
                // line 68
                echo "            </div>
          </div>
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/product_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 73,  205 => 68,  201 => 66,  199 => 65,  195 => 64,  189 => 63,  185 => 61,  179 => 59,  177 => 58,  172 => 57,  168 => 56,  163 => 55,  159 => 53,  148 => 47,  144 => 45,  142 => 44,  138 => 43,  132 => 42,  124 => 39,  116 => 34,  112 => 33,  105 => 30,  101 => 29,  96 => 28,  94 => 27,  90 => 25,  80 => 20,  76 => 18,  74 => 17,  70 => 16,  64 => 15,  55 => 12,  51 => 11,  47 => 9,  36 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if display == 'tabs' %}*/
/*   <div class="tabs-container {{ j3.classes(classes) }}">*/
/*     <ul class="nav nav-tabs">*/
/*       {% for item in items %}*/
/*         <li class="{{ j3.classes(item.tab_classes) }}">*/
/*           <a href="#{{ item.id }}" data-toggle="tab">{{ item.title }}</a>*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*     <div class="tab-content">*/
/*       {% for item in items %}*/
/*         <div class="{{ j3.classes(item.classes) }}" id="{{ item.id }}">*/
/*           <div class="block-body expand-block">*/
/*             <div class="block-wrapper">*/
/*               <div class="block-content {% if item.expandButton %}expand-content{% endif %}">*/
/*                 {{ item.content }}*/
/*                 {% if item.expandButton %}*/
/*                   <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* {% elseif display == 'accordion' %}*/
/*   <div class="panel-group {{ j3.classes(classes) }}">*/
/*     {% for item in items %}*/
/*       <div class="{{ j3.classes(item.classes) }}">*/
/*         <div class="panel-heading">*/
/*           <h4 class="panel-title">*/
/*             <a href="#{{ item.id }}" class="accordion-toggle collapsed" data-toggle="collapse" aria-expanded="false">*/
/*               {{ item.title }}*/
/*               <i class="fa fa-caret-down"></i>*/
/*             </a>*/
/*           </h4>*/
/*         </div>*/
/*         <div class="{{ j3.classes(item.panel_classes) }}" id="{{ item.id }}">*/
/*           <div class="block-body expand-block">*/
/*             <div class="block-wrapper">*/
/*               <div class="panel-body block-content {% if item.expandButton %}expand-content{% endif %}">*/
/*                 {{ item.content }}*/
/*                 {% if item.expandButton %}*/
/*                   <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* {% else %}*/
/*   <div class="{{ j3.classes(classes) }}">*/
/*     {% for item in items %}*/
/*       <div class="{{ j3.classes(item.classes) }}">*/
/*         {% if item.title %}*/
/*         <h3 class="title module-title">{{ item.title }}</h3>*/
/*         {% endif %}*/
/*         <div class="block-body expand-block">*/
/*           <div class="block-wrapper">*/
/*             <div class="block-content {% if item.expandButton %}expand-content{% endif %}">*/
/*               {{ item.content }}*/
/*               {% if item.expandButton %}*/
/*                 <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endif %}*/
/* */
