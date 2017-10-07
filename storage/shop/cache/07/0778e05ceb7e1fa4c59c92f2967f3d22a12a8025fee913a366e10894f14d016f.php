<?php

/* default/template/extension/module/kefu.twig */
class __TwigTemplate_2e6f105637fdadcd2f17cae3a21ea45262ab326d9cfe7f94727a4d027720151e extends Twig_Template
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
        echo "<link href=\"catalog/view/theme/default/stylesheet/kefu.css\" rel=\"stylesheet\" type=\"text/css\" />
<div id=\"rightArrow\"><a href=\"javascript:;\" title=\"";
        // line 2
        echo (isset($context["text_online"]) ? $context["text_online"] : null);
        echo "\"></a></div>
<div id=\"floatDivBoxs\">
\t<div class=\"floatDtt\">";
        // line 4
        echo (isset($context["text_online"]) ? $context["text_online"] : null);
        echo "</div>
    <div class=\"floatShadow\">
        ";
        // line 6
        if ((isset($context["qqs"]) ? $context["qqs"] : null)) {
            echo " 
        <ul class=\"floatDqq\">
        \t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["qqs"]) ? $context["qqs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                echo " 
            <li style=\"padding-left:0px;\"><a target=\"_blank\" href=\"tencent://message/?uin=";
                // line 9
                echo $this->getAttribute($context["qq"], "qq_number", array());
                echo "&Menu=yes\"><img src=\"catalog/view/theme/default/image/kefu/qq.png\" align=\"absmiddle\" title=\"";
                echo $this->getAttribute($context["qq"], "qq_name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["qq"], "qq_name", array());
                echo "\">&nbsp;&nbsp;";
                echo $this->getAttribute($context["qq"], "qq_name", array());
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo " 
        </ul>
        ";
        }
        // line 12
        echo " 
        <div class=\"floatDtxt\">";
        // line 13
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo "</div>
        <div class=\"floatDtel\">";
        // line 14
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</div>
        <div class=\"floatDtxt\">";
        // line 15
        echo (isset($context["image_title"]) ? $context["image_title"] : null);
        echo "</div>
        <div style=\"text-align:center;padding:10PX 0 5px 0;background:#EBEBEB;\"><img src=\"";
        // line 16
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\"></div>
    </div>
    <div class=\"floatDbg\"></div>
</div>

<script type=\"text/javascript\"><!--
var flag=1;
\$('#rightArrow').click(function(){
\tif(flag==1){
\t\t\$(\"#floatDivBoxs\").animate({right: '-175px'},300);
\t\t\$(this).animate({right: '-5px'},300);
\t\t\$(this).css('background-position','-50px 0');
\t\tflag=0;
\t}else{
\t\t\$(\"#floatDivBoxs\").animate({right: '0'},300);
\t\t\$(this).animate({right: '170px'},300);
\t\t\$(this).css('background-position','0px 0');
\t\tflag=1;
\t}
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/kefu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  73 => 15,  69 => 14,  65 => 13,  62 => 12,  57 => 10,  43 => 9,  37 => 8,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <link href="catalog/view/theme/default/stylesheet/kefu.css" rel="stylesheet" type="text/css" />*/
/* <div id="rightArrow"><a href="javascript:;" title="{{ text_online }}"></a></div>*/
/* <div id="floatDivBoxs">*/
/* 	<div class="floatDtt">{{ text_online }}</div>*/
/*     <div class="floatShadow">*/
/*         {% if qqs %} */
/*         <ul class="floatDqq">*/
/*         	{% for qq in qqs %} */
/*             <li style="padding-left:0px;"><a target="_blank" href="tencent://message/?uin={{ qq.qq_number }}&Menu=yes"><img src="catalog/view/theme/default/image/kefu/qq.png" align="absmiddle" title="{{ qq.qq_name }}" alt="{{ qq.qq_name }}">&nbsp;&nbsp;{{ qq.qq_name }}</a></li>*/
/*             {% endfor %} */
/*         </ul>*/
/*         {% endif %} */
/*         <div class="floatDtxt">{{ text_telephone }}</div>*/
/*         <div class="floatDtel">{{ telephone }}</div>*/
/*         <div class="floatDtxt">{{ image_title }}</div>*/
/*         <div style="text-align:center;padding:10PX 0 5px 0;background:#EBEBEB;"><img src="{{ image }}"></div>*/
/*     </div>*/
/*     <div class="floatDbg"></div>*/
/* </div>*/
/* */
/* <script type="text/javascript"><!--*/
/* var flag=1;*/
/* $('#rightArrow').click(function(){*/
/* 	if(flag==1){*/
/* 		$("#floatDivBoxs").animate({right: '-175px'},300);*/
/* 		$(this).animate({right: '-5px'},300);*/
/* 		$(this).css('background-position','-50px 0');*/
/* 		flag=0;*/
/* 	}else{*/
/* 		$("#floatDivBoxs").animate({right: '0'},300);*/
/* 		$(this).animate({right: '170px'},300);*/
/* 		$(this).css('background-position','0px 0');*/
/* 		flag=1;*/
/* 	}*/
/* });*/
/* //--></script>*/
