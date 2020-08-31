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

/* taches/taches-edit.html.twig */
class __TwigTemplate_c6fd56bf9698b277ed25edd7b27acebe8b12cbbe4cba4370aaa8a7115a1a3736 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taches/taches-edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taches/taches-edit.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
            ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "task", [], "any", false, false, false, 2), 'row');
        echo "
<div class=\"form-group\">
    <label for=\"project\">Project :</label>
    <select class=\"form-control\" name=\"project\" id=\"project\" required>
        ";
        // line 6
        if ((0 !== twig_compare((isset($context["projectStains"]) || array_key_exists("projectStains", $context) ? $context["projectStains"] : (function () { throw new RuntimeError('Variable "projectStains" does not exist.', 6, $this->source); })()), 0))) {
            // line 7
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["projectStains"]) || array_key_exists("projectStains", $context) ? $context["projectStains"] : (function () { throw new RuntimeError('Variable "projectStains" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, (isset($context["projectStains"]) || array_key_exists("projectStains", $context) ? $context["projectStains"] : (function () { throw new RuntimeError('Variable "projectStains" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "</option>
        ";
        } else {
            // line 9
            echo "            <option value=\"\" >Choissez :</option>
        ";
        }
        // line 11
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 12
            echo "            ";
            if (((0 !== twig_compare((isset($context["projectStains"]) || array_key_exists("projectStains", $context) ? $context["projectStains"] : (function () { throw new RuntimeError('Variable "projectStains" does not exist.', 12, $this->source); })()), 0)) && (0 === twig_compare((isset($context["projectStains"]) || array_key_exists("projectStains", $context) ? $context["projectStains"] : (function () { throw new RuntimeError('Variable "projectStains" does not exist.', 12, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["project"], "label", [], "any", false, false, false, 12))))) {
                // line 13
                echo "            ";
            } else {
                // line 14
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "label", [], "any", false, false, false, 14), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "label", [], "any", false, false, false, 14), "html", null, true);
                echo "</option>
            ";
            }
            // line 16
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </select>
</div>
<div class=\"form-group\">
    <label for=\"state\">Status :</label>
    <select class=\"form-control\" name=\"state\" id=\"state\" required>
        ";
        // line 22
        if ((0 !== twig_compare((isset($context["projectStains"]) || array_key_exists("projectStains", $context) ? $context["projectStains"] : (function () { throw new RuntimeError('Variable "projectStains" does not exist.', 22, $this->source); })()), 0))) {
            // line 23
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["stateStains"]) || array_key_exists("stateStains", $context) ? $context["stateStains"] : (function () { throw new RuntimeError('Variable "stateStains" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, (isset($context["stateStains"]) || array_key_exists("stateStains", $context) ? $context["stateStains"] : (function () { throw new RuntimeError('Variable "stateStains" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "</option>
        ";
        } else {
            // line 25
            echo "            <option value=\"\" >Choissez :</option>
        ";
        }
        // line 27
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["states"]) || array_key_exists("states", $context) ? $context["states"] : (function () { throw new RuntimeError('Variable "states" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 28
            echo "            ";
            if (((0 !== twig_compare((isset($context["stateStains"]) || array_key_exists("stateStains", $context) ? $context["stateStains"] : (function () { throw new RuntimeError('Variable "stateStains" does not exist.', 28, $this->source); })()), 0)) && (0 === twig_compare((isset($context["stateStains"]) || array_key_exists("stateStains", $context) ? $context["stateStains"] : (function () { throw new RuntimeError('Variable "stateStains" does not exist.', 28, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["state"], "label", [], "any", false, false, false, 28))))) {
                // line 29
                echo "            ";
            } else {
                // line 30
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "label", [], "any", false, false, false, 30), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "label", [], "any", false, false, false, 30), "html", null, true);
                echo "</option>
            ";
            }
            // line 32
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </select>
</div>
";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "taches/taches-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 35,  139 => 33,  133 => 32,  125 => 30,  122 => 29,  119 => 28,  114 => 27,  110 => 25,  102 => 23,  100 => 22,  93 => 17,  87 => 16,  79 => 14,  76 => 13,  73 => 12,  68 => 11,  64 => 9,  56 => 7,  54 => 6,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
            {{ form_row(form.task) }}
<div class=\"form-group\">
    <label for=\"project\">Project :</label>
    <select class=\"form-control\" name=\"project\" id=\"project\" required>
        {% if projectStains != 0 %}
            <option value=\"{{ projectStains }}\" >{{ projectStains }}</option>
        {% else %}
            <option value=\"\" >Choissez :</option>
        {% endif %}
        {% for project in projects %}
            {% if projectStains != 0 and projectStains == project.label %}
            {% else %}
                <option value=\"{{ project.label }}\" >{{ project.label }}</option>
            {% endif %}
        {% endfor %}
    </select>
</div>
<div class=\"form-group\">
    <label for=\"state\">Status :</label>
    <select class=\"form-control\" name=\"state\" id=\"state\" required>
        {% if projectStains != 0 %}
            <option value=\"{{ stateStains }}\" >{{ stateStains }}</option>
        {% else %}
            <option value=\"\" >Choissez :</option>
        {% endif %}
        {% for state in states %}
            {% if stateStains != 0 and stateStains == state.label %}
            {% else %}
                <option value=\"{{ state.label }}\" >{{ state.label }}</option>
            {% endif %}
        {% endfor %}
    </select>
</div>
{{ form_end(form) }}

", "taches/taches-edit.html.twig", "/var/www/public/todoList-master/templates/taches/taches-edit.html.twig");
    }
}
