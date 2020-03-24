<?php

/* __string_template__3a5f795693966c1e65d1a6d34fd8aa02818981d1bdd27c5308f90cf0220cd928 */
class __TwigTemplate_5b72d8bd1779e74276d1e9602e30387c7ef1bd47f8d60891e4b7c9b00b812a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__3a5f795693966c1e65d1a6d34fd8aa02818981d1bdd27c5308f90cf0220cd928", 22);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_main($context, array $blocks = array())
    {
        // line 25
        echo "\t<div id=\"contents\" class=\"main_only\">
\t\t<div id=\"guide_wrap\" class=\"container-fluid inner no-padding\">
\t\t\t<div id=\"main\">
\t\t\t\t<h1 class=\"page-title-h1\">SHOPPING GUIDE</h1>
\t\t\t\t<div id=\"guide_box__body\" class=\"container-fluid\">
\t\t\t\t\t<div id=\"guide_box__body_inner\" class=\"row\">
\t\t\t\t\t\t<div id=\"guide_box__body_item\" class=\"col-md-10 col-md-offset-1\">
            </div>
\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.row -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__3a5f795693966c1e65d1a6d34fd8aa02818981d1bdd27c5308f90cf0220cd928";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 25,  28 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__3a5f795693966c1e65d1a6d34fd8aa02818981d1bdd27c5308f90cf0220cd928", "");
    }
}
