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

/* statement/statement-taches-index.html.twig */
class __TwigTemplate_3b6a97626e14ec21f649dec10318ced45306df9c756b0d582b6db15ee6ebf972 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statement/statement-taches-index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statement/statement-taches-index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "statement/statement-taches-index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        // line 4
        echo "    <a href=\"/\">Retour</a>/Enoncé
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
        echo "    <div class=\"container-statement\">
        <h1 class=\"text-info\">Symfony </h1>
        <h2>Pré requis</h2>
        <p>Environnement LAMP (PHP 7.4.3,
            Mysql 8.0.18,
            Apache 2.4.41),
            compte <a href=\"https://github.com/\" target=\"_blank\"> github</a>,
            <a href=\"https://nodejs.org/en/download/\" target=\"_blank\">Node</a> ,
            <a href=\"https://getcomposer.org/download/\" target=\"_blank\">Composer</a>
        </p>
        <h2>Installation</h2>
        <ul>
            <li>Importer le projet dans votre github</li>
            <li>En local Modifier la variable <strong>DATABASE_URL</strong> de votre fichier <strong>.env</strong>, nous conseillons de nommer votre base de donnée todoList</li>
            <li>Lancer la commande <code>composer install </code></li>
            <li>Lancer la commande <code>yarn install ou npm install</code></li>
            <li>Créer la base de donnée <code>php bin/console doctrine:database:create</code></li>
            <li>Récupérer la structure de la base de donnée <code>php bin/console doctrine:migrations:migrate</code> </li>
            <li>Récupérer les données <code>php bin/console doctrine:fixtures:load</code> </li>
            <li>Mettre en place votre virtualHost (voir <a href=\"#aide-virtual-host\">Aide</a>), si necessaire</li>
            <li>Démarrer le server node, vérifier la ligne 11 du package.json <code>yarn dev-server ou yarn build</code></li>
        </ul>
        <h2>Réalisation</h2>
        <ul>
            <li>Réaliser la page <strong>\"tâches\"</strong>.</li>
            <li>Cette page doit me permettre de <strong>lister, d'ajouter, d'éditer</strong> et de <strong>supprimer</strong> une tâche.</li>
            <li>Une tâche appartient à <strong>un projet</strong> et une tâche possède <strong>un statut</strong>.</li>
            <li>Laisser parler votre créativité </li>
        </ul>

        <div>
            <h1 class=\"text-info\">Javascript </h1>
            <ol>
                <li>Sélectionner la bonne déclaration pour chaque variable</li>
                <code><span class=\"token keyword\">var</span> i <span class=\"nt\">ou</span> <span class=\"token keyword\">const</span> i <span class=\"nt\">ou</span> <span class=\"token keyword\">let</span> i;</code>
                <code><span class=\"token keyword\">var</span> tab <span class=\"nt\">ou</span> <span class=\"token keyword\">const</span> tab <span class=\"nt\">ou</span> <span class=\"token keyword\">let</span> tab;</code>
                <pre><code><span class=\"token keyword\">for</span><span class=\"token punctuation\">(</span>i = 0 ; i < 10 ; i++<span class=\"token punctuation\">)</span><span class=\"token punctuation\">{</span>
tab.push(i) ;
<span class=\"token punctuation\">}</span></code></pre>
                <li>Trouver les bonnes déclarations d’objet</li>
                <pre>
                <code><span class=\"token keyword\">let </span> objet = <span class=\"token punctuation\">{};</span>
<span class=\"nt\">ou</span>
<span class=\"token keyword\">let </span> objet = <span class=\"token punctuation\">[];</span>
<span class=\"nt\">ou</span>
<span class=\"token keyword\">let </span> objet;
<span class=\"nt\">ou</span>
<span class=\"token keyword\">let </span> objet = <span class=\"token punctuation\">null;</span>
<span class=\"nt\">ou</span>
<span class=\"token keyword\">let </span> objet = <span class=\"token punctuation\">new</span> Object();</code></pre>
<li>Recherche Idefix </li>
                <pre><code> <span class=\"token keyword\">const</span> personnages = <span class=\"token keyword\">[</span><span class=\"token keyword\">{</span>id :1, label : \"Astérix\"<span class=\"token keyword\">}</span>
\t\t    , <span class=\"token keyword\">{</span>id :2, label : \"Obelix\"<span class=\"token keyword\">}</span>
                    , <span class=\"token keyword\">{</span>id :3, label : \"Bonnemine\"<span class=\"token keyword\">}</span>
\t\t    , <span class=\"token keyword\">{</span>id :4, label : \" Panoramix\"<span class=\"token keyword\">}</span>
\t\t    , <span class=\"token keyword\">{</span>id :5, label : \" Idefix\"<span class=\"token keyword\">}</span>
                    , <span class=\"token keyword\">{</span>id :6, label : \" Falbala\"<span class=\"token keyword\">}</span>
\t\t    , <span class=\"token keyword\">{</span>id :7, label : \" Agecanoix\"<span class=\"token keyword\">}</span>
                    , <span class=\"token keyword\">{</span>id :8, label : \" Falbala\"<span class=\"token keyword\">}</span></code></pre>
                <li>Supprimer le membre</li> <pre><code>{id :8, label : \"Falbala\"}</code></pre>
                <li>Ajouter le membre</li>
                <pre><code>{id :8, label : \"Agecanomix\"}</code></pre>
                <li>Récupérer id et label de Bonnemine </li>
            </ol>
            <h1 class=\"text-info\">React</h1>
            <ol>
            <li>Quel code offre le bon dénombrement ?</li>
            <div style=\"display: flex; flex-direction:row\">
            <div class=\"gatsby-highlight has-highlighted-lines\" style=\"width:33%;margin:1px;\" data-language=\"jsx\"><pre class=\"gatsby-code-jsx\"><code class=\"gatsby-code-jsx\"><span class=\"token keyword\">import</span> React<span class=\"token punctuation\">,</span> <span class=\"token punctuation\">{</span> useState <span class=\"token punctuation\">}</span> <span class=\"token keyword\">from</span> <span class=\"token string\">'react'</span><span class=\"token punctuation\">;</span>
<span class=\"token keyword\">function</span> <span class=\"token function\">Example</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token punctuation\">{</span>
 <span class=\"token keyword\">const</span> count <span class=\"token operator\">=</span> <span class=\"token number\">0</span></span><span class=\"token punctuation\">;</span></span>
  <span class=\"token keyword\">return</span> <span class=\"token punctuation\">(</span>
    <span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>div</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>p</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\">Vous avez cliqué </span><span class=\"token punctuation\">{</span>count<span class=\"token punctuation\">}</span><span class=\"token plain-text\"> fois</span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>p</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>button</span> <span class=\"token attr-name\">onClick</span><span class=\"token script language-javascript\"><span class=\"token script-punctuation punctuation\">=</span><span class=\"token punctuation\">{</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token operator\">=&gt;</span> <span class=\"token function\">count</span>= count <span class=\"token operator\">+</span> <span class=\"token number\">1</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">}</span></span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">        Cliquez ici</span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>button</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">    </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>div</span><span class=\"token punctuation\">&gt;</span></span>
  <span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span>
<span class=\"token punctuation\">}</span></code></pre></div>
            <!--deuxieme-->
            <div class=\"gatsby-highlight has-highlighted-lines\" style=\"width:33%;margin:1px;\" data-language=\"jsx\"><pre class=\"gatsby-code-jsx\"><code class=\"gatsby-code-jsx\"><span class=\"token keyword\">import</span> React<span class=\"token punctuation\">,</span> <span class=\"token punctuation\">{</span> useState <span class=\"token punctuation\">}</span> <span class=\"token keyword\">from</span> <span class=\"token string\">'react'</span><span class=\"token punctuation\">;</span>
<span class=\"token keyword\">function</span> <span class=\"token function\">Example</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token punctuation\">{</span>
 <span class=\"token keyword\">const</span> count <span class=\"token operator\">=</span> <span class=\"token number\">0</span></span><span class=\"token punctuation\">;</span></span>
                        <span class=\"token keyword\">return</span> <span class=\"token punctuation\">(</span>
    <span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>div</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>p</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\">Vous avez cliqué </span><span class=\"token punctuation\">{</span>count<span class=\"token punctuation\">}</span><span class=\"token plain-text\"> fois</span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>p</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>button</span> <span class=\"token attr-name\">onClick</span><span class=\"token script language-javascript\"><span class=\"token script-punctuation punctuation\">=</span><span class=\"token punctuation\">{</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token operator\">=&gt;</span> <span class=\"token function\">count++</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">}</span></span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">        Cliquez ici</span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>button</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">    </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>div</span><span class=\"token punctuation\">&gt;</span></span>
  <span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span>
<span class=\"token punctuation\">}</span></code></pre></div>
            <!--troisieme-->
            <div class=\"gatsby-highlight has-highlighted-lines\" style=\"width:33%;margin:1px;\" data-language=\"jsx\"><pre class=\"gatsby-code-jsx\"><code class=\"gatsby-code-jsx\"><span class=\"token keyword\">import</span> React<span class=\"token punctuation\">,</span> <span class=\"token punctuation\">{</span> useState <span class=\"token punctuation\">}</span> <span class=\"token keyword\">from</span> <span class=\"token string\">'react'</span><span class=\"token punctuation\">;</span>
<span class=\"token keyword\">function</span> <span class=\"token function\">Example</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token punctuation\">{</span>
 <span class=\"token keyword\">const</span> <span class=\"token punctuation\">[</span>count<span class=\"token punctuation\">,</span> setCount<span class=\"token punctuation\">]</span> <span class=\"token operator\">=</span> <span class=\"token function\">useState</span><span class=\"token punctuation\">(</span><span class=\"token number\">0</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span></span>
                        <span class=\"token keyword\">return</span> <span class=\"token punctuation\">(</span>
    <span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>div</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>p</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\">Vous avez cliqué </span><span class=\"token punctuation\">{</span>count<span class=\"token punctuation\">}</span><span class=\"token plain-text\"> fois</span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>p</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>button</span> <span class=\"token attr-name\">onClick</span><span class=\"token script language-javascript\"><span class=\"token script-punctuation punctuation\">=</span><span class=\"token punctuation\">{</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token operator\">=&gt;</span> <span class=\"token function\">setCount</span><span class=\"token punctuation\">(</span>count <span class=\"token operator\">+</span> <span class=\"token number\">1</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">}</span></span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">        Cliquez ici</span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>button</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">    </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>div</span><span class=\"token punctuation\">&gt;</span></span>
  <span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span>
