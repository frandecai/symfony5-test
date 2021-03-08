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

/* admin/login.html.twig */
class __TwigTemplate_5406a35be065c90420be63f3d65babf5f0edab4ca7c6e731b9c81788854a48c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/login.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "admin/login.html.twig", 1);
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

        echo "Test Symfony 5 - Login";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <!-- Google Font: Source Sans Pro -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
    <!-- icheck bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/adminlte.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <body class=\"hold-transition login-page\">
        <div class=\"login-box\">
            <!-- /.login-logo -->
            <div class=\"card card-outline card-primary\">
                <div class=\"card-header text-center\">
                    <a href=\"../../index2.html\" class=\"h1\"><b>Admin</b><br/>Test-Symfony 5</a>
                </div>
                <div class=\"card-body\">
                    <p class=\"login-box-msg\">Sign in to start your session</p>

                    <form method=\"post\">
                    <div class=\"input-group mb-3\">
                        ";
        // line 29
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "messageKey", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "messageData", [], "any", false, false, false, 30), "security"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 32
        echo "                        <input type=\"email\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\" id=\"inputEmail\" name=\"email\" placeholder=\"Email\" required autofocus>
                        <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-envelope\"></span>
                        </div>
                        </div>
                    </div>
                    <div class=\"input-group mb-3\">
                        <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"password\" class=\"form-control\" placeholder=\"Password\" required>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                        <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-lock\"></span>
                        </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-8\">
                        <div class=\"icheck-primary\">
                            <input type=\"checkbox\" id=\"remember\">
                            <label for=\"remember\">
                            Remember Me
                            </label>
                        </div>
                        </div>
                        <!-- /.col -->
                        <div class=\"col-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block\">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    </form>
                    <p class=\"mb-1\">
                        <a href=\"forgot-password.html\">I forgot my password</a>
                    </p>
                    <p class=\"mb-0\">
                        <a href=\"register.html\" class=\"text-center\">Register a new membership</a>
                    </p>
                </div>
            </div>
        </div>

        ";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "            <!-- jQuery -->
            <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap 4 -->
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
            <!-- AdminLTE App -->
            <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 80,  229 => 78,  224 => 76,  221 => 75,  211 => 74,  200 => 82,  198 => 74,  162 => 41,  149 => 32,  143 => 30,  141 => 29,  127 => 17,  117 => 16,  105 => 13,  100 => 11,  95 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block title %}Test Symfony 5 - Login{% endblock %}

{% block stylesheets %}
    <!-- Google Font: Source Sans Pro -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/fontawesome-free/css/all.min.css') }}\">
    <!-- icheck bootstrap -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/adminlte.min.css') }}\">
{% endblock %}

{% block body %}
    <body class=\"hold-transition login-page\">
        <div class=\"login-box\">
            <!-- /.login-logo -->
            <div class=\"card card-outline card-primary\">
                <div class=\"card-header text-center\">
                    <a href=\"../../index2.html\" class=\"h1\"><b>Admin</b><br/>Test-Symfony 5</a>
                </div>
                <div class=\"card-body\">
                    <p class=\"login-box-msg\">Sign in to start your session</p>

                    <form method=\"post\">
                    <div class=\"input-group mb-3\">
                        {% if error %}
                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                        {% endif %}
                        <input type=\"email\" class=\"form-control\" value=\"{{ last_username }}\" id=\"inputEmail\" name=\"email\" placeholder=\"Email\" required autofocus>
                        <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-envelope\"></span>
                        </div>
                        </div>
                    </div>
                    <div class=\"input-group mb-3\">
                        <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"password\" class=\"form-control\" placeholder=\"Password\" required>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                        <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-lock\"></span>
                        </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-8\">
                        <div class=\"icheck-primary\">
                            <input type=\"checkbox\" id=\"remember\">
                            <label for=\"remember\">
                            Remember Me
                            </label>
                        </div>
                        </div>
                        <!-- /.col -->
                        <div class=\"col-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block\">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    </form>
                    <p class=\"mb-1\">
                        <a href=\"forgot-password.html\">I forgot my password</a>
                    </p>
                    <p class=\"mb-0\">
                        <a href=\"register.html\" class=\"text-center\">Register a new membership</a>
                    </p>
                </div>
            </div>
        </div>

        {% block javascripts %}
            <!-- jQuery -->
            <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
            <!-- Bootstrap 4 -->
            <script src=\"{{ asset('js/bootstrap.bundle.min.js') }}\"></script>
            <!-- AdminLTE App -->
            <script src=\"{{ asset('js/adminlte.min.js') }}\"></script>
        {% endblock %}
    </body>
{% endblock %}", "admin/login.html.twig", "C:\\Users\\Usuario\\Documents\\DESARROLLOS\\symfony5-test\\templates\\admin\\login.html.twig");
    }
}
