<?php

/* common/column_left.twig */
class __TwigTemplate_de99b4377dd1da991c9af061dd62607eef363a90c1dded6ed4d8705d01cdd059 extends Twig_Template
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
        echo "<nav id=\"column-left\">
  <div id=\"navigation\"><span class=\"fa fa-bars\"></span> ";
        // line 2
        echo (isset($context["text_navigation"]) ? $context["text_navigation"] : null);
        echo "</div>
  <ul id=\"menu\">
    ";
        // line 4
        $context["i"] = 0;
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 6
            echo "    <li id=\"";
            echo $this->getAttribute($context["menu"], "id", array());
            echo "\">
\t";
            // line 7
            if ($this->getAttribute($context["menu"], "href", array())) {
                // line 8
                echo "\t<a href=\"";
                echo $this->getAttribute($context["menu"], "href", array());
                echo "\"><i class=\"fa ";
                echo $this->getAttribute($context["menu"], "icon", array());
                echo " fw\"></i> ";
                echo $this->getAttribute($context["menu"], "name", array());
                echo "</a>
\t";
            } else {
                // line 10
                echo "\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 11
                echo "\t<a href=\"#collapse";
                echo (isset($context["i"]) ? $context["i"] : null);
                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"fa ";
                echo $this->getAttribute($context["menu"], "icon", array());
                echo " fw\"></i> ";
                echo $this->getAttribute($context["menu"], "name", array());
                echo "</a>
\t";
            }
            // line 13
            echo "\t
      ";
            // line 14
            if ($this->getAttribute($context["menu"], "children", array())) {
                // line 15
                echo "      <ul id=\"collapse";
                echo (isset($context["i"]) ? $context["i"] : null);
                echo "\" class=\"collapse\">
        ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 17
                    echo "        <li>
\t\t";
                    // line 18
                    if ($this->getAttribute($context["children_1"], "href", array())) {
                        // line 19
                        echo "\t\t<a href=\"";
                        echo $this->getAttribute($context["children_1"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["children_1"], "name", array());
                        echo "</a>
\t\t";
                    } else {
                        // line 21
                        echo "\t\t";
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                        // line 22
                        echo "\t\t<a href=\"#collapse";
                        echo (isset($context["i"]) ? $context["i"] : null);
                        echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                        echo $this->getAttribute($context["children_1"], "name", array());
                        echo "</a>
\t\t";
                    }
                    // line 24
                    echo "          ";
                    if ($this->getAttribute($context["children_1"], "children", array())) {
                        // line 25
                        echo "          <ul id=\"collapse";
                        echo (isset($context["i"]) ? $context["i"] : null);
                        echo "\" class=\"collapse\">
            ";
                        // line 26
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["children_1"], "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 27
                            echo "            <li>";
                            if ($this->getAttribute($context["children_2"], "href", array())) {
                                echo "<a href=\"";
                                echo $this->getAttribute($context["children_2"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["children_2"], "name", array());
                                echo "</a>";
                            } else {
                                echo "<a href=\"#collapse";
                                echo (isset($context["i"]) ? $context["i"] : null);
                                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                                echo $this->getAttribute($context["children_2"], "name", array());
                                echo "</a>";
                            }
                            // line 28
                            echo "              ";
                            if ($this->getAttribute($context["children_2"], "children", array())) {
                                // line 29
                                echo "              <ul id=\"collapse";
                                echo (isset($context["i"]) ? $context["i"] : null);
                                echo "\" class=\"collapse\">
                ";
                                // line 30
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["children_2"], "children", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 31
                                    echo "                <li><a href=\"";
                                    echo $this->getAttribute($context["children_3"], "href", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["children_3"], "name", array());
                                    echo "</a></li>
                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 33
                                echo "              </ul>
              ";
                            }
                            // line 34
                            echo " </li>
            ";
                            // line 35
                            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                            // line 36
                            echo "            
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 38
                        echo "          </ul>
          ";
                    }
                    // line 39
                    echo "</li>
        ";
                    // line 40
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                    // line 41
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "      </ul>
      ";
            }
            // line 43
            echo "</li>
    ";
            // line 44
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 45
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  </ul>
  <div id=\"stats\">
    <ul>
      <li>
        <div>";
        // line 50
        echo (isset($context["text_complete_status"]) ? $context["text_complete_status"] : null);
        echo " <span class=\"pull-right\">";
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
        // line 52
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "%\"> <span class=\"sr-only\">";
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 56
        echo (isset($context["text_processing_status"]) ? $context["text_processing_status"] : null);
        echo " <span class=\"pull-right\">";
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
        // line 58
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "%\"> <span class=\"sr-only\">";
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 62
        echo (isset($context["text_other_status"]) ? $context["text_other_status"] : null);
        echo " <span class=\"pull-right\">";
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
        // line 64
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "%\"> <span class=\"sr-only\">";
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "%</span></div>
        </div>
      </li>
    </ul>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 64,  240 => 62,  229 => 58,  222 => 56,  211 => 52,  204 => 50,  198 => 46,  192 => 45,  190 => 44,  187 => 43,  183 => 42,  177 => 41,  175 => 40,  172 => 39,  168 => 38,  161 => 36,  159 => 35,  156 => 34,  152 => 33,  141 => 31,  137 => 30,  132 => 29,  129 => 28,  114 => 27,  110 => 26,  105 => 25,  102 => 24,  94 => 22,  91 => 21,  83 => 19,  81 => 18,  78 => 17,  74 => 16,  69 => 15,  67 => 14,  64 => 13,  54 => 11,  51 => 10,  41 => 8,  39 => 7,  34 => 6,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <nav id="column-left">*/
/*   <div id="navigation"><span class="fa fa-bars"></span> {{ text_navigation }}</div>*/
/*   <ul id="menu">*/
/*     {% set i = 0 %}*/
/*     {% for menu in menus %}*/
/*     <li id="{{ menu.id }}">*/
/* 	{% if menu.href %}*/
/* 	<a href="{{ menu.href }}"><i class="fa {{ menu.icon }} fw"></i> {{ menu.name }}</a>*/
/* 	{% else %}*/
/* 	{% set i = i + 1 %}*/
/* 	<a href="#collapse{{ i }}" data-toggle="collapse" class="parent collapsed"><i class="fa {{ menu.icon }} fw"></i> {{ menu.name }}</a>*/
/* 	{% endif %}*/
/* 	*/
/*       {% if menu.children %}*/
/*       <ul id="collapse{{ i }}" class="collapse">*/
/*         {% for children_1 in menu.children %}*/
/*         <li>*/
/* 		{% if children_1.href %}*/
/* 		<a href="{{ children_1.href }}">{{ children_1.name }}</a>*/
/* 		{% else %}*/
/* 		{% set i = i + 1 %}*/
/* 		<a href="#collapse{{ i }}" data-toggle="collapse" class="parent collapsed">{{ children_1.name }}</a>*/
/* 		{% endif %}*/
/*           {% if children_1.children %}*/
/*           <ul id="collapse{{ i }}" class="collapse">*/
/*             {% for children_2 in children_1.children %}*/
/*             <li>{% if children_2.href %}<a href="{{ children_2.href }}">{{ children_2.name }}</a>{% else %}<a href="#collapse{{ i }}" data-toggle="collapse" class="parent collapsed">{{ children_2.name }}</a>{% endif %}*/
/*               {% if children_2.children %}*/
/*               <ul id="collapse{{ i }}" class="collapse">*/
/*                 {% for children_3 in children_2.children %}*/
/*                 <li><a href="{{ children_3.href }}">{{ children_3.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endif %} </li>*/
/*             {% set i = i + 1 %}*/
/*             */
/*             {% endfor %}*/
/*           </ul>*/
/*           {% endif %}</li>*/
/*         {% set i = i + 1 %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*       {% endif %}</li>*/
/*     {% set i = i + 1 %}*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div id="stats">*/
/*     <ul>*/
/*       <li>*/
/*         <div>{{ text_complete_status }} <span class="pull-right">{{ complete_status }}%</span></div>*/
/*         <div class="progress">*/
/*           <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ complete_status }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ complete_status }}%"> <span class="sr-only">{{ complete_status }}%</span></div>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <div>{{ text_processing_status }} <span class="pull-right">{{ processing_status }}%</span></div>*/
/*         <div class="progress">*/
/*           <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ processing_status }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ processing_status }}%"> <span class="sr-only">{{ processing_status }}%</span></div>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <div>{{ text_other_status }} <span class="pull-right">{{ other_status }}%</span></div>*/
/*         <div class="progress">*/
/*           <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ other_status }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ other_status }}%"> <span class="sr-only">{{ other_status }}%</span></div>*/
/*         </div>*/
/*       </li>*/
/*     </ul>*/
/*   </div>*/
/* </nav>*/
/* */
