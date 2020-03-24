<?php

/* Block/tmp_originalHeader.twig */
class __TwigTemplate_df09ff5cb2b7815c9badd641307c21e972a72c2ef93cdfbdf9830462599d923c extends Twig_Template
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
        echo "<!-- originalHeader -->
<div id=\"originalHeader\" class=\"template\">
\t<div class=\"container\">
\t\t<div class=\"logo_block\">
\t\t\t<div class=\"header_logo_wrapp\">
\t\t\t\t<h1 class=\"header_logo\">
\t\t\t\t\t<a class=\"header_logo_link\" href=\"";
        // line 7
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/logo.svg\" width=\"50\">
\t\t\t\t\t</a>
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- /originalHeader -->";
    }

    public function getTemplateName()
    {
        return "Block/tmp_originalHeader.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/tmp_originalHeader.twig", "/home/mioshop/mioofficial.jp/public_html/app/template/mioshop/Block/tmp_originalHeader.twig");
    }
}
