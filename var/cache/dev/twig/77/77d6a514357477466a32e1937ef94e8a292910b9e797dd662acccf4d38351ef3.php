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

/* admin/roles.html.twig */
class __TwigTemplate_ef523924bb9236a5de60b47de5b30de54f48bad473b7d9fbbe49d7abb77340cf extends Template
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
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/roles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/roles.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/roles.html.twig", 1);
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

        echo "Test Symfony 5 - Roles";
        
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
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/datatables/datatables.bootstrap5.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/adminlte.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                <h1 class=\"m-0\">Roles</h1>
                </div><!-- /.col -->
                <div class=\"col-sm-6\">
                <ol class=\"breadcrumb float-sm-right\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_index");
        echo "\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Roles</li>
                </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
            <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                <!-- Info boxes -->
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <table id=\"roles\" class=\"table table-responsive-md table-bordered table-hover\">
                                    <thead class=\"thead-light\">
                                        <tr>
                                            <th scope=\"col\">Name</th>
                                            <th scope=\"col\">Description</th>
                                            <th scope=\"col\">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 56
            echo "                                            <tr>
                                                <td id=\"td_role_name_";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "\">
                                                    <span id=\"span_role_name_";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 58));
            echo "</span>
                                                    <input id=\"input_role_name_";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 59));
            echo "\" size=\"20\" style=\"display: none\">
                                                </td>
                                                <td id=\"td_role_description_";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "\">
                                                    <span id=\"span_role_description_";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "description", [], "any", false, false, false, 62));
            echo "</span>
                                                    <input id=\"input_role_description_";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "description", [], "any", false, false, false, 63));
            echo "\" size=\"50\" style=\"display: none\">
                                                </td>
                                                <td class=\"text-center\">
                                                    <div id=\"edit_role_";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\">
                                                        <a href=\"#\" onClick='return edit(";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 67), "html", null, true);
            echo ");' class=\"col text-left text-success\" title=\"Edit values\">
                                                            <i class=\"fas fa-2x fa-pencil-alt\"></i>
                                                        </a>
                                                        <a href=\"#\" id=\"a_remove_role_name_";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\" onClick=\"return remove(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 70), "html", null, true);
            echo ");\" class=\"col text-right text-danger\" title=\"Remove role\">
                                                            <i class=\"fas fa-2x fa-trash-alt\"></i>
                                                        </a>
                                                    </div>
                                                    <div id=\"save_role_";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo "\" style=\"display: none\">
                                                        <a href=\"#\" id=\"a_save_role_name_";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 75), "html", null, true);
            echo "\" onClick=\"return save(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 75), "html", null, true);
            echo ");\" class=\"col text-left text-success\" title=\"Save changes\">
                                                            <i class=\"fas fa-2x fa-check\"></i>
                                                        </a>
                                                        <a href=\"#\" id=\"a_discard_role_name_";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 78), "html", null, true);
            echo "\" onClick=\"return discard(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 78), "html", null, true);
            echo ");\" class=\"col text-right text-danger\" title=\"Discard changes\">
                                                            <i class=\"fas fa-2x fa-times\"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>    
                </div>
            </div>
        </section>
    </div>

    <!-- Info modal box -->
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Modal title</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
            <p>Placeholder text for this demonstration of a vertically centered modal dialog.</p>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
        </div>
        </div>
    </div>
    <!-- /.Info modal box -->    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 4 -->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dataTables/dataTables.bootstrap5.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Page specific script -->
    <script>
        \$(function () {
            \$('#roles').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });
        });
        

        function edit(id)
        {
            var spanName = document.getElementById(\"span_role_name_\" + id);
            var inputName = document.getElementById(\"input_role_name_\" + id);
            var spanDescription = document.getElementById(\"span_role_description_\" + id);
            var inputDescription = document.getElementById(\"input_role_description_\" + id);
            var edit = document.getElementById(\"edit_role_\" + id);
            var save = document.getElementById(\"save_role_\" + id);

            spanName.style.display = \"none\";
            inputName.style.display = \"block\";
            spanDescription.style.display = \"none\";
            inputDescription.style.display = \"block\";
            edit.style.display = \"none\";
            save.style.display = \"block\";
        }


        function remove(id)
        {
            \$.ajax({
                type: 'POST',
                url: \"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_role_remove");
        echo "\",
                data: { 
                    'id': id,
                },
                success: function(result) {
                    \$(\"#div1\").html(result);
                }
            });
        }


        function save(id)
        {
            var tdName = document.getElementById(\"td_role_name_\" + id);
            var tdDescription = document.getElementById(\"td_role_description_\" + id);
            var inputName = document.getElementById(\"input_role_name_\" + id);
            var inputDescription = document.getElementById(\"input_role_description_\" + id);
            var edit = document.getElementById(\"edit_role_\" + id);
            var save = document.getElementById(\"save_role_\" + id);

            tdName.classList.add(\"text-center\");
            tdDescription.classList.add(\"text-center\");
            tdName.innerHTML  = '<i class=\"fas fa-2x fa-sync fa-spin\"></i>';
            tdDescription.innerHTML  = '<i class=\"fas fa-2x fa-sync fa-spin\"></i>';
            save.innerHTML = '<i class=\"fas fa-2x fa-sync fa-spin\"></i>';

            \$.ajax({
                type: 'POST',
                url: \"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_role_save");
        echo "\",
                data: { 
                    'id': id, 
                    'name': inputName.value,
                    'description': inputDescription.value
                },
                success: function(response) {
                    tdName.classList.remove(\"text-center\");
                    tdName.innerHTML = '<span id=\"span_role_name_' + id + '\">' + response.name + '</span>' +
                                       '<input id=\"input_role_name_' + id + '\" value=\"' + response.name + '\" size=\"20\" style=\"display: none\">';
                    tdDescription.classList.remove(\"text-center\");
                    tdDescription.innerHTML = '<span id=\"span_role_description_' + id + '\">' + response.description + '</span>' +
                                              '<input id=\"input_role_description_' + id + '\" value=\"' + response.description + '\" size=\"20\" style=\"display: none\">';
                    save.innerHTML = '<a href=\"#\" id=\"a_save_role_name_' + id + '\" onClick=\"return save(' + id + ');\" class=\"col text-left text-success\" title=\"Save changes\">'+
                                     '<i class=\"fas fa-2x fa-check\"></i>' + 
                                     '</a>' +
                                     '<a href=\"#\" id=\"a_discard_role_name_' + id + '\" onClick=\"return discard(' + id + ');\" class=\"col text-right text-danger\" title=\"Discard changes\">' +
                                     '<i class=\"fas fa-2x fa-times\"></i>' + 
                                     '</a>';

                    edit.style.display = \"block\";
                    save.style.display = \"none\"
                }
            });
        }


        function discard(id)
        {
            var spanName = document.getElementById(\"span_role_name_\" + id);
            var inputName = document.getElementById(\"input_role_name_\" + id);
            var spanDescription = document.getElementById(\"span_role_description_\" + id);
            var inputDescription = document.getElementById(\"input_role_description_\" + id);
            var edit =  document.getElementById(\"edit_role_\" + id);
            var save =  document.getElementById(\"save_role_\" + id);

            spanName.style.display = \"block\";
            inputName.style.display = \"none\";
            spanDescription.style.display = \"block\";
            inputDescription.style.display = \"none\";
            edit.style.display = \"block\";
            save.style.display = \"none\";
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/roles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 191,  373 => 163,  332 => 125,  327 => 123,  323 => 122,  318 => 120,  313 => 118,  310 => 117,  300 => 116,  261 => 85,  246 => 78,  238 => 75,  234 => 74,  225 => 70,  219 => 67,  215 => 66,  207 => 63,  201 => 62,  197 => 61,  190 => 59,  184 => 58,  180 => 57,  177 => 56,  173 => 55,  145 => 30,  132 => 19,  122 => 18,  110 => 15,  105 => 13,  100 => 11,  95 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Test Symfony 5 - Roles{% endblock %}

{% block stylesheets %}
    <!-- Google Font: Source Sans Pro -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/fontawesome-free/css/all.min.css') }}\">
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap/bootstrap.min.css') }}\">
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/datatables/datatables.bootstrap5.min.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/adminlte.min.css') }}\">
{% endblock %}

{% block content %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                <h1 class=\"m-0\">Roles</h1>
                </div><!-- /.col -->
                <div class=\"col-sm-6\">
                <ol class=\"breadcrumb float-sm-right\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_index') }}\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Roles</li>
                </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
            <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                <!-- Info boxes -->
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <table id=\"roles\" class=\"table table-responsive-md table-bordered table-hover\">
                                    <thead class=\"thead-light\">
                                        <tr>
                                            <th scope=\"col\">Name</th>
                                            <th scope=\"col\">Description</th>
                                            <th scope=\"col\">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for role in roles %}
                                            <tr>
                                                <td id=\"td_role_name_{{role.id}}\">
                                                    <span id=\"span_role_name_{{role.id}}\">{{ role.name|e }}</span>
                                                    <input id=\"input_role_name_{{role.id}}\" value=\"{{ role.name|e }}\" size=\"20\" style=\"display: none\">
                                                </td>
                                                <td id=\"td_role_description_{{role.id}}\">
                                                    <span id=\"span_role_description_{{role.id}}\">{{ role.description|e }}</span>
                                                    <input id=\"input_role_description_{{role.id}}\" value=\"{{ role.description|e }}\" size=\"50\" style=\"display: none\">
                                                </td>
                                                <td class=\"text-center\">
                                                    <div id=\"edit_role_{{role.id}}\">
                                                        <a href=\"#\" onClick='return edit({{role.id}});' class=\"col text-left text-success\" title=\"Edit values\">
                                                            <i class=\"fas fa-2x fa-pencil-alt\"></i>
                                                        </a>
                                                        <a href=\"#\" id=\"a_remove_role_name_{{role.id}}\" onClick=\"return remove({{role.id}});\" class=\"col text-right text-danger\" title=\"Remove role\">
                                                            <i class=\"fas fa-2x fa-trash-alt\"></i>
                                                        </a>
                                                    </div>
                                                    <div id=\"save_role_{{role.id}}\" style=\"display: none\">
                                                        <a href=\"#\" id=\"a_save_role_name_{{role.id}}\" onClick=\"return save({{role.id}});\" class=\"col text-left text-success\" title=\"Save changes\">
                                                            <i class=\"fas fa-2x fa-check\"></i>
                                                        </a>
                                                        <a href=\"#\" id=\"a_discard_role_name_{{role.id}}\" onClick=\"return discard({{role.id}});\" class=\"col text-right text-danger\" title=\"Discard changes\">
                                                            <i class=\"fas fa-2x fa-times\"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>    
                </div>
            </div>
        </section>
    </div>

    <!-- Info modal box -->
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Modal title</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
            <p>Placeholder text for this demonstration of a vertically centered modal dialog.</p>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
        </div>
        </div>
    </div>
    <!-- /.Info modal box -->    
{% endblock %}

{% block javascripts %}
    <!-- jQuery -->
    <script src=\"{{ asset('js/jquery/jquery.js') }}\"></script>
    <!-- Bootstrap 4 -->
    <script src=\"{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}\"></script>
    <!-- DataTables -->
    <script src=\"{{ asset('js/dataTables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('js/dataTables/dataTables.bootstrap5.min.js') }}\"></script>
    <!-- AdminLTE App -->
    <script src=\"{{ asset('js/adminlte.min.js') }}\"></script>
    <!-- Page specific script -->
    <script>
        \$(function () {
            \$('#roles').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });
        });
        

        function edit(id)
        {
            var spanName = document.getElementById(\"span_role_name_\" + id);
            var inputName = document.getElementById(\"input_role_name_\" + id);
            var spanDescription = document.getElementById(\"span_role_description_\" + id);
            var inputDescription = document.getElementById(\"input_role_description_\" + id);
            var edit = document.getElementById(\"edit_role_\" + id);
            var save = document.getElementById(\"save_role_\" + id);

            spanName.style.display = \"none\";
            inputName.style.display = \"block\";
            spanDescription.style.display = \"none\";
            inputDescription.style.display = \"block\";
            edit.style.display = \"none\";
            save.style.display = \"block\";
        }


        function remove(id)
        {
            \$.ajax({
                type: 'POST',
                url: \"{{ path('app_admin_role_remove') }}\",
                data: { 
                    'id': id,
                },
                success: function(result) {
                    \$(\"#div1\").html(result);
                }
            });
        }


        function save(id)
        {
            var tdName = document.getElementById(\"td_role_name_\" + id);
            var tdDescription = document.getElementById(\"td_role_description_\" + id);
            var inputName = document.getElementById(\"input_role_name_\" + id);
            var inputDescription = document.getElementById(\"input_role_description_\" + id);
            var edit = document.getElementById(\"edit_role_\" + id);
            var save = document.getElementById(\"save_role_\" + id);

            tdName.classList.add(\"text-center\");
            tdDescription.classList.add(\"text-center\");
            tdName.innerHTML  = '<i class=\"fas fa-2x fa-sync fa-spin\"></i>';
            tdDescription.innerHTML  = '<i class=\"fas fa-2x fa-sync fa-spin\"></i>';
            save.innerHTML = '<i class=\"fas fa-2x fa-sync fa-spin\"></i>';

            \$.ajax({
                type: 'POST',
                url: \"{{ path('app_admin_role_save') }}\",
                data: { 
                    'id': id, 
                    'name': inputName.value,
                    'description': inputDescription.value
                },
                success: function(response) {
                    tdName.classList.remove(\"text-center\");
                    tdName.innerHTML = '<span id=\"span_role_name_' + id + '\">' + response.name + '</span>' +
                                       '<input id=\"input_role_name_' + id + '\" value=\"' + response.name + '\" size=\"20\" style=\"display: none\">';
                    tdDescription.classList.remove(\"text-center\");
                    tdDescription.innerHTML = '<span id=\"span_role_description_' + id + '\">' + response.description + '</span>' +
                                              '<input id=\"input_role_description_' + id + '\" value=\"' + response.description + '\" size=\"20\" style=\"display: none\">';
                    save.innerHTML = '<a href=\"#\" id=\"a_save_role_name_' + id + '\" onClick=\"return save(' + id + ');\" class=\"col text-left text-success\" title=\"Save changes\">'+
                                     '<i class=\"fas fa-2x fa-check\"></i>' + 
                                     '</a>' +
                                     '<a href=\"#\" id=\"a_discard_role_name_' + id + '\" onClick=\"return discard(' + id + ');\" class=\"col text-right text-danger\" title=\"Discard changes\">' +
                                     '<i class=\"fas fa-2x fa-times\"></i>' + 
                                     '</a>';

                    edit.style.display = \"block\";
                    save.style.display = \"none\"
                }
            });
        }


        function discard(id)
        {
            var spanName = document.getElementById(\"span_role_name_\" + id);
            var inputName = document.getElementById(\"input_role_name_\" + id);
            var spanDescription = document.getElementById(\"span_role_description_\" + id);
            var inputDescription = document.getElementById(\"input_role_description_\" + id);
            var edit =  document.getElementById(\"edit_role_\" + id);
            var save =  document.getElementById(\"save_role_\" + id);

            spanName.style.display = \"block\";
            inputName.style.display = \"none\";
            spanDescription.style.display = \"block\";
            inputDescription.style.display = \"none\";
            edit.style.display = \"block\";
            save.style.display = \"none\";
        }
    </script>
{% endblock %}
", "admin/roles.html.twig", "C:\\Users\\Usuario\\Documents\\DESARROLLOS\\symfony5-admin\\templates\\admin\\roles.html.twig");
    }
}
