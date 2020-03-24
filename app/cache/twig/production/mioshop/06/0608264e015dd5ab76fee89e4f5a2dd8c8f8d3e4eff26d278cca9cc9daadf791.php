<?php

/* __string_template__5ac121023ab78109cacadec5fc27cd786b438ae8839d4746feb90e15c868284f */
class __TwigTemplate_f2747a5d2a67dd29541bedb9330302146a35a704a23383fe5898b5f3aa753a8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__5ac121023ab78109cacadec5fc27cd786b438ae8839d4746feb90e15c868284f", 22);
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
        $context["body_class"] = "cart_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "    
        <h1 class=\"page-heading\">ログイン</h1>
        <div id=\"login_wrap\" class=\"container-fluid\">
            <form method=\"post\" action=\"";
        // line 30
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("login_check");
        echo "\">
                <input type=\"hidden\" name=\"_target_path\" value=\"shopping\" />
                <input type=\"hidden\" name=\"_failure_path\" value=\"shopping_login\" />
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
    
                <div id=\"login_box\" class=\"login_cart row\">
                    ";
        // line 36
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 37
            echo "                    <div id=\"customer_box\" class=\"col-sm-8 col-sm-offset-2\" style=\"height: 330px;\">
                    ";
        } else {
            // line 39
            echo "                    <div id=\"customer_box\" class=\"\" style=\"height: 330px;\">
                    ";
        }
        // line 41
        echo "                        <div id=\"customer_box__body\" class=\"column\">
                            <div id=\"customer_box__body_inner\" class=\"\">
                                <div class=\"icon\"><svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\"></use></svg></div>
                                <div id=\"customer_box__login_email\" class=\"form-group\">
                                    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "login_email", array()), 'widget', array("attr" => array("style" => "ime-mode: disabled;", "placeholder" => "メールアドレス", "autofocus" => true)));
        echo " <br class=\"sp\">
                                </div>
                                <div id=\"customer_box__login_pass\" class=\"form-group\">
                                    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "login_pass", array()), 'widget', array("attr" => array("placeholder" => "パスワード")));
        echo "
                                    ";
        // line 49
        if ($this->getAttribute(($context["BaseInfo"] ?? null), "option_remember_me", array())) {
            // line 50
            echo "                                        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 51
                echo "                                            <input type=\"hidden\" name=\"login_memory\" value=\"1\">
                                        ";
            } else {
                // line 53
                echo "                                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "login_memory", array()), 'widget');
                echo "
                                        ";
            }
            // line 55
            echo "                                    ";
        }
        // line 56
        echo "                                </div>
                                <!-- <div class=\"extra-form form-group\">
                                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 59
            echo "                                        ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 60
                echo "                                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                                            ";
                // line 61
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                            ";
                // line 62
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                        ";
            }
            // line 64
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                </div> -->
                                ";
        // line 66
        if (($context["error"] ?? null)) {
            // line 67
            echo "                                    <div id=\"customer_box__error_message\" class=\"form-group\">
                                        <span class=\"text-danger\">";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["error"] ?? null));
            echo "</span>
                                    </div>
                                ";
        }
        // line 71
        echo "                                <div id=\"customer_box__login_button\" class=\"btn_area\">
                                    <button type=\"submit\" class=\"btn btn-info btn-block btn-lg\">ログイン</button>
                                    <!-- <ul id=\"customer_box__login_menu\">
                                    <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("forgot");
        echo "\">ログイン情報をお忘れですか？</a></li>
                                    <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("entry");
        echo "\">新規会員登録</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col -->
    
                    <div class=\"login-other\">
                        <!-- 新規会員登録 -->
                        <div class=\"member-box\">
                            <div class=\"member-box-container\">
                                <div class=\"text-block\">
                                    <h2 class=\"title\">会員限定先行販売を実施予定</h2>
                                    <p class=\"title-text\">※詳細は公式instagramにて随時更新</p>
                                </div>
                                <div class=\"button-block\">
                                    <a class=\"login-link\" href=\"";
        // line 91
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("entry");
        echo "\">新規会員登録</a>
                                </div>
                            </div>
                        </div>
                        <!-- / 新規会員登録 -->
    
                        ";
        // line 97
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 98
            echo "                        ";
        } else {
            // line 99
            echo "                        <div id=\"guest_box\" class=\"\" style=\"\">
                            <div id=\"guest_box__body\" class=\"column\">
                                <div id=\"guest_box__body_inner\" class=\"\">
                                    <p id=\"guest_box__message\" class=\"message\">会員登録をせずに購入手続きをされたい方は、下記よりお進みください。
                                    <p id=\"guest_box__confirm_button\" class=\"btn_area\">
                                        <a href=\"";
            // line 104
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("shopping_nonmember");
            echo "\" class=\"btn btn-info btn-block btn-lg\">ゲスト購入</a></p>
                                </div>
                            </div>
                        </div><!-- /.col -->
                        ";
        }
        // line 109
        echo "                    </div>
                </div><!-- /.row -->
            </form>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "__string_template__5ac121023ab78109cacadec5fc27cd786b438ae8839d4746feb90e15c868284f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 109,  189 => 104,  182 => 99,  179 => 98,  177 => 97,  168 => 91,  149 => 75,  145 => 74,  140 => 71,  134 => 68,  131 => 67,  129 => 66,  126 => 65,  120 => 64,  115 => 62,  111 => 61,  106 => 60,  103 => 59,  99 => 58,  95 => 56,  92 => 55,  86 => 53,  82 => 51,  79 => 50,  77 => 49,  73 => 48,  67 => 45,  61 => 41,  57 => 39,  53 => 37,  51 => 36,  45 => 33,  39 => 30,  34 => 27,  31 => 26,  27 => 22,  25 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__5ac121023ab78109cacadec5fc27cd786b438ae8839d4746feb90e15c868284f", "");
    }
}
