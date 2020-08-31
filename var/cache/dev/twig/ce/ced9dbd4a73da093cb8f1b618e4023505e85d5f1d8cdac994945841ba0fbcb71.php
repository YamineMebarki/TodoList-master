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

/* accueil.html.twig */
class __TwigTemplate_938bad96a1985897ab03377a5fe7f217c41148ca466733c04539c1f1df908207 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'titre' => [$this, 'block_titre'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <style>
        .center{
            margin-right:40px;
        }
        .fa-exclamation-circle{
            font-size: 20px;
            color: orange;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        // line 14
        echo "    <p class=\"title mb-5\">ACCUEIL</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <div class=\"panel\">
        <button type=\"button\" class=\"btn btn-light btn-accueil\" onclick=\"location.href = '/projets';\" > <i class=\"far fa-paper-plane\"></i><p> Projets</p></button>
        <button type=\"button\" class=\"btn btn-light btn-accueil\" onclick=\"location.href = '/tâches'\"><i class=\"fas fa-check\"></i><p> Tâches</p></button>
        <button type=\"button\" class=\"btn btn-light btn-accueil\" onclick=\"location.href = '/parametres';\" ><i class=\"fas fa-cogs\"></i><p> Statuts</p></button>
        <button type=\"button\" class=\"btn btn-light btn-accueil\" onclick=\"location.href = '/enonce';\" ><i class=\"far fa-file-alt\"></i><p>Enoncé</p></button>
    </div>
    <hr/>
    <p class=\"h1 mt-5 mb-3\">Javascript</p>
    <p>1. Sélectionner la bonne déclaration pour chaque variable</p>
    <pre><code class=\"text-success\">
            var tab;
            for(let i = 0 ; i < 10 ; i++){
            tab.push(i) ;
            }
        </code></pre>
    <p class=\"mt-4 mb-3\">2. Trouver les bonnes déclarations d’objet</p>
    <pre><code class=\"text-success\">
            let objet = {};
            let  objet;
            let  objet = new Object();
        </code></pre>
    <p class=\"mt-4 mb-3\">3. Recherche Idefix </p>
    <pre><code class=\"text-success\">
             const personnages = [{id :1, label : \"Astérix\"}
\t\t    , {id :2, label : \"Obelix\"}
                    , {id :3, label : \"Bonnemine\"}
\t\t    , {id :4, label : \" Panoramix\"}
\t\t    , {id :5, label : \" Idefix\"}
                    , {id :6, label : \" Falbala\"}
\t\t    , {id :7, label : \" Agecanoix\"}
                    , {id :8, label : \" Falbala\"}
        </code></pre>
    <p class=\"mt-4 mb-3\">4. Supprimer le membre</p>
    <pre><code class=\"text-success\">
            {id :8, label : \"Falbala\"}
        </code></pre>
    <p class=\"mt-4 mb-3\">5. Ajouter le membre</p>
    <pre><code class=\"text-success\">
{id :8, label : \"Agecanomix\"}
        </code></pre>
    <p class=\"mt-4 mb-3\">6. Récupérer id et label de Bonnemine</p>
    <p class=\"mb-3\"><i class=\"fas fa-exclamation-circle\"></i> Voir console.log</p>
    <hr/>
    <p class=\"h2\">React</p>
    <p>1. Quel code offre le bon dénombrement ?</p>
    <pre><code class=\"text-success\">
import React, { useState } from 'react';
function Example() {
 const [count, setCount] = useState(0);
                        return (
    < div>
      < p>Vous avez cliqué {count} fois< /p>
      < button onClick={() => setCount(count + 1)}>
        Cliquez ici
        < /button>
    < /div>
  );
}
        </code></pre>
    <p class=\"mt-3 mb-3\">2. Optimiser le code suivant pour éviter de transmettre des propriétés inutiles à certains composants enfants.</p>
    <pre><code class=\"text-success\">
const ThemeContext = React.createContext('light');
class App extends React.Component {
    render() {
        return (
            < ThemeContext.Provider value=\"dark\">
            < Toolbar />
            < /ThemeContext.Provider>
    );
    }
}

function Toolbar() {  return (
    < div>
    < ThemedButton />
    < /div>
);
}

class ThemedButton extends React.Component {
    static contextType = ThemeContext;
    render() {
        return < Button theme={this.context} />;
            }
}
        </code></pre>
    <p class=\"mt-3 mb-3\">3. Quel Hook permet d'interagir avec le cycle de vie ? Écrivez un exemple </p>
    <p class=\"h1\">{ useState }</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("accueil");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 109,  219 => 108,  121 => 18,  111 => 17,  100 => 14,  90 => 13,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block stylesheets %}
    <style>
        .center{
            margin-right:40px;
        }
        .fa-exclamation-circle{
            font-size: 20px;
            color: orange;
        }
    </style>
{% endblock %}
{% block titre %}
    <p class=\"title mb-5\">ACCUEIL</p>
{% endblock %}

{% block body %}
    <div class=\"panel\">
        <button type=\"button\" class=\"btn btn-light btn-accueil\" onclick=\"location.href = '/projets';\" > <i class=\"far fa-paper-plane\"></i><p> Projets</p></button>
        <button type=\"button\" class=\"btn btn-light btn-accueil\" onclick=\"location.href = '/tâches'\"><i class=\"fas fa-check\"></i><p> Tâches</p></button>
        <button type=\"button\" class=\"btn btn-light btn-accueil\" onclick=\"location.href = '/parametres';\" ><i class=\"fas fa-cogs\"></i><p> Statuts</p></button>
        <button type=\"button\" class=\"btn btn-light btn-accueil\" onclick=\"location.href = '/enonce';\" ><i class=\"far fa-file-alt\"></i><p>Enoncé</p></button>
    </div>
    <hr/>
    <p class=\"h1 mt-5 mb-3\">Javascript</p>
    <p>1. Sélectionner la bonne déclaration pour chaque variable</p>
    <pre><code class=\"text-success\">
            var tab;
            for(let i = 0 ; i < 10 ; i++){
            tab.push(i) ;
            }
        </code></pre>
    <p class=\"mt-4 mb-3\">2. Trouver les bonnes déclarations d’objet</p>
    <pre><code class=\"text-success\">
            let objet = {};
            let  objet;
            let  objet = new Object();
        </code></pre>
    <p class=\"mt-4 mb-3\">3. Recherche Idefix </p>
    <pre><code class=\"text-success\">
             const personnages = [{id :1, label : \"Astérix\"}
\t\t    , {id :2, label : \"Obelix\"}
                    , {id :3, label : \"Bonnemine\"}
\t\t    , {id :4, label : \" Panoramix\"}
\t\t    , {id :5, label : \" Idefix\"}
                    , {id :6, label : \" Falbala\"}
\t\t    , {id :7, label : \" Agecanoix\"}
                    , {id :8, label : \" Falbala\"}
        </code></pre>
    <p class=\"mt-4 mb-3\">4. Supprimer le membre</p>
    <pre><code class=\"text-success\">
            {id :8, label : \"Falbala\"}
        </code></pre>
    <p class=\"mt-4 mb-3\">5. Ajouter le membre</p>
    <pre><code class=\"text-success\">
{id :8, label : \"Agecanomix\"}
        </code></pre>
    <p class=\"mt-4 mb-3\">6. Récupérer id et label de Bonnemine</p>
    <p class=\"mb-3\"><i class=\"fas fa-exclamation-circle\"></i> Voir console.log</p>
    <hr/>
    <p class=\"h2\">React</p>
    <p>1. Quel code offre le bon dénombrement ?</p>
    <pre><code class=\"text-success\">
import React, { useState } from 'react';
function Example() {
 const [count, setCount] = useState(0);
                        return (
    < div>
      < p>Vous avez cliqué {count} fois< /p>
      < button onClick={() => setCount(count + 1)}>
        Cliquez ici
        < /button>
    < /div>
  );
}
        </code></pre>
    <p class=\"mt-3 mb-3\">2. Optimiser le code suivant pour éviter de transmettre des propriétés inutiles à certains composants enfants.</p>
    <pre><code class=\"text-success\">
const ThemeContext = React.createContext('light');
class App extends React.Component {
    render() {
        return (
            < ThemeContext.Provider value=\"dark\">
            < Toolbar />
            < /ThemeContext.Provider>
    );
    }
}

function Toolbar() {  return (
    < div>
    < ThemedButton />
    < /div>
);
}

class ThemedButton extends React.Component {
    static contextType = ThemeContext;
    render() {
        return < Button theme={this.context} />;
            }
}
        </code></pre>
    <p class=\"mt-3 mb-3\">3. Quel Hook permet d'interagir avec le cycle de vie ? Écrivez un exemple </p>
    <p class=\"h1\">{ useState }</p>
{% endblock %}

{% block javascripts %}
    {{ encore_entry_script_tags('accueil') }}
{% endblock %}



", "accueil.html.twig", "/var/www/public/todoList-master/templates/accueil.html.twig");
    }
}
