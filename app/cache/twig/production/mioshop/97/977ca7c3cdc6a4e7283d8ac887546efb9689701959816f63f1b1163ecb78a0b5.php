<?php

/* default_frame.twig */
class __TwigTemplate_9d882450d2204d5d714a0205d1b5b02279a1290f5dcbdd548bdc0355828af4f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'main' => array($this, 'block_main'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"ja\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BaseInfo"] ?? null), "shop_name", array()), "html", null, true);
        if ((array_key_exists("subtitle", $context) &&  !twig_test_empty(($context["subtitle"] ?? null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
        } elseif ((array_key_exists("title", $context) &&  !twig_test_empty(($context["title"] ?? null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        }
        echo "</title>
  ";
        // line 7
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? null), "author", array()))) {
            // line 8
            echo "    <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? null), "author", array()), "html", null, true);
            echo "\">
  ";
        }
        // line 10
        echo "  ";
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? null), "description", array()))) {
            // line 11
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? null), "description", array()), "html", null, true);
            echo "\">
  ";
        }
        // line 13
        echo "  ";
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? null), "keyword", array()))) {
            // line 14
            echo "    <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? null), "keyword", array()), "html", null, true);
            echo "\">
  ";
        }
        // line 16
        echo "  ";
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? null), "meta_robots", array()))) {
            // line 17
            echo "    <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? null), "meta_robots", array()), "html", null, true);
            echo "\">
  ";
        }
        // line 19
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/icon/favicon.jpg\">

  <!-- Vendor
  ============================================= -->
  <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/style.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/slick.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/default.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">

  <!-- Theme
  ============================================= -->
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/theme.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">

  <!-- original
  ============================================= -->
  <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/template/common.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/original/original_common.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
  <link href=\"https://fonts.googleapis.com/css?family=Archivo+Black&display=swap\" rel=\"stylesheet\">

  <!-- for original theme CSS -->
  ";
        // line 39
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 40
        echo "
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
  <script>window.jQuery || document.write('<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/jquery-1.11.3.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"><\\/script>')</script>

  ";
        // line 45
        echo "  ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "Head", array())) {
            // line 46
            echo "    ";
            // line 47
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "Head", array())));
            echo "
    ";
            // line 49
            echo "  ";
        }
        // line 50
        echo "  ";
        // line 51
        echo "
