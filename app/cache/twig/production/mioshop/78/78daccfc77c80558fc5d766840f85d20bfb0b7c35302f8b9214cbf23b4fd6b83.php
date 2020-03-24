<?php

/* Block/tmp_item04.twig */
class __TwigTemplate_8b28ef5b937678635a3e94f49ebfc3e240cf4064c20e66c22b04616c909d438d extends Twig_Template
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
        echo "<div id=\"item04\" class=\"item-layout\">
    <div class=\"container\">
        <div class=\"image-block is-left\">
            <img class=\"image\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/item/item01-img.jpg\">
        </div>
        <div class=\"detail-block is-left\">
            <div class=\"text-block\">
                <h3 class=\"title\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/item/item01-title.svg\"></h3>
                <p class=\"text\">m/o Logo _ Parker</p>
            </div>
            <div class=\"button-block\">
                <a class=\"button-link\" href=\"https://mioofficial.jp/products/detail/9\">
                    <img class=\"button-image\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/button-more.svg\">
                </a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/tmp_item04.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  31 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/tmp_item04.twig", "/home/mioshop/mioofficial.jp/public_html/app/template/mioshop/Block/tmp_item04.twig");
    }
}
