<?php

/* journal3/template/journal3/css.twig */
class __TwigTemplate_1e65d0ea09e20ca02d7a60ff28c3540f78756995fd71151f596d058feb8e64be extends Twig_Template
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
        echo "<style>
  /*No top bar not over*/
  ";
        // line 3
        if (((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "stickyStatus", array()) &&  !$this->getAttribute((isset($context["data"]) ? $context["data"] : null), "stickyFullHomePadding", array())) &&  !$this->getAttribute((isset($context["data"]) ? $context["data"] : null), "topBarStatus", array())) && twig_in_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerType", array()), array(0 => "slim", 1 => "compact")))) {
            // line 4
            echo "  .desktop body{
    padding-top: ";
            // line 5
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerCompactHeight", array());
            echo "px
  }
  .desktop header{
    width: 100%;
    top: 0;
    position: fixed;
  }
  .desktop.popup-open header.header-compact {
    padding-right: 17px;
  }
  .desktop.popup-open.webkit header.header-compact {
    padding-right: ";
            // line 16
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "scrollBarWidth", array());
            echo "px;
  }
  ";
        }
        // line 19
        echo "
  /*No top bar over*/
  ";
        // line 21
        if (((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "stickyStatus", array()) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "stickyFullHomePadding", array())) &&  !$this->getAttribute((isset($context["data"]) ? $context["data"] : null), "topBarStatus", array())) && twig_in_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerType", array()), array(0 => "slim", 1 => "compact")))) {
            // line 22
            echo "  .desktop:not(.route-common-home) body{
    padding-top: ";
            // line 23
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerCompactHeight", array());
            echo "px
  }
  .desktop header{
    width: 100%;
    top: 0;
    position: fixed;
  }
  .desktop.popup-open header.header-compact {
    padding-right: 17px;
  }
  .desktop.popup-open.webkit header.header-compact {
    padding-right: ";
            // line 34
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "scrollBarWidth", array());
            echo "px;
  }
  ";
        }
        // line 37
        echo "

  /*Top bar not over*/
  ";
        // line 40
        if (((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "stickyStatus", array()) &&  !$this->getAttribute((isset($context["data"]) ? $context["data"] : null), "stickyFullHomePadding", array())) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "topBarStatus", array())) && twig_in_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerType", array()), array(0 => "slim", 1 => "compact")))) {
            // line 41
            echo "  .desktop header{
    position: -webkit-sticky;
    position: sticky;
    top: -";
            // line 44
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerTopBarHeight", array());
            echo "px;
  }
  .popup-open .sticky-compact, .mobile-overlay .sticky-compact{
    padding-top:";
            // line 47
            echo ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerCompactHeight", array()) + $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerTopBarHeight", array()));
            echo "px;
  }
  .popup-open .sticky-compact header, .mobile-overlay .sticky-compact header {
    position: fixed;
    width: calc(100% - 12px);
  }
  ";
        }
        // line 54
        echo "
  /*Top bar over*/
  ";
        // line 56
        if (((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "stickyStatus", array()) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "stickyFullHomePadding", array())) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "topBarStatus", array())) && twig_in_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerType", array()), array(0 => "slim", 1 => "compact")))) {
            // line 57
            echo "  .desktop header{
    position: -webkit-sticky;
    position: sticky;
    top: -";
            // line 60
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerTopBarHeight", array());
            echo "px;
  }

  /*Home*/
  .desktop.route-common-home header{
    margin-bottom: -";
            // line 65
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerCompactHeight", array());
            echo "px;
  }
  .popup-open .sticky-compact, .mobile-overlay .sticky-compact{
    padding-top:";
            // line 68
            echo ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerCompactHeight", array()) + $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerTopBarHeight", array()));
            echo "px;
  }
  .popup-open.route-common-home .sticky-compact, .mobile-overlay.route-common-home .sticky-compact{
    padding-top:";
            // line 71
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerTopBarHeight", array());
            echo "px;
  }
  .popup-open .sticky-compact header, .mobile-overlay .sticky-compact header {
    position: fixed;
    width: calc(100% - 12px);
  }
  ";
        }
        // line 78
        echo "
  /*Title before breadcrumbs*/

  ";
        // line 81
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "titleBeforeBreadcrumbs", array()) && ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pageTitlePosition", array()) == "top"))) {
            // line 82
            echo "    header{
      order:-5
    }
    .breadcrumb{
      order:0
    }
    .page-title{
      order:-1
    }
  ";
        }
        // line 92
        echo "
  ";
        // line 93
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerMiniSearchDisplay", array()) == "page")) {
            // line 94
            echo "  .mini-search .tt-menu{
    padding-left:";
            // line 95
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerMiniSearchDropdownPadding", array());
            echo "px;
    padding-right:";
            // line 96
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headerMiniSearchDropdownPadding", array());
            echo "px;
  }
  ";
        }
        // line 99
        echo "
  /*Shipping payment visibility*/
  ";
        // line 101
        if ((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sectionShippingVisibility", array()) != "true") && ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sectionPaymentVisibility", array()) != "true"))) {
            // line 102
            echo "  .quick-checkout-wrapper .shipping-payment{
    display: none;
  }
  ";
        }
        // line 106
        echo "
  /*Site overlay offset*/
  @media only screen and (max-width: ";
        // line 108
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "globalPageContentWidth", array());
        echo "px){
    .desktop-main-menu-wrapper .main-menu>.j-menu>.first-dropdown::before{
      transform: none !important;
    }
  }
</style>

