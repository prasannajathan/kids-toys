<?php

/* journal3/template/product/product.twig */
class __TwigTemplate_2cbeaff20c74a27dd454c1f3c4f8041ccb5a2aa3b9a57eeee1478910559fd244 extends Twig_Template
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
        $context["stylePrefix"] = (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method")) ? ("quickviewPageStyle") : ("productPageStyle"));
        // line 2
        $context["direction"] = (((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesPosition")), "method") == "left") || ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesPosition")), "method") == "right"))) ? ("vertical") : ("horizontal"));
        // line 3
        $context["carousel"] = (((isset($context["direction"]) ? $context["direction"] : null) == "vertical") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesCarousel")), "method"));
        // line 4
        $context["carouselOptions"] = array("slidesPerView" => "auto", "spaceBetween" => (($this->getAttribute($this->getAttribute(        // line 6
(isset($context["j3"]) ? $context["j3"] : null), "settings", array(), "any", false, true), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesSpacing")), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array(), "any", false, true), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesSpacing")), "method"), 0)) : (0)), "direction" =>         // line 7
(isset($context["direction"]) ? $context["direction"] : null));
        // line 9
        $context["galleryOptions"] = array("thumbWidth" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_popup_thumb.width"), "method"), "thumbConHeight" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_popup_thumb.height"), "method"), "addClass" => "lg-product-images", "mode" => $this->getAttribute($this->getAttribute(        // line 13
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryMode")), "method"), "download" => $this->getAttribute($this->getAttribute(        // line 14
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryDownload")), "method"), "fullScreen" => $this->getAttribute($this->getAttribute(        // line 15
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryFullScreen")), "method"));
        // line 17
        $context["quickviewExpand"] = ((( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method") || ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalExpandCharactersLimit"), "method") > 0) && (isset($context["description"]) ? $context["description"] : null)) && (twig_length_filter($this->env, (isset($context["description"]) ? $context["description"] : null)) <= $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalExpandCharactersLimit"), "method"))))) ? ("no-expand") : (""));
        // line 18
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
";
        // line 19
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 20
            echo "<ul class=\"breadcrumb\">
  ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 22
                echo "  <li><a href=\"";
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</a></li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "</ul>
";
            // line 25
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "top")) {
                // line 26
                echo "  <h1 class=\"title page-title\"><span>";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "</span></h1>
";
            }
            // line 28
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "top"), "method");
            echo "
