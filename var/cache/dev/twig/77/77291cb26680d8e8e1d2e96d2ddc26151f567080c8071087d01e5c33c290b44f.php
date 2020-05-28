<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* to-do/show.html.twig */
class __TwigTemplate_df54fc9cde3d1c8743fdc1bda07eb85aea007ec645eb2af38c9059c99f5812a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "to-do/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "to-do/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "to-do/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_to_do_details"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["toDoList"]) || array_key_exists("toDoList", $context) ? $context["toDoList"] : (function () { throw new RuntimeError('Variable "toDoList" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_title"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["toDoList"]) || array_key_exists("toDoList", $context) ? $context["toDoList"] : (function () { throw new RuntimeError('Variable "toDoList" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("to_do_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["toDoList"]) || array_key_exists("toDoList", $context) ? $context["toDoList"] : (function () { throw new RuntimeError('Variable "toDoList" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_list_manage"), "html", null, true);
        echo "</a>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list_date_created"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["toDoList"]) || array_key_exists("toDoList", $context) ? $context["toDoList"] : (function () { throw new RuntimeError('Variable "toDoList" does not exist.', 10, $this->source); })()), "creation", [], "any", false, false, false, 10), "d-m-yy"), "html", null, true);
        echo "</p>
    <p>
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_tags"), "html", null, true);
        echo ":
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["toDoList"]) || array_key_exists("toDoList", $context) ? $context["toDoList"] : (function () { throw new RuntimeError('Variable "toDoList" does not exist.', 13, $this->source); })()), "tags", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 14
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("list_tag_show", ["id" => twig_get_attribute($this->env, $this->source, $context["element"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </p>
    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("edit_tags");
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_tag_manage"), "html", null, true);
        echo "</a>
    <hr>
    <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header_to_do", ["%id%" => ((twig_get_attribute($this->env, $this->source, ($context["toDoList"] ?? null), "id", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["toDoList"] ?? null), "id", [], "any", false, false, false, 19), "")) : (""))]), "html", null, true);
        echo "</h2>
    <table>
        <tr>
            <th></th>
            <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_name"), "html", null, true);
        echo "</th>
            <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list_element_done"), "html", null, true);
        echo "</th>
        </tr>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["toDoList"]) || array_key_exists("toDoList", $context) ? $context["toDoList"] : (function () { throw new RuntimeError('Variable "toDoList" does not exist.', 26, $this->source); })()), "listElements", [], "any", false, false, false, 26));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 27
            echo "            <tr>
                <th>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 28), "html", null, true);
            echo ".</th>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "content", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                ";
            // line 30
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["element"], "done", [], "any", false, false, false, 30), 0)) {
                // line 31
                echo "                    <td><input type=\"checkbox\" disabled></td>
                ";
            } else {
                // line 33
                echo "                    <td><input type=\"checkbox\" disabled checked></td>
                ";
            }
            // line 35
            echo "            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </table>
    <hr>
    ";
        // line 39
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["toDoList"]) || array_key_exists("toDoList", $context) ? $context["toDoList"] : (function () { throw new RuntimeError('Variable "toDoList" does not exist.', 39, $this->source); })()), "comments", [], "any", false, false, false, 39))) {
            // line 40
            echo "    <table>
        <tr>
            <th><h3>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_comments"), "html", null, true);
            echo "</h3></th>
            <th>";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_actions"), "html", null, true);
            echo "</th>

        </tr>
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["toDoList"]) || array_key_exists("toDoList", $context) ? $context["toDoList"] : (function () { throw new RuntimeError('Variable "toDoList" does not exist.', 46, $this->source); })()), "comments", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 47
                echo "            <tr>
                <td>
                    ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "comment", [], "any", false, false, false, 49), "html", null, true);
                echo "
                </td>
                <td>
                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("list_comment_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["element"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">
                    <button class=\"btn btn-secondary\">";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_edit"), "html", null, true);
                echo "</button>
                </a>
                <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("list_comment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["element"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\">
                     <button class=\"btn btn-secondary\">";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_delete"), "html", null, true);
                echo "</button>
                </a>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    </table>
    <hr>
        ";
        }
        // line 64
        echo "    <b>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_comment_create"), "html", null, true);
        echo "</b>
    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("to_do_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["toDoList"]) || array_key_exists("toDoList", $context) ? $context["toDoList"] : (function () { throw new RuntimeError('Variable "toDoList" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)])]);
        echo "
    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'widget');
        echo "
    <div class=\"form-group row float-sm-right\">
        <input type=\"submit\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_save_comment"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
    </div>
    <div class=\"form-group row float-sm-left\">
        <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("to_do_index");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_back_to_list"), "html", null, true);
        echo "\">
            ";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_back_to_list"), "html", null, true);
        echo "
        </a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "to-do/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 72,  294 => 71,  288 => 68,  283 => 66,  279 => 65,  274 => 64,  269 => 61,  258 => 56,  254 => 55,  249 => 53,  245 => 52,  239 => 49,  235 => 47,  231 => 46,  225 => 43,  221 => 42,  217 => 40,  215 => 39,  211 => 37,  196 => 35,  192 => 33,  188 => 31,  186 => 30,  182 => 29,  178 => 28,  175 => 27,  158 => 26,  153 => 24,  149 => 23,  142 => 19,  135 => 17,  132 => 16,  121 => 14,  117 => 13,  113 => 12,  106 => 10,  100 => 9,  93 => 8,  83 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ 'title_to_do_details'|trans }}{{ toDoList.id }}
{% endblock %}

