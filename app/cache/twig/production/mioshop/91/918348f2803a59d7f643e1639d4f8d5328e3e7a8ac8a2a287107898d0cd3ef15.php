<?php

/* Block/tmp_sideNavigation.twig */
class __TwigTemplate_31c6b843446ea19e02946a239d8fc29d23046eb4fb83e7d55a5311e72f999104 extends Twig_Template
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
        echo "<div
    class=\"drawer_block\">
    <!-- sideNavigation -->
    <div id=\"sideNavigation\" class=\"template original\">
        <div class=\"contaner\">
            <div class=\"login_block section\">
                <div class=\"login_block_member\">
                    <a class=\"text_link\" href=\"https://mioofficial.jp/entry\"><img
                            class=\"text_link_image\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(        // line 10
($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/icon/member.svg\"
                            alt=\"新規会員登録\">新規会員登録</a>
                </div>
                <div class=\"login_block_login\">
                    <a class=\"text_link\" href=\"https://mioofficial.jp/mypage/login\"><img
                            class=\"text_link_image\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(        // line 16
($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/icon/login.svg\"
                            alt=\"ログイン\">ログイン</a>
                </div>
            </div>
            <div class=\"navigation_block section\">
                <ul class=\"navigation_list\">
                    <li class=\"list_item\">
                        <a class=\"text_link\" href=\"";
        // line 23
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "\">HOME</a>
                    </li>
                    <li class=\"list_item\">
                        <a class=\"text_link\"
                            href=\"https://mioofficial.jp/products/list\">AII ITEM</a>
                    </li>
                    <li class=\"list_item\">
                        <a class=\"text_link\"
                            href=\"https://mioofficial.jp/user_data/lookbook\">Look Book 2020</a>
                    </li>
                    <li class=\"list_item\">
                        <a class=\"text_link\"
                            href=\"https://mioofficial.jp/help/guide\">SHOP GUIDE</a>
                    </li>
                    <li class=\"list_item\">
                        <a class=\"text_link\" href=\"https://mioofficial.jp/contact\">CONTACT</a>
                    </li>
                </ul>
            </div>
            <div class=\"sns_block section\">
                <h3 class=\"title\">Official's LINK</h3>
                <ul class=\"list\">
                    <li class=\"list_item\">
                        <a class=\"text_link\"
                            href=\"https://www.instagram.com/mio.official_/\">ー
                            Instagram</a>
                    </li>
                    <li class=\"list_item\">
                        <a class=\"text_link\" href=\"https://line.me/R/ti/p/%40686amnjh\">ー
                            LINE</a>
                    </li>
                </ul>
            </div>
<!--
            <div class=\"official_block section\">
                <a class=\"text_link\"
                    href=\"#\"><img
                        class=\"text_link_image\"
                        src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(        // line 62
($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/icon/insta_white.png\"
                        alt=\"Shop Offisial Instagram\">Shop
                    Official
                    Instagram</a>
            </div>
-->
            <div class=\"saerch_block section\">
                <div class=\"saerch_form_wrapp\">
                    <form method=\"get\" id=\"searchform\" action=\"/products/list\"
                        class=\"saerch_form_form\">
                        <div class=\"input_search clearfix\">
                            <input type=\"search\" id=\"name\" name=\"name\"
                                maxlength=\"50\" placeholder=\"Search\"
                                class=\"form-control\">
                            <button type=\"submit\" class=\"bt_search\"><img
                                    class=\"button_image\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(        // line 78
($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        // line 79
        echo "/img/icon/search.png\" alt=\"search\"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /sideNavigation -->
</div>";
    }

    public function getTemplateName()
    {
        return "Block/tmp_sideNavigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 79,  110 => 78,  109 => 77,  91 => 62,  90 => 61,  49 => 23,  39 => 16,  38 => 15,  30 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/tmp_sideNavigation.twig", "/home/mioshop/mioofficial.jp/public_html/app/template/mioshop/Block/tmp_sideNavigation.twig");
    }
}
