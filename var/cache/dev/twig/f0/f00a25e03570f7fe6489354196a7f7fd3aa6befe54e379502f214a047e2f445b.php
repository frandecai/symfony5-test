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

/* admin/base.html.twig */
class __TwigTemplate_0cd65d3358d1219291202c1116f9d5dd5c9a7680929ea6769f1128a12be6eeb9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>

    ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 241
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "        <body class=\"hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">4
            <div class=\"wrapper\">

                <!-- Preloader -->
                <div class=\"preloader flex-column justify-content-center align-items-center\">
                <img class=\"animation__wobble\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
                </div>

                <!-- Navbar -->
                <nav class=\"main-header navbar navbar-expand navbar-dark\">
                <!-- Left navbar links -->
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
                    </li>
                    <li class=\"nav-item d-none d-sm-inline-block\">
                        <a href=\"index3.html\" class=\"nav-link\">Home</a>
                    </li>
                    <li class=\"nav-item d-none d-sm-inline-block\">
                        <a href=\"#\" class=\"nav-link\">Contact</a>
                    </li>
                    <li class=\"nav-item d-none d-sm-inline-block\">
                        <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_logout");
        echo "\" class=\"nav-link\">Logout</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class=\"navbar-nav ml-auto\">
                    <!-- Navbar Search -->
                    <li class=\"nav-item\">
                    <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
                        <i class=\"fas fa-search\"></i>
                    </a>
                    <div class=\"navbar-search-block\">
                        <form class=\"form-inline\">
                        <div class=\"input-group input-group-sm\">
                            <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                            <div class=\"input-group-append\">
                            <button class=\"btn btn-navbar\" type=\"submit\">
                                <i class=\"fas fa-search\"></i>
                            </button>
                            <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                                <i class=\"fas fa-times\"></i>
                            </button>
                            </div>
                        </div>
                        </form>
                    </div>
                    </li>

                    <!-- Messages Dropdown Menu -->
                    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"far fa-comments\"></i>
                        <span class=\"badge badge-danger navbar-badge\">3</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                        <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user1-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                            <div class=\"media-body\">
                            <h3 class=\"dropdown-item-title\">
                                Brad Diesel
                                <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                            </h3>
                            <p class=\"text-sm\">Call me whenever you can...</p>
                            <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user8-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                            <h3 class=\"dropdown-item-title\">
                                John Pierce
                                <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                            </h3>
                            <p class=\"text-sm\">I got your message bro</p>
                            <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                            <h3 class=\"dropdown-item-title\">
                                Nora Silvester
                                <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                            </h3>
                            <p class=\"text-sm\">The subject goes here</p>
                            <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
                    </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"far fa-bell\"></i>
                        <span class=\"badge badge-warning navbar-badge\">15</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                        <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                        <span class=\"float-right text-muted text-sm\">3 mins</span>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                        <span class=\"float-right text-muted text-sm\">12 hours</span>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-file mr-2\"></i> 3 new reports
                        <span class=\"float-right text-muted text-sm\">2 days</span>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
                    </div>
                    </li>
                    <li class=\"nav-item\">
                    <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
                        <i class=\"fas fa-expand-arrows-alt\"></i>
                    </a>
                    </li>
                    <li class=\"nav-item\">
                    <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
                        <i class=\"fas fa-th-large\"></i>
                    </a>
                    </li>
                </ul>
                </nav>
                <!-- /.navbar -->

                <!-- Main Sidebar Container -->
                <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
                <!-- Brand Logo -->
                <a href=\"index3.html\" class=\"brand-link\">
                    <img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
                    <span class=\"brand-text font-weight-light\">Symfony 5 - Admin</span>
                </a>

                <!-- Sidebar -->
                <div class=\"sidebar\">
                    <!-- Sidebar user panel (optional) -->
                    <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                    <div class=\"image\">
                        <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
                    </div>
                    <div class=\"info\">
                        <a href=\"#\" class=\"d-block\">Fran Torres</a>
                    </div>
                    </div>

                    <!-- SidebarSearch Form -->
                    <div class=\"form-inline\">
                    <div class=\"input-group\" data-widget=\"sidebar-search\">
                        <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                        <div class=\"input-group-append\">
                        <button class=\"btn btn-sidebar\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </button>
                        </div>
                    </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class=\"mt-2\">
                    <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        <li class=\"nav-header\">USERS & ROLES</li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_roles");
        echo "\" class=\"nav-link\">
                                <i class=\"nav-icon fas fa-users-cog\"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        echo "\" class=\"nav-link\">
                                <i class=\"nav-icon fas fa-users\"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
                </aside>

                ";
        // line 218
        $this->displayBlock('content', $context, $blocks);
        // line 220
        echo "
                <!-- Control Sidebar -->
                <aside class=\"control-sidebar control-sidebar-dark\">
                <!-- Control sidebar content goes here -->
                </aside>
                <!-- /.control-sidebar -->

                ";
        // line 227
        $this->displayBlock('footer', $context, $blocks);
        // line 236
        echo "                
            </div>
            <!-- ./wrapper -->º    
            ";
        // line 239
        $this->displayBlock('javascripts', $context, $blocks);
        // line 240
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 219
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 227
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 228
        echo "                    <!-- Main Footer -->
                    <footer class=\"main-footer\">
                    <strong>Copyright &copy; 2021 <a href=\"https://www.fjtorres.es\">fjtorres.es</a>.</strong>
                    All rights reserved.
                    <div class=\"float-right d-none d-sm-inline-block\">
                        <b>Version</b> 1.0.0
                    </div>
                    </footer>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 239
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  440 => 239,  422 => 228,  412 => 227,  402 => 219,  392 => 218,  382 => 240,  380 => 239,  375 => 236,  373 => 227,  364 => 220,  362 => 218,  347 => 206,  338 => 200,  309 => 174,  297 => 165,  233 => 104,  214 => 88,  195 => 72,  154 => 34,  134 => 17,  127 => 12,  117 => 11,  99 => 8,  81 => 7,  69 => 241,  67 => 11,  63 => 9,  61 => 8,  57 => 7,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>

    {% block body %}
        <body class=\"hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">4
            <div class=\"wrapper\">

                <!-- Preloader -->
                <div class=\"preloader flex-column justify-content-center align-items-center\">
                <img class=\"animation__wobble\" src=\"{{ asset('img/AdminLTELogo.png') }}\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
                </div>

                <!-- Navbar -->
                <nav class=\"main-header navbar navbar-expand navbar-dark\">
                <!-- Left navbar links -->
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
                    </li>
                    <li class=\"nav-item d-none d-sm-inline-block\">
                        <a href=\"index3.html\" class=\"nav-link\">Home</a>
                    </li>
                    <li class=\"nav-item d-none d-sm-inline-block\">
                        <a href=\"#\" class=\"nav-link\">Contact</a>
                    </li>
                    <li class=\"nav-item d-none d-sm-inline-block\">
                        <a href=\"{{ path('app_admin_logout') }}\" class=\"nav-link\">Logout</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class=\"navbar-nav ml-auto\">
                    <!-- Navbar Search -->
                    <li class=\"nav-item\">
                    <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
                        <i class=\"fas fa-search\"></i>
                    </a>
                    <div class=\"navbar-search-block\">
                        <form class=\"form-inline\">
                        <div class=\"input-group input-group-sm\">
                            <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                            <div class=\"input-group-append\">
                            <button class=\"btn btn-navbar\" type=\"submit\">
                                <i class=\"fas fa-search\"></i>
                            </button>
                            <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                                <i class=\"fas fa-times\"></i>
                            </button>
                            </div>
                        </div>
                        </form>
                    </div>
                    </li>

                    <!-- Messages Dropdown Menu -->
                    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"far fa-comments\"></i>
                        <span class=\"badge badge-danger navbar-badge\">3</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                        <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"{{ asset('img/user1-128x128.jpg') }}\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                            <div class=\"media-body\">
                            <h3 class=\"dropdown-item-title\">
                                Brad Diesel
                                <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                            </h3>
                            <p class=\"text-sm\">Call me whenever you can...</p>
                            <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"{{ asset('img/user8-128x128.jpg') }}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                            <h3 class=\"dropdown-item-title\">
                                John Pierce
                                <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                            </h3>
                            <p class=\"text-sm\">I got your message bro</p>
                            <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"{{ asset('img/user3-128x128.jpg') }}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                            <h3 class=\"dropdown-item-title\">
                                Nora Silvester
                                <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                            </h3>
                            <p class=\"text-sm\">The subject goes here</p>
                            <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
                    </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"far fa-bell\"></i>
                        <span class=\"badge badge-warning navbar-badge\">15</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                        <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                        <span class=\"float-right text-muted text-sm\">3 mins</span>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                        <span class=\"float-right text-muted text-sm\">12 hours</span>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-file mr-2\"></i> 3 new reports
                        <span class=\"float-right text-muted text-sm\">2 days</span>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
                    </div>
                    </li>
                    <li class=\"nav-item\">
                    <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
                        <i class=\"fas fa-expand-arrows-alt\"></i>
                    </a>
                    </li>
                    <li class=\"nav-item\">
                    <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
                        <i class=\"fas fa-th-large\"></i>
                    </a>
                    </li>
                </ul>
                </nav>
                <!-- /.navbar -->

                <!-- Main Sidebar Container -->
                <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
                <!-- Brand Logo -->
                <a href=\"index3.html\" class=\"brand-link\">
                    <img src=\"{{ asset('img/AdminLTELogo.png') }}\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
                    <span class=\"brand-text font-weight-light\">Symfony 5 - Admin</span>
                </a>

                <!-- Sidebar -->
                <div class=\"sidebar\">
                    <!-- Sidebar user panel (optional) -->
                    <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                    <div class=\"image\">
                        <img src=\"{{ asset('img/user2-160x160.jpg') }}\" class=\"img-circle elevation-2\" alt=\"User Image\">
                    </div>
                    <div class=\"info\">
                        <a href=\"#\" class=\"d-block\">Fran Torres</a>
                    </div>
                    </div>

                    <!-- SidebarSearch Form -->
                    <div class=\"form-inline\">
                    <div class=\"input-group\" data-widget=\"sidebar-search\">
                        <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                        <div class=\"input-group-append\">
                        <button class=\"btn btn-sidebar\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </button>
                        </div>
                    </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class=\"mt-2\">
                    <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        <li class=\"nav-header\">USERS & ROLES</li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('app_admin_roles') }}\" class=\"nav-link\">
                                <i class=\"nav-icon fas fa-users-cog\"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('app_admin_users') }}\" class=\"nav-link\">
                                <i class=\"nav-icon fas fa-users\"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
                </aside>

                {% block content %}
                {% endblock %}

                <!-- Control Sidebar -->
                <aside class=\"control-sidebar control-sidebar-dark\">
                <!-- Control sidebar content goes here -->
                </aside>
                <!-- /.control-sidebar -->

                {% block footer %}
                    <!-- Main Footer -->
                    <footer class=\"main-footer\">
                    <strong>Copyright &copy; 2021 <a href=\"https://www.fjtorres.es\">fjtorres.es</a>.</strong>
                    All rights reserved.
                    <div class=\"float-right d-none d-sm-inline-block\">
                        <b>Version</b> 1.0.0
                    </div>
                    </footer>
                {% endblock %}                
            </div>
            <!-- ./wrapper -->º    
            {% block javascripts %}{% endblock %}
        {% endblock %}
    </body>
</html>
", "admin/base.html.twig", "C:\\Users\\Usuario\\Documents\\DESARROLLOS\\symfony5-admin\\templates\\admin\\base.html.twig");
    }
}
