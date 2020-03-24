<?php

/* __string_template__191459c0ed649f9bc71d74da33f7fdf129830c475cfcfb45379a6a6b16442218 */
class __TwigTemplate_3f20693301f9b965611420749e8943f88504f765b633696a27fb993211584e00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__191459c0ed649f9bc71d74da33f7fdf129830c475cfcfb45379a6a6b16442218", 22);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["body_class"] = "product_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        // line 27
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '515063142397766', {}, {agent:'execcube-3.0.17-1.0.1'});
fbq('track', 'PageView', {\"agent\":\"execcube-3.0.17-1.0.1\",\"content_ids\":8,\"content_type\":\"product\",\"value\":13200,\"currency\":\"JPY\"});
fbq('track', 'ViewContent', {\"agent\":\"execcube-3.0.17-1.0.1\",\"content_ids\":8,\"content_type\":\"product\",\"value\":13200,\"currency\":\"JPY\"});
</script>
<!-- End Facebook Pixel Code -->
    <script>
        eccube.classCategories = ";
        // line 42
        echo twig_jsonencode_filter($this->getAttribute(($context["Product"] ?? null), "class_categories", array()));
        echo ";
    
        // 規格2に選択肢を割り当てる。
        function fnSetClassCategories(form, classcat_id2_selected) {
            var \$form = \$(form);
            var product_id = \$form.find('input[name=product_id]').val();
            var \$sele1 = \$form.find('select[name=classcategory_id1]');
            var \$sele2 = \$form.find('select[name=classcategory_id2]');
            eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
        }
    
        ";
        // line 53
        if ($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array(), "any", true, true)) {
            // line 54
            echo "        fnSetClassCategories(
                document.form1, ";
            // line 55
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array()), "vars", array()), "value", array()));
            echo "
        );
        ";
        }
        // line 58
        echo "    </script>
    
    <script>
    \$(function(){
        \$('.carousel').slick({
            infinite: false,
            speed: 300,
            prevArrow:'<button type=\"button\" class=\"slick-prev\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
            nextArrow:'<button type=\"button\" class=\"slick-next\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    
        \$('.slides').slick({
            dots: true,
            arrows: true,
            speed: 300,
            prevArrow:'<div class=\"slick-arrow left\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></div>',
            nextArrow:'<div class=\"slick-arrow right\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></div>',
            customPaging: function(slider, i) {
                return '<button class=\"thumbnail\">' + \$(slider.\$slides[i]).find('img').prop('outerHTML') + '</button>';
            }
        });
    
        \$('#favorite').click(function() {
            \$('#mode').val('add_favorite');
        });
    
        \$('#add-cart').click(function() {
            \$('#mode').val('add_cart');
        });
    
        // bfcache無効化
        \$(window).bind('pageshow', function(event) {
            if (event.originalEvent.persisted) {
                location.reload(true);
            }
        });
    });
    </script>
    
    ";
    }

    // line 110
    public function block_main($context, array $blocks = array())
    {
        // line 111
        echo "        ";
        // line 124
        echo "    
        <!-- ▼item_detail▼ -->
        <div id=\"item_detail\">
            <div id=\"detail_wrap\" class=\"row\">
                <!--★画像★-->
                <div id=\"item_photo_area\" class=\"col-sm-6\">
                    <div id=\"detail_image_box__slides\" class=\"slides\">
                        ";
        // line 131
        if ((twig_length_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "ProductImage", array())) > 0)) {
            // line 132
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? null), "ProductImage", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
                // line 133
                echo "                            <div id=\"detail_image_box__item--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($context["ProductImage"]), "html", null, true);
                echo "\"/></div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                        ";
        } else {
            // line 136
            echo "                            <div id=\"detail_image_box__item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct(""), "html", null, true);
            echo "\"/></div>
                        ";
        }
        // line 138
        echo "                    </div>
                </div>
    
                <section id=\"item_detail_area\" class=\"col-sm-6\">
    
                    <!--★商品名★-->
                    <div class=\"campaign\">
                    </div>
                    <h3 id=\"detail_description_box__name\" class=\"item_name\">";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "name", array()), "html", null, true);
        echo "</h3>
                    <div id=\"detail_description_box__body\" class=\"item_detail\">
    
                        ";
        // line 149
        if ( !twig_test_empty($this->getAttribute(($context["Product"] ?? null), "ProductTag", array()))) {
            // line 150
            echo "                            <!--▼商品タグ-->
                            <div id=\"product_tag_box\" class=\"product_tag\">
                                ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? null), "ProductTag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductTag"]) {
                // line 153
                echo "                                    <span id=\"product_tag_box__product_tag--";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ProductTag"], "Tag", array()), "id", array()), "html", null, true);
                echo "\" class=\"product_tag_list\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductTag"], "Tag", array()), "html", null, true);
                echo "</span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductTag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "                            </div>
                            <hr>
                            <!--▲商品タグ-->
                        ";
        }
        // line 159
        echo "    
                        <!--★通常価格★-->
                        ";
        // line 161
        if ($this->getAttribute(($context["Product"] ?? null), "hasProductClass", array())) {
            // line 162
            if (( !(null === $this->getAttribute(($context["Product"] ?? null), "getPrice01Min", array())) && ($this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMin", array()) == $this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMax", array())))) {
                // line 163
                echo "                            <p id=\"detail_description_box__class_normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                            ";
            } elseif (( !(null === $this->getAttribute(            // line 164
($context["Product"] ?? null), "getPrice01Min", array())) &&  !(null === $this->getAttribute(($context["Product"] ?? null), "getPrice01Max", array())))) {
                // line 165
                echo "                            <p id=\"detail_description_box__class_normal_range_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMax", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                            ";
            }
            // line 167
            echo "                        ";
        } else {
            // line 168
            if ( !(null === $this->getAttribute(($context["Product"] ?? null), "getPrice01Max", array()))) {
                // line 169
                echo "                            <p id=\"detail_description_box__normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                            ";
            }
            // line 171
            echo "                        ";
        }
        // line 173
        echo "<!--★販売価格★-->
                        ";
        // line 174
        if ($this->getAttribute(($context["Product"] ?? null), "hasProductClass", array())) {
            // line 175
            if (($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array()) == $this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMax", array()))) {
                // line 176
                echo "                            <p id=\"detail_description_box__class_sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                            ";
            } else {
                // line 178
                echo "                            <p id=\"detail_description_box__class_range_sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array())), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMax", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                            ";
            }
            // line 180
            echo "                        ";
        } else {
            // line 181
            echo "<p id=\"detail_description_box__sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array())), "html", null, true);
            echo "</span> <span class=\"small\">税込</span></p>
                        ";
        }
        // line 184
        echo "<!--▼商品コード-->
                        <p id=\"detail_description_box__item_range_code\" class=\"item_code\">商品コード： <span id=\"item_code_default\">
                            ";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "code_min", array()), "html", null, true);
        echo "
                            ";
        // line 187
        if (($this->getAttribute(($context["Product"] ?? null), "code_min", array()) != $this->getAttribute(($context["Product"] ?? null), "code_max", array()))) {
            echo " ～ ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "code_max", array()), "html", null, true);
        }
        // line 188
        echo "                            </span> </p>
                        <!--▲商品コード-->
    
                        <!-- ▼関連カテゴリ▼ -->
                        <div id=\"relative_category_box\" class=\"relative_cat\">
                            <p>関連カテゴリ</p>
                              ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? null), "ProductCategories", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
            // line 195
            echo "                            <ol id=\"relative_category_box__relative_category--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["ProductCategory"], "Category", array()), "path", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 197
                echo "                                <li><a id=\"relative_category_box__relative_category--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" href=\"";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
                echo "?category_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "name", array()), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "                            </ol>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "                        </div>
                        <!-- ▲関連カテゴリ▲ -->
    
                        <form action=\"?\" method=\"post\" id=\"form1\" name=\"form1\">
                            <!--▼買い物かご-->
                            <div id=\"detail_cart_box\" class=\"cart_area\">
                                ";
        // line 207
        if ($this->getAttribute(($context["Product"] ?? null), "stock_find", array())) {
            // line 208
            echo "    
                                    ";
            // line 210
            echo "                                    ";
            if ($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array(), "any", true, true)) {
                // line 211
                echo "                                    <ul id=\"detail_cart_box__cart_class_category_id\" class=\"classcategory_list\">
                                        ";
                // line 213
                echo "                                        <li>
                                            ";
                // line 214
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array()), 'widget');
                echo "
                                            ";
                // line 215
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array()), 'errors');
                echo "
                                        </li>
                                        ";
                // line 218
                echo "                                        ";
                if ($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array(), "any", true, true)) {
                    // line 219
                    echo "                                            <li>
                                                ";
                    // line 220
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array()), 'widget');
                    echo "
                                                ";
                    // line 221
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array()), 'errors');
                    echo "
                                            </li>
                                         ";
                }
                // line 224
                echo "                                    </ul>
                                    ";
            }
            // line 226
            echo "    
                                    ";
            // line 228
            echo "                                    <dl id=\"detail_cart_box__cart_quantity\" class=\"quantity\">
                                        <dt>数量</dt>
                                        <dd>
                                            ";
            // line 231
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget');
            echo "
                                            ";
            // line 232
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'errors');
            echo "
                                        </dd>
                                    </dl>
    
                                    <div class=\"extra-form\">
                                        ";
            // line 237
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 238
                echo "                                            ";
                if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                    // line 239
                    echo "                                                ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                            ";
                }
                // line 241
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "                                    </div>
    
                                    ";
            // line 245
            echo "                                    <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                                        <ul id=\"detail_cart_box__insert_button\" class=\"row\">
                                            <li class=\"col-xs-12 col-sm-8 detail_cart_box__insert_button_list\">
                                                <span class=\"icon\"><img class=\"img\" src=\"";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
            echo "/img/icon/cart_icon.png\" alt=\"カートに入れる\"></span>
                                                <button type=\"submit\" id=\"add-cart\" class=\"btn btn-primary btn-block prevention-btn prevention-mask\">カートに入れる</button>
                                            </li>
                                        </ul>
                                    </div>
                                ";
        } else {
            // line 254
            echo "                                    ";
            // line 255
            echo "                                    <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                                        <ul class=\"row\">
                                            <li class=\"col-xs-12 col-sm-8\"><button type=\"button\" class=\"btn btn-default btn-block\" disabled=\"disabled\">ただいま品切れ中です</button></li>
                                        </ul>
                                    </div>
                                ";
        }
        // line 261
        echo "                            </div>
                            <!--▲買い物かご-->
                            ";
        // line 263
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
                        </form>
    
                        <!-- 配送期間 
                        <div class=\"delivery-schedule\">
                            <p class=\"text\">受注期間　3月25日〜4月1日</p>
                             <p class=\"text\">※配送予定期間  4月下旬~5月上旬予定</p>
                        </div>
    -->
                        
    
                        <!--★商品説明★-->
                        <p id=\"detail_not_stock_box__description_detail\" class=\"item_comment\">";
        // line 275
        echo nl2br($this->getAttribute(($context["Product"] ?? null), "description_detail", array()));
        echo "</p>
    
                    </div>
                    <!-- /.item_detail -->
    
                </section>
                <!--詳細ここまで-->
            </div>
    
            ";
        // line 285
        echo "            ";
        if ($this->getAttribute(($context["Product"] ?? null), "freearea", array())) {
            // line 286
            echo "            <div id=\"sub_area\" class=\"row\">
                <div class=\"col-sm-10 col-sm-offset-1\">
                    <div id=\"detail_free_box__freearea\" class=\"freearea\">";
            // line 288
            echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute(($context["Product"] ?? null), "freearea", array())));
            echo "</div>
                </div>
            </div>
            ";
        }
        // line 300
        echo "<div id=\"related_product_area\" class=\"row\">
    <div class=\"col-sm-12\">
        <h2 class=\"heading03\">関連商品</h2>
        <div class=\"related_product_carousel\">
            ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["RelatedProducts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["RelatedProduct"]) {
            // line 305
            echo "                <div class=\"product_item\">
                    <a href=\"";
            // line 306
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"item_photo\">
                            <img src=\"";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "main_list_image", array())), "html", null, true);
            echo "\">
                        </div>
                        <dl>
                            <dt class=\"item_name\">";
            // line 311
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "name", array()), "html", null, true);
            echo "</dt>
                            <dd class=\"item_price\">
                                ";
            // line 313
            if ($this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "hasProductClass", array())) {
                // line 314
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "getPrice02Min", array()) == $this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "getPrice02Max", array()))) {
                    // line 315
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "getPrice02IncTaxMin", array())), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 317
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "getPrice02IncTaxMin", array())), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "getPrice02IncTaxMax", array())), "html", null, true);
                    echo "
                                    ";
                }
                // line 319
                echo "                                ";
            } else {
                // line 320
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "getPrice02IncTaxMin", array())), "html", null, true);
                echo "
                                ";
            }
            // line 322
            echo "                            </dd>
                            <dd class=\"item_comment\">";
            // line 323
            echo $this->getAttribute($context["RelatedProduct"], "content", array());
            echo "</dd>
                        </dl>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RelatedProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        echo "        </div>
    </div>