{% block body %}
    <h1>{{ 'label_title'|trans }} - {{ toDoList.title }}</h1>
    <a href=\"{{ url('to_do_edit', {'id': toDoList.id}) }}\" class=\"btn btn-primary\">{{ 'label_list_manage'|trans }}</a>
    <p>{{ 'list_date_created'|trans }} - {{ toDoList.creation|date('d-m-yy') }}</p>
    <p>
        {{ 'label_tags'|trans }}:
    {% for element in toDoList.tags %}
        <a href=\"{{ url('list_tag_show', {'id': element.id}) }}\">#{{ element.name }}</a>
    {% endfor %}
    </p>
    <a href=\"{{ url('edit_tags') }}\" class=\"btn btn-primary\">{{ 'label_tag_manage'|trans }}</a>
    <hr>
    <h2>{{ 'header_to_do'|trans({'%id%': toDoList.id|default('')}) }}</h2>
    <table>
        <tr>
            <th></th>
            <th>{{ 'label_name'|trans }}</th>
            <th>{{ 'list_element_done'|trans }}</th>
        </tr>
        {% for element in toDoList.listElements %}
            <tr>
                <th>{{ loop.index }}.</th>
                <td>{{ element.content }}</td>
                {% if element.done == 0 %}
                    <td><input type=\"checkbox\" disabled></td>
                {% else %}
                    <td><input type=\"checkbox\" disabled checked></td>
                {% endif %}
            </tr>
        {% endfor %}
    </table>
    <hr>
    {% if toDoList.comments|length %}
    <table>
        <tr>
            <th><h3>{{ 'label_comments'|trans }}</h3></th>
            <th>{{ 'label_actions'|trans }}</th>

        </tr>
        {% for element in toDoList.comments %}
            <tr>
                <td>
                    {{ element.comment }}
                </td>
                <td>
                <a href=\"{{ url('list_comment_edit', {'id': element.id}) }}\">
                    <button class=\"btn btn-secondary\">{{ 'label_edit'|trans }}</button>
                </a>
                <a href=\"{{ url('list_comment_delete', {'id': element.id}) }}\">
                     <button class=\"btn btn-secondary\">{{ 'label_delete'|trans }}</button>
                </a>
                </td>
            </tr>
        {% endfor %}
    </table>
    <hr>
        {% endif %}
    <b>{{ 'title_comment_create'|trans }}</b>
    {{ form_start(form, { method: 'POST', action: url('to_do_show',{'id': toDoList.id}) }) }}
    {{ form_widget(form) }}
    <div class=\"form-group row float-sm-right\">
        <input type=\"submit\" value=\"{{ 'action_save_comment'|trans }}\" class=\"btn btn-primary\" />
    </div>
    <div class=\"form-group row float-sm-left\">
        <a href=\"{{ url('to_do_index') }}\" title=\"{{ 'action_back_to_list'|trans }}\">
            {{ 'action_back_to_list'|trans }}
        </a>
    </div>
{% endblock %}", "to-do/show.html.twig", "C:\\xampp\\htdocs\\projects\\SymfonyProject\\app\\templates\\to-do\\show.html.twig");
    }
}
