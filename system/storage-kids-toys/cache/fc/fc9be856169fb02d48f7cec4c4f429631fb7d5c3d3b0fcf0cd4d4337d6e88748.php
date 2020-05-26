<?php

/* journal3/template/journal3/module/notification.twig */
class __TwigTemplate_529a4a31930af598dd8cd539381ec167d350dab9eefa2eb565a7bac78026b4e1 extends Twig_Template
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
        echo "<div class=\"notification-wrapper notification-wrapper-bottom\">
  <div class=\"";
        // line 2
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\" data-options='";
        echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null));
        echo "'>
    <button class=\"btn notification-close\">";
        // line 3
        echo (isset($context["notificationCloseText"]) ? $context["notificationCloseText"] : null);
        echo "</button>
    <div class=\"notification-content\">
      <div>
        <div class=\"notification-title\">";
        // line 6
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</div>
        <div class=\"notification-text\">";
        // line 7
        echo (isset($context["text"]) ? $context["text"] : null);
        echo "</div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/notification.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 6,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="notification-wrapper notification-wrapper-bottom">*/
/*   <div class="{{ j3.classes(classes) }}" data-options='{{ options|json_encode }}'>*/
/*     <button class="btn notification-close">{{ notificationCloseText }}</button>*/
/*     <div class="notification-content">*/
/*       <div>*/
/*         <div class="notification-title">{{ title }}</div>*/
/*         <div class="notification-text">{{ text }}</div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