<span class=\"token punctuation\">}</span></code></pre></div>
</div>
            <li>Optimiser le code suivant pour éviter de transmettre des propriétés inutiles à certains composants enfants.</li>
            <pre class=\"gatsby-code-jsx\"><code><span class=\"token keyword\">class</span> <span class=\"token class-name\">App</span> <span class=\"token keyword\">extends</span> <span class=\"token class-name\">React<span class=\"token punctuation\">.</span>Component</span> <span class=\"token punctuation\">{</span>
  <span class=\"token function\">render</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token punctuation\">{</span>
    <span class=\"token keyword\">return</span> <span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span><span class=\"token class-name\">Toolbar</span></span> <span class=\"token attr-name\">theme</span><span class=\"token attr-value\"><span class=\"token punctuation\">=</span><span class=\"token punctuation\">\"</span>dark<span class=\"token punctuation\">\"</span></span> <span class=\"token punctuation\">/&gt;</span></span><span class=\"token punctuation\">;</span>
  <span class=\"token punctuation\">}</span>
<span class=\"token punctuation\">}</span>

<span class=\"token keyword\">function</span> <span class=\"token function\">Toolbar</span><span class=\"token punctuation\">(</span><span class=\"token parameter\">props</span><span class=\"token punctuation\">)</span> <span class=\"token punctuation\">{</span>
    <span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>div</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"gatsby-highlight-code-line\"><span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span><span class=\"token class-name\">ThemedButton</span></span> <span class=\"token attr-name\">theme</span><span class=\"token script language-javascript\"><span class=\"token script-punctuation punctuation\">=</span><span class=\"token punctuation\">{</span>props<span class=\"token punctuation\">.</span>theme<span class=\"token punctuation\">}</span></span> <span class=\"token punctuation\">/&gt;</span></span><span class=\"token plain-text\"></span></span><span class=\"token plain-text\">    </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>div</span><span class=\"token punctuation\">&gt;</span></span>
  <span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span>
