<?php

/* journal3/template/common/currency.twig */
class __TwigTemplate_f66501b72d46aeeb13a1dd5c839c3c3440acf4ddd888254c35b0bb3336058260 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCurrencyStatus"), "method")) {
            // line 2
            if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
                // line 3
                echo "  ";
                $context["current_currency"] = null;
                // line 4
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                    // line 5
                    echo "    ";
                    if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                        // line 6
                        echo "      ";
                        $context["current_currency"] = $context["currency"];
                        // line 7
                        echo "    ";
                    }
                    // line 8
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "  <div id=\"currency\" class=\"currency\">
    <form action=\"";
                // line 10
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
      <div class=\"dropdown drop-menu\">
        <button type=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
          <span class=\"currency-symbol-title\">
            ";
                // line 14
                if ($this->getAttribute((isset($context["current_currency"]) ? $context["current_currency"] : null), "symbol_left", array())) {
                    // line 15
                    echo "              <span class=\"symbol\">";
                    echo $this->getAttribute((isset($context["current_currency"]) ? $context["current_currency"] : null), "symbol_left", array());
                    echo "</span>
              <span class=\"currency-title\">";
                    // line 16
                    echo $this->getAttribute((isset($context["current_currency"]) ? $context["current_currency"] : null), "title", array());
                    echo "</span>
              <span class=\"currency-code\">";
                    // line 17
                    echo $this->getAttribute((isset($context["current_currency"]) ? $context["current_currency"] : null), "code", array());
                    echo "</span>
            ";
                } else {
                    // line 19
                    echo "              <span class=\"symbol\">";
                    echo $this->getAttribute((isset($context["current_currency"]) ? $context["current_currency"] : null), "symbol_right", array());
                    echo "</span>
              <span class=\"currency-title\">";
                    // line 20
                    echo $this->getAttribute((isset($context["current_currency"]) ? $context["current_currency"] : null), "title", array());
                    echo "</span>
              <span class=\"currency-code\">";
                    // line 21
                    echo $this->getAttribute((isset($context["current_currency"]) ? $context["current_currency"] : null), "code", array());
                    echo "</span>
            ";
                }
                // line 23
                echo "          </span>
        </button>
        <div class=\"dropdown-menu j-dropdown\">
          <ul class=\"j-menu\">
            ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                    // line 28
                    echo "              ";
                    if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                        // line 29
                        echo "                <li>
                  <a class=\"currency-select\" data-name=\"";
                        // line 30
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "\">
                    <span class=\"currency-symbol\">";
                        // line 31
                        echo $this->getAttribute($context["currency"], "symbol_left", array());
                        echo "</span>
                    <span class=\"currency-title-dropdown\">";
                        // line 32
                        echo $this->getAttribute($context["currency"], "title", array());
                        echo "</span>
                    <span class=\"currency-code-dropdown\">";
                        // line 33
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "</span>
                  </a>
                </li>
              ";
                    } else {
                        // line 37
                        echo "                <li>
                  <a class=\"currency-select\" data-name=\"";
                        // line 38
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "\">
                    <span class=\"currency-symbol\">";
                        // line 39
                        echo $this->getAttribute($context["currency"], "symbol_right", array());
                        echo "</span>
                    <span class=\"currency-title-dropdown\">";
                        // line 40
                        echo $this->getAttribute($context["currency"], "title", array());
                        echo "</span>
                    <span class=\"currency-code-dropdown\">";
                        // line 41
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "</span>
                  </a>
                </li>
              ";
                    }
                    // line 45
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "          </ul>
        </div>
      </div>
      <input type=\"hidden\" name=\"code\" value=\"\"/>
      <input type=\"hidden\" name=\"redirect\" value=\"";
                // line 50
                echo (isset($context["redirect"]) ? $context["redirect"] : null);
                echo "\"/>
    </form>
  </div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 50,  149 => 46,  143 => 45,  136 => 41,  132 => 40,  128 => 39,  124 => 38,  121 => 37,  114 => 33,  110 => 32,  106 => 31,  102 => 30,  99 => 29,  96 => 28,  92 => 27,  86 => 23,  81 => 21,  77 => 20,  72 => 19,  67 => 17,  63 => 16,  58 => 15,  56 => 14,  49 => 10,  46 => 9,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if j3.settings.get('catalogCurrencyStatus') %}*/
/* {% if currencies|length > 1 %}*/
/*   {% set current_currency = null %}*/
/*   {% for currency in currencies %}*/
/*     {% if currency.code == code %}*/
/*       {% set current_currency = currency %}*/
/*     {% endif %}*/
/*   {% endfor %}*/
/*   <div id="currency" class="currency">*/
/*     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/*       <div class="dropdown drop-menu">*/
/*         <button type="button" class="dropdown-toggle" data-toggle="dropdown">*/
/*           <span class="currency-symbol-title">*/
/*             {% if current_currency.symbol_left %}*/
/*               <span class="symbol">{{ current_currency.symbol_left }}</span>*/
/*               <span class="currency-title">{{ current_currency.title }}</span>*/
/*               <span class="currency-code">{{ current_currency.code }}</span>*/
/*             {% else %}*/
/*               <span class="symbol">{{ current_currency.symbol_right }}</span>*/
/*               <span class="currency-title">{{ current_currency.title }}</span>*/
/*               <span class="currency-code">{{ current_currency.code }}</span>*/
/*             {% endif %}*/
/*           </span>*/
/*         </button>*/
/*         <div class="dropdown-menu j-dropdown">*/
/*           <ul class="j-menu">*/
/*             {% for currency in currencies %}*/
/*               {% if currency.symbol_left %}*/
/*                 <li>*/
/*                   <a class="currency-select" data-name="{{ currency.code }}">*/
/*                     <span class="currency-symbol">{{ currency.symbol_left }}</span>*/
/*                     <span class="currency-title-dropdown">{{ currency.title }}</span>*/
/*                     <span class="currency-code-dropdown">{{ currency.code }}</span>*/
/*                   </a>*/
/*                 </li>*/
/*               {% else %}*/
/*                 <li>*/
/*                   <a class="currency-select" data-name="{{ currency.code }}">*/
/*                     <span class="currency-symbol">{{ currency.symbol_right }}</span>*/
/*                     <span class="currency-title-dropdown">{{ currency.title }}</span>*/
/*                     <span class="currency-code-dropdown">{{ currency.code }}</span>*/
/*                   </a>*/
/*                 </li>*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       <input type="hidden" name="code" value=""/>*/
/*       <input type="hidden" name="redirect" value="{{ redirect }}"/>*/
/*     </form>*/
/*   </div>*/
/* {% endif %}*/
/* {% endif %}*/
/* */