</head>
<body id=\"page_";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("body_class", $context)) ? (_twig_default_filter(($context["body_class"] ?? null), "other_page")) : ("other_page")), "html", null, true);
        echo "\">
  <div id=\"wrapper\">

    <header id=\"header\">
      <div class=\"container inner\">
        ";
        // line 59
        echo "        ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "Header", array())) {
            // line 60
            echo "          ";
            // line 61
            echo "          ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "Header", array())));
            echo "
          ";
            // line 63
            echo "        ";
        }
        // line 64
        echo "        ";
        // line 65
        echo "        <p id=\"btn_menu\"><a class=\"nav-trigger\" href=\"#nav\">Menu<span></span></a></p>
      </div>
    </header>

    <div id=\"contents\" class=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? null), "theme", array()), "html", null, true);
        echo "\">

      <div id=\"contents_top\">
        ";
        // line 73
        echo "        ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "ContentsTop", array())) {
            // line 74
            echo "          ";
            // line 75
            echo "          ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "ContentsTop", array())));
            echo "
          ";
            // line 77
            echo "        ";
        }
        // line 78
        echo "        ";
        // line 79
        echo "      </div>

      <div class=\"container inner\">
        <div class=\"row\">

          ";
        // line 85
        echo "          ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "MainTop", array())) {
            // line 86
            echo "            <div id=\"main_top\" class=\"col-xs-12\">
              ";
            // line 87
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "MainTop", array())));
            echo "
            </div>
          ";
        }
        // line 90
        echo "          ";
        // line 91
        echo "
          <div id=\"main\" class=\"col-xs-12 ";
        // line 92
        if (($this->getAttribute(($context["PageLayout"] ?? null), "theme", array()) == "theme_side_right")) {
            echo "col-sm-9";
        } elseif (($this->getAttribute(($context["PageLayout"] ?? null), "theme", array()) == "theme_side_left")) {
            echo "col-sm-9 col-sm-push-3";
        } elseif (($this->getAttribute(($context["PageLayout"] ?? null), "theme", array()) == "theme_side_both")) {
            echo "col-sm-6 col-sm-push-3";
        }
        echo "\">

            <div id=\"main_middle\">
              ";
        // line 95
        $this->displayBlock('main', $context, $blocks);
        // line 96
        echo "            </div>

            ";
        // line 99
        echo "            ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "MainBottom", array())) {
            // line 100
            echo "              <div id=\"main_bottom\">
                ";
            // line 101
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "MainBottom", array())));
            echo "
              </div>
            ";
        }
        // line 104
        echo "            ";
        // line 105
        echo "          </div>

          ";
        // line 108
        echo "          ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "SideLeft", array())) {
            // line 109
            echo "            <div id=\"side_left\" class=\"side col-sm-3 ";
            if (($this->getAttribute(($context["PageLayout"] ?? null), "theme", array()) == "theme_side_both")) {
                echo "col-sm-pull-6";
            } else {
                echo "col-sm-pull-9";
            }
            echo "\">
              ";
            // line 111
            echo "              ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "SideLeft", array())));
            echo "
              ";
            // line 113
            echo "            </div>
          ";
        }
        // line 115
        echo "          ";
        // line 116
        echo "
          ";
        // line 118
        echo "          ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "SideRight", array())) {
            // line 119
            echo "            <div id=\"side_right\" class=\"side col-sm-3\">
              ";
            // line 121
            echo "              ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "SideRight", array())));
            echo "
              ";
            // line 123
            echo "            </div>
          ";
        }
        // line 125
        echo "          ";
        // line 126
        echo "
        </div><!-- /row -->

        ";
        // line 130
        echo "        ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "ContentsBottom", array())) {
            // line 131
            echo "          <div id=\"contents_bottom\">
            ";
            // line 133
            echo "            ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "ContentsBottom", array())));
            echo "
            ";
            // line 135
            echo "          </div>
        ";
        }
        // line 137
        echo "        ";
        // line 138
        echo "
      </div><!-- /container -->

      <footer id=\"footer\">
        ";
        // line 143
        echo "        ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "Footer", array())) {
            // line 144
            echo "          ";
            // line 145
            echo "          ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "Footer", array())));
            echo "
          ";
            // line 147
            echo "        ";
        }
        // line 148
        echo "        ";
        // line 149
        echo "      </footer>

    </div><!-- /#contents -->

    <div id=\"drawer\" class=\"drawer sp\"></div>

  </div><!-- /#wrapper -->

  <div class=\"overlay\"></div>

  <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/bootstrap.custom.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/slick.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/function.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/eccube.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
  <script>
  \$(function () {
    \$('#drawer').append(\$('.drawer_block').clone(true).children());
    \$.ajax({
      url: '";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/svg.html',
      type: 'GET',
      dataType: 'html',
    }).done(function(data){
      \$('body').prepend(data);
    }).fail(function(data){
    });
  });
  </script>
<!-- original
============================================= -->
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/common/compornents/tmp_pickup.js\"></script>
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/common/compornents/tmp_criate_name.js\"></script>
";
        // line 180
        $this->displayBlock('javascript', $context, $blocks);
        // line 181
        echo "</body>
</html>
";
    }

    // line 39
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 95
    public function block_main($context, array $blocks = array())
    {
    }

    // line 180
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "default_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 180,  435 => 95,  430 => 39,  424 => 181,  422 => 180,  418 => 179,  414 => 178,  400 => 167,  390 => 162,  384 => 161,  378 => 160,  372 => 159,  360 => 149,  358 => 148,  355 => 147,  350 => 145,  348 => 144,  345 => 143,  339 => 138,  337 => 137,  333 => 135,  328 => 133,  325 => 131,  322 => 130,  317 => 126,  315 => 125,  311 => 123,  306 => 121,  303 => 119,  300 => 118,  297 => 116,  295 => 115,  291 => 113,  286 => 111,  277 => 109,  274 => 108,  270 => 105,  268 => 104,  262 => 101,  259 => 100,  256 => 99,  252 => 96,  250 => 95,  238 => 92,  235 => 91,  233 => 90,  227 => 87,  224 => 86,  221 => 85,  214 => 79,  212 => 78,  209 => 77,  204 => 75,  202 => 74,  199 => 73,  193 => 69,  187 => 65,  185 => 64,  182 => 63,  177 => 61,  175 => 60,  172 => 59,  162 => 53,  158 => 51,  156 => 50,  153 => 49,  148 => 47,  146 => 46,  143 => 45,  136 => 42,  132 => 40,  130 => 39,  121 => 35,  115 => 34,  106 => 30,  97 => 26,  91 => 25,  85 => 24,  78 => 20,  75 => 19,  69 => 17,  66 => 16,  60 => 14,  57 => 13,  51 => 11,  48 => 10,  42 => 8,  40 => 7,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default_frame.twig", "/home/mioshop/mioofficial.jp/public_html/app/template/mioshop/default_frame.twig");
    }
}