<span class=\"token punctuation\">}</span>

<span class=\"token keyword\">class</span> <span class=\"token class-name\">ThemedButton</span> <span class=\"token keyword\">extends</span> <span class=\"token class-name\">React<span class=\"token punctuation\">.</span>Component</span> <span class=\"token punctuation\">{</span>
  <span class=\"token function\">render</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token punctuation\">{</span>
    <span class=\"token keyword\">return</span> <span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span><span class=\"token class-name\">Button</span></span> <span class=\"token attr-name\">theme</span><span class=\"token script language-javascript\"><span class=\"token script-punctuation punctuation\">=</span><span class=\"token punctuation\">{</span><span class=\"token keyword\">this</span><span class=\"token punctuation\">.</span>props<span class=\"token punctuation\">.</span>theme<span class=\"token punctuation\">}</span></span> <span class=\"token punctuation\">/&gt;</span></span><span class=\"token punctuation\">;</span>
  <span class=\"token punctuation\">}</span>
<span class=\"token punctuation\">}</span></code></pre>
                <li>Quel Hook permet d'interagir avec le cycle de vie ? Écrivez un exemple </li>
            </ol>
    </div>
        <div>
            <h1 class=\"text-info\">Aide </h1>
            <h2 id=\"aide-virtual-host\">Aide virtual host:</h2>

            C:\\Windows\\System32\\drivers\\etc\\hosts:
            <pre>
                <code>127.0.0.1 todo-list
