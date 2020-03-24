<?php

/* __string_template__e6a796ae608f8de4a7008c46d1ada34564348142fe644f081c07535bfd9b53ed */
class __TwigTemplate_ab7ae624cc1fa335bc65347136b9fa5e411673896640f845fc35d6c2e2541283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__e6a796ae608f8de4a7008c46d1ada34564348142fe644f081c07535bfd9b53ed", 22);
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
        $context["body_class"] = "front_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        // line 27
        echo "<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '515063142397766', {}, {agent:'execcube-3.0.17-1.0.1'});

fbq('track', 'PageView', {\"agent\":\"execcube-3.0.17-1.0.1\"});
</script>
<!-- End Facebook Pixel Code -->
";
    }

    // line 52
    public function block_main($context, array $blocks = array())
    {
        // line 53
        echo "    <div class=\"row\">
       <div class=\"col-sm-12\">
            <div class=\"main_visual\">
                <div class=\"item\">
                ";
        // line 57
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "mobile_detect", array(), "array"), "isMobile", array())) {
            // line 58
            echo "                    <video src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
            echo "/img/movie/mv.MP4\" preload=\"\" autoplay=\"\" playsinline=\"\" muted=\"\"
                        loop=\"\"></video>
                ";
        } else {
            // line 61
            echo "                    <video src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
            echo "/img/movie/mv_pc.mp4\" preload=\"\" autoplay=\"\" playsinline=\"\" muted=\"\"
                        loop=\"\"></video>
                ";
        }
        // line 64
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__e6a796ae608f8de4a7008c46d1ada34564348142fe644f081c07535bfd9b53ed";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 64,  70 => 61,  63 => 58,  61 => 57,  55 => 53,  52 => 52,  35 => 27,  32 => 26,  28 => 22,  26 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__e6a796ae608f8de4a7008c46d1ada34564348142fe644f081c07535bfd9b53ed", "");
    }
}
