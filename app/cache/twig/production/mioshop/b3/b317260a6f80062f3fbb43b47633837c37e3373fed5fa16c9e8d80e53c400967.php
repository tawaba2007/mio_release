<?php

/* Block/lookbook.twig */
class __TwigTemplate_76f42675411d1f37145de7a2bc45c3b397e079b537a2d2a1ce72f581f29f2f3a extends Twig_Template
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
        echo "<div class=\"wrapper\">
  <div class=\"column look1\">
    <div class=\"info\">

    </div>
  </div>
  <div class=\"column look2\">
    <div class=\"info\">

    </div>
  </div>

</div>

<div class=\"wrapper\">
    <div class=\"column look1\">
      <div class=\"info\">
  
      </div>
    </div>
    <div class=\"column look2\">
      <div class=\"info\">
  
      </div>
    </div>
  
  </div>

  <div class=\"wrapper\">
    <div class=\"column look1\">
      <div class=\"info\">
  
      </div>
    </div>
    <div class=\"column look2\">
      <div class=\"info\">
  
      </div>
    </div>
  
  </div>

  <style>
 
.column {
    height: 80vh;
    width: 80%;
    text-align: center;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    margin: auto 0;
}
    
.look1 {
    background: url(\"https://mioofficial.jp/html/template/mioshop/img/item/item01-img.jpg\") no-repeat top center;
    background-size: cover;
    margin: 45px;

}
.look2 {
    background: url(";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/item/item03-img.png) no-repeat top center;
    background-size: cover;
    margin: 45px;
}

@media all and (min-width: 500px) {
  .wrapper {
    display: flex;
  }
}
  </style>";
    }

    public function getTemplateName()
    {
        return "Block/lookbook.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 62,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/lookbook.twig", "/home/mioshop/mioofficial.jp/public_html/app/template/mioshop/Block/lookbook.twig");
    }
}