::1 todo-list</code>
</pre>
            httpd-vhosts <a href=\"https://symfony.com/doc/current/setup/web_server_configuration.html\" target=\"_blank\">documentation symfony</a>:
            <pre><code><span></span><span class=\"nt\">&lt;VirtualHost</span> <span class=\"s\">*:80</span><span class=\"nt\">&gt;</span>
    <span class=\"nb\">ServerName</span> <span class=\"sx\">todo-list</span>
    <span class=\"nb\">DocumentRoot</span> <span class=\"sx\">/var/www/project/public</span>
    <span class=\"nt\">&lt;Directory</span> <span class=\"s\">/var/www/project/public</span><span class=\"nt\">&gt;</span>
        <span class=\"nb\">Options +Indexes +Includes +FollowSymLinks +MultiViews</span>
                    <span class=\"nb\">AllowOverride</span> <span class=\"k\">All</span>
                    <span class=\"nb\">Require local</span>
    <span class=\"nt\">&lt;/Directory&gt;</span>
<span class=\"nt\">&lt;/VirtualHost&gt;</span>
                    </code>
</pre>
            <p class=\"text-danger\">Rédémarrer le serveur web</p>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 162
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 163
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("statement");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "statement/statement-taches-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 163,  253 => 162,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block titre %}
    <a href=\"/\">Retour</a>/Enoncé
{% endblock %}

