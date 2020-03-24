<?php

/* __string_template__639b12653ccb74c7e1ebc1fbf74977281efd0dee50f83f068b9e072ba5ec2730 */
class __TwigTemplate_f22cd0638fc1137c546e81fe4bc6a7efaf2c45a0c31e5abce14bd3264bc0cbcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__639b12653ccb74c7e1ebc1fbf74977281efd0dee50f83f068b9e072ba5ec2730", 22);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["body_class"] = "front_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__639b12653ccb74c7e1ebc1fbf74977281efd0dee50f83f068b9e072ba5ec2730";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 26,  27 => 22,  25 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__639b12653ccb74c7e1ebc1fbf74977281efd0dee50f83f068b9e072ba5ec2730", "");
    }
}
