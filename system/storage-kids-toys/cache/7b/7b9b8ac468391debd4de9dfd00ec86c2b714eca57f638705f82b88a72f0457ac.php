<?php

/* journal3/template/journal3/module/product_blocks_reviews.twig */
class __TwigTemplate_dbbbaa7a29d70f5a37c497be6aafc4ee139aaf39eae4740fbcd8c9e811d47bd6 extends Twig_Template
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
        echo "<form class=\"form-horizontal\" id=\"form-review\">
  <div id=\"review\"></div>
  <h4>";
        // line 3
        echo (isset($context["text_write"]) ? $context["text_write"] : null);
        echo "</h4>
  ";
        // line 4
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 5
            echo "  ";
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 6
                echo "    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-name\">";
                // line 7
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"name\" value=\"";
                // line 9
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-review\">";
                // line 13
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
      <div class=\"col-sm-10\">
        <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
        <div class=\"help-block\">";
                // line 16
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\">";
                // line 20
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>

      <div class=\"col-sm-10 rate\">
        <span>";
                // line 23
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "</span>
        <input type=\"radio\" name=\"rating\" value=\"1\" />

        <input type=\"radio\" name=\"rating\" value=\"2\" />

        <input type=\"radio\" name=\"rating\" value=\"3\" />

        <input type=\"radio\" name=\"rating\" value=\"4\" />

        <input type=\"radio\" name=\"rating\" value=\"5\" />
        <span>";
                // line 33
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</span>
      </div>
    </div>
    ";
                // line 36
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
    <div class=\"buttons clearfix\">
      <div class=\"pull-right\">
        <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 39
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
      </div>
    </div>
  ";
            } else {
                // line 43
                echo "    ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
  ";
            }
            // line 45
            echo "  ";
        }
        // line 46
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/product_blocks_reviews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 46,  106 => 45,  100 => 43,  91 => 39,  85 => 36,  79 => 33,  66 => 23,  60 => 20,  53 => 16,  47 => 13,  40 => 9,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <form class="form-horizontal" id="form-review">*/
/*   <div id="review"></div>*/
/*   <h4>{{ text_write }}</h4>*/
/*   {% if review_status %}*/
/*   {% if review_guest %}*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label" for="input-review">{{ entry_review }}</label>*/
/*       <div class="col-sm-10">*/
/*         <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*         <div class="help-block">{{ text_note }}</div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label">{{ entry_rating }}</label>*/
/* */
/*       <div class="col-sm-10 rate">*/
/*         <span>{{ entry_bad }}</span>*/
/*         <input type="radio" name="rating" value="1" />*/
/* */
/*         <input type="radio" name="rating" value="2" />*/
/* */
/*         <input type="radio" name="rating" value="3" />*/
/* */
/*         <input type="radio" name="rating" value="4" />*/
/* */
/*         <input type="radio" name="rating" value="5" />*/
/*         <span>{{ entry_good }}</span>*/
/*       </div>*/
/*     </div>*/
/*     {{ captcha }}*/
/*     <div class="buttons clearfix">*/
/*       <div class="pull-right">*/
/*         <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*       </div>*/
/*     </div>*/
/*   {% else %}*/
/*     {{ text_login }}*/
/*   {% endif %}*/
/*   {% endif %}*/
/* </form>*/
/* */
