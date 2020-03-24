<?php

/* __string_template__b767ddde1c7c48a3d7442729b2a644ef765b5e3d24ba63d912922cfe5efa8c5d */
class __TwigTemplate_be8d7161a8a892bc02f9514b66e7eac144d586e96d80b485bbac9ab42643caa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__b767ddde1c7c48a3d7442729b2a644ef765b5e3d24ba63d912922cfe5efa8c5d", 22);
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
        // line 24
        $context["body_class"] = "mypage";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "        <h1 class=\"page-heading\">ログイン</h1>
        <div class=\"container-fluid\">
            <form name=\"login_mypage\" id=\"login_mypage\" method=\"post\" action=\"";
        // line 29
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("login_check");
        echo "\" onsubmit=\"return eccube.checkLoginFormInputted('login_mypage')\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo ">
                ";
        // line 30
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "has", array(0 => "eccube.login.target.path"), "method")) {
            // line 31
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "eccube.login.target.path"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["targetPath"]) {
                // line 32
                echo "                        <input type=\"hidden\" name=\"_target_path\" value=\"";
                echo twig_escape_filter($this->env, $context["targetPath"], "html", null, true);
                echo "\" />
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['targetPath'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                ";
        }
        // line 35
        echo "                <div id=\"login_box\" class=\"row\">
                    <div id=\"mypage_login_wrap\" class=\"col-sm-8 col-sm-offset-2\">
                        <div id=\"mypage_login_box\" class=\"column\">
                            <div id=\"mypage_login_box__body\" class=\"column_inner clearfix\">
                                <div class=\"icon\"><svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg></div>
                                <div id=\"mypage_login_box__login_email\" class=\"form-group\">
                                    ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "login_email", array()), 'widget', array("attr" => array("style" => "ime-mode: disabled;", "placeholder" => "メールアドレス", "autofocus" => true)));
        echo "
                                </div>
                                <div id=\"mypage_login_box__login_pass\" class=\"form-group\">
                                    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "login_pass", array()), 'widget', array("attr" => array("placeholder" => "パスワード")));
        echo "
                                    ";
        // line 45
        if ($this->getAttribute(($context["BaseInfo"] ?? null), "option_remember_me", array())) {
            // line 46
            echo "                                        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 47
                echo "                                            <input id=\"mypage_login_box__login_memory\" type=\"hidden\" name=\"login_memory\" value=\"1\">
                                        ";
            } else {
                // line 49
                echo "                                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "login_memory", array()), 'widget');
                echo "
                                        ";
            }
            // line 51
            echo "                                    ";
        }
        // line 52
        echo "                                </div>
                                <!-- <div class=\"extra-form form-group\">
                                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 55
            echo "                                        ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 56
                echo "                                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                                            ";
                // line 57
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                            ";
                // line 58
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                        ";
            }
            // line 60
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                </div> -->
                                ";
        // line 62
        if (($context["error"] ?? null)) {
            // line 63
            echo "                                <div id=\"mypage_login_box__error_message\" class=\"form-group\">
                                    <span class=\"text-danger\">";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["error"] ?? null));
            echo "</span>
                                </div>
                                ";
        }
        // line 67
        echo "                                <div id=\"mypage_login__login_button\" class=\"btn_area\">
                                    <button type=\"submit\" class=\"btn btn-info btn-block btn-lg\">ログイン</button>
                                </div>
                            </div>
                        </div>
                        <!-- 新規会員登録 -->
                        <div class=\"member-box\">
                            <div class=\"member-box-container\">
                                <div class=\"text-block\">
                                    <h2 class=\"title\">会員限定先行販売を実施予定</h2>
                                    <p class=\"title-text\">※詳細は公式instagramにて随時更新</p>
                                </div>
                                <div class=\"button-block\">
                                    <a class=\"login-link\" href=\"";
        // line 80
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("entry");
        echo "\">新規会員登録</a>
                                </div>
                            </div>
                        </div>
                        <!-- / 新規会員登録 -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            </form>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "__string_template__b767ddde1c7c48a3d7442729b2a644ef765b5e3d24ba63d912922cfe5efa8c5d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 87,  159 => 80,  144 => 67,  138 => 64,  135 => 63,  133 => 62,  130 => 61,  124 => 60,  119 => 58,  115 => 57,  110 => 56,  107 => 55,  103 => 54,  99 => 52,  96 => 51,  90 => 49,  86 => 47,  83 => 46,  81 => 45,  77 => 44,  71 => 41,  63 => 35,  60 => 34,  51 => 32,  46 => 31,  44 => 30,  38 => 29,  34 => 27,  31 => 26,  27 => 22,  25 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__b767ddde1c7c48a3d7442729b2a644ef765b5e3d24ba63d912922cfe5efa8c5d", "");
    }
}