";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 108,  195 => 106,  189 => 102,  187 => 101,  183 => 99,  177 => 96,  173 => 95,  170 => 94,  168 => 93,  165 => 92,  153 => 82,  151 => 81,  146 => 78,  136 => 71,  130 => 68,  124 => 65,  116 => 60,  111 => 57,  109 => 56,  105 => 54,  95 => 47,  89 => 44,  84 => 41,  82 => 40,  77 => 37,  71 => 34,  57 => 23,  54 => 22,  52 => 21,  48 => 19,  42 => 16,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <style>*/
/*   /*No top bar not over*//* */
/*   {% if data.stickyStatus and not data.stickyFullHomePadding and not data.topBarStatus and data.headerType in ['slim', 'compact'] %}*/
/*   .desktop body{*/
/*     padding-top: {{ data.headerCompactHeight}}px*/
/*   }*/
/*   .desktop header{*/
/*     width: 100%;*/
/*     top: 0;*/
/*     position: fixed;*/
/*   }*/
/*   .desktop.popup-open header.header-compact {*/
/*     padding-right: 17px;*/
/*   }*/
/*   .desktop.popup-open.webkit header.header-compact {*/
/*     padding-right: {{ data.scrollBarWidth}}px;*/
/*   }*/
/*   {% endif %}*/
/* */
/*   /*No top bar over*//* */
/*   {% if data.stickyStatus and data.stickyFullHomePadding and not data.topBarStatus and data.headerType in ['slim', 'compact'] %}*/
/*   .desktop:not(.route-common-home) body{*/
/*     padding-top: {{ data.headerCompactHeight}}px*/
/*   }*/
/*   .desktop header{*/
/*     width: 100%;*/
/*     top: 0;*/
/*     position: fixed;*/
/*   }*/
/*   .desktop.popup-open header.header-compact {*/
/*     padding-right: 17px;*/
/*   }*/
/*   .desktop.popup-open.webkit header.header-compact {*/
/*     padding-right: {{ data.scrollBarWidth}}px;*/
/*   }*/
/*   {% endif %}*/
/* */
/* */
/*   /*Top bar not over*//* */
/*   {% if data.stickyStatus and not data.stickyFullHomePadding and data.topBarStatus and data.headerType in ['slim', 'compact'] %}*/
/*   .desktop header{*/
/*     position: -webkit-sticky;*/
/*     position: sticky;*/
/*     top: -{{ data.headerTopBarHeight}}px;*/
/*   }*/
/*   .popup-open .sticky-compact, .mobile-overlay .sticky-compact{*/
/*     padding-top:{{ data.headerCompactHeight + data.headerTopBarHeight}}px;*/
/*   }*/
/*   .popup-open .sticky-compact header, .mobile-overlay .sticky-compact header {*/
/*     position: fixed;*/
/*     width: calc(100% - 12px);*/
/*   }*/
/*   {% endif %}*/
/* */
/*   /*Top bar over*//* */
/*   {% if data.stickyStatus and data.stickyFullHomePadding and data.topBarStatus and data.headerType in ['slim', 'compact'] %}*/
/*   .desktop header{*/
/*     position: -webkit-sticky;*/
/*     position: sticky;*/
/*     top: -{{ data.headerTopBarHeight}}px;*/
/*   }*/
/* */
/*   /*Home*//* */
/*   .desktop.route-common-home header{*/
/*     margin-bottom: -{{ data.headerCompactHeight}}px;*/
/*   }*/
/*   .popup-open .sticky-compact, .mobile-overlay .sticky-compact{*/
/*     padding-top:{{ data.headerCompactHeight + data.headerTopBarHeight}}px;*/
/*   }*/
/*   .popup-open.route-common-home .sticky-compact, .mobile-overlay.route-common-home .sticky-compact{*/
/*     padding-top:{{data.headerTopBarHeight}}px;*/
/*   }*/
/*   .popup-open .sticky-compact header, .mobile-overlay .sticky-compact header {*/
/*     position: fixed;*/
/*     width: calc(100% - 12px);*/
/*   }*/
/*   {% endif %}*/
/* */
/*   /*Title before breadcrumbs*//* */
/* */
/*   {% if data.titleBeforeBreadcrumbs and data.pageTitlePosition == 'top' %}*/
/*     header{*/
/*       order:-5*/
/*     }*/
/*     .breadcrumb{*/
/*       order:0*/
/*     }*/
/*     .page-title{*/
/*       order:-1*/
/*     }*/
/*   {% endif %}*/
/* */
/*   {% if data.headerMiniSearchDisplay == 'page' %}*/
/*   .mini-search .tt-menu{*/
/*     padding-left:{{data.headerMiniSearchDropdownPadding}}px;*/
/*     padding-right:{{data.headerMiniSearchDropdownPadding}}px;*/
/*   }*/
/*   {% endif %}*/
/* */
/*   /*Shipping payment visibility*//* */
/*   {% if data.sectionShippingVisibility != 'true' and data.sectionPaymentVisibility != 'true' %}*/
/*   .quick-checkout-wrapper .shipping-payment{*/
/*     display: none;*/
/*   }*/
/*   {% endif %}*/
/* */
/*   /*Site overlay offset*//* */
/*   @media only screen and (max-width: {{data.globalPageContentWidth}}px){*/
/*     .desktop-main-menu-wrapper .main-menu>.j-menu>.first-dropdown::before{*/
/*       transform: none !important;*/
/*     }*/
/*   }*/
/* </style>*/
/* */
/* */
