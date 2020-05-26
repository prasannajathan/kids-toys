<?php

/* journal3/template/journal3/post_grid.twig */
class __TwigTemplate_9c908ad1e2df48608bd532e22de08265301cf714de6e7ef0e74499e5d2dd2c05 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "  <div class=\"post-layout ";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["post"], "classes", array())), "method");
            echo "\">
    <div class=\"post-thumb\">
      <div class=\"image\">
        ";
            // line 5
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "datePosition"), "method") == "image")) {
                // line 6
                echo "        <span class=\"p-date p-date-image\">";
                echo $this->getAttribute($context["post"], "date", array());
                echo "</span>
        ";
            }
            // line 8
            echo "        <a href=\"";
            echo $this->getAttribute($context["post"], "href", array());
            echo "\">
          ";
            // line 9
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceLazyLoadImagesStatus"), "method")) {
                // line 10
                echo "            <img src=\"";
                echo (isset($context["dummy_image"]) ? $context["dummy_image"] : null);
                echo "\" data-src=\"";
                echo $this->getAttribute($context["post"], "thumb", array());
                echo "\" ";
                if ($this->getAttribute($context["post"], "thumb2x", array())) {
                    echo "data-srcset=\"";
                    echo $this->getAttribute($context["post"], "thumb", array());
                    echo " 1x, ";
                    echo $this->getAttribute($context["post"], "thumb2x", array());
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo (isset($context["image_width"]) ? $context["image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["image_height"]) ? $context["image_height"] : null);
                echo "\" alt=\"";
                echo $this->getAttribute($context["post"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["post"], "name", array());
                echo "\" class=\"img-responsive lazyload\"/>
          ";
            } else {
                // line 12
                echo "            <img src=\"";
                echo $this->getAttribute($context["post"], "thumb", array());
                echo "\" ";
                if ($this->getAttribute($context["post"], "thumb2x", array())) {
                    echo "srcset=\"";
                    echo $this->getAttribute($context["post"], "thumb", array());
                    echo " 1x, ";
                    echo $this->getAttribute($context["post"], "thumb2x", array());
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo (isset($context["image_width"]) ? $context["image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["image_height"]) ? $context["image_height"] : null);
                echo "\" alt=\"";
                echo $this->getAttribute($context["post"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["post"], "name", array());
                echo "\" class=\"img-responsive\"/>
          ";
            }
            // line 14
            echo "        </a>
      </div>

      <div class=\"caption\">

        <div class=\"post-stats\">
          <span class=\"p-author\">";
            // line 20
            echo $this->getAttribute($context["post"], "author", array());
            echo "</span>
          ";
            // line 21
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "datePosition"), "method") == "default")) {
                // line 22
                echo "          <span class=\"p-date p-date-default\">";
                echo $this->getAttribute($context["post"], "date", array());
                echo "</span>
          ";
            }
            // line 24
            echo "          <span class=\"p-comment\">";
            echo $this->getAttribute($context["post"], "comments", array());
            echo "</span>
          <span class=\"p-view\">";
            // line 25
            echo $this->getAttribute($context["post"], "views", array());
            echo "</span>
        </div>

        <div class=\"name\"><a href=\"";
            // line 28
            echo $this->getAttribute($context["post"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["post"], "name", array());
            echo "</a></div>

        <div class=\"description\">";
            // line 30
            echo $this->getAttribute($context["post"], "description", array());
            echo "</div>

        <div class=\"button-group\">
          <a class=\"btn btn-read-more\" href=\"";
            // line 33
            echo $this->getAttribute($context["post"], "href", array());
            echo "\" ";
            if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => "PostGridButtonDisplay", 1 => $context), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => "PostGridButtonTooltipStatus", 1 => $context), "method"))) {
                echo "  data-toggle=\"tooltip\" data-tooltip-class=\"";
                echo (((isset($context["module_id"]) ? $context["module_id"] : null)) ? ((("module-blog_posts-" . (isset($context["module_id"]) ? $context["module_id"] : null)) . " module-blog_posts-grid")) : ("post-grid"));
                echo " read-more-tooltip\" data-placement=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => "PostGridButtonTooltipPosition", 1 => $context), "method");
                echo "\" title=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "blogReadMoreButtonText"), "method");
                echo "\" ";
            }
            echo ">
            <span class=\"btn-text\">";
            // line 34
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "blogReadMoreButtonText"), "method");
            echo "</span>
          </a>
        </div>
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/post_grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 34,  135 => 33,  129 => 30,  122 => 28,  116 => 25,  111 => 24,  105 => 22,  103 => 21,  99 => 20,  91 => 14,  69 => 12,  45 => 10,  43 => 9,  38 => 8,  32 => 6,  30 => 5,  23 => 2,  19 => 1,);
    }
}
/* {% for post in posts %}*/
/*   <div class="post-layout {{ j3.classes(post.classes) }}">*/
/*     <div class="post-thumb">*/
/*       <div class="image">*/
/*         {% if j3.settings.get('datePosition') == 'image' %}*/
/*         <span class="p-date p-date-image">{{ post.date }}</span>*/
/*         {% endif %}*/
/*         <a href="{{ post.href }}">*/
/*           {% if j3.settings.get('performanceLazyLoadImagesStatus') %}*/
/*             <img src="{{ dummy_image }}" data-src="{{ post.thumb }}" {% if post.thumb2x %}data-srcset="{{ post.thumb }} 1x, {{ post.thumb2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ post.name }}" title="{{ post.name }}" class="img-responsive lazyload"/>*/
/*           {% else %}*/
/*             <img src="{{ post.thumb }}" {% if post.thumb2x %}srcset="{{ post.thumb }} 1x, {{ post.thumb2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ post.name }}" title="{{ post.name }}" class="img-responsive"/>*/
/*           {% endif %}*/
/*         </a>*/
/*       </div>*/
/* */
/*       <div class="caption">*/
/* */
/*         <div class="post-stats">*/
/*           <span class="p-author">{{ post.author }}</span>*/
/*           {% if j3.settings.get('datePosition') == 'default' %}*/
/*           <span class="p-date p-date-default">{{ post.date }}</span>*/
/*           {% endif %}*/
/*           <span class="p-comment">{{ post.comments }}</span>*/
/*           <span class="p-view">{{ post.views }}</span>*/
/*         </div>*/
/* */
/*         <div class="name"><a href="{{ post.href }}">{{ post.name }}</a></div>*/
/* */
/*         <div class="description">{{ post.description }}</div>*/
/* */
/*         <div class="button-group">*/
/*           <a class="btn btn-read-more" href="{{ post.href }}" {% if (j3.settings.getIn('PostGridButtonDisplay', _context) == "icon") and (j3.settings.getIn('PostGridButtonTooltipStatus', _context)) %}  data-toggle="tooltip" data-tooltip-class="{{ module_id ? 'module-blog_posts-' ~ module_id ~ ' module-blog_posts-grid' : 'post-grid' }} read-more-tooltip" data-placement="{{ j3.settings.getIn('PostGridButtonTooltipPosition', _context) }}" title="{{ j3.settings.get('blogReadMoreButtonText') }}" {% endif %}>*/
/*             <span class="btn-text">{{ j3.settings.get('blogReadMoreButtonText') }}</span>*/
/*           </a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endfor %}*/
/* */
