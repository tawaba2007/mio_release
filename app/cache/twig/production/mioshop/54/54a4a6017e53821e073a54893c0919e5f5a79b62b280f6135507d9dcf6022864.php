<?php

/* Block/tmp_news.twig */
class __TwigTemplate_d3e21c71e210d7e2a8cc1a1df9ebbba9218d1bcc64e8debf6900241e33f7b5e8 extends Twig_Template
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
        echo "<div id=\"news\" class=\"template\">
    <div class=\"container\">
        <div class=\"title-block\">
            <h2 class=\"title\">
                <img class=\"image\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/news-title.svg\">
            </h2>
        </div>
        <div class=\"news-list-block\">
            <ul class=\"list\">
                <li class=\"list-item\">
                    <div class=\"title-block\">
                        <h3 class=\"time\">2020.03.25</h3>
                        <div class=\"label\">
                            <img class=\"image\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/icon/label-new.svg\">
                        </div>
                    </div>
                    <div class=\"detail-block\">
                        <p class=\"text\">Insta Live予定(03/25 22:00~)</p>
                        <p class=\"text\"  style=\"color:lightblue;\"><a href=\"https://www.instagram.com/mio.official_/\">詳細はOfficial Instagramにて</a></p>
                    </div>
                </li>
                <li class=\"list-item\">
                    <div class=\"title-block\">
                        <h3 class=\"time\">2020.03.25</h3>
                        <div class=\"label\">
                            <img class=\"image\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/icon/label-new.svg\">
                        </div>
                    </div>
                    <div class=\"detail-block\">
                        <p class=\"text\">期間中購入者の中から抽選で</p>
                        <p class=\"text\">100名様にランダムチェキをプレゼント</p>
                        <p class=\"text\">(内20枚は、サイン入りチェキ)</p>

                    </div>
                </li>
            </ul>
        </div>
<!--
        <div class=\"button-block\">
            <a class=\"button-link\" href=\"#\">
                <img class=\"button-image\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/button-more.svg\">
            </a>
        </div>
-->
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/tmp_news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 41,  52 => 26,  37 => 14,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/tmp_news.twig", "/home/mioshop/mioofficial.jp/public_html/app/template/mioshop/Block/tmp_news.twig");
    }
}