{% block body %}
    <div class=\"container-statement\">
        <h1 class=\"text-info\">Symfony </h1>
        <h2>Pré requis</h2>
        <p>Environnement LAMP (PHP 7.4.3,
            Mysql 8.0.18,
            Apache 2.4.41),
            compte <a href=\"https://github.com/\" target=\"_blank\"> github</a>,
            <a href=\"https://nodejs.org/en/download/\" target=\"_blank\">Node</a> ,
            <a href=\"https://getcomposer.org/download/\" target=\"_blank\">Composer</a>
        </p>
        <h2>Installation</h2>
        <ul>
            <li>Importer le projet dans votre github</li>
            <li>En local Modifier la variable <strong>DATABASE_URL</strong> de votre fichier <strong>.env</strong>, nous conseillons de nommer votre base de donnée todoList</li>
            <li>Lancer la commande <code>composer install </code></li>
            <li>Lancer la commande <code>yarn install ou npm install</code></li>
            <li>Créer la base de donnée <code>php bin/console doctrine:database:create</code></li>
            <li>Récupérer la structure de la base de donnée <code>php bin/console doctrine:migrations:migrate</code> </li>
            <li>Récupérer les données <code>php bin/console doctrine:fixtures:load</code> </li>
            <li>Mettre en place votre virtualHost (voir <a href=\"#aide-virtual-host\">Aide</a>), si necessaire</li>
            <li>Démarrer le server node, vérifier la ligne 11 du package.json <code>yarn dev-server ou yarn build</code></li>
        </ul>
        <h2>Réalisation</h2>
        <ul>
            <li>Réaliser la page <strong>\"tâches\"</strong>.</li>
            <li>Cette page doit me permettre de <strong>lister, d'ajouter, d'éditer</strong> et de <strong>supprimer</strong> une tâche.</li>
            <li>Une tâche appartient à <strong>un projet</strong> et une tâche possède <strong>un statut</strong>.</li>
            <li>Laisser parler votre créativité </li>
        </ul>

        <div>
            <h1 class=\"text-info\">Javascript </h1>
            <ol>
                <li>Sélectionner la bonne déclaration pour chaque variable</li>
                <code><span class=\"token keyword\">var</span> i <span class=\"nt\">ou</span> <span class=\"token keyword\">const</span> i <span class=\"nt\">ou</span> <span class=\"token keyword\">let</span> i;</code>
                <code><span class=\"token keyword\">var</span> tab <span class=\"nt\">ou</span> <span class=\"token keyword\">const</span> tab <span class=\"nt\">ou</span> <span class=\"token keyword\">let</span> tab;</code>
                <pre><code><span class=\"token keyword\">for</span><span class=\"token punctuation\">(</span>i = 0 ; i < 10 ; i++<span class=\"token punctuation\">)</span><span class=\"token punctuation\">{</span>
tab.push(i) ;
<span class=\"token punctuation\">}</span></code></pre>
                <li>Trouver les bonnes déclarations d’objet</li>
                <pre>
                <code><span class=\"token keyword\">let </span> objet = <span class=\"token punctuation\">{};</span>
<span class=\"nt\">ou</span>
<span class=\"token keyword\">let </span> objet = <span class=\"token punctuation\">[];</span>
<span class=\"nt\">ou</span>
<span class=\"token keyword\">let </span> objet;
<span class=\"nt\">ou</span>
<span class=\"token keyword\">let </span> objet = <span class=\"token punctuation\">null;</span>
<span class=\"nt\">ou</span>
<span class=\"token keyword\">let </span> objet = <span class=\"token punctuation\">new</span> Object();</code></pre>
<li>Recherche Idefix </li>
                <pre><code> <span class=\"token keyword\">const</span> personnages = <span class=\"token keyword\">[</span><span class=\"token keyword\">{</span>id :1, label : \"Astérix\"<span class=\"token keyword\">}</span>
\t\t    , <span class=\"token keyword\">{</span>id :2, label : \"Obelix\"<span class=\"token keyword\">}</span>
                    , <span class=\"token keyword\">{</span>id :3, label : \"Bonnemine\"<span class=\"token keyword\">}</span>
\t\t    , <span class=\"token keyword\">{</span>id :4, label : \" Panoramix\"<span class=\"token keyword\">}</span>
\t\t    , <span class=\"token keyword\">{</span>id :5, label : \" Idefix\"<span class=\"token keyword\">}</span>
                    , <span class=\"token keyword\">{</span>id :6, label : \" Falbala\"<span class=\"token keyword\">}</span>
\t\t    , <span class=\"token keyword\">{</span>id :7, label : \" Agecanoix\"<span class=\"token keyword\">}</span>
                    , <span class=\"token keyword\">{</span>id :8, label : \" Falbala\"<span class=\"token keyword\">}</span></code></pre>
                <li>Supprimer le membre</li> <pre><code>{id :8, label : \"Falbala\"}</code></pre>
                <li>Ajouter le membre</li>
                <pre><code>{id :8, label : \"Agecanomix\"}</code></pre>
                <li>Récupérer id et label de Bonnemine </li>
            </ol>
            <h1 class=\"text-info\">React</h1>
            <ol>
            <li>Quel code offre le bon dénombrement ?</li>
            <div style=\"display: flex; flex-direction:row\">
            <div class=\"gatsby-highlight has-highlighted-lines\" style=\"width:33%;margin:1px;\" data-language=\"jsx\"><pre class=\"gatsby-code-jsx\"><code class=\"gatsby-code-jsx\"><span class=\"token keyword\">import</span> React<span class=\"token punctuation\">,</span> <span class=\"token punctuation\">{</span> useState <span class=\"token punctuation\">}</span> <span class=\"token keyword\">from</span> <span class=\"token string\">'react'</span><span class=\"token punctuation\">;</span>
<span class=\"token keyword\">function</span> <span class=\"token function\">Example</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token punctuation\">{</span>
 <span class=\"token keyword\">const</span> count <span class=\"token operator\">=</span> <span class=\"token number\">0</span></span><span class=\"token punctuation\">;</span></span>
  <span class=\"token keyword\">return</span> <span class=\"token punctuation\">(</span>
    <span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>div</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>p</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\">Vous avez cliqué </span><span class=\"token punctuation\">{</span>count<span class=\"token punctuation\">}</span><span class=\"token plain-text\"> fois</span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>p</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>button</span> <span class=\"token attr-name\">onClick</span><span class=\"token script language-javascript\"><span class=\"token script-punctuation punctuation\">=</span><span class=\"token punctuation\">{</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token operator\">=&gt;</span> <span class=\"token function\">count</span>= count <span class=\"token operator\">+</span> <span class=\"token number\">1</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">}</span></span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">        Cliquez ici</span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>button</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">    </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>div</span><span class=\"token punctuation\">&gt;</span></span>
  <span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span>
<span class=\"token punctuation\">}</span></code></pre></div>
            <!--deuxieme-->
            <div class=\"gatsby-highlight has-highlighted-lines\" style=\"width:33%;margin:1px;\" data-language=\"jsx\"><pre class=\"gatsby-code-jsx\"><code class=\"gatsby-code-jsx\"><span class=\"token keyword\">import</span> React<span class=\"token punctuation\">,</span> <span class=\"token punctuation\">{</span> useState <span class=\"token punctuation\">}</span> <span class=\"token keyword\">from</span> <span class=\"token string\">'react'</span><span class=\"token punctuation\">;</span>
<span class=\"token keyword\">function</span> <span class=\"token function\">Example</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token punctuation\">{</span>
 <span class=\"token keyword\">const</span> count <span class=\"token operator\">=</span> <span class=\"token number\">0</span></span><span class=\"token punctuation\">;</span></span>
                        <span class=\"token keyword\">return</span> <span class=\"token punctuation\">(</span>
    <span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>div</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>p</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\">Vous avez cliqué </span><span class=\"token punctuation\">{</span>count<span class=\"token punctuation\">}</span><span class=\"token plain-text\"> fois</span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>p</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>button</span> <span class=\"token attr-name\">onClick</span><span class=\"token script language-javascript\"><span class=\"token script-punctuation punctuation\">=</span><span class=\"token punctuation\">{</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token operator\">=&gt;</span> <span class=\"token function\">count++</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">}</span></span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">        Cliquez ici</span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>button</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">    </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>div</span><span class=\"token punctuation\">&gt;</span></span>
  <span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span>
<span class=\"token punctuation\">}</span></code></pre></div>
            <!--troisieme-->
            <div class=\"gatsby-highlight has-highlighted-lines\" style=\"width:33%;margin:1px;\" data-language=\"jsx\"><pre class=\"gatsby-code-jsx\"><code class=\"gatsby-code-jsx\"><span class=\"token keyword\">import</span> React<span class=\"token punctuation\">,</span> <span class=\"token punctuation\">{</span> useState <span class=\"token punctuation\">}</span> <span class=\"token keyword\">from</span> <span class=\"token string\">'react'</span><span class=\"token punctuation\">;</span>
<span class=\"token keyword\">function</span> <span class=\"token function\">Example</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token punctuation\">{</span>
 <span class=\"token keyword\">const</span> <span class=\"token punctuation\">[</span>count<span class=\"token punctuation\">,</span> setCount<span class=\"token punctuation\">]</span> <span class=\"token operator\">=</span> <span class=\"token function\">useState</span><span class=\"token punctuation\">(</span><span class=\"token number\">0</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span></span>
                        <span class=\"token keyword\">return</span> <span class=\"token punctuation\">(</span>
    <span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>div</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>p</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\">Vous avez cliqué </span><span class=\"token punctuation\">{</span>count<span class=\"token punctuation\">}</span><span class=\"token plain-text\"> fois</span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>p</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>button</span> <span class=\"token attr-name\">onClick</span><span class=\"token script language-javascript\"><span class=\"token script-punctuation punctuation\">=</span><span class=\"token punctuation\">{</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token operator\">=&gt;</span> <span class=\"token function\">setCount</span><span class=\"token punctuation\">(</span>count <span class=\"token operator\">+</span> <span class=\"token number\">1</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">}</span></span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">        Cliquez ici</span>
