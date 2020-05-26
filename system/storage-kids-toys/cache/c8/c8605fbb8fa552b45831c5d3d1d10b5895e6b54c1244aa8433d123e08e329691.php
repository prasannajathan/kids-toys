<?php

/* journal3/template/journal3/module/popup.twig */
class __TwigTemplate_cee7c7b3ed63b9bbb49d62fd698c5ed2490560a277f7261558e7b79b9176ef76 extends Twig_Template
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
        if ((isset($context["iframe"]) ? $context["iframe"] : null)) {
            // line 2
            echo "  ";
            if (((isset($context["contentType"]) ? $context["contentType"] : null) == "image")) {
                // line 3
                echo "    <div class=\"popup-content\">
      <img src=\"";
                // line 4
                echo (isset($context["image"]) ? $context["image"] : null);
                echo "\" alt=\"\" width=\"";
                echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "width", array());
                echo "\" height=\"";
                echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "height", array());
                echo "\"/>
    </div>
  ";
            } elseif ((            // line 6
(isset($context["contentType"]) ? $context["contentType"] : null) == "text")) {
                // line 7
                echo "    <div class=\"popup-content\">
      ";
                // line 8
                echo (isset($context["text"]) ? $context["text"] : null);
                echo "
    </div>
  ";
            } else {
                // line 11
                echo "    ";
                echo (isset($context["content"]) ? $context["content"] : null);
                echo "
  ";
            }
        } else {
            // line 14
            echo "  <div class=\"popup-wrapper ";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\" data-options='";
            echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null));
            echo "'>
    <div class=\"popup-container\">
      ";
            // line 16
            if ((isset($context["closeButton"]) ? $context["closeButton"] : null)) {
                // line 17
                echo "        <button class=\"btn popup-close\"></button>
      ";
            }
            // line 19
            echo "      <div class=\"popup-body\">
        <div class=\"popup-inner-body\">
          ";
            // line 21
            if ((isset($context["headerText"]) ? $context["headerText"] : null)) {
                // line 22
                echo "            <div class=\"title popup-header\">";
                echo (isset($context["headerText"]) ? $context["headerText"] : null);
                echo "</div>
          ";
            }
            // line 24
            echo "          ";
            if (((isset($context["ajax"]) ? $context["ajax"] : null) && ((isset($context["contentType"]) ? $context["contentType"] : null) == "grid"))) {
                // line 25
                echo "            <div class=\"journal-loading\"><i class=\"fa fa-spinner fa-spin\"></i></div>
            <iframe src=\"index.php?route=journal3/popup/page&module_id=";
                // line 26
                echo (isset($context["module_id"]) ? $context["module_id"] : null);
                echo "&popup=module\" width=\"100%\" height=\"100%\" frameborder=\"0\" onload=\"this.height = this.contentWindow.document.querySelector('.site-wrapper').offsetHeight; \$(this).prev('.journal-loading').hide();\"></iframe>
          ";
            } elseif ((            // line 27
(isset($context["contentType"]) ? $context["contentType"] : null) == "image")) {
                // line 28
                echo "            <div class=\"popup-content\">
              <img src=\"";
                // line 29
                echo (isset($context["image"]) ? $context["image"] : null);
                echo "\" alt=\"\" width=\"";
                echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "width", array());
                echo "\" height=\"";
                echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "height", array());
                echo "\"/>
            </div>
          ";
            } elseif ((            // line 31
(isset($context["contentType"]) ? $context["contentType"] : null) == "text")) {
                // line 32
                echo "            <div class=\"popup-content\">
              ";
                // line 33
                echo (isset($context["text"]) ? $context["text"] : null);
                echo "
            </div>
          ";
            } else {
                // line 36
                echo "            ";
                echo (isset($context["content"]) ? $context["content"] : null);
                echo "
          ";
            }
            // line 38
            echo "
          ";
            // line 39
            if ((isset($context["footer"]) ? $context["footer"] : null)) {
                // line 40
                echo "            <div class=\"popup-footer\">
              ";
                // line 41
                if (((isset($context["button1"]) ? $context["button1"] : null) || (isset($context["button2"]) ? $context["button2"] : null))) {
                    // line 42
                    echo "                <div class=\"popup-buttons\">
                  ";
                    // line 43
                    if ((isset($context["button1"]) ? $context["button1"] : null)) {
                        // line 44
                        echo "                    <a class=\"btn btn-popup btn-popup-1\"";
                        if ($this->getAttribute((isset($context["button1Link"]) ? $context["button1Link"] : null), "href", array())) {
                            echo " href=\"";
                            echo $this->getAttribute((isset($context["button1Link"]) ? $context["button1Link"] : null), "href", array());
                            echo "\"";
                        }
                        echo "><span class=\"btn-text\">";
                        echo (isset($context["button1Text"]) ? $context["button1Text"] : null);
                        echo "</span></a>
                  ";
                    }
                    // line 46
                    echo "
                  ";
                    // line 47
                    if ((isset($context["button2"]) ? $context["button2"] : null)) {
                        // line 48
                        echo "                    <a class=\"btn btn-popup btn-popup-2\"";
                        if ($this->getAttribute((isset($context["button2Link"]) ? $context["button2Link"] : null), "href", array())) {
                            echo " href=\"";
                            echo $this->getAttribute((isset($context["button2Link"]) ? $context["button2Link"] : null), "href", array());
                            echo "\"";
                        }
                        echo "><span class=\"btn-text\">";
                        echo (isset($context["button2Text"]) ? $context["button2Text"] : null);
                        echo "</span></a>
                  ";
                    }
                    // line 50
                    echo "                </div>
              ";
                }
                // line 52
                echo "              ";
                if (( !(isset($context["ajax"]) ? $context["ajax"] : null) && (isset($context["doNotShowAgain"]) ? $context["doNotShowAgain"] : null))) {
                    // line 53
                    echo "                <label class=\"popup-dont-show\">
                  <input type=\"checkbox\" ";
                    // line 54
                    if ((isset($context["doNotShowAgainChecked"]) ? $context["doNotShowAgainChecked"] : null)) {
                        echo "checked";
                    }
                    echo "/>
                  <span>";
                    // line 55
                    echo (isset($context["doNotShowAgainText"]) ? $context["doNotShowAgainText"] : null);
                    echo "</span>
                </label>
              ";
                }
                // line 58
                echo "            </div>
          ";
            }
            // line 60
            echo "        </div>
      </div>
    </div>
    <div class=\"popup-bg ";
            // line 63
            if ((isset($context["closeButton"]) ? $context["closeButton"] : null)) {
                echo "popup-bg-closable";
            }
            echo "\"></div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 63,  191 => 60,  187 => 58,  181 => 55,  175 => 54,  172 => 53,  169 => 52,  165 => 50,  153 => 48,  151 => 47,  148 => 46,  136 => 44,  134 => 43,  131 => 42,  129 => 41,  126 => 40,  124 => 39,  121 => 38,  115 => 36,  109 => 33,  106 => 32,  104 => 31,  95 => 29,  92 => 28,  90 => 27,  86 => 26,  83 => 25,  80 => 24,  74 => 22,  72 => 21,  68 => 19,  64 => 17,  62 => 16,  54 => 14,  47 => 11,  41 => 8,  38 => 7,  36 => 6,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if iframe %}*/
