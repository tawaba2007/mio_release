<?php

/* Block/tmp_luxury_street.twig */
class __TwigTemplate_19e0b27c345ee7c23777ca5987752b12e123a0e0daae977a5f0d80617d19317c extends Twig_Template
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
        echo "<div class=\"luxury_street template\">
    <div class=\"container\">
        <div class=\"image-block\">
            <img class=\"image\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/luxury-street.svg\" alt=\"luxury-street\">
        </div>
        <div class=\"text-block\">
            <p class=\"text\">移り変わるトレンドの最先端と 洗練されたデザインを</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/tmp_luxury_street.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/tmp_luxury_street.twig", "/home/mioshop/mioofficial.jp/public_html/app/template/mioshop/Block/tmp_luxury_street.twig");
    }
}