<span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>button</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"token plain-text\">    </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>div</span><span class=\"token punctuation\">&gt;</span></span>
  <span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span>
<span class=\"token punctuation\">}</span></code></pre></div>
</div>
            <li>Optimiser le code suivant pour éviter de transmettre des propriétés inutiles à certains composants enfants.</li>
            <pre class=\"gatsby-code-jsx\"><code><span class=\"token keyword\">class</span> <span class=\"token class-name\">App</span> <span class=\"token keyword\">extends</span> <span class=\"token class-name\">React<span class=\"token punctuation\">.</span>Component</span> <span class=\"token punctuation\">{</span>
  <span class=\"token function\">render</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token punctuation\">{</span>
    <span class=\"token keyword\">return</span> <span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span><span class=\"token class-name\">Toolbar</span></span> <span class=\"token attr-name\">theme</span><span class=\"token attr-value\"><span class=\"token punctuation\">=</span><span class=\"token punctuation\">\"</span>dark<span class=\"token punctuation\">\"</span></span> <span class=\"token punctuation\">/&gt;</span></span><span class=\"token punctuation\">;</span>
  <span class=\"token punctuation\">}</span>
<span class=\"token punctuation\">}</span>

<span class=\"token keyword\">function</span> <span class=\"token function\">Toolbar</span><span class=\"token punctuation\">(</span><span class=\"token parameter\">props</span><span class=\"token punctuation\">)</span> <span class=\"token punctuation\">{</span>
    <span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>div</span><span class=\"token punctuation\">&gt;</span></span><span class=\"token plain-text\"></span>
