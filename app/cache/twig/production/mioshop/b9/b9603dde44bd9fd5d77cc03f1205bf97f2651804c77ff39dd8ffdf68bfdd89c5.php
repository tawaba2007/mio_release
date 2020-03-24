<?php

/* Block/tmp_originalFooter.twig */
class __TwigTemplate_b70d6ee6141f2009fa814330ad201fc48b7a731931978bf1f3d727808400c299 extends Twig_Template
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
        echo "<!-- originalFooter -->
<div id=\"originalFooter\" class=\"template\">
    <div class=\"contaner\">
        <div class=\"logo_block\">
            <p class=\"logo\">
                <a class=\"link\" href=\"";
        // line 6
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "\">
                    <img class=\"list_item_image\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(        // line 8
($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        // line 9
        echo "/img/common/logo.svg\" alt=\"mio\" width=\"50\">
                </a>
            </p>
        </div>
        <div class=\"navigation_block\">
            <nav class=\"navi\">
                <ul class=\"list\">
                    <li class=\"list_item\">
                        <a class=\"list_item_link\" href=\"https://mioofficial.jp/help/privacy\">PRIVACY POLICY</a>
                    </li>
                    <li class=\"list_item\">
                        <a class=\"list_item_link\" href=\"https://mioofficial.jp/help/tradelaw\">特定商取引に基づく表記</a>
                    </li>
                    <li class=\"list_item\">
                        <a class=\"list_item_link\" href=\"https://mioofficial.jp/contact\">CONTACT</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class=\"sns_block\">
            <ul class=\"list\">
                <li class=\"list_item\">
                    <a class=\"list_item_link\" href=\"https://www.instagram.com/mio.official_/\">
                        <img class=\"list_item_image\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(        // line 33
($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        // line 34
        echo "/img/icon/insta_white.png\" alt=\"instagram\">
                    </a>
                </li>
                <li class=\"list_item\">
                    <a class=\"list_item_link\" href=\"https://lin.ee/zZGCWjM\">
                        <img class=\"list_item_image\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(        // line 40
($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        // line 41
        echo "/img/icon/line_white.png\" alt=\"line\">
                    </a>
                </li>
            </ul>
        </div>
        <p class=\"copyRight\">copyright (c) ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BaseInfo"] ?? null), "shop_name", array()), "html", null, true);
        echo " all rights
            reserved.</p>
    </div>
</div>
<!-- /originalFooter -->";
    }

    public function getTemplateName()
    {
        return "Block/tmp_originalFooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 46,  71 => 41,  69 => 40,  68 => 39,  61 => 34,  59 => 33,  58 => 32,  33 => 9,  31 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/tmp_originalFooter.twig", "/home/mioshop/mioofficial.jp/public_html/app/template/mioshop/Block/tmp_originalFooter.twig");
    }
}
