<?php

/* journal3/template/journal3/module/main_menu.twig */
class __TwigTemplate_dcb08697e1244f5a0385aa708f77dcb91b545c6cd99211e2cf17e3aa72fbce37 extends Twig_Template
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
        // line 33
        $context["self"] = $this;
        // line 34
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 35
            echo "  ";
            $context["isMobile"] = $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "mobile-header-active"), "method");
            // line 36
            echo "  ";
            if ((isset($context["first"]) ? $context["first"] : null)) {
                // line 37
                echo "  <div class=\"menu-trigger menu-item main-menu-item\"><ul class=\"j-menu\"><li><a>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "menuTriggerText"), "method");
                echo "</a></li></ul></div>
  ";
            }
            // line 39
            echo "  <div id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">
    <ul class=\"j-menu\">";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo "      ";
                $context["cid"] = $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "uniqueId", array(0 => "collapse-"), "method");
                // line 42
                echo "      <li class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo " ";
                if (((isset($context["isMobile"]) ? $context["isMobile"] : null) && $this->getAttribute($context["item"], "isOpen", array()))) {
                    echo "open";
                }
                echo "\" ";
                if ($this->getAttribute($context["item"], "isOpen", array())) {
                    echo "data-is-open";
                }
                echo ">
        ";
                // line 43
                if ($this->getAttribute($context["item"], "items", array())) {
                    // line 44
                    echo "          ";
                    if ($this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                        // line 45
                        echo "            <a href=\"";
                        echo $this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array());
                        echo "\" ";
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["item"], "link", array())), "method");
                        echo " ";
                        if (((isset($context["display"]) ? $context["display"] : null) == "dropdown")) {
                            echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                        } else {
                            echo " class=\"collapse-toggle\"";
                        }
                        echo ">
              ";
                        // line 46
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute($context["item"], "title", array()), 1 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "classes", array())), "method");
                        echo "
              <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        // line 47
                        echo (isset($context["cid"]) ? $context["cid"] : null);
                        echo "\" ";
                        if (((isset($context["isMobile"]) ? $context["isMobile"] : null) && $this->getAttribute($context["item"], "isOpen", array()))) {
                            echo "aria-expanded=\"true\"";
                        }
                        echo "><i class=\"fa fa-plus\"></i></span>
              ";
                        // line 48
                        if ($this->getAttribute($context["item"], "label", array())) {
                            // line 49
                            echo "                <span class=\"menu-label\">";
                            echo $this->getAttribute($context["item"], "label", array());
                            echo "</span>
              ";
                        }
                        // line 51
                        echo "            </a>
          ";
                    } else {
                        // line 53
                        echo "            <a ";
                        if (((isset($context["display"]) ? $context["display"] : null) == "dropdown")) {
                            echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                        } else {
                            echo " class=\"collapse-toggle\"";
                        }
                        echo ">
              ";
                        // line 54
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute($context["item"], "title", array()), 1 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "classes", array())), "method");
                        echo "
              <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        // line 55
                        echo (isset($context["cid"]) ? $context["cid"] : null);
                        echo "\" ";
                        if (((isset($context["isMobile"]) ? $context["isMobile"] : null) && $this->getAttribute($context["item"], "isOpen", array()))) {
                            echo "aria-expanded=\"true\"";
                        }
                        echo "><i class=\"fa fa-plus\"></i></span>
              ";
                        // line 56
                        if ($this->getAttribute($context["item"], "label", array())) {
                            // line 57
                            echo "                <span class=\"menu-label\">";
                            echo $this->getAttribute($context["item"], "label", array());
                            echo "</span>
              ";
                        }
                        // line 59
                        echo "            </a>
          ";
                    }
                    // line 61
                    echo "          ";
                    if (($this->getAttribute($context["item"], "type", array()) == "multilevel")) {
                        // line 62
                        echo "            <div class=\"";
                        echo ((((isset($context["display"]) ? $context["display"] : null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                        echo " ";
                        if (((isset($context["isMobile"]) ? $context["isMobile"] : null) && $this->getAttribute($context["item"], "isOpen", array()))) {
                            echo "in";
                        }
                        echo "\" id=\"";
                        echo (isset($context["cid"]) ? $context["cid"] : null);
                        echo "\">
              <ul class=\"j-menu\">
                ";
                        // line 64
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                            // line 65
                            echo "                  ";
                            echo $context["self"]->getrenderMenu((isset($context["j3"]) ? $context["j3"] : null), $context["subitem"], (isset($context["display"]) ? $context["display"] : null));
                            echo "
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 67
                        echo "              </ul>
            </div>
          ";
                    }
                    // line 70
                    echo "          ";
                    if (($this->getAttribute($context["item"], "type", array()) == "megamenu")) {
                        // line 71
                        echo "            <div class=\"";
                        echo ((((isset($context["display"]) ? $context["display"] : null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                        echo " ";
                        if (((isset($context["isMobile"]) ? $context["isMobile"] : null) && $this->getAttribute($context["item"], "isOpen", array()))) {
                            echo "in";
                        }
                        echo "\" id=\"";
                        echo (isset($context["cid"]) ? $context["cid"] : null);
                        echo "\">
              <div class=\"mega-menu-content\">";
                        // line 72
                        echo $this->getAttribute($context["item"], "items", array());
                        echo "</div>
            </div>
          ";
                    }
                    // line 75
                    echo "          ";
                    if (($this->getAttribute($context["item"], "type", array()) == "flyout")) {
                        // line 76
                        echo "            <div class=\"";
                        echo ((((isset($context["display"]) ? $context["display"] : null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                        echo " ";
                        if (((isset($context["isMobile"]) ? $context["isMobile"] : null) && $this->getAttribute($context["item"], "isOpen", array()))) {
                            echo "in";
                        }
                        echo "\" id=\"";
                        echo (isset($context["cid"]) ? $context["cid"] : null);
                        echo "\">
              ";
                        // line 77
                        echo $this->getAttribute($context["item"], "items", array());
                        echo "
            </div>
          ";
                    }
                    // line 80
                    echo "        ";
                } else {
                    // line 81
                    echo "          ";
                    if ($this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                        // line 82
                        echo "            <a href=\"";
                        echo $this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array());
                        echo "\" ";
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["item"], "link", array())), "method");
                        echo ">
              ";
                        // line 83
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute($context["item"], "title", array()), 1 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "classes", array())), "method");
                        echo "
              ";
                        // line 84
                        if ($this->getAttribute($context["item"], "label", array())) {
                            // line 85
                            echo "                <span class=\"menu-label\">";
                            echo $this->getAttribute($context["item"], "label", array());
                            echo "</span>
              ";
                        }
                        // line 87
                        echo "            </a>
          ";
                    } else {
                        // line 89
                        echo "            <a>
              ";
                        // line 90
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute($context["item"], "title", array()), 1 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "classes", array())), "method");
                        echo "
              ";
                        // line 91
                        if ($this->getAttribute($context["item"], "label", array())) {
                            // line 92
                            echo "                <span class=\"menu-label\">";
                            echo $this->getAttribute($context["item"], "label", array());
                            echo "</span>
              ";
                        }
                        // line 94
                        echo "            </a>
          ";
                    }
                    // line 96
                    echo "        ";
                }
                // line 97
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "    </ul>
  </div>
";
        }
    }

    // line 1
    public function getrenderMenu($__j3__ = null, $__item__ = null, $__display__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "j3" => $__j3__,
            "item" => $__item__,
            "display" => $__display__,
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
            $context["cid"] = $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "uniqueId", array(0 => "collapse-"), "method");
            // line 4
            echo "  <li class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "classes", array())), "method");
            echo "\">
    ";
            // line 5
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "items", array())) {
                // line 6
                echo "      ";
                if ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array())) {
                    // line 7
                    echo "        <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array());
                    echo "\" ";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array())), "method");
                    echo " ";
                    if (((isset($context["display"]) ? $context["display"] : null) == "dropdown")) {
                        echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                    } else {
                        echo " class=\"collapse-toggle\"";
                    }
                    echo ">
          ";
                    // line 8
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                    echo "
          <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                    // line 9
                    echo (isset($context["cid"]) ? $context["cid"] : null);
                    echo "\"><i class=\"fa fa-plus\"></i></span>
        </a>
      ";
                } else {
                    // line 12
                    echo "        <a ";
                    if (((isset($context["display"]) ? $context["display"] : null) == "dropdown")) {
                        echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                    } else {
                        echo " class=\"collapse-toggle\"";
                    }
                    echo ">
          ";
                    // line 13
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                    echo "
          <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                    // line 14
                    echo (isset($context["cid"]) ? $context["cid"] : null);
                    echo "\"><i class=\"fa fa-plus\"></i></span>
        </a>
      ";
                }
                // line 17
                echo "     <div class=\"";
                echo ((((isset($context["display"]) ? $context["display"] : null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                echo "\" id=\"";
                echo (isset($context["cid"]) ? $context["cid"] : null);
                echo "\">
       <ul class=\"j-menu\">
         ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 20
                    echo "           ";
                    echo $context["self"]->getrenderMenu((isset($context["j3"]) ? $context["j3"] : null), $context["subitem"], (isset($context["display"]) ? $context["display"] : null));
                    echo "
         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "       </ul>
     </div>
    ";
            } else {
                // line 25
                echo "      ";
                if ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array())) {
                    // line 26
                    echo "        <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array());
                    echo "\" ";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array())), "method");
                    echo ">";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                    echo "</a>
      ";
                } else {
                    // line 28
                    echo "        <a>";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                    echo "</a>
      ";
                }
                // line 30
                echo "    ";
            }
            // line 31
            echo "  </li>
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
        return "journal3/template/journal3/module/main_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 31,  392 => 30,  386 => 28,  376 => 26,  373 => 25,  368 => 22,  359 => 20,  355 => 19,  347 => 17,  341 => 14,  337 => 13,  328 => 12,  322 => 9,  318 => 8,  305 => 7,  302 => 6,  300 => 5,  295 => 4,  292 => 3,  289 => 2,  275 => 1,  268 => 99,  261 => 97,  258 => 96,  254 => 94,  248 => 92,  246 => 91,  242 => 90,  239 => 89,  235 => 87,  229 => 85,  227 => 84,  223 => 83,  216 => 82,  213 => 81,  210 => 80,  204 => 77,  193 => 76,  190 => 75,  184 => 72,  173 => 71,  170 => 70,  165 => 67,  156 => 65,  152 => 64,  140 => 62,  137 => 61,  133 => 59,  127 => 57,  125 => 56,  117 => 55,  113 => 54,  104 => 53,  100 => 51,  94 => 49,  92 => 48,  84 => 47,  80 => 46,  67 => 45,  64 => 44,  62 => 43,  49 => 42,  46 => 41,  42 => 40,  35 => 39,  29 => 37,  26 => 36,  23 => 35,  21 => 34,  19 => 33,);
    }
}
/* {% macro renderMenu(j3, item, display) %}*/
/*   {% import _self as self %}*/
/*   {% set cid = j3.uniqueId('collapse-') %}*/
/*   <li class="{{ j3.classes(item.classes) }}">*/
/*     {% if item.items %}*/
/*       {% if item.link.href %}*/
/*         <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }} {% if display == 'dropdown' %} class="dropdown-toggle" data-toggle="dropdown" {% else %} class="collapse-toggle"{% endif %}>*/
/*           {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*           <span class="open-menu collapsed" data-toggle="collapse" data-target="#{{ cid }}"><i class="fa fa-plus"></i></span>*/
/*         </a>*/
/*       {% else %}*/
/*         <a {% if display == 'dropdown' %} class="dropdown-toggle" data-toggle="dropdown" {% else %} class="collapse-toggle"{% endif %}>*/
/*           {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*           <span class="open-menu collapsed" data-toggle="collapse" data-target="#{{ cid }}"><i class="fa fa-plus"></i></span>*/
/*         </a>*/
/*       {% endif %}*/
/*      <div class="{{ display == 'dropdown' ? 'dropdown-menu j-dropdown': 'collapse' }}" id="{{ cid }}">*/
/*        <ul class="j-menu">*/
/*          {% for subitem in item.items %}*/
/*            {{ self.renderMenu(j3, subitem, display) }}*/
/*          {% endfor %}*/
/*        </ul>*/
/*      </div>*/
/*     {% else %}*/
/*       {% if item.link.href %}*/
/*         <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }}>{{ j3.countBadge(item.title, item.link.total, item.link.classes) }}</a>*/
/*       {% else %}*/
/*         <a>{{ j3.countBadge(item.title, item.link.total, item.link.classes) }}</a>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*   </li>*/
/* {% endmacro %}*/
/* {% import _self as self %}*/
/* {% if items %}*/
/*   {% set isMobile = j3.document.hasClass('mobile-header-active') %}*/
/*   {% if first %}*/
/*   <div class="menu-trigger menu-item main-menu-item"><ul class="j-menu"><li><a>{{ j3.settings.get('menuTriggerText') }}</a></li></ul></div>*/
/*   {% endif %}*/
/*   <div id="{{ id }}" class="{{ j3.classes(classes) }}">*/
/*     <ul class="j-menu">{% for item in items %}*/
/*       {% set cid = j3.uniqueId('collapse-') %}*/
/*       <li class="{{ j3.classes(item.classes) }} {% if isMobile and item.isOpen %}open{% endif %}" {% if item.isOpen %}data-is-open{% endif %}>*/
/*         {% if item.items %}*/
/*           {% if item.link.href %}*/
/*             <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }} {% if display == 'dropdown' %} class="dropdown-toggle" data-toggle="dropdown" {% else %} class="collapse-toggle"{% endif %}>*/
/*               {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*               <span class="open-menu collapsed" data-toggle="collapse" data-target="#{{ cid }}" {% if isMobile and item.isOpen %}aria-expanded="true"{% endif %}><i class="fa fa-plus"></i></span>*/
/*               {% if item.label %}*/
/*                 <span class="menu-label">{{ item.label }}</span>*/
/*               {% endif %}*/
/*             </a>*/
/*           {% else %}*/
/*             <a {% if display == 'dropdown' %} class="dropdown-toggle" data-toggle="dropdown" {% else %} class="collapse-toggle"{% endif %}>*/
/*               {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*               <span class="open-menu collapsed" data-toggle="collapse" data-target="#{{ cid }}" {% if isMobile and item.isOpen %}aria-expanded="true"{% endif %}><i class="fa fa-plus"></i></span>*/
/*               {% if item.label %}*/
/*                 <span class="menu-label">{{ item.label }}</span>*/
/*               {% endif %}*/
/*             </a>*/
/*           {% endif %}*/
/*           {% if item.type == 'multilevel' %}*/
/*             <div class="{{ display == 'dropdown' ? 'dropdown-menu j-dropdown': 'collapse' }} {% if isMobile and item.isOpen %}in{% endif %}" id="{{ cid }}">*/
/*               <ul class="j-menu">*/
/*                 {% for subitem in item.items %}*/
/*                   {{ self.renderMenu(j3, subitem, display) }}*/
/*                 {% endfor %}*/
/*               </ul>*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if item.type == 'megamenu' %}*/
/*             <div class="{{ display == 'dropdown' ? 'dropdown-menu j-dropdown': 'collapse' }} {% if isMobile and item.isOpen %}in{% endif %}" id="{{ cid }}">*/
/*               <div class="mega-menu-content">{{ item.items }}</div>*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if item.type == 'flyout' %}*/
/*             <div class="{{ display == 'dropdown' ? 'dropdown-menu j-dropdown': 'collapse' }} {% if isMobile and item.isOpen %}in{% endif %}" id="{{ cid }}">*/
/*               {{ item.items }}*/
/*             </div>*/
/*           {% endif %}*/
/*         {% else %}*/
/*           {% if item.link.href %}*/
/*             <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }}>*/
/*               {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*               {% if item.label %}*/
/*                 <span class="menu-label">{{ item.label }}</span>*/
/*               {% endif %}*/
/*             </a>*/
/*           {% else %}*/
/*             <a>*/
/*               {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*               {% if item.label %}*/
/*                 <span class="menu-label">{{ item.label }}</span>*/
/*               {% endif %}*/
/*             </a>*/
/*           {% endif %}*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* {% endif %}*/
/* */