<span class=\"gatsby-highlight-code-line\"><span class=\"token plain-text\">      </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span><span class=\"token class-name\">ThemedButton</span></span> <span class=\"token attr-name\">theme</span><span class=\"token script language-javascript\"><span class=\"token script-punctuation punctuation\">=</span><span class=\"token punctuation\">{</span>props<span class=\"token punctuation\">.</span>theme<span class=\"token punctuation\">}</span></span> <span class=\"token punctuation\">/&gt;</span></span><span class=\"token plain-text\"></span></span><span class=\"token plain-text\">    </span><span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>div</span><span class=\"token punctuation\">&gt;</span></span>
  <span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span>
<span class=\"token punctuation\">}</span>

<span class=\"token keyword\">class</span> <span class=\"token class-name\">ThemedButton</span> <span class=\"token keyword\">extends</span> <span class=\"token class-name\">React<span class=\"token punctuation\">.</span>Component</span> <span class=\"token punctuation\">{</span>
  <span class=\"token function\">render</span><span class=\"token punctuation\">(</span><span class=\"token punctuation\">)</span> <span class=\"token punctuation\">{</span>
    <span class=\"token keyword\">return</span> <span class=\"token tag\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span><span class=\"token class-name\">Button</span></span> <span class=\"token attr-name\">theme</span><span class=\"token script language-javascript\"><span class=\"token script-punctuation punctuation\">=</span><span class=\"token punctuation\">{</span><span class=\"token keyword\">this</span><span class=\"token punctuation\">.</span>props<span class=\"token punctuation\">.</span>theme<span class=\"token punctuation\">}</span></span> <span class=\"token punctuation\">/&gt;</span></span><span class=\"token punctuation\">;</span>
  <span class=\"token punctuation\">}</span>
