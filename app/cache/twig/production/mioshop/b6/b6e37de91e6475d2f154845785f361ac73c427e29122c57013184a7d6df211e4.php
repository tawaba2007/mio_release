<?php

/* __string_template__5ad06e729b96855809d65c2f22b1a73bfb37f00252c332807400f73c49f862db */
class __TwigTemplate_45097979e1b8bbbdd91f76a36ce6332a2f6c75f4f5dd2a517ea7af39887f52c3 extends Twig_Template
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
        echo "<div >

    <table>
        <thead>
            <tr class=\"tblSize\">
                <th>サイズ</th>
                <th>身丈</th>
                <th>身幅</th>
                <th>肩幅</th>
                <th>袖丈</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>F</th>
                <th>74</th>
                <th>75</th>
                <th>73</th>
                <th>53</th>
            </tr>
        </tbody>
    </table>
</div>


<style>
    th,td {
    border: solid 1px;              /* 枠線指定 */
    padding: 10px;      /* 余白指定 */
}
 
table {
    border-collapse:  collapse;     /* セルの線を重ねる */
}
th {
    width:  300px;              /* 幅指定 */
    height: 50px;               /* 高さ指定 */
}
.tblSize{
    background:#484848;
}
</style>";
    }

    public function getTemplateName()
    {
        return "__string_template__5ad06e729b96855809d65c2f22b1a73bfb37f00252c332807400f73c49f862db";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__5ad06e729b96855809d65c2f22b1a73bfb37f00252c332807400f73c49f862db", "");
    }
}