<div id=\"product-product\" class=\"container\">
  <div class=\"row\">";
            // line 30
            echo (isset($context["column_left"]) ? $context["column_left"] : null);
            echo "
    <div id=\"content\" class=\"";
            // line 31
            echo (isset($context["class"]) ? $context["class"] : null);
            echo "\">
      ";
        }
        // line 33
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      ";
        // line 34
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 35
            echo "        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method"))) {
                // line 36
                echo "          <h1 class=\"title page-title\">";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "</h1>
        ";
            }
            // line 38
            echo "      ";
        }
        // line 39
        echo "      ";
        $context["classes"] = (($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => array("out-of-stock" => (        // line 40
(isset($context["product_quantity"]) ? $context["product_quantity"] : null) <= 0), "has-countdown" =>         // line 41
(isset($context["date_end"]) ? $context["date_end"] : null), "has-zero-price" =>  !        // line 42
(isset($context["product_price_value"]) ? $context["product_price_value"] : null), "has-extra-button" =>         // line 43
(isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null))), "method") . " ") .         // line 44
(isset($context["product_exclude_classes"]) ? $context["product_exclude_classes"] : null));
        // line 45
        echo "      <div class=\"product-info ";
        echo (isset($context["classes"]) ? $context["classes"] : null);
        echo "\">
        ";
        // line 46
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 47
            echo "        <div class=\"product-left\">
          <div class=\"product-image direction-";
            // line 48
            echo (isset($context["direction"]) ? $context["direction"] : null);
            echo " position-";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesPosition")), "method");
            echo "\">
            <div class=\"swiper main-image\" data-options='";
            // line 49
            echo twig_jsonencode_filter($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "carousel", array(0 => $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getJs", array(), "method"), 1 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ImageCarouselStyle")), "method"), twig_constant("JSON_FORCE_OBJECT"));
            echo "' ";
            if (((((twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null)) > 1) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesStatus")), "method")) && (isset($context["carousel"]) ? $context["carousel"] : null)) && ((isset($context["direction"]) ? $context["direction"] : null) == "vertical"))) {
                echo "style=\"width: calc(100% - ";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_additional.width"), "method");
                echo "px)\"";
            }
            echo ">
              <div class=\"swiper-container\" ";
            // line 50
            if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                echo "dir=\"rtl\"";
            }
            echo ">
                <div class=\"swiper-wrapper\">
                  ";
            // line 52
            $context["gallery"] = array();
            // line 53
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 54
                echo "                    ";
                $context["gallery"] = twig_array_merge((isset($context["gallery"]) ? $context["gallery"] : null), array(0 => array("src" => $this->getAttribute($context["image"], "popup", array()), "thumb" => $this->getAttribute($context["image"], "galleryThumb", array()), "subHtml" => (isset($context["heading_title"]) ? $context["heading_title"] : null))));
                // line 55
                echo "                    <div class=\"swiper-slide\" ";
                if (( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryStatus")), "method"))) {
                    echo " data-gallery=\".lightgallery-product-images\" data-index=\"";
                    echo $this->getAttribute($context["loop"], "index0", array());
                    echo "\" ";
                }
                echo ">
                      <img src=\"";
                // line 56
                echo $this->getAttribute($context["image"], "image", array());
                echo "\" ";
                if ($this->getAttribute($context["image"], "image2x", array())) {
                    echo "srcset=\"";
                    echo $this->getAttribute($context["image"], "image", array());
                    echo " 1x, ";
                    echo $this->getAttribute($context["image"], "image2x", array());
                    echo " 2x\"";
                }
                echo " data-largeimg=\"";
                echo $this->getAttribute($context["image"], "popup", array());
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_thumb.width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_thumb.height"), "method");
                echo "\"/>
                    </div>
                  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                </div>
              </div>
              <div class=\"swiper-controls\">
                <div class=\"swiper-buttons\">
                  <div class=\"swiper-button-prev\"></div>
                  <div class=\"swiper-button-next\"></div>
                </div>
                <div class=\"swiper-pagination\"></div>
              </div>
              ";
            // line 68
            if ((isset($context["product_labels"]) ? $context["product_labels"] : null)) {
                // line 69
                echo "                <div class=\"product-labels\">
                  ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["product_labels"]) ? $context["product_labels"] : null));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 71
                    echo "                    <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo $this->getAttribute($context["label"], "display", array());
                    echo "\"><b>";
                    echo $this->getAttribute($context["label"], "label", array());
                    echo "</b></span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                </div>
              ";
            }
            // line 75
            echo "            </div>
            ";
            // line 76
            if (((twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null)) > 1) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesStatus")), "method"))) {
                // line 77
                echo "              ";
                if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
                    // line 78
                    echo "                <div class=\"swiper additional-images\" data-options='";
                    echo twig_jsonencode_filter((isset($context["carouselOptions"]) ? $context["carouselOptions"] : null), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' ";
                    if (((isset($context["direction"]) ? $context["direction"] : null) == "vertical")) {
                        echo "style=\"width: ";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_additional.width"), "method");
                        echo "px\"";
                    }
                    echo ">
                  <div class=\"swiper-container\" ";
                    // line 79
                    if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                    <div class=\"swiper-wrapper\">
                      ";
                    // line 81
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 82
                        echo "                        <div class=\"swiper-slide additional-image\" data-index=\"";
                        echo $this->getAttribute($context["loop"], "index0", array());
                        echo "\">
                          <img src=\"";
                        // line 83
                        echo $this->getAttribute($context["image"], "thumb", array());
                        echo "\" ";
                        if ($this->getAttribute($context["image"], "thumb2x", array())) {
                            echo "srcset=\"";
                            echo $this->getAttribute($context["image"], "thumb", array());
                            echo " 1x, ";
                            echo $this->getAttribute($context["image"], "thumb2x", array());
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\" title=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\"/>
                        </div>
                      ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "                    </div>
                  </div>
                  <div class=\"swiper-buttons\">
                    <div class=\"swiper-button-prev\"></div>
                    <div class=\"swiper-button-next\"></div>
                  </div>
                  <div class=\"swiper-pagination\"></div>
                </div>
              ";
                } else {
                    // line 95
                    echo "                <div class=\"additional-images\">
                  ";
                    // line 96
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 97
                        echo "                    <div class=\"additional-image\" data-index=\"";
                        echo $this->getAttribute($context["loop"], "index0", array());
                        echo "\">
                      <img src=\"";
                        // line 98
                        echo $this->getAttribute($context["image"], "thumb", array());
                        echo "\" alt=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\" title=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\"/>
                    </div>
                  ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "                </div>
              ";
                }
                // line 103
                echo "            ";
            }
            // line 104
            echo "          </div>
          ";
            // line 105
            if (( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryStatus")), "method"))) {
                // line 106
                echo "          <div class=\"lightgallery lightgallery-product-images\" data-images='";
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["gallery"]) ? $context["gallery"] : null)));
                echo "' data-options='";
                echo twig_jsonencode_filter((isset($context["galleryOptions"]) ? $context["galleryOptions"] : null), twig_constant("JSON_FORCE_OBJECT"));
                echo "'></div>
          ";
            }
            // line 108
            echo "          ";
            if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
                // line 109
                echo "            ";
                if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "image", array())) {
                    // line 110
                    echo "            <div class=\"product-blocks blocks-image\">
              ";
                    // line 111
                    echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "image", array()));
                    echo "
            </div>
            ";
                }
                // line 114
                echo "          ";
            }
            // line 115
            echo "          ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescription"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescriptionPosition"), "method") == "image")))) {
                // line 116
                echo "            <div class=\"description ";
                echo (isset($context["quickviewExpand"]) ? $context["quickviewExpand"] : null);
                echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
                // line 119
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "
                </div>
                ";
                // line 121
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method")) {
                    // line 122
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
                }
                // line 124
                echo "              </div>
            </div>
          ";
            }
            // line 127
            echo "          ";
            if ((((isset($context["tags"]) ? $context["tags"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "TagsPosition")), "method") == "image"))) {
                // line 128
                echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
                // line 129
                echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
                echo "</span>
              ";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 131
                    echo "                <a href=\"";
                    echo $this->getAttribute($context["tag"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["tag"], "tag", array());
                    echo "</a>
                ";
                    // line 132
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo "<b>,</b>";
                    }
                    // line 133
                    echo "              ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "            </div>
          ";
            }
            // line 136
            echo "        </div>
        ";
        }
        // line 138
        echo "        <div class=\"product-right\">
          <div id=\"product\" class=\"product-details\">
          ";
        // line 140
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 141
            echo "          <div class=\"title page-title\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</div>
          ";
            // line 142
            if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "top", array())) {
                // line 143
                echo "          <div class=\"product-blocks blocks-top\">
          ";
                // line 144
                echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "top", array()));
                echo "
          </div>
          ";
            }
            // line 147
            echo "          ";
        }
        // line 148
        echo "
          ";
        // line 149
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescription"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescriptionPosition"), "method") == "top")))) {
            // line 150
            echo "            <div class=\"description ";
            echo (isset($context["quickviewExpand"]) ? $context["quickviewExpand"] : null);
            echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
            // line 153
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
                </div>
                ";
            // line 155
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method")) {
                // line 156
                echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
            }
            // line 158
            echo "              </div>
            </div>
          ";
        }
        // line 161
        echo "
          ";
        // line 162
        if ((( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "Stats")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "StatsPosition")), "method") == "default"))) {
            // line 163
            echo "            <div class=\"product-stats\">
              <ul class=\"list-unstyled\">
                ";
            // line 165
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStock")), "method")) {
                // line 166
                echo "                  <li class=\"product-stock ";
                if (((isset($context["product_quantity"]) ? $context["product_quantity"] : null) > 0)) {
                    echo "in-stock";
                } else {
                    echo "out-of-stock";
                }
                echo "\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStockText")), "method");
                echo ":</b> <span>";
                echo (isset($context["stock"]) ? $context["stock"] : null);
                echo "</span></li>
                ";
            }
            // line 168
            echo "                ";
            if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "list"))) {
                // line 169
                echo "                  <li class=\"product-manufacturer\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerText")), "method");
                echo ":</b> <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</a></li>
                ";
            }
            // line 171
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductReward")), "method") && (isset($context["reward"]) ? $context["reward"] : null))) {
                // line 172
                echo "                  <li class=\"product-reward\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductRewardText")), "method");
                echo ":</b> <span>";
                echo (isset($context["reward"]) ? $context["reward"] : null);
                echo "</span></li>
                ";
            }
            // line 174
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModel")), "method") && (isset($context["model"]) ? $context["model"] : null))) {
                // line 175
                echo "                  <li class=\"product-model\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModelText")), "method");
                echo ":</b> <span>";
                echo (isset($context["model"]) ? $context["model"] : null);
                echo "</span></li>
                ";
            }
            // line 177
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeight")), "method") && (isset($context["product_weight"]) ? $context["product_weight"] : null))) {
                // line 178
                echo "                  <li class=\"product-weight\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeightText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_weight"]) ? $context["product_weight"] : null);
                echo "</span></li>
                ";
            }
            // line 180
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimension")), "method") && (isset($context["product_dimension"]) ? $context["product_dimension"] : null))) {
                // line 181
                echo "                  <li class=\"product-dimension\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimensionText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_length"]) ? $context["product_length"] : null);
                echo " x ";
                echo (isset($context["product_width"]) ? $context["product_width"] : null);
                echo " x ";
                echo (isset($context["product_height"]) ? $context["product_height"] : null);
                echo "</span></li>
                ";
            }
            // line 183
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKU")), "method") && (isset($context["product_sku"]) ? $context["product_sku"] : null))) {
                // line 184
                echo "                  <li class=\"product-sku\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKUText")), "method");
                echo ":</b> <span> ";
                echo (isset($context["product_sku"]) ? $context["product_sku"] : null);
                echo "</span></li>
                ";
            }
            // line 186
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPC")), "method") && (isset($context["product_upc"]) ? $context["product_upc"] : null))) {
                // line 187
                echo "                  <li class=\"product-upc\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPCText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_upc"]) ? $context["product_upc"] : null);
                echo "</span></li>
                ";
            }
            // line 189
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEAN")), "method") && (isset($context["product_ean"]) ? $context["product_ean"] : null))) {
                // line 190
                echo "                  <li class=\"product-ean\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEANText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_ean"]) ? $context["product_ean"] : null);
                echo "</span></li>
                ";
            }
            // line 192
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJAN")), "method") && (isset($context["product_jan"]) ? $context["product_jan"] : null))) {
                // line 193
                echo "                  <li class=\"product-jan\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJANText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_jan"]) ? $context["product_jan"] : null);
                echo "</span></li>
                ";
            }
            // line 195
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBN")), "method") && (isset($context["product_isbn"]) ? $context["product_isbn"] : null))) {
                // line 196
                echo "                  <li class=\"product-isbn\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBNText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_isbn"]) ? $context["product_isbn"] : null);
                echo "</span></li>
                ";
            }
            // line 198
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPN")), "method") && (isset($context["product_mpn"]) ? $context["product_mpn"] : null))) {
                // line 199
                echo "                  <li class=\"product-mpn\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPNText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_mpn"]) ? $context["product_mpn"] : null);
                echo "</span></li>
                ";
            }
            // line 201
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocation")), "method") && (isset($context["product_location"]) ? $context["product_location"] : null))) {
                // line 202
                echo "                  <li class=\"product-location\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocationText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_location"]) ? $context["product_location"] : null);
                echo "</span></li>
                ";
            }
            // line 204
            echo "              </ul>
              ";
            // line 205
            if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "image"))) {
                // line 206
                echo "                <div class=\"brand-image product-manufacturer\">
                  <a href=\"";
                // line 207
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">
                    ";
                // line 208
                if ((isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null)) {
                    // line 209
                    echo "                      <img src=\"";
                    echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                    echo "\" ";
                    if ((isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null)) {
                        echo "srcset=\"";
                        echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                        echo " 1x, ";
                        echo (isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                    echo "\"/>
                    ";
                }
                // line 211
                echo "                    <span>";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</span>
                  </a>
                </div>
              ";
            }
            // line 215
            echo "              ";
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CustomStats")), "method")) {
                // line 216
                echo "                <div class=\"custom-stats\">
                  ";
                // line 217
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSold")), "method")) {
                    // line 218
                    echo "                    <div class=\"product-sold\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "SoldText"), 1 => (isset($context["products_sold"]) ? $context["products_sold"] : null)), "method");
                    echo "</b></div>
                  ";
                }
                // line 220
                echo "                  ";
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductViews")), "method")) {
                    // line 221
                    echo "                    <div class=\"product-views\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ViewsText"), 1 => (isset($context["product_views"]) ? $context["product_views"] : null)), "method");
                    echo "</b></div>
                  ";
                }
                // line 223
                echo "                </div>
              ";
            }
            // line 225
            echo "            </div>
          ";
        }
        // line 227
        echo "
          ";
        // line 228
        if (((isset($context["review_status"]) ? $context["review_status"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method"))) {
            // line 229
            echo "            <div class=\"rating rating-page\">
              <div class=\"rating-stars\">
                ";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 232
                echo "                  ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    // line 233
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>";
                } else {
                    // line 236
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star fa-stack-1x\"></i>
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>
                  ";
                }
                // line 241
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "              </div>
              <div class=\"review-links\">
                <a>";
            // line 244
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a>
                <b>";
            // line 245
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "RatingSeparator")), "method");
            echo "</b>
                <a>";
            // line 246
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a>
              </div>
            </div>
          ";
        }
        // line 250
        echo "
          ";
        // line 251
        if (((isset($context["date_end"]) ? $context["date_end"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) ? ("quickviewCountdown") : ("countdownStatus"))), "method"))) {
            // line 252
            echo "            <div class=\"countdown-wrapper\">
              ";
            // line 253
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CountdownText")), "method")) {
                // line 254
                echo "              <h5 class=\"countdown-title title\">";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CountdownText")), "method");
                echo "</h5>
              ";
            }
            // line 256
            echo "              <div class=\"countdown\" data-date=\"";
            echo (isset($context["date_end"]) ? $context["date_end"] : null);
            echo "\">
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 257
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownDay"), "method");
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 258
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownHour"), "method");
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 259
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownMin"), "method");
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 260
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownSec"), "method");
            echo "</span></div>
              </div>
            </div>
          ";
        }
        // line 264
        echo "
          ";
        // line 265
        if (((isset($context["price"]) ? $context["price"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method"))) {
            // line 266
            echo "          <div class=\"product-price-group\">
           <div class=\"price-wrapper\">
             <div class=\"price-group\">
               ";
            // line 269
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 270
                echo "                 <div class=\"product-price\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</div>
               ";
            } else {
                // line 272
                echo "                 <div class=\"product-price-new\">";
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</div>
                 <div class=\"product-price-old\">";
                // line 273
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</div>
               ";
            }
            // line 275
            echo "             </div>
             ";
            // line 276
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 277
                echo "               <div class=\"product-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</div>
             ";
            }
            // line 279
            echo "             ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 280
                echo "               <div class=\"product-points\">";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</div>
             ";
            }
            // line 282
            echo "
             ";
            // line 283
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 284
                echo "               <div class=\"discounts\">
                 ";
                // line 285
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 286
                    echo "                   <div class=\"product-discount\">";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</div>
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 288
                echo "               </div>
             ";
            }
            // line 290
            echo "           </div>
            ";
            // line 291
            if ((( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "Stats")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "StatsPosition")), "method") == "price"))) {
                // line 292
                echo "              <div class=\"product-stats\">
                <ul class=\"list-unstyled\">
                  ";
                // line 294
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStock")), "method")) {
                    // line 295
                    echo "                    <li class=\"product-stock ";
                    if (((isset($context["product_quantity"]) ? $context["product_quantity"] : null) > 0)) {
                        echo "in-stock";
                    } else {
                        echo "out-of-stock";
                    }
                    echo "\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStockText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["stock"]) ? $context["stock"] : null);
                    echo "</span></li>
                  ";
                }
                // line 297
                echo "                  ";
                if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "list"))) {
                    // line 298
                    echo "                    <li class=\"product-manufacturer\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerText")), "method");
                    echo ":</b> <a href=\"";
                    echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                    echo "\">";
                    echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                    echo "</a></li>
                  ";
                }
                // line 300
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductReward")), "method") && (isset($context["reward"]) ? $context["reward"] : null))) {
                    // line 301
                    echo "                    <li class=\"product-reward\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductRewardText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["reward"]) ? $context["reward"] : null);
                    echo "</span></li>
                  ";
                }
                // line 303
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModel")), "method") && (isset($context["model"]) ? $context["model"] : null))) {
                    // line 304
                    echo "                    <li class=\"product-model\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModelText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["model"]) ? $context["model"] : null);
                    echo "</span></li>
                  ";
                }
                // line 306
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeight")), "method") && (isset($context["product_weight"]) ? $context["product_weight"] : null))) {
                    // line 307
                    echo "                    <li class=\"product-weight\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeightText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_weight"]) ? $context["product_weight"] : null);
                    echo "</span></li>
                  ";
                }
                // line 309
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimension")), "method") && (isset($context["product_dimension"]) ? $context["product_dimension"] : null))) {
                    // line 310
                    echo "                    <li class=\"product-dimension\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimensionText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_length"]) ? $context["product_length"] : null);
                    echo " x ";
                    echo (isset($context["product_width"]) ? $context["product_width"] : null);
                    echo " x ";
                    echo (isset($context["product_height"]) ? $context["product_height"] : null);
                    echo "</span></li>
                  ";
                }
                // line 312
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKU")), "method") && (isset($context["product_sku"]) ? $context["product_sku"] : null))) {
                    // line 313
                    echo "                    <li class=\"product-sku\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKUText")), "method");
                    echo ":</b> <span> ";
                    echo (isset($context["product_sku"]) ? $context["product_sku"] : null);
                    echo "</span></li>
                  ";
                }
                // line 315
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPC")), "method") && (isset($context["product_upc"]) ? $context["product_upc"] : null))) {
                    // line 316
                    echo "                    <li class=\"product-upc\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPCText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_upc"]) ? $context["product_upc"] : null);
                    echo "</span></li>
                  ";
                }
                // line 318
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEAN")), "method") && (isset($context["product_ean"]) ? $context["product_ean"] : null))) {
                    // line 319
                    echo "                    <li class=\"product-ean\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEANText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_ean"]) ? $context["product_ean"] : null);
                    echo "</span></li>
                  ";
                }
                // line 321
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJAN")), "method") && (isset($context["product_jan"]) ? $context["product_jan"] : null))) {
                    // line 322
                    echo "                    <li class=\"product-jan\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJANText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_jan"]) ? $context["product_jan"] : null);
                    echo "</span></li>
                  ";
                }
                // line 324
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBN")), "method") && (isset($context["product_isbn"]) ? $context["product_isbn"] : null))) {
                    // line 325
                    echo "                    <li class=\"product-isbn\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBNText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_isbn"]) ? $context["product_isbn"] : null);
                    echo "</span></li>
                  ";
                }
                // line 327
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPN")), "method") && (isset($context["product_mpn"]) ? $context["product_mpn"] : null))) {
                    // line 328
                    echo "                    <li class=\"product-mpn\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPNText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_mpn"]) ? $context["product_mpn"] : null);
                    echo "</span></li>
                  ";
                }
                // line 330
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocation")), "method") && (isset($context["product_location"]) ? $context["product_location"] : null))) {
                    // line 331
                    echo "                    <li class=\"product-location\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocationText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_location"]) ? $context["product_location"] : null);
                    echo "</span></li>
                  ";
                }
                // line 333
                echo "                </ul>
                ";
                // line 334
                if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "image"))) {
                    // line 335
                    echo "                  <div class=\"brand-image product-manufacturer\">
                    <a href=\"";
                    // line 336
                    echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                    echo "\">
                      ";
                    // line 337
                    if ((isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null)) {
                        // line 338
                        echo "                        <img src=\"";
                        echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                        echo "\" ";
                        if ((isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null)) {
                            echo "srcset=\"";
                            echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                            echo " 1x, ";
                            echo (isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                        echo "\"/>
                      ";
                    }
                    // line 340
                    echo "                      <span>";
                    echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                    echo "</span>
                    </a>
                  </div>
                ";
                }
                // line 344
                echo "                ";
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CustomStats")), "method")) {
                    // line 345
                    echo "                  <div class=\"custom-stats\">
                    ";
                    // line 346
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSold")), "method")) {
                        // line 347
                        echo "                      <div class=\"product-sold\"><b>";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "SoldText"), 1 => (isset($context["products_sold"]) ? $context["products_sold"] : null)), "method");
                        echo "</b></div>
                    ";
                    }
                    // line 349
                    echo "                    ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductViews")), "method")) {
                        // line 350
                        echo "                      <div class=\"product-views\"><b>";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ViewsText"), 1 => (isset($context["product_views"]) ? $context["product_views"] : null)), "method");
                        echo "</b></div>
                    ";
                    }
                    // line 352
                    echo "                  </div>
                ";
                }
                // line 354
                echo "              </div>
            ";
            }
            // line 356
            echo "          </div>
          ";
        }
        // line 358
        echo "
          ";
        // line 359
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 360
            echo "          <div class=\"product-options\">
            <h3 class=\"options-title title\">";
            // line 361
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
            ";
            // line 362
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 363
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 364
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo " ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "OptionsPushSelect")), "method")) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 365
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 366
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 367
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 368
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 369
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 370
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 371
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 372
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 374
                    echo "              </select>
            </div>
            ";
                }
                // line 377
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 378
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo " ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "OptionsPushRadio")), "method")) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 379
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 380
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 381
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 383
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 384
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "PushTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " (";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 385
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 386
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                      ";
                        // line 387
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 388
                            echo "                        <span class=\"option-price\">
                          (";
                            // line 389
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                        </span>
                      ";
                        }
                        // line 392
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 395
                    echo " </div>
            </div>
            ";
                }
                // line 398
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 399
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo " ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "OptionsPushCheckbox")), "method")) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 400
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 401
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 402
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 404
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 405
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "PushTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " (";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 406
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 407
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                      ";
                        // line 408
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 409
                            echo "                        <span class=\"option-price\">(";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")</span>
                      ";
                        }
                        // line 411
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 414
                    echo " </div>
            </div>
            ";
                }
                // line 417
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 418
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 419
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 420
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 423
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 424
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 425
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <textarea name=\"option[";
                    // line 426
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
            </div>
            ";
                }
                // line 429
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 430
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\">";
                    // line 431
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 432
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 433
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>
            ";
                }
                // line 436
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 437
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 438
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 440
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 446
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 447
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 448
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 450
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 456
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 457
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 458
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 460
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 466
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 467
            echo "          </div>
          ";
        }
        // line 469
        echo "
          ";
        // line 470
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 471
            echo "            <h3 class=\"title recurring-title\">";
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 474
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 475
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 476
                echo "                <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 478
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
          ";
        }
        // line 482
        echo "
          ";
        // line 483
        if (((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCartStatus"), "method") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method")) || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method")) || ((isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")))) {
            // line 484
            echo "          <div class=\"button-group-page\">
            <div class=\"buttons-wrapper\">
              <div class=\"stepper-group cart-group\">
                ";
            // line 487
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCartStatus"), "method")) {
                // line 488
                echo "                <div class=\"stepper\">
                  <label class=\"control-label\" for=\"product-quantity\">";
                // line 489
                echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
                echo "</label>
                  <input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                // line 490
                echo (isset($context["minimum"]) ? $context["minimum"] : null);
                echo "\" data-minimum=\"";
                echo (isset($context["minimum"]) ? $context["minimum"] : null);
                echo "\" class=\"form-control\"/>
                  <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                // line 491
                echo (isset($context["product_id"]) ? $context["product_id"] : null);
                echo "\" />
                  <span>
                  <i class=\"fa fa-angle-up\"></i>
                  <i class=\"fa fa-angle-down\"></i>
                </span>
                </div>
                <a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>";
                // line 497
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span>\" class=\"btn btn-cart\" ";
                if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CartDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CartTooltipStatus")), "method"))) {
                    echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CartTooltipPosition")), "method");
                    echo "\" title=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\" ";
                }
                echo "><span class=\"btn-text\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></a>
                ";
            }
            // line 499
            echo "                ";
            if (((isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method"))) {
                // line 500
                echo "                  <div class=\"extra-group\">
                    ";
                // line 501
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["id"] => $context["extra_button"]) {
                    // line 502
                    echo "                      <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo " btn-";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "-extra\" ";
                    if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "Extra") . $this->getAttribute($context["loop"], "index", array())) . "ButtonDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ExtraTooltipStatus")), "method"))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ExtraTooltipPosition")), "method");
                        echo "\" title=\"";
                        echo $this->getAttribute($context["extra_button"], "label", array());
                        echo "\" ";
                    }
                    echo " ";
                    if (($this->getAttribute($context["extra_button"], "action", array()) == "quickbuy")) {
                        echo "data-quick-buy";
                    }
                    echo " ";
                    if ((($this->getAttribute($context["extra_button"], "action", array()) == "link") && $this->getAttribute($this->getAttribute($context["extra_button"], "link", array()), "href", array()))) {
                        echo "href=\"";
                        echo $this->getAttribute($this->getAttribute($context["extra_button"], "link", array()), "href", array());
                        echo "\" ";
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["extra_button"], "link", array())), "method");
                        echo " data-product_id=\"";
                        echo (isset($context["product_id"]) ? $context["product_id"] : null);
                        echo "\"";
                    }
                    echo " data-loading-text=\"<span class='btn-text'>";
                    echo $this->getAttribute($context["extra_button"], "label", array());
                    echo "</span>\"><span class=\"btn-text\">";
                    echo $this->getAttribute($context["extra_button"], "label", array());
                    echo "</span></a>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['extra_button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 504
                echo "                  </div>
                ";
            }
            // line 506
            echo "              </div>

              ";
            // line 508
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method"))) {
                // line 509
                echo "              <div class=\"wishlist-compare\">
                ";
                // line 510
                if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
                    // line 511
                    echo "                  ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method")) {
                        // line 512
                        echo "                  <a class=\"btn btn-wishlist\" ";
                        if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "WishlistDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "WishlistTooltipStatus")), "method"))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-wishlist-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "WishlistTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.wishlist.add(";
                        echo (isset($context["product_id"]) ? $context["product_id"] : null);
                        echo ");\"><span class=\"btn-text\">";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "</span></a>
                  ";
                    }
                    // line 514
                    echo "
                  ";
                    // line 515
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method")) {
                        // line 516
                        echo "                  <a class=\"btn btn-compare\" ";
                        if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CompareDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CompareTooltipStatus")), "method"))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-compare-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CompareTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.compare.add(";
                        echo (isset($context["product_id"]) ? $context["product_id"] : null);
                        echo ");\"><span class=\"btn-text\">";
                        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                        echo "</span></a>
                  ";
                    }
                    // line 518
                    echo "                ";
                }
                // line 519
                echo "                ";
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method")) {
                    // line 520
                    echo "                  <a class=\"btn btn-more-details\" href=\"";
                    echo (isset($context["view_more_url"]) ? $context["view_more_url"] : null);
                    echo "\" target=\"_top\" ";
                    if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "MoreDetailsDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "MoreDetailsTooltipStatus")), "method"))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"more-details-tooltip\" data-placement=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "MoreDetailsTooltipPosition")), "method");
                        echo "\" title=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExtraText"), "method");
                        echo "\" ";
                    }
                    echo "><span class=\"btn-text\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExtraText"), "method");
                    echo "</span></a>
                ";
                }
                // line 522
                echo "              </div>
              ";
            }
            // line 524
            echo "            </div>
          </div>
          ";
        }
        // line 527
        echo "
          ";
        // line 528
        if ((((isset($context["minimum"]) ? $context["minimum"] : null) > 1) &&  !(isset($context["product_quantity"]) ? $context["product_quantity"] : null))) {
            // line 529
            echo "            <div class=\"minimum alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
          ";
        }
        // line 531
        echo "
          ";
        // line 532
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 533
            echo "            ";
            if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "details", array())) {
                // line 534
                echo "                ";
                echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "details", array()));
                echo "
            ";
            }
            // line 536
            echo "          ";
        }
        // line 537
        echo "          </div>
          ";
        // line 538
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 539
            echo "          ";
            if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "bottom", array())) {
                // line 540
                echo "          <div class=\"product-blocks blocks-bottom\">
            ";
                // line 541
                echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "bottom", array()));
                echo "
          </div>
          ";
            }
            // line 544
            echo "          ";
        }
        // line 545
        echo "          ";
        if ((((isset($context["tags"]) ? $context["tags"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "TagsPosition")), "method") == "details"))) {
            // line 546
            echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
            // line 547
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</span>
              ";
            // line 548
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 549
                echo "                <a href=\"";
                echo $this->getAttribute($context["tag"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["tag"], "tag", array());
                echo "</a>
                ";
                // line 550
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo "<b>,</b>";
                }
                // line 551
                echo "              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 552
            echo "            </div>
          ";
        }
        // line 554
        echo "        </div>
      </div>
      ";
        // line 556
        if (((((isset($context["description"]) ? $context["description"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method")) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescription"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescriptionPosition"), "method") == "default"))) {
            // line 557
            echo "        <div class=\"description ";
            echo (isset($context["quickviewExpand"]) ? $context["quickviewExpand"] : null);
            echo "\">
          <div class=\"expand-block\">
            <div class=\"expand-content\">
              ";
            // line 560
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
            </div>
            ";
            // line 562
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method")) {
                // line 563
                echo "              <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
            ";
            }
            // line 565
            echo "          </div>
        </div>
      ";
        }
        // line 568
        echo "      ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 569
            echo "        ";
            if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "default", array())) {
                // line 570
                echo "        <div class=\"product-blocks blocks-default\">
          ";
                // line 571
                echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "default", array()));
                echo "
        </div>
        ";
            }
            // line 574
            echo "      ";
        }
        // line 575
        echo "      ";
        if ((((isset($context["tags"]) ? $context["tags"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "TagsPosition")), "method") == "default"))) {
            // line 576
            echo "        <div class=\"tags\">
          <span class=\"tags-title\">";
            // line 577
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</span>
          ";
            // line 578
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 579
                echo "            <a href=\"";
                echo $this->getAttribute($context["tag"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["tag"], "tag", array());
                echo "</a>
            ";
                // line 580
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo "<b>,</b>";
                }
                // line 581
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 582
            echo "        </div>
      ";
        }
        // line 584
        echo "      ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 585
            echo "      ";
            echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
            echo "</div>
    ";
            // line 586
            echo (isset($context["column_right"]) ? $context["column_right"] : null);
            echo "</div>
