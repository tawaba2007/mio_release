<?php

/* __string_template__48717bbee8ebb779e0ff7b9fbb4c2c6b3a7804d32687f34331a73424bff0fb17 */
class __TwigTemplate_233e988fcd377d1d622fd51a1ee5dca8888028384c5e83dfd12801c1929f465c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 17
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__48717bbee8ebb779e0ff7b9fbb4c2c6b3a7804d32687f34331a73424bff0fb17", 17);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
            'modal' => array($this, 'block_modal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 19
        $context["menus"] = array(0 => "product", 1 => "product_edit");
        // line 24
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 630
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["searchForm"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 17
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        echo "商品管理";
    }

    // line 22
    public function block_sub_title($context, array $blocks = array())
    {
        echo "商品登録";
    }

    // line 26
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 27
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/fileupload/jquery.fileupload.css\">
<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/fileupload/jquery.fileupload-ui.css\">
<link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css\">
<style>
    .ui-state-highlight {
        height: 148px;
        border: dashed 1px #ccc;
        background: #fff;
    }
</style>
";
    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        // line 40
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/fileupload/vendor/jquery.ui.widget.js\"></script>
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/fileupload/jquery.iframe-transport.js\"></script>
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/fileupload/jquery.fileupload.js\"></script>
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/fileupload/jquery.fileupload-process.js\"></script>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/fileupload/jquery.fileupload-validate.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js\"></script>
<script>
\$(function() {
    \$(\"#thumb\").sortable({
        cursor: 'move',
        opacity: 0.7,
        placeholder: 'ui-state-highlight',
        update: function (event, ui) {
            updateRank();
        }
    });
    ";
        // line 56
        if ((($context["has_class"] ?? null) == false)) {
            // line 57
            echo "    if (\$(\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "stock_unlimited", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\").prop(\"checked\")) {
        \$(\"#";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "stock", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
    } else {
        \$(\"#";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "stock", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\").removeAttr(\"disabled\");
    }
    \$(\"#";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "stock_unlimited", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\").on(\"click change\", function () {
        if (\$(this).prop(\"checked\")) {
            \$(\"#";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "stock", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
        } else {
            \$(\"#";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "stock", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\").removeAttr(\"disabled\");
        }
    });
    ";
        }
        // line 70
        echo "    var proto_img = ''
            + '<li class=\"ui-state-default\">'
            + '<img src=\"__path__\" />'
            + '<a class=\"delete-image\">'
            + '<svg class=\"cb cb-close\">'
            + '<use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#cb-close\"></use>'
            + '</svg>'
            + '</a>'
            + '</li>';
    var proto_add = '";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "add_images", array()), "vars", array()), "prototype", array()), 'widget');
        echo "';
    var proto_del = '";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "delete_images", array()), "vars", array()), "prototype", array()), 'widget');
        echo "';
    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 82
            echo "    var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "vars", array()), "value", array()), "html", null, true);
            echo "'));
    var \$widget = \$('";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["image"], 'widget');
            echo "');
    \$widget.val('";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "vars", array()), "value", array()), "html", null, true);
            echo "');
    \$(\"#thumb\").append(\$img.append(\$widget));
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "add_images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["add_image"]) {
            // line 88
            echo "    var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_temp_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["add_image"], "vars", array()), "value", array()), "html", null, true);
            echo "'));
    var \$widget = \$('";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["add_image"], 'widget');
            echo "');
    \$widget.val('";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["add_image"], "vars", array()), "value", array()), "html", null, true);
            echo "');
    \$(\"#thumb\").append(\$img.append(\$widget));
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "delete_images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["delete_image"]) {
            // line 94
            echo "    \$(\"#thumb\").append('";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["delete_image"], 'widget');
            echo "');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delete_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "    var hideSvg = function () {
        if (\$(\"#thumb li\").length > 0) {
            \$(\"#icon_no_image\").css(\"display\", \"none\");
        } else {
            \$(\"#icon_no_image\").css(\"display\", \"\");
        }
    };
    var updateRank = function () {
        \$(\"#thumb li\").each(function (index) {
            \$(this).find(\".rank_images\").remove();
            filename = \$(this).find(\"input[type='hidden']\").val();
            \$rank = \$('<input type=\"hidden\" class=\"rank_images\" name=\"rank_images[]\" />');
            \$rank.val(filename + '//' + parseInt(index + 1));
            \$(this).append(\$rank);
        });
    }
    hideSvg();
    updateRank();
    // 画像削除時
    var count_del = 0;
    \$(\"#thumb\").on(\"click\", \".delete-image\", function () {
        var \$new_delete_image = \$(proto_del.replace(/__name__/g, count_del));
        var src = \$(this).prev().attr('src')
                .replace('";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_temp_urlpath", array()), "html", null, true);
        echo "/', '')
                .replace('";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
        echo "/', '');
        \$new_delete_image.val(src);
        \$(\"#thumb\").append(\$new_delete_image);
        \$(this).parent(\"li\").remove();
        hideSvg();
        updateRank();
        count_del++;
    });
    var count_add = ";
        // line 128
        echo twig_escape_filter($this->env, _twig_default_filter(twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "add_images", array())), 0), "html", null, true);
        echo ";
    \$('#";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "product_image", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').fileupload({
        url: \"";
        // line 130
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_image_add");
        echo "\",
        type: \"post\",
        sequentialUploads: true,
        dataType: 'json',
        done: function (e, data) {
            \$('#progress').hide();
            \$.each(data.result.files, function (index, file) {
                var path = '";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_temp_urlpath", array()), "html", null, true);
        echo "/' + file;
                var \$img = \$(proto_img.replace(/__path__/g, path));
                var \$new_img = \$(proto_add.replace(/__name__/g, count_add));
                \$new_img.val(file);
                \$child = \$img.append(\$new_img);
                \$('#thumb').append(\$child);
                count_add++;
            });
            hideSvg();
            updateRank();
        },
        fail: function (e, data) {
            alert('アップロードに失敗しました。');
        },
        always: function (e, data) {
            \$('#progress').hide();
            \$('#progress .progress-bar').width('0%');
        },
        start: function (e, data) {
            \$('#progress').show();
        },
        acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
        maxFileSize: 10000000,
        maxNumberOfFiles: 10,
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            \$('#progress .progress-bar').css(
                    'width',
                    progress + '%'
            );
        },
        processalways: function (e, data) {
            if (data.files.error) {
                alert(\"画像ファイルサイズが大きいか画像ファイルではありません。\");
            }
        }
    });
    // 画像アップロード
    \$('#file_upload').on('click', function () {
        \$('#";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "product_image", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').click();
    });
});

function fnClass(action) {
    document.form1.action = action;
    document.form1.submit();
    return false;
}

</script>
";
    }

    // line 189
    public function block_main($context, array $blocks = array())
    {
        // line 190
        echo "        <div class=\"row\" id=\"aside_wrap\">
            <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" novalidate enctype=\"multipart/form-data\">
            ";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "
                <div id=\"detail_wrap\" class=\"col-md-9\">
                    <div id=\"detail_box\" class=\"box form-horizontal\">
                        <div id=\"detail_box__header\" class=\"box-header\">
                            <h3 class=\"box-title\">基本情報</h3>
                        </div><!-- /.box-header -->
                        <div id=\"detail_box__body\" class=\"box-body\">

                            ";
        // line 201
        echo "                            ";
        if ($this->getAttribute(($context["Product"] ?? null), "id", array())) {
            // line 202
            echo "                                <div id=\"detail_box__id\" class=\"form-group\">
                                    <label class=\"col-sm-3 col-lg-2 control-label\">商品ID</label>
                                    <div class=\"col-sm-9 col-lg-10 padT07\">";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "id", array()), "html", null, true);
            echo "</div>
                                </div>
                            ";
        }
        // line 207
        echo "

                            ";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row');
        echo "
                            ";
        // line 210
        if ((($context["has_class"] ?? null) == false)) {
            // line 211
            echo "                                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "product_type", array()), 'row', array("attr" => array("class" => "form-inline  padT07")));
            echo "
                            ";
        }
        // line 213
        echo "
                            <div id=\"detail_box__image\" class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"admin_product_product_image\">
                                    ";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "product_image", array()), "vars", array()), "label", array()), "html", null, true);
        echo "<br>
                                    <span class=\"small\">620px以上推奨</span>
                                </label>
                                <div id=\"detail_files_box\" class=\"col-sm-9 col-lg-10\">
                                    <div class=\"photo_files\" id=\"drag-drop-area\">
                                        <svg id=\"icon_no_image\" class=\"cb cb-photo no-image\"> <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#cb-photo\"></use></svg>
                                        <ul id=\"thumb\" class=\"clearfix\"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group marB30\">
                                <div id=\"detail_box__file_upload\" class=\"col-sm-offset-2 col-sm-9 col-lg-10 \">

                                    <div id=\"progress\" class=\"progress progress-striped active\" style=\"display:none;\">
                                        <div class=\"progress-bar progress-bar-info\"></div>
                                    </div>

                                    ";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "product_image", array()), 'widget', array("attr" => array("accept" => "image/*", "style" => "display:none;")));
        echo "
                                    ";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "product_image", array()), 'errors');
        echo "
                                    <a id=\"file_upload\" class=\"with-icon\">
                                        <svg class=\"cb cb-plus\"> <use xlink:href=\"#cb-plus\" /></svg>ファイルをアップロード
                                    </a>

                                </div>
                            </div>

                            <div id=\"detail_description_box\" class=\"form-group\">
                                ";
        // line 243
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description_detail", array()), 'label');
        echo "
                                <div id=\"detail_description_box__detail\" class=\"col-sm-9 col-lg-10\">
                                    ";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description_detail", array()), 'widget');
        echo "
                                    ";
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description_detail", array()), 'errors');
        echo "
                                    <div id=\"detail_description_box__list\" class=\"accordion marT15 marB20\"><a id=\"detail_description_box__list_toggle\" class=\"toggle with-icon\"><svg class=\"cb cb-plus icon_plus\"> <use xlink:href=\"#cb-plus\" /></svg>一覧コメントを追加</a>
                                        <div class=\"accpanel padT08\">
                                            ";
        // line 249
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description_list", array()), 'widget');
        echo "
                                            ";
        // line 250
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description_list", array()), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 256
        if ((($context["has_class"] ?? null) == false)) {
            // line 257
            echo "                            <div id=\"detail_box__price\" class=\"form-group\">
                                ";
            // line 258
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "price02", array()), 'label');
            echo "
                                <div id=\"detail_box__price02\" class=\"col-sm-3 col-lg-3\">
                                    ";
            // line 260
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "price02", array()), 'widget');
            echo "
                                    ";
            // line 261
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "price02", array()), 'errors');
            echo "
                                    <div id=\"detail_box__price01\" class=\"accordion marT15 marB20\"><a class=\"toggle with-icon\"><svg class=\"cb cb-plus icon_plus\"> <use xlink:href=\"#cb-plus\" /></svg>通常価格を追加</a>
                                        <div class=\"accpanel padT08\">
                                            ";
            // line 264
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "price01", array()), 'widget');
            echo "
                                            ";
            // line 265
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "price01", array()), 'errors');
            echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id=\"detail_box__stock\" class=\"form-group\">
                                ";
            // line 272
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "stock", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    <div class=\"row\">
                                        <div id=\"detail_box__unlimited\" class=\"col-xs-12 form-inline\">
                                            ";
            // line 276
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "stock", array()), 'widget');
            echo "
                                            ";
            // line 277
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "stock", array()), 'errors');
            echo "
                                            ";
            // line 278
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "stock_unlimited", array()), 'widget');
            echo "
                                            ";
            // line 279
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "stock_unlimited", array()), 'errors');
            echo "
                                        </div>
                                    </div>

                                </div>
                            </div>
                            ";
        }
        // line 286
        echo "
                            <div id=\"detail_category_box\" class=\"form-group\">
                                ";
        // line 288
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Category", array()), 'label');
        echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    <div class=\"accordion marT05\">
                                        <a id=\"detail_category_box__toggle\" class=\"toggle with-icon\"><svg class=\"cb cb-plus icon_plus\"> <use xlink:href=\"#cb-plus\" /></svg>カテゴリを選択</a>
                                        <div id=\"detail_category_box__list\" class=\"accpanel padT08";
        // line 292
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "Category", array()), "vars", array()), "valid", array()) == false)) {
            echo " has-error";
        }
        echo "\">
                                            ";
        // line 293
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Category", array()), 'widget');
        echo "
                                            ";
        // line 294
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Category", array()), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id=\"detail_tag_box\" class=\"form-group\">
                                ";
        // line 301
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Tag", array()), 'label');
        echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    <div class=\"accordion marT05\">
                                        <a id=\"detail_tags_box__toggle\" class=\"toggle with-icon\"><svg class=\"cb cb-plus icon_plus\"> <use xlink:href=\"#cb-plus\" /></svg>";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tag"), "html", null, true);
        echo "を選択</a>
                                        <div id=\"detail_tags_box__list\" class=\"accpanel padT08\">
                                            ";
        // line 306
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Tag", array()), 'widget');
        echo "
                                            ";
        // line 307
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Tag", array()), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"extra-form\">
                                ";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 315
            echo "                                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 316
                echo "                                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                                    ";
            }
            // line 318
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 319
        echo "                            </div>

                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                    <div id=\"sub_detail_box\" class=\"box accordion form-horizontal\">
                        <div  id=\"sub_detail_box__toggle\" class=\"box-header toggle\">
                            <h3 class=\"box-title\">詳細な設定<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                        </div><!-- /.box-header -->
                        <div id=\"sub_detail_box__body\" class=\"box-body accpanel\">

                            ";
        // line 330
        if ((($context["has_class"] ?? null) == false)) {
            // line 331
            echo "                                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "code", array()), 'row');
            echo "
                                ";
            // line 332
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "sale_limit", array()), 'row');
            echo "
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "search_word", array()), 'row');
        echo "
                            ";
        // line 336
        if ((($context["has_class"] ?? null) == false)) {
            // line 337
            echo "                                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "delivery_date", array()), 'row');
            echo "
                                ";
            // line 338
            if ($this->getAttribute(($context["BaseInfo"] ?? null), "option_product_delivery_fee", array())) {
                // line 339
                echo "                                <div id=\"sub_detail_box__delivery_fee\" class=\"form-group\">
                                    ";
                // line 340
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "delivery_fee", array()), 'label');
                echo "
                                    <div class=\"col-sm-3 col-lg-3\">
                                        ";
                // line 342
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "delivery_fee", array()), 'widget');
                echo "
                                        ";
                // line 343
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "delivery_fee", array()), 'errors');
                echo "
                                    </div>
                                </div>
                                ";
            }
            // line 347
            echo "                                ";
            if ($this->getAttribute(($context["BaseInfo"] ?? null), "option_product_tax_rule", array())) {
                // line 348
                echo "                                <div id=\"sub_detail_box__tax_rate\" class=\"form-group\">
                                    ";
                // line 349
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "tax_rate", array()), 'label');
                echo "
                                    <div class=\"col-sm-3 col-lg-3\">
                                        ";
                // line 351
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "tax_rate", array()), 'widget');
                echo "
                                        ";
                // line 352
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "class", array()), "tax_rate", array()), 'errors');
                echo "
                                    </div>
                                </div>
                                ";
            }
            // line 356
            echo "                            ";
        }
        // line 357
        echo "
                        </div>
                    </div>

                    <div id=\"free_box\" class=\"box accordion\">
                        <div id=\"free_box__body_toggle\" class=\"box-header toggle\">
                            <h3 class=\"box-title\">フリーエリア<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                        </div><!-- /.box-header -->
                        <div id=\"free_box__body\" class=\"box-body accpanel\">
                            ";
        // line 366
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "free_area", array()), 'widget', array("id" => "wysiwyg-area"));
        echo "
                            ";
        // line 367
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "free_area", array()), 'errors');
        echo "
                        </div>
                    </div>

                    ";
        // line 380
        echo "
<script>
\$(function() {
    var dataId = null;

    \$(document).on('click', '.delete', function() {
        var data = \$(this).data();
        \$('.related-view' + data.id ).addClass('hidden');
        \$('#admin_product_related_collection_' + data.id + '_ChildProduct').val('');
        \$('#admin_product_related_collection_' + data.id + '_content' ).val('');
        \$('#searchResult').children().remove();
    });

    window.onload = function () {
        \$(\"select.child-product\").each(function () {
            var html = \$(this).clone();
            var productId = \$(this).val();
            var index = \$(this).parent().find('button').attr('data-id');
            var productCode = \$('#product-code' + index).text();
            var parentDiv =  \$('#related-div-' + index);
            if (productId && !productCode) {
                \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 403
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_related_product_get_product");
        echo "\",
                    data: {
                        product_id : productId,
                        index : index
                    },
                    success: function(data){
                        parentDiv.empty().append(data);
                        parentDiv.append(html);
                    },
                    error: function() {
                        alert('get product info failed.');
                    }
                });
            }
        });
    };

    \$(document).on(\"click\", 'a[id^=\"search_\"]', function () {
        dataId = \$(this).attr(\"data-id\");
        \$(\"#relatedDataId\").val(dataId);
        \$(\"#searchResult\").children().remove();
        \$('div.box-footer a').remove();
    });

    \$(\"#searchButton\").on(\"click\", function () {
        var formIdVal = \$(\"#";
        // line 428
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["searchForm"] ?? null), "id", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\").val();
        var formCatIdVal = \$(\"#";
        // line 429
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["searchForm"] ?? null), "category_id", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\").val();
        var data = {
            id: formIdVal,
            category_id: formCatIdVal,
            product_id: ";
        // line 433
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["Product"] ?? null), "id", array())) ? ($this->getAttribute(($context["Product"] ?? null), "id", array())) : (0)), "html", null, true);
        echo "
        };
        \$(\"#searchResult\")
                .children()
                .remove();
        \$.ajax({
            type: \"POST\",
            url: \"";
        // line 440
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_related_product_search");
        echo "\",
            data: data,
            success: function(data){
                \$(\"#searchResult\").append(data);
            },
            error: function() {
                alert('product search failed.');
            }
        });
    });
});
</script>

<div class=\"box accordion form-horizontal\">

    <div class=\"box-header toggle\">
        <h3 class=\"box-title\">
            ";
        // line 457
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "related_collection", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
            <svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg>
        </h3>
    </div><!-- /.box-header -->

    <div class=\"box-body accpanel\">
        ";
        // line 463
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "related_collection", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 464
            echo "            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 466
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "ChildProduct", array()), "vars", array()), "label", array()), "html", null, true);
            echo "
                </label>
                ";
            // line 468
            $context["ChildProduct"] = $this->getAttribute($this->getAttribute(($context["RelatedProducts"] ?? null), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "ChildProduct", array());
            // line 469
            echo "                <div class=\"col-sm-9 col-lg-9\" id=\"related-div-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">
                    ";
            // line 470
            if (($context["ChildProduct"] ?? null)) {
                // line 471
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_product_edit", array("id" => $this->getAttribute(($context["ChildProduct"] ?? null), "id", array()))), "html", null, true);
                echo "\" id=\"product-image-link";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" class=\"flL related-view";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" >
                            <img src=\"";
                // line 472
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute(($context["ChildProduct"] ?? null), "mainFileName", array())), "html", null, true);
                echo "\" id=\"product-image-img";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" style=\"max-width: 100px;margin-right: 10px;\" />
                        </a>
                        <span id=\"product-name";
                // line 474
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" class=\"related-view";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" style=\"margin-right: 10px;\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["ChildProduct"] ?? null), "name", array()), "html", null, true);
                echo "</span>
                        <a id=\"search_";
                // line 475
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" class=\"btn btn-default btn::after-block btn-sm\" data-toggle=\"modal\" data-target=\"#searchProductModal\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\">
                            商品を選択
                        </a>
                        <button type=\"button\" id=\"product-delete";
                // line 478
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" class=\"btn btn-default text-right delete related-view";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\">削除</button>
                        ";
                // line 479
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["child"], "ChildProduct", array()), 'widget', array("attr" => array("style" => "display: none", "class" => "child-product")));
                echo "
                        <br>
                        <span class=\"related-view";
                // line 481
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" id=\"product-code";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\">
                            ";
                // line 482
                echo twig_escape_filter($this->env, $this->getAttribute(($context["ChildProduct"] ?? null), "code_min", array()), "html", null, true);
                echo "
                            ";
                // line 483
                if (($this->getAttribute(($context["ChildProduct"] ?? null), "code_min", array()) != $this->getAttribute(($context["ChildProduct"] ?? null), "code_max", array()))) {
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["ChildProduct"] ?? null), "code_max", array()), "html", null, true);
                    echo "
                            ";
                }
                // line 485
                echo "                        </span>
                    ";
            } else {
                // line 487
                echo "                        <a href=\"\" id=\"product-image-link";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" class=\"flL related-view";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo " hidden\" >
                            <img src=\"\" id=\"product-image-img";
                // line 488
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" style=\"max-width: 100px;margin-right: 10px;\" />
                        </a>
                        <span id=\"product-name";
                // line 490
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" class=\"related-view";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo " hidden\" ></span>
                        <a id=\"search_";
                // line 491
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" class=\"btn btn-default btn::after-block btn-sm\" data-toggle=\"modal\" data-target=\"#searchProductModal\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\">
                            商品を選択
                        </a>
                        <button  type=\"button\" id=\"product-delete";
                // line 494
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" class=\"btn btn-default text-right delete related-view";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo " hidden\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\">削除</button>
                        ";
                // line 495
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["child"], "ChildProduct", array()), 'widget', array("attr" => array("style" => "display: none", "class" => "child-product")));
                echo "
                        <br>
                        <span id=\"product-code";
                // line 497
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" class=\"related-view";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo " hidden\"></span>
                    ";
            }
            // line 499
            echo "

                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 505
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "content", array()), "vars", array()), "label", array()), "html", null, true);
            echo "
                </label>
                <div class=\"col-sm-9 col-lg-10 related-content";
            // line 507
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">
                    ";
            // line 508
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["child"], "content", array()), 'widget', array("attr" => array("class" => "col-sm-9 col-lg-10 form-control")));
            echo "
                    ";
            // line 509
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["child"], "content", array()), 'errors');
            echo "
                </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 513
        echo "        <input type=\"hidden\" id=\"relatedDataId\" value=\"\">
    </div>
</div>

<div id=\"detail_box__footer\" class=\"row hidden-xs hidden-sm\">
                        <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                            <p><a href=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_page", array("page_no" => (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "eccube.admin.product.search.page_no"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "eccube.admin.product.search.page_no"), "method"), "1")) : ("1")))), "html", null, true);
        echo "?resume=1\">検索画面に戻る</a></p>
                        </div>
                    </div>

                </div><!-- /.col -->

                <div class=\"col-md-3\" id=\"aside_column\">
                    <div id=\"common_box\" class=\"col_inner\">
                        <div id=\"common_button_box\" class=\"box no-header\">
                            <div id=\"common_button_box__body\" class=\"box-body\">
                                <div id=\"common_button_box__status\" class=\"row\">
                                    <div class=\"col-xs-12\">
                                        <div class=\"form-group\">
                                            ";
        // line 532
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Status", array()), 'widget');
        echo "
                                            ";
        // line 533
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Status", array()), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div id=\"common_button_box__insert_button\" class=\"row text-center\">
                                    <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg prevention-btn prevention-mask\" >商品を登録</button>
                                    </div>
                                </div>
                                <div id=\"common_button_box__class_set_button\" class=\"row text-center with-border\">
                                    <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                        ";
        // line 544
        if ((null === ($context["id"] ?? null))) {
            // line 545
            echo "                                            <button class=\"btn btn-default btn-block btn-sm\" disabled>
                                                規格設定
                                            </button>
                                        ";
        } else {
            // line 549
            echo "                                            <button class=\"btn btn-default btn-block btn-sm\" onclick=\"fnClass('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_product_class", array("id" => ($context["id"] ?? null))), "html", null, true);
            echo "');return false;\">
                                                規格設定
                                            </button>
                                        ";
        }
        // line 553
        echo "                                    </div>
                                </div>
                                <div id=\"common_button_box__operation_button\" class=\"row text-center with-border\">
                                    <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                        <ul class=\"col-3\">
                                            ";
        // line 558
        if ((null === ($context["id"] ?? null))) {
            // line 559
            echo "                                                <li>
                                                    <button class=\"btn btn-default btn-block btn-sm\" disabled>
                                                        確認
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class=\"btn btn-default btn-block btn-sm\" disabled>
                                                        複製
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class=\"btn btn-default btn-block btn-sm\" disabled>
                                                        削除
                                                    </button>
                                                </li>
                                            ";
        } else {
            // line 575
            echo "                                                <li>
                                                    <a class=\"btn btn-default btn-block btn-sm\" href=\"";
            // line 576
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_product_display", array("id" => ($context["id"] ?? null))), "html", null, true);
            echo "\" target=\"_blank\">
                                                        確認
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class=\"btn btn-default btn-block btn-sm\" href=\"";
            // line 581
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_product_copy", array("id" => $this->getAttribute(($context["Product"] ?? null), "id", array()))), "html", null, true);
            echo "\"  ";
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
            echo " data-method=\"post\" data-message=\"この商品情報を複製してもよろしいですか？\">
                                                        複製
                                                    </a>
                                                </li>
                                                <li>
                                                     <a class=\"btn btn-default btn-block btn-sm\" href=\"";
            // line 586
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_product_delete", array("id" => $this->getAttribute(($context["Product"] ?? null), "id", array()))), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
            echo " data-method=\"delete\" data-message=\"この商品情報を削除してもよろしいですか？\">
                                                        削除
                                                    </a>
                                                </li>
                                            ";
        }
        // line 591
        echo "                                        </ul>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->

                        <div id=\"common_date_info_box\" class=\"box no-header\">
                            <div id=\"common_date_info_box__body\" class=\"box-body update-area\">
                                <p><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>登録日：";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getDateFormatFilter($this->getAttribute(($context["Product"] ?? null), "create_date", array())), "html", null, true);
        echo "</p>
                                <p><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>更新日：";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getDateFormatFilter($this->getAttribute(($context["Product"] ?? null), "update_date", array())), "html", null, true);
        echo "</p>
                            </div>
                        </div><!-- /.box -->

                        <div id=\"common_shop_note_box\" class=\"box\">
                            <div id=\"common_shop_note_box__header\" class=\"box-header\">
                                <h3 class=\"box-title\">ショップ用メモ欄</h3>
                            </div><!-- /.box-header -->
                            <div id=\"common_shop_note_box__body\" class=\"box-body\">
                                ";
        // line 609
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "note", array()), 'widget');
        echo "
                                ";
        // line 610
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "note", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->

            </form>
        </div>

";
    }

    // line 632
    public function block_modal($context, array $blocks = array())
    {
        // line 633
        echo "
<div class=\"modal\" id=\"searchProductModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"modal-close\" aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">商品検索</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    ";
        // line 643
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "id", array()), 'widget', array("attr" => array("placeholder" => "商品名・ID・コード")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 646
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "category_id", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    <button type=\"button\" id=\"searchButton\" class=\"btn btn-primary\" >
                        検索
                    </button>
                </div>
                <div class=\"form-group\" id=\"searchResult\">
                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__48717bbee8ebb779e0ff7b9fbb4c2c6b3a7804d32687f34331a73424bff0fb17";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1174 => 646,  1168 => 643,  1156 => 633,  1153 => 632,  1139 => 610,  1135 => 609,  1123 => 600,  1119 => 599,  1109 => 591,  1099 => 586,  1089 => 581,  1081 => 576,  1078 => 575,  1060 => 559,  1058 => 558,  1051 => 553,  1043 => 549,  1037 => 545,  1035 => 544,  1021 => 533,  1017 => 532,  1001 => 519,  993 => 513,  975 => 509,  971 => 508,  967 => 507,  962 => 505,  954 => 499,  947 => 497,  942 => 495,  934 => 494,  926 => 491,  920 => 490,  915 => 488,  908 => 487,  904 => 485,  897 => 483,  893 => 482,  887 => 481,  882 => 479,  874 => 478,  866 => 475,  858 => 474,  849 => 472,  840 => 471,  838 => 470,  833 => 469,  831 => 468,  826 => 466,  822 => 464,  805 => 463,  796 => 457,  776 => 440,  766 => 433,  759 => 429,  755 => 428,  727 => 403,  702 => 380,  695 => 367,  691 => 366,  680 => 357,  677 => 356,  670 => 352,  666 => 351,  661 => 349,  658 => 348,  655 => 347,  648 => 343,  644 => 342,  639 => 340,  636 => 339,  634 => 338,  629 => 337,  627 => 336,  623 => 335,  620 => 334,  615 => 332,  610 => 331,  608 => 330,  595 => 319,  589 => 318,  583 => 316,  580 => 315,  576 => 314,  566 => 307,  562 => 306,  557 => 304,  551 => 301,  541 => 294,  537 => 293,  531 => 292,  524 => 288,  520 => 286,  510 => 279,  506 => 278,  502 => 277,  498 => 276,  491 => 272,  481 => 265,  477 => 264,  471 => 261,  467 => 260,  462 => 258,  459 => 257,  457 => 256,  448 => 250,  444 => 249,  438 => 246,  434 => 245,  429 => 243,  417 => 234,  413 => 233,  393 => 216,  388 => 213,  382 => 211,  380 => 210,  376 => 209,  372 => 207,  366 => 204,  362 => 202,  359 => 201,  348 => 192,  344 => 190,  341 => 189,  325 => 176,  283 => 137,  273 => 130,  269 => 129,  265 => 128,  254 => 120,  250 => 119,  225 => 96,  216 => 94,  211 => 93,  202 => 90,  198 => 89,  191 => 88,  186 => 87,  177 => 84,  173 => 83,  166 => 82,  162 => 81,  158 => 80,  154 => 79,  143 => 70,  136 => 66,  131 => 64,  126 => 62,  121 => 60,  116 => 58,  111 => 57,  109 => 56,  94 => 44,  90 => 43,  86 => 42,  82 => 41,  77 => 40,  74 => 39,  60 => 28,  55 => 27,  52 => 26,  46 => 22,  40 => 21,  36 => 17,  34 => 630,  32 => 24,  30 => 19,  11 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__48717bbee8ebb779e0ff7b9fbb4c2c6b3a7804d32687f34331a73424bff0fb17", "");
    }
}
