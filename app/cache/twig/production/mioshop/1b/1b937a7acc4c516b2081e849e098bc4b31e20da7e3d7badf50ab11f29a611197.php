<?php

/* __string_template__e0264df11bdd2db560d117415f777381ab7ba8d7c65b26cd93c852c9159c71e6 */
class __TwigTemplate_3d5aefca5a0197bac6536170657dcf9276a7b5eb3e493c504b4bc378c8691f43 extends Twig_Template
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
                <th>着丈</th>
                <th>身幅</th>
                <th>肩幅</th>
                <th>袖丈</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>F</th>
                <th>66</th>
                <th>57</th>
                <th>54</th>
                <th>27.5</th>
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
        return "__string_template__e0264df11bdd2db560d117415f777381ab7ba8d7c65b26cd93c852c9159c71e6";
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
        return new Twig_Source("", "__string_template__e0264df11bdd2db560d117415f777381ab7ba8d7c65b26cd93c852c9159c71e6", "");
    }
}