</div>
";
        }
        // line 589
        echo "<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart, [data-quick-buy]').on('click', function () {
  var \$btn = \$(this);
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$(
      '#product .button-group-page input[type=\\'text\\'], #product .button-group-page input[type=\\'hidden\\'], #product .button-group-page input[type=\\'radio\\']:checked, #product .button-group-page input[type=\\'checkbox\\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' +
      '#product .product-options input[type=\\'text\\'], #product .product-options input[type=\\'hidden\\'], #product .product-options input[type=\\'radio\\']:checked, #product .product-options input[type=\\'checkbox\\']:checked, #product .product-options select, #product .product-options textarea, ' +
      '#product select[name=\"recurring_id\"]'
    ),
    dataType: 'json',
    beforeSend: function () {
      \$('#button-cart').button('loading');
    },
    complete: function () {
      \$('#button-cart').button('reset');
    },
    success: function (json) {
      \$('.alert-dismissible, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');

        try {
          \$('html, body').animate({ scrollTop: \$('.form-group.has-error').offset().top - 50 }, 'slow');
        } catch (e) {
        }
      }

      if (json['success']) {
        if (\$('html').hasClass('popup-options')) {
          parent.\$(\".popup-options .popup-close\").trigger('click');
        }

        if (json['notification']) {
          parent.show_notification(json['notification']);
        } else {
          parent.\$('#content').parent().before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        parent.\$('#cart-total').html(json['total']);
        parent.\$('#cart-items').html(json['items_count']);

        if (json['items_count']) {
          parent.\$('#cart-items').removeClass('count-zero');
        } else {
          parent.\$('#cart-items').addClass('count-zero');
        }

        if (Journal['scrollToTop']) {
          parent.\$('html, body').animate({ scrollTop: 0 }, 'slow');
        }

        parent.\$('.cart-content ul').load('index.php?route=common/cart/info ul li');

        if (window.location.href.indexOf('quick_buy=true') !== -1) {
          parent.location.href = Journal['checkoutUrl'];
        }

        if (\$btn.data('quick-buy') !== undefined) {
          location = Journal['checkoutUrl'];
        }

        if (parent.window['_QuickCheckout']) {
          parent.window['_QuickCheckout'].save();
        }
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(thrownError + '\\r\\n' + xhr.statusText + '\\r\\n' + xhr.responseText);
    }
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 704
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 709
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 715
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$(function () {
  \$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
  });

  \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 783
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

  \$('#button-review').on('click', function() {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 787
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-review\").serialize(),
      beforeSend: function() {
        \$('#button-review').button('loading');
      },
      complete: function() {
        \$('#button-review').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        }

        if (json['success']) {
          \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

          \$('input[name=\\'name\\']').val('');
          \$('textarea[name=\\'text\\']').val('');
          \$('input[name=\\'rating\\']:checked').prop('checked', false);
        }
      }
    });
  });
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});

