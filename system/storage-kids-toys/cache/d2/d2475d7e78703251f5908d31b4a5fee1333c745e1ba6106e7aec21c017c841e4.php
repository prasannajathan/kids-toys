<?php

/* journal3/template/product/review.twig */
class __TwigTemplate_a92055e75792a5ab9edea46a86d6a6aef5cc8d5aaa75281ff2648e4e8a5c3631 extends Twig_Template
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
        if ((isset($context["reviews"]) ? $context["reviews"] : null)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                echo "<table class=\"table table-striped table-bordered\">
  <tr>
    <td style=\"width: 50%;\"><strong>";
                // line 5
                echo $this->getAttribute($context["review"], "author", array());
                echo "</strong></td>
    <td class=\"text-right\">";
                // line 6
                echo $this->getAttribute($context["review"], "date_added", array());
                echo "</td>
  </tr>
  <tr>
    <td colspan=\"2\">
      <p>";
                // line 10
                echo $this->getAttribute($context["review"], "text", array());
                echo "</p>
     <div class=\"rating\">
       <div class=\"rating-stars\">
           ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 14
                    echo "               ";
                    if (($this->getAttribute($context["review"], "rating", array()) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 15
                    echo "           ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "       </div>
     </div>
    </td>
  </tr>
</table>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "<div class=\"pagination-results\">
<div class=\"text-left\">";
            // line 23
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
</div>
";
        } else {
            // line 26
            echo "<p>";
            echo (isset($context["text_no_reviews"]) ? $context["text_no_reviews"] : null);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  77 => 23,  74 => 22,  63 => 16,  57 => 15,  50 => 14,  46 => 13,  40 => 10,  33 => 6,  29 => 5,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if reviews %}*/
/* {% for review in reviews %}*/
/* <table class="table table-striped table-bordered">*/
/*   <tr>*/
/*     <td style="width: 50%;"><strong>{{ review.author }}</strong></td>*/
/*     <td class="text-right">{{ review.date_added }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td colspan="2">*/
/*       <p>{{ review.text }}</p>*/
/*      <div class="rating">*/
/*        <div class="rating-stars">*/
/*            {% for i in 1..5 %}*/
/*                {% if review.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %}*/
/*            {% endfor %}*/
/*        </div>*/
/*      </div>*/
/*     </td>*/
/*   </tr>*/
/* </table>*/
/* {% endfor %}*/
/* <div class="pagination-results">*/
/* <div class="text-left">{{ pagination }}</div>*/
/* </div>*/
/* {% else %}*/
/* <p>{{ text_no_reviews }}</p>*/
/* {% endif %}*/