</div>

";
        // line 333
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/../../plugin/relatedproduct/assets/js/related_product_plugin.js\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/../../plugin/relatedproduct/assets/css/related_product_plugin.css\">

        </div>
        <!-- ▲item_detail▲ -->
    ";
    }

    public function getTemplateName()
    {
        return "__string_template__191459c0ed649f9bc71d74da33f7fdf129830c475cfcfb45379a6a6b16442218";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  659 => 334,  654 => 333,  648 => 328,  637 => 323,  634 => 322,  628 => 320,  625 => 319,  617 => 317,  611 => 315,  608 => 314,  606 => 313,  601 => 311,  593 => 308,  588 => 306,  585 => 305,  581 => 304,  575 => 300,  568 => 288,  564 => 286,  561 => 285,  549 => 275,  534 => 263,  530 => 261,  522 => 255,  520 => 254,  511 => 248,  506 => 245,  502 => 242,  496 => 241,  490 => 239,  487 => 238,  483 => 237,  475 => 232,  471 => 231,  466 => 228,  463 => 226,  459 => 224,  453 => 221,  449 => 220,  446 => 219,  443 => 218,  438 => 215,  434 => 214,  431 => 213,  428 => 211,  425 => 210,  422 => 208,  420 => 207,  412 => 201,  397 => 199,  370 => 197,  353 => 196,  346 => 195,  329 => 194,  321 => 188,  316 => 187,  312 => 186,  308 => 184,  302 => 181,  299 => 180,  291 => 178,  285 => 176,  283 => 175,  281 => 174,  278 => 173,  275 => 171,  269 => 169,  267 => 168,  264 => 167,  256 => 165,  254 => 164,  249 => 163,  247 => 162,  245 => 161,  241 => 159,  235 => 155,  224 => 153,  220 => 152,  216 => 150,  214 => 149,  208 => 146,  198 => 138,  190 => 136,  187 => 135,  166 => 133,  148 => 132,  146 => 131,  137 => 124,  135 => 111,  132 => 110,  78 => 58,  72 => 55,  69 => 54,  67 => 53,  53 => 42,  35 => 27,  32 => 26,  28 => 22,  26 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__191459c0ed649f9bc71d74da33f7fdf129830c475cfcfb45379a6a6b16442218", "");
    }
}