\$(document).ready(function () {
  \$('.review-links a').on('click', function () {
    var \$review = \$('#review');
    if (\$review.length) {
      \$('a[href=\"#' + \$review.closest('.module-item').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.tab-pane').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.panel-collapse').attr('id') + '\"]').trigger('click');

      \$([document.documentElement, document.body]).animate({
        scrollTop: \$review.offset().top - 100
      }, 200);
    }
  });
});
//--></script>
";
        // line 841
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 842
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/seo/rich_snippets", 1 => (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)), "method");
            echo "
";
        }
        // line 844
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2406 => 844,  2401 => 842,  2399 => 841,  2342 => 787,  2335 => 783,  2264 => 715,  2255 => 709,  2247 => 704,  2130 => 589,  2124 => 586,  2119 => 585,  2116 => 584,  2112 => 582,  2098 => 581,  2094 => 580,  2087 => 579,  2070 => 578,  2066 => 577,  2063 => 576,  2060 => 575,  2057 => 574,  2051 => 571,  2048 => 570,  2045 => 569,  2042 => 568,  2037 => 565,  2033 => 563,  2031 => 562,  2026 => 560,  2019 => 557,  2017 => 556,  2013 => 554,  2009 => 552,  1995 => 551,  1991 => 550,  1984 => 549,  1967 => 548,  1963 => 547,  1960 => 546,  1957 => 545,  1954 => 544,  1948 => 541,  1945 => 540,  1942 => 539,  1940 => 538,  1937 => 537,  1934 => 536,  1928 => 534,  1925 => 533,  1923 => 532,  1920 => 531,  1914 => 529,  1912 => 528,  1909 => 527,  1904 => 524,  1900 => 522,  1884 => 520,  1881 => 519,  1878 => 518,  1862 => 516,  1860 => 515,  1857 => 514,  1841 => 512,  1838 => 511,  1836 => 510,  1833 => 509,  1831 => 508,  1827 => 506,  1823 => 504,  1778 => 502,  1761 => 501,  1758 => 500,  1755 => 499,  1740 => 497,  1731 => 491,  1725 => 490,  1721 => 489,  1718 => 488,  1716 => 487,  1711 => 484,  1709 => 483,  1706 => 482,  1700 => 478,  1689 => 476,  1685 => 475,  1681 => 474,  1674 => 471,  1672 => 470,  1669 => 469,  1665 => 467,  1659 => 466,  1646 => 460,  1639 => 458,  1630 => 457,  1627 => 456,  1614 => 450,  1607 => 448,  1598 => 447,  1595 => 446,  1582 => 440,  1575 => 438,  1566 => 437,  1563 => 436,  1555 => 433,  1547 => 432,  1543 => 431,  1534 => 430,  1531 => 429,  1519 => 426,  1513 => 425,  1504 => 424,  1501 => 423,  1489 => 420,  1483 => 419,  1474 => 418,  1471 => 417,  1466 => 414,  1457 => 411,  1450 => 409,  1448 => 408,  1444 => 407,  1441 => 406,  1414 => 405,  1408 => 404,  1404 => 402,  1398 => 401,  1394 => 400,  1381 => 399,  1378 => 398,  1373 => 395,  1364 => 392,  1357 => 389,  1354 => 388,  1352 => 387,  1348 => 386,  1345 => 385,  1318 => 384,  1312 => 383,  1308 => 381,  1302 => 380,  1298 => 379,  1285 => 378,  1282 => 377,  1277 => 374,  1270 => 372,  1263 => 371,  1261 => 370,  1254 => 369,  1250 => 368,  1246 => 367,  1240 => 366,  1234 => 365,  1221 => 364,  1218 => 363,  1214 => 362,  1210 => 361,  1207 => 360,  1205 => 359,  1202 => 358,  1198 => 356,  1194 => 354,  1190 => 352,  1184 => 350,  1181 => 349,  1175 => 347,  1173 => 346,  1170 => 345,  1167 => 344,  1159 => 340,  1143 => 338,  1141 => 337,  1137 => 336,  1134 => 335,  1132 => 334,  1129 => 333,  1121 => 331,  1118 => 330,  1110 => 328,  1107 => 327,  1099 => 325,  1096 => 324,  1088 => 322,  1085 => 321,  1077 => 319,  1074 => 318,  1066 => 316,  1063 => 315,  1055 => 313,  1052 => 312,  1040 => 310,  1037 => 309,  1029 => 307,  1026 => 306,  1018 => 304,  1015 => 303,  1007 => 301,  1004 => 300,  994 => 298,  991 => 297,  977 => 295,  975 => 294,  971 => 292,  969 => 291,  966 => 290,  962 => 288,  951 => 286,  947 => 285,  944 => 284,  942 => 283,  939 => 282,  931 => 280,  928 => 279,  920 => 277,  918 => 276,  915 => 275,  910 => 273,  905 => 272,  899 => 270,  897 => 269,  892 => 266,  890 => 265,  887 => 264,  880 => 260,  876 => 259,  872 => 258,  868 => 257,  863 => 256,  857 => 254,  855 => 253,  852 => 252,  850 => 251,  847 => 250,  840 => 246,  836 => 245,  832 => 244,  828 => 242,  822 => 241,  815 => 236,  810 => 233,  807 => 232,  803 => 231,  799 => 229,  797 => 228,  794 => 227,  790 => 225,  786 => 223,  780 => 221,  777 => 220,  771 => 218,  769 => 217,  766 => 216,  763 => 215,  755 => 211,  739 => 209,  737 => 208,  733 => 207,  730 => 206,  728 => 205,  725 => 204,  717 => 202,  714 => 201,  706 => 199,  703 => 198,  695 => 196,  692 => 195,  684 => 193,  681 => 192,  673 => 190,  670 => 189,  662 => 187,  659 => 186,  651 => 184,  648 => 183,  636 => 181,  633 => 180,  625 => 178,  622 => 177,  614 => 175,  611 => 174,  603 => 172,  600 => 171,  590 => 169,  587 => 168,  573 => 166,  571 => 165,  567 => 163,  565 => 162,  562 => 161,  557 => 158,  553 => 156,  551 => 155,  546 => 153,  539 => 150,  537 => 149,  534 => 148,  531 => 147,  525 => 144,  522 => 143,  520 => 142,  515 => 141,  513 => 140,  509 => 138,  505 => 136,  501 => 134,  487 => 133,  483 => 132,  476 => 131,  459 => 130,  455 => 129,  452 => 128,  449 => 127,  444 => 124,  440 => 122,  438 => 121,  433 => 119,  426 => 116,  423 => 115,  420 => 114,  414 => 111,  411 => 110,  408 => 109,  405 => 108,  397 => 106,  395 => 105,  392 => 104,  389 => 103,  385 => 101,  364 => 98,  359 => 97,  342 => 96,  339 => 95,  328 => 86,  299 => 83,  294 => 82,  277 => 81,  270 => 79,  259 => 78,  256 => 77,  254 => 76,  251 => 75,  247 => 73,  234 => 71,  230 => 70,  227 => 69,  225 => 68,  214 => 59,  179 => 56,  170 => 55,  167 => 54,  149 => 53,  147 => 52,  140 => 50,  130 => 49,  124 => 48,  121 => 47,  119 => 46,  114 => 45,  112 => 44,  111 => 43,  110 => 42,  109 => 41,  108 => 40,  106 => 39,  103 => 38,  97 => 36,  94 => 35,  92 => 34,  87 => 33,  82 => 31,  78 => 30,  73 => 28,  67 => 26,  65 => 25,  62 => 24,  51 => 22,  47 => 21,  44 => 20,  42 => 19,  38 => 18,  36 => 17,  34 => 15,  33 => 14,  32 => 13,  31 => 11,  30 => 10,  29 => 9,  27 => 7,  26 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set stylePrefix = j3.document.isPopup('quickview') ? 'quickviewPageStyle' : 'productPageStyle' %}*/
/* {% set direction = j3.settings.get(stylePrefix ~ 'AdditionalImagesPosition') == 'left' or j3.settings.get(stylePrefix ~ 'AdditionalImagesPosition') == 'right' ? 'vertical' : 'horizontal' %}*/
/* {% set carousel = direction == 'vertical' or j3.settings.get(stylePrefix ~ 'AdditionalImagesCarousel') %}*/
/* {% set carouselOptions = {*/
/*   slidesPerView: 'auto',*/
/*   spaceBetween: j3.settings.get(stylePrefix ~ 'AdditionalImagesSpacing')|default(0),*/
/*   direction: direction*/
/* } %}*/
/* {% set galleryOptions = {*/
/*   thumbWidth: j3.settings.get('image_dimensions_popup_thumb.width'),*/
/*   thumbConHeight: j3.settings.get('image_dimensions_popup_thumb.height'),*/
/*   addClass: 'lg-product-images',*/
/*   mode: j3.settings.get(stylePrefix ~ 'GalleryMode'),*/
/*   download: j3.settings.get(stylePrefix ~ 'GalleryDownload'),*/
/*   fullScreen: j3.settings.get(stylePrefix ~ 'GalleryFullScreen')*/
/* } %}*/
/* {% set quickviewExpand = not j3.settings.get('quickviewExpandButton') or (j3.settings.get('globalExpandCharactersLimit') > 0 and description and description|length <= j3.settings.get('globalExpandCharactersLimit')) ? 'no-expand': '' %}*/
/* {{ header }}*/
/* {% if not j3.document.isPopup() %}*/
/* <ul class="breadcrumb">*/
/*   {% for breadcrumb in breadcrumbs %}*/
/*   <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*   {% endfor %}*/
/* </ul>*/
/* {% if j3.settings.get('pageTitlePosition') == 'top' %}*/
/*   <h1 class="title page-title"><span>{{ heading_title }}</span></h1>*/
/* {% endif %}*/
/* {{ j3.loadController('journal3/layout', 'top') }}*/
/* <div id="product-product" class="container">*/
/*   <div class="row">{{ column_left }}*/
/*     <div id="content" class="{{ class }}">*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       {% if not j3.document.isPopup('options') %}*/
/*         {% if j3.settings.get('pageTitlePosition') == 'default' or j3.document.isPopup('quickview') %}*/
/*           <h1 class="title page-title">{{ heading_title }}</h1>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*       {% set classes = j3.classes({*/
/*         'out-of-stock': product_quantity <= 0,*/
/*         'has-countdown': date_end,*/
/*         'has-zero-price': not product_price_value,*/
/*         'has-extra-button': product_extra_buttons,*/
/*       }) ~ ' ' ~ product_exclude_classes %}*/
/*       <div class="product-info {{ classes }}">*/
/*         {% if not j3.document.isPopup('options') %}*/
/*         <div class="product-left">*/
/*           <div class="product-image direction-{{ direction }} position-{{ j3.settings.get(stylePrefix ~ 'AdditionalImagesPosition') }}">*/
/*             <div class="swiper main-image" data-options='{{ j3.carousel(j3.document.getJs(), stylePrefix ~ 'ImageCarouselStyle')|json_encode(constant('JSON_FORCE_OBJECT')) }}' {% if images|length > 1 and j3.settings.get(stylePrefix ~ 'AdditionalImagesStatus') and carousel and direction == 'vertical' %}style="width: calc(100% - {{ j3.settings.get('image_dimensions_additional.width') }}px)"{% endif %}>*/
/*               <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*                 <div class="swiper-wrapper">*/
/*                   {% set gallery = [] %}*/
/*                   {% for image in images %}*/
/*                     {% set gallery = gallery|merge([{src: image.popup, thumb: image.galleryThumb, subHtml: heading_title}]) %}*/
/*                     <div class="swiper-slide" {% if not j3.document.isPopup() and j3.settings.get(stylePrefix ~ 'GalleryStatus') %} data-gallery=".lightgallery-product-images" data-index="{{ loop.index0 }}" {% endif %}>*/
/*                       <img src="{{ image.image }}" {% if image.image2x %}srcset="{{ image.image }} 1x, {{ image.image2x }} 2x"{% endif %} data-largeimg="{{ image.popup }}" alt="{{ heading_title }}" title="{{ heading_title }}" width="{{ j3.settings.get('image_dimensions_thumb.width') }}" height="{{ j3.settings.get('image_dimensions_thumb.height') }}"/>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="swiper-controls">*/
/*                 <div class="swiper-buttons">*/
/*                   <div class="swiper-button-prev"></div>*/
/*                   <div class="swiper-button-next"></div>*/
/*                 </div>*/
/*                 <div class="swiper-pagination"></div>*/
/*               </div>*/
/*               {% if product_labels %}*/
/*                 <div class="product-labels">*/
/*                   {% for id, label in product_labels %}*/
/*                     <span class="product-label product-label-{{ id }} product-label-{{ label.display }}"><b>{{ label.label }}</b></span>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*             {% if images|length > 1 and j3.settings.get(stylePrefix ~ 'AdditionalImagesStatus') %}*/
/*               {% if carousel %}*/
/*                 <div class="swiper additional-images" data-options='{{ carouselOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}' {% if direction == 'vertical' %}style="width: {{ j3.settings.get('image_dimensions_additional.width') }}px"{% endif %}>*/
/*                   <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*                     <div class="swiper-wrapper">*/
/*                       {% for image in images %}*/
/*                         <div class="swiper-slide additional-image" data-index="{{ loop.index0 }}">*/
/*                           <img src="{{ image.thumb }}" {% if image.thumb2x %}srcset="{{ image.thumb }} 1x, {{ image.thumb2x }} 2x"{% endif %} alt="{{ heading_title }}" title="{{ heading_title }}"/>*/
/*                         </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="swiper-buttons">*/
/*                     <div class="swiper-button-prev"></div>*/
/*                     <div class="swiper-button-next"></div>*/
/*                   </div>*/
/*                   <div class="swiper-pagination"></div>*/
/*                 </div>*/
/*               {% else %}*/
/*                 <div class="additional-images">*/
/*                   {% for image in images %}*/
/*                     <div class="additional-image" data-index="{{ loop.index0 }}">*/
/*                       <img src="{{ image.thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}"/>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*           </div>*/
/*           {% if not j3.document.isPopup() and j3.settings.get(stylePrefix ~ 'GalleryStatus') %}*/
/*           <div class="lightgallery lightgallery-product-images" data-images='{{ gallery|json_encode|e }}' data-options='{{ galleryOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}'></div>*/
/*           {% endif %}*/
/*           {% if not j3.document.isPopup('options') %}*/
/*             {% if product_blocks.image %}*/
/*             <div class="product-blocks blocks-image">*/
/*               {{ product_blocks.image|join }}*/
/*             </div>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*           {% if j3.document.isPopup('quickview') and (j3.settings.get('quickviewDescription')and j3.settings.get('quickviewDescriptionPosition') == 'image') %}*/
/*             <div class="description {{ quickviewExpand }}">*/
/*               <div class="expand-block">*/
/*                 <div class="expand-content">*/
/*                   {{ description }}*/
/*                 </div>*/
/*                 {% if j3.settings.get('quickviewExpandButton') %}*/
/*                   <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if tags and not j3.document.isPopup() and (j3.settings.get(stylePrefix ~ 'TagsPosition') == 'image') %}*/
/*             <div class="tags">*/
/*               <span class="tags-title">{{ text_tags }}</span>*/
/*               {% for tag in tags %}*/
/*                 <a href="{{ tag.href }}">{{ tag.tag }}</a>*/
/*                 {% if not loop.last %}<b>,</b>{% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="product-right">*/
/*           <div id="product" class="product-details">*/
/*           {% if not j3.document.isPopup('options') %}*/
/*           <div class="title page-title">{{ heading_title }}</div>*/
/*           {% if product_blocks.top %}*/
/*           <div class="product-blocks blocks-top">*/
/*           {{ product_blocks.top|join }}*/
/*           </div>*/
/*           {% endif %}*/
/*           {% endif %}*/
/* */
/*           {% if j3.document.isPopup('quickview') and (j3.settings.get('quickviewDescription')and j3.settings.get('quickviewDescriptionPosition') == 'top') %}*/
/*             <div class="description {{ quickviewExpand }}">*/
/*               <div class="expand-block">*/
/*                 <div class="expand-content">*/
/*                   {{ description }}*/
/*                 </div>*/
/*                 {% if j3.settings.get('quickviewExpandButton') %}*/
/*                   <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if not j3.document.isPopup('options') and j3.settings.get(stylePrefix ~ 'Stats') and (j3.settings.get(stylePrefix ~ 'StatsPosition') == 'default') %}*/
/*             <div class="product-stats">*/
/*               <ul class="list-unstyled">*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductStock')%}*/
/*                   <li class="product-stock {% if product_quantity > 0 %}in-stock{% else %}out-of-stock{% endif %}"><b>{{ j3.settings.get(stylePrefix ~ 'ProductStockText') }}:</b> <span>{{ stock }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'list') %}*/
/*                   <li class="product-manufacturer"><b>{{ j3.settings.get(stylePrefix ~ 'ProductManufacturerText') }}:</b> <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductReward') and reward %}*/
/*                   <li class="product-reward"><b>{{ j3.settings.get(stylePrefix ~ 'ProductRewardText') }}:</b> <span>{{ reward }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductModel') and model %}*/
/*                   <li class="product-model"><b>{{ j3.settings.get(stylePrefix ~ 'ProductModelText') }}:</b> <span>{{ model }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductWeight') and product_weight %}*/
/*                   <li class="product-weight"><b>{{ j3.settings.get(stylePrefix ~ 'ProductWeightText') }}:</b> <span>{{ product_weight }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductDimension') and product_dimension %}*/
/*                   <li class="product-dimension"><b>{{ j3.settings.get(stylePrefix ~ 'ProductDimensionText') }}:</b> <span>{{ product_length }} x {{ product_width }} x {{ product_height }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductSKU') and product_sku %}*/
/*                   <li class="product-sku"><b>{{ j3.settings.get(stylePrefix ~ 'ProductSKUText') }}:</b> <span> {{ product_sku }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductUPC') and product_upc %}*/
/*                   <li class="product-upc"><b>{{ j3.settings.get(stylePrefix ~ 'ProductUPCText') }}:</b> <span>{{ product_upc }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductEAN') and product_ean %}*/
/*                   <li class="product-ean"><b>{{ j3.settings.get(stylePrefix ~ 'ProductEANText') }}:</b> <span>{{ product_ean }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductJAN') and product_jan %}*/
/*                   <li class="product-jan"><b>{{ j3.settings.get(stylePrefix ~ 'ProductJANText') }}:</b> <span>{{ product_jan }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductISBN') and product_isbn %}*/
/*                   <li class="product-isbn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductISBNText') }}:</b> <span>{{ product_isbn }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductMPN') and product_mpn %}*/
/*                   <li class="product-mpn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductMPNText') }}:</b> <span>{{ product_mpn }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductLocation') and product_location %}*/
/*                   <li class="product-location"><b>{{ j3.settings.get(stylePrefix ~ 'ProductLocationText') }}:</b> <span>{{ product_location }}</span></li>*/
/*                 {% endif %}*/
/*               </ul>*/
/*               {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'image') %}*/
/*                 <div class="brand-image product-manufacturer">*/
/*                   <a href="{{ manufacturers }}">*/
/*                     {% if manufacturer_image %}*/
/*                       <img src="{{ manufacturer_image }}" {% if manufacturer_image2x %}srcset="{{ manufacturer_image }} 1x, {{ manufacturer_image2x }} 2x"{% endif %} alt="{{ manufacturer }}"/>*/
/*                     {% endif %}*/
/*                     <span>{{ manufacturer }}</span>*/
/*                   </a>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if j3.settings.get(stylePrefix ~ 'CustomStats')%}*/
/*                 <div class="custom-stats">*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductSold')%}*/
/*                     <div class="product-sold"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'SoldText', products_sold) }}</b></div>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductViews')%}*/
/*                     <div class="product-views"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'ViewsText', product_views) }}</b></div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if review_status and not j3.document.isPopup() %}*/
/*             <div class="rating rating-page">*/
/*               <div class="rating-stars">*/
/*                 {% for i in 1..5 %}*/
/*                   {% if rating < i %}*/
/*                     <span class="fa fa-stack">*/
/*                       <i class="fa fa-star-o fa-stack-1x"></i>*/
/*                     </span>{% else %}*/
/*                     <span class="fa fa-stack">*/
/*                       <i class="fa fa-star fa-stack-1x"></i>*/
/*                       <i class="fa fa-star-o fa-stack-1x"></i>*/
/*                     </span>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </div>*/
/*               <div class="review-links">*/
/*                 <a>{{ reviews }}</a>*/
/*                 <b>{{ j3.settings.get(stylePrefix ~ 'RatingSeparator') }}</b>*/
/*                 <a>{{ text_write }}</a>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if date_end and j3.settings.get(j3.document.isPopup() ? 'quickviewCountdown' : 'countdownStatus') %}*/
/*             <div class="countdown-wrapper">*/
/*               {% if j3.settings.get(stylePrefix ~ 'CountdownText') %}*/
/*               <h5 class="countdown-title title">{{ j3.settings.get(stylePrefix ~ 'CountdownText') }}</h5>*/
/*               {% endif %}*/
/*               <div class="countdown" data-date="{{ date_end }}">*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownDay') }}</span></div>*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownHour') }}</span></div>*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownMin') }}</span></div>*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownSec') }}</span></div>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if price and not j3.document.isPopup('options') %}*/
/*           <div class="product-price-group">*/
/*            <div class="price-wrapper">*/
/*              <div class="price-group">*/
/*                {% if not special %}*/
/*                  <div class="product-price">{{ price }}</div>*/
/*                {% else %}*/
/*                  <div class="product-price-new">{{ special }}</div>*/
/*                  <div class="product-price-old">{{ price }}</div>*/
/*                {% endif %}*/
/*              </div>*/
/*              {% if tax %}*/
/*                <div class="product-tax">{{ text_tax }} {{ tax }}</div>*/
/*              {% endif %}*/
/*              {% if points %}*/
/*                <div class="product-points">{{ text_points }} {{ points }}</div>*/
/*              {% endif %}*/
/* */
/*              {% if discounts %}*/
/*                <div class="discounts">*/
/*                  {% for discount in discounts %}*/
/*                    <div class="product-discount">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</div>*/
/*                  {% endfor %}*/
/*                </div>*/
/*              {% endif %}*/
/*            </div>*/
/*             {% if not j3.document.isPopup('options') and j3.settings.get(stylePrefix ~ 'Stats') and (j3.settings.get(stylePrefix ~ 'StatsPosition') == 'price') %}*/
/*               <div class="product-stats">*/
/*                 <ul class="list-unstyled">*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductStock')%}*/
/*                     <li class="product-stock {% if product_quantity > 0 %}in-stock{% else %}out-of-stock{% endif %}"><b>{{ j3.settings.get(stylePrefix ~ 'ProductStockText') }}:</b> <span>{{ stock }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'list') %}*/
/*                     <li class="product-manufacturer"><b>{{ j3.settings.get(stylePrefix ~ 'ProductManufacturerText') }}:</b> <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductReward') and reward %}*/
/*                     <li class="product-reward"><b>{{ j3.settings.get(stylePrefix ~ 'ProductRewardText') }}:</b> <span>{{ reward }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductModel') and model %}*/
/*                     <li class="product-model"><b>{{ j3.settings.get(stylePrefix ~ 'ProductModelText') }}:</b> <span>{{ model }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductWeight') and product_weight %}*/
/*                     <li class="product-weight"><b>{{ j3.settings.get(stylePrefix ~ 'ProductWeightText') }}:</b> <span>{{ product_weight }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductDimension') and product_dimension %}*/
/*                     <li class="product-dimension"><b>{{ j3.settings.get(stylePrefix ~ 'ProductDimensionText') }}:</b> <span>{{ product_length }} x {{ product_width }} x {{ product_height }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductSKU') and product_sku %}*/
/*                     <li class="product-sku"><b>{{ j3.settings.get(stylePrefix ~ 'ProductSKUText') }}:</b> <span> {{ product_sku }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductUPC') and product_upc %}*/
/*                     <li class="product-upc"><b>{{ j3.settings.get(stylePrefix ~ 'ProductUPCText') }}:</b> <span>{{ product_upc }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductEAN') and product_ean %}*/
/*                     <li class="product-ean"><b>{{ j3.settings.get(stylePrefix ~ 'ProductEANText') }}:</b> <span>{{ product_ean }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductJAN') and product_jan %}*/
/*                     <li class="product-jan"><b>{{ j3.settings.get(stylePrefix ~ 'ProductJANText') }}:</b> <span>{{ product_jan }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductISBN') and product_isbn %}*/
/*                     <li class="product-isbn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductISBNText') }}:</b> <span>{{ product_isbn }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductMPN') and product_mpn %}*/
/*                     <li class="product-mpn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductMPNText') }}:</b> <span>{{ product_mpn }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductLocation') and product_location %}*/
/*                     <li class="product-location"><b>{{ j3.settings.get(stylePrefix ~ 'ProductLocationText') }}:</b> <span>{{ product_location }}</span></li>*/
/*                   {% endif %}*/
/*                 </ul>*/
/*                 {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'image') %}*/
/*                   <div class="brand-image product-manufacturer">*/
/*                     <a href="{{ manufacturers }}">*/
/*                       {% if manufacturer_image %}*/
/*                         <img src="{{ manufacturer_image }}" {% if manufacturer_image2x %}srcset="{{ manufacturer_image }} 1x, {{ manufacturer_image2x }} 2x"{% endif %} alt="{{ manufacturer }}"/>*/
/*                       {% endif %}*/
/*                       <span>{{ manufacturer }}</span>*/
/*                     </a>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'CustomStats')%}*/
/*                   <div class="custom-stats">*/
/*                     {% if j3.settings.get(stylePrefix ~ 'ProductSold')%}*/
/*                       <div class="product-sold"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'SoldText', products_sold) }}</b></div>*/
/*                     {% endif %}*/
/*                     {% if j3.settings.get(stylePrefix ~ 'ProductViews')%}*/
/*                       <div class="product-views"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'ViewsText', product_views) }}</b></div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             {% endif %}*/
/*           </div>*/
/*           {% endif %}*/
/* */
/*           {% if options %}*/
/*           <div class="product-options">*/
/*             <h3 class="options-title title">{{ text_option }}</h3>*/
/*             {% for option in options %}*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }} {% if j3.settings.get(stylePrefix ~ 'OptionsPushSelect') %}push-option{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for option_value in option.product_option_value %}*/
/*                 <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'radio' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }} {% if j3.settings.get(stylePrefix ~ 'OptionsPushRadio') %}push-option{% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" data-toggle="tooltip" data-tooltip-class="push-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'PushTooltipPosition') }}" title="{{ option_value.name }} {% if option_value.price %} ({{ option_value.price_prefix }}{{ option_value.price }}) {% endif %}"/> {% endif %}*/
/*                     <span class="option-value">*/
/*                       {{ option_value.name }}*/
/*                       {% if option_value.price %}*/
/*                         <span class="option-price">*/
/*                           ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                         </span>*/
/*                       {% endif %}*/
/*                     </span>*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'checkbox' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }} {% if j3.settings.get(stylePrefix ~ 'OptionsPushCheckbox') %}push-option{% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" data-toggle="tooltip" data-tooltip-class="push-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'PushTooltipPosition') }}" title="{{ option_value.name }} {% if option_value.price %} ({{ option_value.price_prefix }}{{ option_value.price }}) {% endif %}"/> {% endif %}*/
/*                     <span class="option-value">*/
/*                       {{ option_value.name }}*/
/*                       {% if option_value.price %}*/
/*                         <span class="option-price">({{ option_value.price_prefix }}{{ option_value.price }})</span>*/
/*                       {% endif %}*/
/*                     </span>*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'text' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date" data-picker-class="product-options pp-date-time-picker">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime" data-picker-class="product-options pp-date-time-picker">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group time" data-picker-class="product-options pp-date-time-picker">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*           {% endif %}*/
/* */
/*           {% if recurrings %}*/
/*             <h3 class="title recurring-title">{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if j3.settings.get('catalogCartStatus') or j3.settings.get('catalogWishlistStatus') or j3.settings.get('catalogCompareStatus') or (product_extra_buttons and not j3.document.isPopup()) %}*/
/*           <div class="button-group-page">*/
/*             <div class="buttons-wrapper">*/
/*               <div class="stepper-group cart-group">*/
/*                 {% if j3.settings.get('catalogCartStatus') %}*/
/*                 <div class="stepper">*/
/*                   <label class="control-label" for="product-quantity">{{ entry_qty }}</label>*/
/*                   <input id="product-quantity" type="text" name="quantity" value="{{ minimum }}" data-minimum="{{ minimum }}" class="form-control"/>*/
/*                   <input id="product-id" type="hidden" name="product_id" value="{{ product_id }}" />*/
/*                   <span>*/
/*                   <i class="fa fa-angle-up"></i>*/
/*                   <i class="fa fa-angle-down"></i>*/
/*                 </span>*/
/*                 </div>*/
/*                 <a id="button-cart" data-loading-text="<span class='btn-text'>{{ button_cart }}</span>" class="btn btn-cart" {% if (j3.settings.get(stylePrefix ~ 'CartDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'CartTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="pp-cart-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'CartTooltipPosition') }}" title="{{ button_cart }}" {% endif %}><span class="btn-text">{{ button_cart }}</span></a>*/
/*                 {% endif %}*/
/*                 {% if product_extra_buttons and not j3.document.isPopup() %}*/
/*                   <div class="extra-group">*/
/*                     {% for id, extra_button in product_extra_buttons %}*/
/*                       <a class="btn btn-extra btn-extra-{{ id }} btn-{{ loop.index }}-extra" {% if (j3.settings.get(stylePrefix ~ 'Extra' ~ loop.index ~ 'ButtonDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'ExtraTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="extra-tooltip pp-extra-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'ExtraTooltipPosition') }}" title="{{ extra_button.label }}" {% endif %} {% if extra_button.action == 'quickbuy' %}data-quick-buy{% endif %} {% if extra_button.action == 'link' and extra_button.link.href %}href="{{ extra_button.link.href }}" {{ j3.linkAttrs(extra_button.link) }} data-product_id="{{ product_id }}"{% endif %} data-loading-text="<span class='btn-text'>{{ extra_button.label }}</span>"><span class="btn-text">{{ extra_button.label }}</span></a>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 {% endif %}*/
/*               </div>*/
/* */
/*               {% if j3.settings.get('catalogWishlistStatus') or j3.settings.get('catalogCompareStatus') %}*/
/*               <div class="wishlist-compare">*/
/*                 {% if not j3.document.isPopup('options') %}*/
/*                   {% if j3.settings.get('catalogWishlistStatus') %}*/
/*                   <a class="btn btn-wishlist" {% if (j3.settings.get(stylePrefix ~ 'WishlistDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'WishlistTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="pp-wishlist-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'WishlistTooltipPosition') }}" title="{{ button_wishlist }}" {% endif %} onclick="parent.wishlist.add({{ product_id }});"><span class="btn-text">{{ button_wishlist }}</span></a>*/
/*                   {% endif %}*/
/* */
/*                   {% if j3.settings.get('catalogCompareStatus') %}*/
/*                   <a class="btn btn-compare" {% if (j3.settings.get(stylePrefix ~ 'CompareDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'CompareTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="pp-compare-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'CompareTooltipPosition') }}" title="{{ button_compare }}" {% endif %} onclick="parent.compare.add({{ product_id }});"><span class="btn-text">{{ button_compare }}</span></a>*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*                 {% if j3.document.isPopup('quickview') %}*/
/*                   <a class="btn btn-more-details" href="{{ view_more_url }}" target="_top" {% if (j3.settings.get(stylePrefix ~ 'MoreDetailsDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'MoreDetailsTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="more-details-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'MoreDetailsTooltipPosition') }}" title="{{ j3.settings.get('quickviewExtraText') }}" {% endif %}><span class="btn-text">{{ j3.settings.get('quickviewExtraText') }}</span></a>*/
/*                 {% endif %}*/
/*               </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {% endif %}*/
/* */
/*           {% if minimum > 1 and not product_quantity %}*/
/*             <div class="minimum alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*           {% endif %}*/
/* */
/*           {% if not j3.document.isPopup('options') %}*/
/*             {% if product_blocks.details %}*/
/*                 {{ product_blocks.details|join }}*/
/*             {% endif %}*/
/*           {% endif %}*/
/*           </div>*/
/*           {% if not j3.document.isPopup('options') %}*/
/*           {% if product_blocks.bottom %}*/
/*           <div class="product-blocks blocks-bottom">*/
/*             {{ product_blocks.bottom|join }}*/
/*           </div>*/
/*           {% endif %}*/
/*           {% endif %}*/
/*           {% if tags and not j3.document.isPopup() and (j3.settings.get(stylePrefix ~ 'TagsPosition') == 'details') %}*/
/*             <div class="tags">*/
/*               <span class="tags-title">{{ text_tags }}</span>*/
/*               {% for tag in tags %}*/
/*                 <a href="{{ tag.href }}">{{ tag.tag }}</a>*/
/*                 {% if not loop.last %}<b>,</b>{% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*       {% if description and j3.document.isPopup('quickview') and j3.settings.get('quickviewDescription') and (j3.settings.get('quickviewDescriptionPosition') == 'default') %}*/
/*         <div class="description {{ quickviewExpand }}">*/
/*           <div class="expand-block">*/
/*             <div class="expand-content">*/
/*               {{ description }}*/
/*             </div>*/
/*             {% if j3.settings.get('quickviewExpandButton') %}*/
/*               <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if not j3.document.isPopup('options') %}*/
/*         {% if product_blocks.default %}*/
/*         <div class="product-blocks blocks-default">*/
/*           {{ product_blocks.default|join }}*/
/*         </div>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*       {% if tags and not j3.document.isPopup() and (j3.settings.get(stylePrefix ~ 'TagsPosition') == 'default') %}*/
/*         <div class="tags">*/
/*           <span class="tags-title">{{ text_tags }}</span>*/
/*           {% for tag in tags %}*/
/*             <a href="{{ tag.href }}">{{ tag.tag }}</a>*/
/*             {% if not loop.last %}<b>,</b>{% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if not j3.document.isPopup() %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {% endif %}*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-cart, [data-quick-buy]').on('click', function () {*/
/*   var $btn = $(this);*/
/*   $.ajax({*/
/*     url: 'index.php?route=checkout/cart/add',*/
/*     type: 'post',*/
/*     data: $(*/
/*       '#product .button-group-page input[type=\'text\'], #product .button-group-page input[type=\'hidden\'], #product .button-group-page input[type=\'radio\']:checked, #product .button-group-page input[type=\'checkbox\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' +*/
/*       '#product .product-options input[type=\'text\'], #product .product-options input[type=\'hidden\'], #product .product-options input[type=\'radio\']:checked, #product .product-options input[type=\'checkbox\']:checked, #product .product-options select, #product .product-options textarea, ' +*/
/*       '#product select[name="recurring_id"]'*/
/*     ),*/
/*     dataType: 'json',*/
/*     beforeSend: function () {*/
/*       $('#button-cart').button('loading');*/
/*     },*/
/*     complete: function () {*/
/*       $('#button-cart').button('reset');*/
/*     },*/
/*     success: function (json) {*/
/*       $('.alert-dismissible, .text-danger').remove();*/
/*       $('.form-group').removeClass('has-error');*/
/* */
/*       if (json['error']) {*/
/*         if (json['error']['option']) {*/
/*           for (i in json['error']['option']) {*/
/*             var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/*             if (element.parent().hasClass('input-group')) {*/
/*               element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*             } else {*/
/*               element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*             }*/
/*           }*/
/*         }*/
/* */
/*         if (json['error']['recurring']) {*/
/*           $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/*         }*/
/* */
/*         // Highlight any found errors*/
/*         $('.text-danger').parent().addClass('has-error');*/
/* */
/*         try {*/
/*           $('html, body').animate({ scrollTop: $('.form-group.has-error').offset().top - 50 }, 'slow');*/
/*         } catch (e) {*/
/*         }*/
/*       }*/
/* */
/*       if (json['success']) {*/
/*         if ($('html').hasClass('popup-options')) {*/
/*           parent.$(".popup-options .popup-close").trigger('click');*/
/*         }*/
/* */
/*         if (json['notification']) {*/
/*           parent.show_notification(json['notification']);*/
/*         } else {*/
/*           parent.$('#content').parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         parent.$('#cart-total').html(json['total']);*/
/*         parent.$('#cart-items').html(json['items_count']);*/
/* */
/*         if (json['items_count']) {*/
/*           parent.$('#cart-items').removeClass('count-zero');*/
/*         } else {*/
/*           parent.$('#cart-items').addClass('count-zero');*/
/*         }*/
/* */
/*         if (Journal['scrollToTop']) {*/
/*           parent.$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/*         }*/
/* */
/*         parent.$('.cart-content ul').load('index.php?route=common/cart/info ul li');*/
/* */
/*         if (window.location.href.indexOf('quick_buy=true') !== -1) {*/
/*           parent.location.href = Journal['checkoutUrl'];*/
/*         }*/
/* */
/*         if ($btn.data('quick-buy') !== undefined) {*/
/*           location = Journal['checkoutUrl'];*/
/*         }*/
/* */
/*         if (parent.window['_QuickCheckout']) {*/
/*           parent.window['_QuickCheckout'].save();*/
/*         }*/
/*       }*/
/*     },*/
/*     error: function (xhr, ajaxOptions, thrownError) {*/
/*       alert(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr.responseText);*/
/*     }*/
/*   });*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $(function () {*/
/*   $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/*   });*/
/* */
/*   $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/*   $('#button-review').on('click', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: $("#form-review").serialize(),*/
/*       beforeSend: function() {*/
/*         $('#button-review').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-review').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*           $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/*           $('input[name=\'name\']').val('');*/
/*           $('textarea[name=\'text\']').val('');*/
/*           $('input[name=\'rating\']:checked').prop('checked', false);*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* });*/
/* */
/* $(document).ready(function() {*/
/* 	$('.thumbnails').magnificPopup({*/
/* 		type:'image',*/
/* 		delegate: 'a',*/
/* 		gallery: {*/
/* 			enabled: true*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).ready(function () {*/
/*   $('.review-links a').on('click', function () {*/
/*     var $review = $('#review');*/
/*     if ($review.length) {*/
/*       $('a[href="#' + $review.closest('.module-item').attr('id') + '"]').trigger('click');*/
/*       $('a[href="#' + $review.closest('.tab-pane').attr('id') + '"]').trigger('click');*/
/*       $('a[href="#' + $review.closest('.panel-collapse').attr('id') + '"]').trigger('click');*/
/* */
/*       $([document.documentElement, document.body]).animate({*/
/*         scrollTop: $review.offset().top - 100*/
/*       }, 200);*/
/*     }*/
/*   });*/
/* });*/
/* //--></script>*/
/* {% if not j3.document.isPopup() %}*/
/* {{ j3.loadController('journal3/seo/rich_snippets', breadcrumbs) }}*/
/* {% endif %}*/
/* {{ footer }}*/
/* */