<span class=\"token punctuation\">}</span></code></pre>
                <li>Quel Hook permet d'interagir avec le cycle de vie ? Écrivez un exemple </li>
            </ol>
    </div>
        <div>
            <h1 class=\"text-info\">Aide </h1>
            <h2 id=\"aide-virtual-host\">Aide virtual host:</h2>

            C:\\Windows\\System32\\drivers\\etc\\hosts:
            <pre>
                <code>127.0.0.1 todo-list
::1 todo-list</code>
</pre>
            httpd-vhosts <a href=\"https://symfony.com/doc/current/setup/web_server_configuration.html\" target=\"_blank\">documentation symfony</a>:
            <pre><code><span></span><span class=\"nt\">&lt;VirtualHost</span> <span class=\"s\">*:80</span><span class=\"nt\">&gt;</span>
    <span class=\"nb\">ServerName</span> <span class=\"sx\">todo-list</span>
    <span class=\"nb\">DocumentRoot</span> <span class=\"sx\">/var/www/project/public</span>
    <span class=\"nt\">&lt;Directory</span> <span class=\"s\">/var/www/project/public</span><span class=\"nt\">&gt;</span>
        <span class=\"nb\">Options +Indexes +Includes +FollowSymLinks +MultiViews</span>
                    <span class=\"nb\">AllowOverride</span> <span class=\"k\">All</span>
                    <span class=\"nb\">Require local</span>
    <span class=\"nt\">&lt;/Directory&gt;</span>
<span class=\"nt\">&lt;/VirtualHost&gt;</span>
                    </code>
</pre>
            <p class=\"text-danger\">Rédémarrer le serveur web</p>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ encore_entry_script_tags('statement') }}
{% endblock %}
", "statement/statement-taches-index.html.twig", "/var/www/public/todoList-master/templates/statement/statement-taches-index.html.twig");
    }
}