/*   {% if contentType == 'image' %}*/
/*     <div class="popup-content">*/
/*       <img src="{{ image }}" alt="" width="{{ imageDimensions.width }}" height="{{ imageDimensions.height }}"/>*/
/*     </div>*/
/*   {% elseif contentType == 'text' %}*/
/*     <div class="popup-content">*/
/*       {{ text }}*/
/*     </div>*/
/*   {% else %}*/
/*     {{ content }}*/
/*   {% endif %}*/
/* {% else %}*/
/*   <div class="popup-wrapper {{ j3.classes(classes) }}" data-options='{{ options|json_encode }}'>*/
/*     <div class="popup-container">*/
/*       {% if closeButton %}*/
/*         <button class="btn popup-close"></button>*/
/*       {% endif %}*/
/*       <div class="popup-body">*/
/*         <div class="popup-inner-body">*/
/*           {% if headerText %}*/
/*             <div class="title popup-header">{{ headerText }}</div>*/
/*           {% endif %}*/
/*           {% if ajax and contentType == 'grid' %}*/
/*             <div class="journal-loading"><i class="fa fa-spinner fa-spin"></i></div>*/
/*             <iframe src="index.php?route=journal3/popup/page&module_id={{ module_id }}&popup=module" width="100%" height="100%" frameborder="0" onload="this.height = this.contentWindow.document.querySelector('.site-wrapper').offsetHeight; $(this).prev('.journal-loading').hide();"></iframe>*/
/*           {% elseif contentType == 'image' %}*/
/*             <div class="popup-content">*/
/*               <img src="{{ image }}" alt="" width="{{ imageDimensions.width }}" height="{{ imageDimensions.height }}"/>*/
/*             </div>*/
/*           {% elseif contentType == 'text' %}*/
/*             <div class="popup-content">*/
/*               {{ text }}*/
/*             </div>*/
/*           {% else %}*/
/*             {{ content }}*/
/*           {% endif %}*/
/* */
/*           {% if footer %}*/
/*             <div class="popup-footer">*/
/*               {% if button1 or button2 %}*/
/*                 <div class="popup-buttons">*/
/*                   {% if button1 %}*/
/*                     <a class="btn btn-popup btn-popup-1"{% if button1Link.href %} href="{{ button1Link.href }}"{% endif %}><span class="btn-text">{{ button1Text }}</span></a>*/
/*                   {% endif %}*/
/* */
/*                   {% if button2 %}*/
/*                     <a class="btn btn-popup btn-popup-2"{% if button2Link.href %} href="{{ button2Link.href }}"{% endif %}><span class="btn-text">{{ button2Text }}</span></a>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if not ajax and doNotShowAgain %}*/
/*                 <label class="popup-dont-show">*/
/*                   <input type="checkbox" {% if doNotShowAgainChecked %}checked{% endif %}/>*/
/*                   <span>{{ doNotShowAgainText }}</span>*/
/*                 </label>*/
/*               {% endif %}*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="popup-bg {% if closeButton %}popup-bg-closable{% endif %}"></div>*/
/*   </div>*/
/* {% endif %}*/
/* */
