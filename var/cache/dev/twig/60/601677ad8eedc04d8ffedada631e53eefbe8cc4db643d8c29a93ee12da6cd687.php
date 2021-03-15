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

/* admin/index.html.twig */
class __TwigTemplate_f2d6cd6aff04a640217fe64752554ec00c1dc581f8da8967efc52f184dead688 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/index.html.twig", 1);
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

        echo "Test Symfony 5 - Admin";
        
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
    <!-- Font Awesome Icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/overlayScrollbars/OverlayScrollbars.min.css"), "html", null, true);
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
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
        <div class=\"container-fluid\">
        <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
            <h1 class=\"m-0\">Dashboard v2</h1>
            </div><!-- /.col -->
            <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item active\">Dashboard v2</li>
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
            <div class=\"col-12 col-sm-6 col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-info elevation-1\"><i class=\"fas fa-cog\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">CPU Traffic</span>
                <span class=\"info-box-number\">
                    10
                    <small>%</small>
                </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class=\"col-12 col-sm-6 col-md-3\">
            <div class=\"info-box mb-3\">
                <span class=\"info-box-icon bg-danger elevation-1\"><i class=\"fas fa-thumbs-up\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">Likes</span>
                <span class=\"info-box-number\">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class=\"clearfix hidden-md-up\"></div>

            <div class=\"col-12 col-sm-6 col-md-3\">
            <div class=\"info-box mb-3\">
                <span class=\"info-box-icon bg-success elevation-1\"><i class=\"fas fa-shopping-cart\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">Sales</span>
                <span class=\"info-box-number\">760</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class=\"col-12 col-sm-6 col-md-3\">
            <div class=\"info-box mb-3\">
                <span class=\"info-box-icon bg-warning elevation-1\"><i class=\"fas fa-users\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">New Members</span>
                <span class=\"info-box-number\">2,000</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class=\"row\">
            <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                <h5 class=\"card-title\">Monthly Recap Report</h5>

                <div class=\"card-tools\">
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                    <i class=\"fas fa-minus\"></i>
                    </button>
                    <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-tool dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fas fa-wrench\"></i>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                        <a href=\"#\" class=\"dropdown-item\">Action</a>
                        <a href=\"#\" class=\"dropdown-item\">Another action</a>
                        <a href=\"#\" class=\"dropdown-item\">Something else here</a>
                        <a class=\"dropdown-divider\"></a>
                        <a href=\"#\" class=\"dropdown-item\">Separated link</a>
                    </div>
                    </div>
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                    <i class=\"fas fa-times\"></i>
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                    <p class=\"text-center\">
                        <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                    </p>

                    <div class=\"chart\">
                        <!-- Sales Chart Canvas -->
                        <canvas id=\"salesChart\" height=\"180\" style=\"height: 180px;\"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-md-4\">
                    <p class=\"text-center\">
                        <strong>Goal Completion</strong>
                    </p>

                    <div class=\"progress-group\">
                        Add Products to Cart
                        <span class=\"float-right\"><b>160</b>/200</span>
                        <div class=\"progress progress-sm\">
                        <div class=\"progress-bar bg-primary\" style=\"width: 80%\"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class=\"progress-group\">
                        Complete Purchase
                        <span class=\"float-right\"><b>310</b>/400</span>
                        <div class=\"progress progress-sm\">
                        <div class=\"progress-bar bg-danger\" style=\"width: 75%\"></div>
                        </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class=\"progress-group\">
                        <span class=\"progress-text\">Visit Premium Page</span>
                        <span class=\"float-right\"><b>480</b>/800</span>
                        <div class=\"progress progress-sm\">
                        <div class=\"progress-bar bg-success\" style=\"width: 60%\"></div>
                        </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class=\"progress-group\">
                        Send Inquiries
                        <span class=\"float-right\"><b>250</b>/500</span>
                        <div class=\"progress progress-sm\">
                        <div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                </div>
                <!-- ./card-body -->
                <div class=\"card-footer\">
                <div class=\"row\">
                    <div class=\"col-sm-3 col-6\">
                    <div class=\"description-block border-right\">
                        <span class=\"description-percentage text-success\"><i class=\"fas fa-caret-up\"></i> 17%</span>
                        <h5 class=\"description-header\">\$35,210.43</h5>
                        <span class=\"description-text\">TOTAL REVENUE</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-sm-3 col-6\">
                    <div class=\"description-block border-right\">
                        <span class=\"description-percentage text-warning\"><i class=\"fas fa-caret-left\"></i> 0%</span>
                        <h5 class=\"description-header\">\$10,390.90</h5>
                        <span class=\"description-text\">TOTAL COST</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-sm-3 col-6\">
                    <div class=\"description-block border-right\">
                        <span class=\"description-percentage text-success\"><i class=\"fas fa-caret-up\"></i> 20%</span>
                        <h5 class=\"description-header\">\$24,813.53</h5>
                        <span class=\"description-text\">TOTAL PROFIT</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-sm-3 col-6\">
                    <div class=\"description-block\">
                        <span class=\"description-percentage text-danger\"><i class=\"fas fa-caret-down\"></i> 18%</span>
                        <h5 class=\"description-header\">1200</h5>
                        <span class=\"description-text\">GOAL COMPLETIONS</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                </div>
                <!-- /.row -->
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class=\"row\">
            <!-- Left col -->
            <div class=\"col-md-8\">
            <!-- MAP & BOX PANE -->
            <div class=\"card\">
                <div class=\"card-header\">
                <h3 class=\"card-title\">US-Visitors Report</h3>

                <div class=\"card-tools\">
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                    <i class=\"fas fa-minus\"></i>
                    </button>
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                    <i class=\"fas fa-times\"></i>
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body p-0\">
                <div class=\"d-md-flex\">
                    <div class=\"p-1 flex-fill\" style=\"overflow: hidden\">
                    <!-- Map will be created here -->
                    <div id=\"world-map-markers\" style=\"height: 325px; overflow: hidden\">
                        <div class=\"map\"></div>
                    </div>
                    </div>
                    <div class=\"card-pane-right bg-success pt-2 pb-2 pl-4 pr-4\">
                    <div class=\"description-block mb-4\">
                        <div class=\"sparkbar pad\" data-color=\"#fff\">90,70,90,70,75,80,70</div>
                        <h5 class=\"description-header\">8390</h5>
                        <span class=\"description-text\">Visits</span>
                    </div>
                    <!-- /.description-block -->
                    <div class=\"description-block mb-4\">
                        <div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63</div>
                        <h5 class=\"description-header\">30%</h5>
                        <span class=\"description-text\">Referrals</span>
                    </div>
                    <!-- /.description-block -->
                    <div class=\"description-block\">
                        <div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63</div>
                        <h5 class=\"description-header\">70%</h5>
                        <span class=\"description-text\">Organic</span>
                    </div>
                    <!-- /.description-block -->
                    </div><!-- /.card-pane-right -->
                </div><!-- /.d-md-flex -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class=\"row\">
                <div class=\"col-md-6\">
                <!-- DIRECT CHAT -->
                <div class=\"card direct-chat direct-chat-warning\">
                    <div class=\"card-header\">
                    <h3 class=\"card-title\">Direct Chat</h3>

                    <div class=\"card-tools\">
                        <span title=\"3 New Messages\" class=\"badge badge-warning\">3</span>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                        <i class=\"fas fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-tool\" title=\"Contacts\" data-widget=\"chat-pane-toggle\">
                        <i class=\"fas fa-comments\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                        <i class=\"fas fa-times\"></i>
                        </button>
                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                    <!-- Conversations are loaded here -->
                    <div class=\"direct-chat-messages\">
                        <!-- Message. Default to the left -->
                        <div class=\"direct-chat-msg\">
                        <div class=\"direct-chat-infos clearfix\">
                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                            <span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class=\"direct-chat-img\" src=\"img/user1-128x128.jpg\" alt=\"message user image\">
                        <!-- /.direct-chat-img -->
                        <div class=\"direct-chat-text\">
                            Is this template really for free? That's unbelievable!
                        </div>
                        <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class=\"direct-chat-msg right\">
                        <div class=\"direct-chat-infos clearfix\">
                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                            <span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class=\"direct-chat-img\" src=\"img/user3-128x128.jpg\" alt=\"message user image\">
                        <!-- /.direct-chat-img -->
                        <div class=\"direct-chat-text\">
                            You better believe it!
                        </div>
                        <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message. Default to the left -->
                        <div class=\"direct-chat-msg\">
                        <div class=\"direct-chat-infos clearfix\">
                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                            <span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class=\"direct-chat-img\" src=\"img/user1-128x128.jpg\" alt=\"message user image\">
                        <!-- /.direct-chat-img -->
                        <div class=\"direct-chat-text\">
                            Working with AdminLTE on a great new app! Wanna join?
                        </div>
                        <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class=\"direct-chat-msg right\">
                        <div class=\"direct-chat-infos clearfix\">
                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                            <span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class=\"direct-chat-img\" src=\"img/user3-128x128.jpg\" alt=\"message user image\">
                        <!-- /.direct-chat-img -->
                        <div class=\"direct-chat-text\">
                            I would love to.
                        </div>
                        <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                    </div>
                    <!--/.direct-chat-messages-->

                    <!-- Contacts are loaded here -->
                    <div class=\"direct-chat-contacts\">
                        <ul class=\"contacts-list\">
                        <li>
                            <a href=\"#\">
                            <img class=\"contacts-list-img\" src=\"img/user1-128x128.jpg\" alt=\"User Avatar\">

                            <div class=\"contacts-list-info\">
                                <span class=\"contacts-list-name\">
                                Count Dracula
                                <small class=\"contacts-list-date float-right\">2/28/2015</small>
                                </span>
                                <span class=\"contacts-list-msg\">How have you been? I was...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href=\"#\">
                            <img class=\"contacts-list-img\" src=\"img/user7-128x128.jpg\" alt=\"User Avatar\">

                            <div class=\"contacts-list-info\">
                                <span class=\"contacts-list-name\">
                                Sarah Doe
                                <small class=\"contacts-list-date float-right\">2/23/2015</small>
                                </span>
                                <span class=\"contacts-list-msg\">I will be waiting for...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href=\"#\">
                            <img class=\"contacts-list-img\" src=\"img/user3-128x128.jpg\" alt=\"User Avatar\">

                            <div class=\"contacts-list-info\">
                                <span class=\"contacts-list-name\">
                                Nadia Jolie
                                <small class=\"contacts-list-date float-right\">2/20/2015</small>
                                </span>
                                <span class=\"contacts-list-msg\">I'll call you back at...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href=\"#\">
                            <img class=\"contacts-list-img\" src=\"img/user5-128x128.jpg\" alt=\"User Avatar\">

                            <div class=\"contacts-list-info\">
                                <span class=\"contacts-list-name\">
                                Nora S. Vans
                                <small class=\"contacts-list-date float-right\">2/10/2015</small>
                                </span>
                                <span class=\"contacts-list-msg\">Where is your new...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href=\"#\">
                            <img class=\"contacts-list-img\" src=\"img/user6-128x128.jpg\" alt=\"User Avatar\">

                            <div class=\"contacts-list-info\">
                                <span class=\"contacts-list-name\">
                                John K.
                                <small class=\"contacts-list-date float-right\">1/27/2015</small>
                                </span>
                                <span class=\"contacts-list-msg\">Can I take a look at...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href=\"#\">
                            <img class=\"contacts-list-img\" src=\"img/user8-128x128.jpg\" alt=\"User Avatar\">

                            <div class=\"contacts-list-info\">
                                <span class=\"contacts-list-name\">
                                Kenneth M.
                                <small class=\"contacts-list-date float-right\">1/4/2015</small>
                                </span>
                                <span class=\"contacts-list-msg\">Never mind I found...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        </ul>
                        <!-- /.contacts-list -->
                    </div>
                    <!-- /.direct-chat-pane -->
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer\">
                    <form action=\"#\" method=\"post\">
                        <div class=\"input-group\">
                        <input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
                        <span class=\"input-group-append\">
                            <button type=\"button\" class=\"btn btn-warning\">Send</button>
                        </span>
                        </div>
                    </form>
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!--/.direct-chat -->
                </div>
                <!-- /.col -->

                <div class=\"col-md-6\">
                <!-- USERS LIST -->
                <div class=\"card\">
                    <div class=\"card-header\">
                    <h3 class=\"card-title\">Latest Members</h3>

                    <div class=\"card-tools\">
                        <span class=\"badge badge-danger\">8 New Members</span>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                        <i class=\"fas fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                        <i class=\"fas fa-times\"></i>
                        </button>
                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body p-0\">
                    <ul class=\"users-list clearfix\">
                        <li>
                        <img src=\"img/user1-128x128.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                        <span class=\"users-list-date\">Today</span>
                        </li>
                        <li>
                        <img src=\"img/user8-128x128.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">Norman</a>
                        <span class=\"users-list-date\">Yesterday</span>
                        </li>
                        <li>
                        <img src=\"img/user7-128x128.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">Jane</a>
                        <span class=\"users-list-date\">12 Jan</span>
                        </li>
                        <li>
                        <img src=\"img/user6-128x128.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">John</a>
                        <span class=\"users-list-date\">12 Jan</span>
                        </li>
                        <li>
                        <img src=\"img/user2-160x160.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">Alexander</a>
                        <span class=\"users-list-date\">13 Jan</span>
                        </li>
                        <li>
                        <img src=\"img/user5-128x128.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">Sarah</a>
                        <span class=\"users-list-date\">14 Jan</span>
                        </li>
                        <li>
                        <img src=\"img/user4-128x128.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">Nora</a>
                        <span class=\"users-list-date\">15 Jan</span>
                        </li>
                        <li>
                        <img src=\"img/user3-128x128.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">Nadia</a>
                        <span class=\"users-list-date\">15 Jan</span>
                        </li>
                    </ul>
                    <!-- /.users-list -->
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer text-center\">
                    <a href=\"javascript:\">View All Users</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!--/.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class=\"card\">
                <div class=\"card-header border-transparent\">
                <h3 class=\"card-title\">Latest Orders</h3>

                <div class=\"card-tools\">
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                    <i class=\"fas fa-minus\"></i>
                    </button>
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                    <i class=\"fas fa-times\"></i>
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table m-0\">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Item</th>
                        <th>Status</th>
                        <th>Popularity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href=\"pages/examples/invoice.html\">OR9842</a></td>
                        <td>Call of Duty IV</td>
                        <td><span class=\"badge badge-success\">Shipped</span></td>
                        <td>
                        <div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">90,80,90,-70,61,-83,63</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href=\"pages/examples/invoice.html\">OR1848</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class=\"badge badge-warning\">Pending</span></td>
                        <td>
                        <div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">90,80,-90,70,61,-83,68</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href=\"pages/examples/invoice.html\">OR7429</a></td>
                        <td>iPhone 6 Plus</td>
                        <td><span class=\"badge badge-danger\">Delivered</span></td>
                        <td>
                        <div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">90,-80,90,70,-61,83,63</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href=\"pages/examples/invoice.html\">OR7429</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class=\"badge badge-info\">Processing</span></td>
                        <td>
                        <div class=\"sparkbar\" data-color=\"#00c0ef\" data-height=\"20\">90,80,-90,70,-61,83,63</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href=\"pages/examples/invoice.html\">OR1848</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class=\"badge badge-warning\">Pending</span></td>
                        <td>
                        <div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">90,80,-90,70,61,-83,68</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href=\"pages/examples/invoice.html\">OR7429</a></td>
                        <td>iPhone 6 Plus</td>
                        <td><span class=\"badge badge-danger\">Delivered</span></td>
                        <td>
                        <div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">90,-80,90,70,-61,83,63</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href=\"pages/examples/invoice.html\">OR9842</a></td>
                        <td>Call of Duty IV</td>
                        <td><span class=\"badge badge-success\">Shipped</span></td>
                        <td>
                        <div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">90,80,90,-70,61,-83,63</div>
                        </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class=\"card-footer clearfix\">
                <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-info float-left\">Place New Order</a>
                <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-secondary float-right\">View All Orders</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->

            <div class=\"col-md-4\">
            <!-- Info Boxes Style 2 -->
            <div class=\"info-box mb-3 bg-warning\">
                <span class=\"info-box-icon\"><i class=\"fas fa-tag\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">Inventory</span>
                <span class=\"info-box-number\">5,200</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class=\"info-box mb-3 bg-success\">
                <span class=\"info-box-icon\"><i class=\"far fa-heart\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">Mentions</span>
                <span class=\"info-box-number\">92,050</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class=\"info-box mb-3 bg-danger\">
                <span class=\"info-box-icon\"><i class=\"fas fa-cloud-download-alt\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">Downloads</span>
                <span class=\"info-box-number\">114,381</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class=\"info-box mb-3 bg-info\">
                <span class=\"info-box-icon\"><i class=\"far fa-comment\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">Direct Messages</span>
                <span class=\"info-box-number\">163,921</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->

            <div class=\"card\">
                <div class=\"card-header\">
                <h3 class=\"card-title\">Browser Usage</h3>

                <div class=\"card-tools\">
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                    <i class=\"fas fa-minus\"></i>
                    </button>
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                    <i class=\"fas fa-times\"></i>
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                    <div class=\"chart-responsive\">
                        <canvas id=\"pieChart\" height=\"150\"></canvas>
                    </div>
                    <!-- ./chart-responsive -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-md-4\">
                    <ul class=\"chart-legend clearfix\">
                        <li><i class=\"far fa-circle text-danger\"></i> Chrome</li>
                        <li><i class=\"far fa-circle text-success\"></i> IE</li>
                        <li><i class=\"far fa-circle text-warning\"></i> FireFox</li>
                        <li><i class=\"far fa-circle text-info\"></i> Safari</li>
                        <li><i class=\"far fa-circle text-primary\"></i> Opera</li>
                        <li><i class=\"far fa-circle text-secondary\"></i> Navigator</li>
                    </ul>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class=\"card-footer bg-light p-0\">
                <ul class=\"nav nav-pills flex-column\">
                    <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        United States of America
                        <span class=\"float-right text-danger\">
                        <i class=\"fas fa-arrow-down text-sm\"></i>
                        12%</span>
                    </a>
                    </li>
                    <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        India
                        <span class=\"float-right text-success\">
                        <i class=\"fas fa-arrow-up text-sm\"></i> 4%
                        </span>
                    </a>
                    </li>
                    <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        China
                        <span class=\"float-right text-warning\">
                        <i class=\"fas fa-arrow-left text-sm\"></i> 0%
                        </span>
                    </a>
                    </li>
                </ul>
                </div>
                <!-- /.footer -->
            </div>
            <!-- /.card -->

            <!-- PRODUCT LIST -->
            <div class=\"card\">
                <div class=\"card-header\">
                <h3 class=\"card-title\">Recently Added Products</h3>

                <div class=\"card-tools\">
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                    <i class=\"fas fa-minus\"></i>
                    </button>
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                    <i class=\"fas fa-times\"></i>
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body p-0\">
                <ul class=\"products-list product-list-in-card pl-2 pr-2\">
                    <li class=\"item\">
                    <div class=\"product-img\">
                        <img src=\"img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
                    </div>
                    <div class=\"product-info\">
                        <a href=\"javascript:void(0)\" class=\"product-title\">Samsung TV
                        <span class=\"badge badge-warning float-right\">\$1800</span></a>
                        <span class=\"product-description\">
                        Samsung 32\" 1080p 60Hz LED Smart HDTV.
                        </span>
                    </div>
                    </li>
                    <!-- /.item -->
                    <li class=\"item\">
                    <div class=\"product-img\">
                        <img src=\"img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
                    </div>
                    <div class=\"product-info\">
                        <a href=\"javascript:void(0)\" class=\"product-title\">Bicycle
                        <span class=\"badge badge-info float-right\">\$700</span></a>
                        <span class=\"product-description\">
                        26\" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
                    </div>
                    </li>
                    <!-- /.item -->
                    <li class=\"item\">
                    <div class=\"product-img\">
                        <img src=\"img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
                    </div>
                    <div class=\"product-info\">
                        <a href=\"javascript:void(0)\" class=\"product-title\">
                        Xbox One <span class=\"badge badge-danger float-right\">
                        \$350
                        </span>
                        </a>
                        <span class=\"product-description\">
                        Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                    </div>
                    </li>
                    <!-- /.item -->
                    <li class=\"item\">
                    <div class=\"product-img\">
                        <img src=\"img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
                    </div>
                    <div class=\"product-info\">
                        <a href=\"javascript:void(0)\" class=\"product-title\">PlayStation 4
                        <span class=\"badge badge-success float-right\">\$399</span></a>
                        <span class=\"product-description\">
                        PlayStation 4 500GB Console (PS4)
                        </span>
                    </div>
                    </li>
                    <!-- /.item -->
                </ul>
                </div>
                <!-- /.card-body -->
                <div class=\"card-footer text-center\">
                <a href=\"javascript:void(0)\" class=\"uppercase\">View All Products</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 876
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 877
        echo "    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src=\"";
        // line 879
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 881
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- overlayScrollbars -->
    <script src=\"";
        // line 883
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/overlayScrollbars/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 885
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/adminlte.js"), "html", null, true);
        echo "\"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src=\"";
        // line 889
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-mousewheel/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 890
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 891
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-mapael/jquery.mapael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 892
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-mapael/maps/usa_states.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ChartJS -->
    <script src=\"";
        // line 894
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 897
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 899
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard2.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1058 => 899,  1053 => 897,  1047 => 894,  1042 => 892,  1038 => 891,  1034 => 890,  1030 => 889,  1023 => 885,  1018 => 883,  1013 => 881,  1008 => 879,  1004 => 877,  994 => 876,  127 => 17,  117 => 16,  105 => 13,  100 => 11,  95 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Test Symfony 5 - Admin{% endblock %}

{% block stylesheets %}
    <!-- Google Font: Source Sans Pro -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
    <!-- Font Awesome Icons -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/fontawesome-free/css/all.min.css') }}\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/overlayScrollbars/OverlayScrollbars.min.css') }}\">
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
            <h1 class=\"m-0\">Dashboard v2</h1>
            </div><!-- /.col -->
            <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item active\">Dashboard v2</li>
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
            <div class=\"col-12 col-sm-6 col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-info elevation-1\"><i class=\"fas fa-cog\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">CPU Traffic</span>
                <span class=\"info-box-number\">
                    10
                    <small>%</small>
                </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class=\"col-12 col-sm-6 col-md-3\">
            <div class=\"info-box mb-3\">
                <span class=\"info-box-icon bg-danger elevation-1\"><i class=\"fas fa-thumbs-up\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">Likes</span>
                <span class=\"info-box-number\">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class=\"clearfix hidden-md-up\"></div>

            <div class=\"col-12 col-sm-6 col-md-3\">
            <div class=\"info-box mb-3\">
                <span class=\"info-box-icon bg-success elevation-1\"><i class=\"fas fa-shopping-cart\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">Sales</span>
                <span class=\"info-box-number\">760</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class=\"col-12 col-sm-6 col-md-3\">
            <div class=\"info-box mb-3\">
                <span class=\"info-box-icon bg-warning elevation-1\"><i class=\"fas fa-users\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">New Members</span>
                <span class=\"info-box-number\">2,000</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class=\"row\">
            <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                <h5 class=\"card-title\">Monthly Recap Report</h5>

                <div class=\"card-tools\">
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                    <i class=\"fas fa-minus\"></i>
                    </button>
                    <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-tool dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fas fa-wrench\"></i>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                        <a href=\"#\" class=\"dropdown-item\">Action</a>
                        <a href=\"#\" class=\"dropdown-item\">Another action</a>
                        <a href=\"#\" class=\"dropdown-item\">Something else here</a>
                        <a class=\"dropdown-divider\"></a>
                        <a href=\"#\" class=\"dropdown-item\">Separated link</a>
                    </div>
                    </div>
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                    <i class=\"fas fa-times\"></i>
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                    <p class=\"text-center\">
                        <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                    </p>

                    <div class=\"chart\">
                        <!-- Sales Chart Canvas -->
                        <canvas id=\"salesChart\" height=\"180\" style=\"height: 180px;\"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-md-4\">
                    <p class=\"text-center\">
                        <strong>Goal Completion</strong>
                    </p>

                    <div class=\"progress-group\">
                        Add Products to Cart
                        <span class=\"float-right\"><b>160</b>/200</span>
                        <div class=\"progress progress-sm\">
                        <div class=\"progress-bar bg-primary\" style=\"width: 80%\"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class=\"progress-group\">
                        Complete Purchase
                        <span class=\"float-right\"><b>310</b>/400</span>
                        <div class=\"progress progress-sm\">
                        <div class=\"progress-bar bg-danger\" style=\"width: 75%\"></div>
                        </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class=\"progress-group\">
                        <span class=\"progress-text\">Visit Premium Page</span>
                        <span class=\"float-right\"><b>480</b>/800</span>
                        <div class=\"progress progress-sm\">
                        <div class=\"progress-bar bg-success\" style=\"width: 60%\"></div>
                        </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class=\"progress-group\">
                        Send Inquiries
                        <span class=\"float-right\"><b>250</b>/500</span>
                        <div class=\"progress progress-sm\">
                        <div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                </div>
                <!-- ./card-body -->
                <div class=\"card-footer\">
                <div class=\"row\">
                    <div class=\"col-sm-3 col-6\">
                    <div class=\"description-block border-right\">
                        <span class=\"description-percentage text-success\"><i class=\"fas fa-caret-up\"></i> 17%</span>
                        <h5 class=\"description-header\">\$35,210.43</h5>
                        <span class=\"description-text\">TOTAL REVENUE</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-sm-3 col-6\">
                    <div class=\"description-block border-right\">
                        <span class=\"description-percentage text-warning\"><i class=\"fas fa-caret-left\"></i> 0%</span>
                        <h5 class=\"description-header\">\$10,390.90</h5>
                        <span class=\"description-text\">TOTAL COST</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-sm-3 col-6\">
                    <div class=\"description-block border-right\">
                        <span class=\"description-percentage text-success\"><i class=\"fas fa-caret-up\"></i> 20%</span>
                        <h5 class=\"description-header\">\$24,813.53</h5>
                        <span class=\"description-text\">TOTAL PROFIT</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-sm-3 col-6\">
                    <div class=\"description-block\">
                        <span class=\"description-percentage text-danger\"><i class=\"fas fa-caret-down\"></i> 18%</span>
                        <h5 class=\"description-header\">1200</h5>
                        <span class=\"description-text\">GOAL COMPLETIONS</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                </div>
                <!-- /.row -->
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class=\"row\">
            <!-- Left col -->
            <div class=\"col-md-8\">
            <!-- MAP & BOX PANE -->
            <div class=\"card\">
                <div class=\"card-header\">
                <h3 class=\"card-title\">US-Visitors Report</h3>

                <div class=\"card-tools\">
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                    <i class=\"fas fa-minus\"></i>
                    </button>
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                    <i class=\"fas fa-times\"></i>
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body p-0\">
                <div class=\"d-md-flex\">
                    <div class=\"p-1 flex-fill\" style=\"overflow: hidden\">
                    <!-- Map will be created here -->
                    <div id=\"world-map-markers\" style=\"height: 325px; overflow: hidden\">
                        <div class=\"map\"></div>
                    </div>
                    </div>
                    <div class=\"card-pane-right bg-success pt-2 pb-2 pl-4 pr-4\">
                    <div class=\"description-block mb-4\">
                        <div class=\"sparkbar pad\" data-color=\"#fff\">90,70,90,70,75,80,70</div>
                        <h5 class=\"description-header\">8390</h5>
                        <span class=\"description-text\">Visits</span>
                    </div>
                    <!-- /.description-block -->
                    <div class=\"description-block mb-4\">
                        <div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63</div>
                        <h5 class=\"description-header\">30%</h5>
                        <span class=\"description-text\">Referrals</span>
                    </div>
                    <!-- /.description-block -->
                    <div class=\"description-block\">
                        <div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63</div>
                        <h5 class=\"description-header\">70%</h5>
                        <span class=\"description-text\">Organic</span>
                    </div>
                    <!-- /.description-block -->
                    </div><!-- /.card-pane-right -->
                </div><!-- /.d-md-flex -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class=\"row\">
                <div class=\"col-md-6\">
                <!-- DIRECT CHAT -->
                <div class=\"card direct-chat direct-chat-warning\">
                    <div class=\"card-header\">
                    <h3 class=\"card-title\">Direct Chat</h3>

                    <div class=\"card-tools\">
                        <span title=\"3 New Messages\" class=\"badge badge-warning\">3</span>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                        <i class=\"fas fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-tool\" title=\"Contacts\" data-widget=\"chat-pane-toggle\">
                        <i class=\"fas fa-comments\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                        <i class=\"fas fa-times\"></i>
                        </button>
                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                    <!-- Conversations are loaded here -->
                    <div class=\"direct-chat-messages\">
                        <!-- Message. Default to the left -->
                        <div class=\"direct-chat-msg\">
                        <div class=\"direct-chat-infos clearfix\">
                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                            <span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class=\"direct-chat-img\" src=\"img/user1-128x128.jpg\" alt=\"message user image\">
                        <!-- /.direct-chat-img -->
                        <div class=\"direct-chat-text\">
                            Is this template really for free? That's unbelievable!
                        </div>
                        <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class=\"direct-chat-msg right\">
                        <div class=\"direct-chat-infos clearfix\">
                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                            <span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class=\"direct-chat-img\" src=\"img/user3-128x128.jpg\" alt=\"message user image\">
                        <!-- /.direct-chat-img -->
                        <div class=\"direct-chat-text\">
                            You better believe it!
                        </div>
                        <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message. Default to the left -->
                        <div class=\"direct-chat-msg\">
                        <div class=\"direct-chat-infos clearfix\">
                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                            <span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class=\"direct-chat-img\" src=\"img/user1-128x128.jpg\" alt=\"message user image\">
                        <!-- /.direct-chat-img -->
                        <div class=\"direct-chat-text\">
                            Working with AdminLTE on a great new app! Wanna join?
                        </div>
                        <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class=\"direct-chat-msg right\">
                        <div class=\"direct-chat-infos clearfix\">
                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                            <span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class=\"direct-chat-img\" src=\"img/user3-128x128.jpg\" alt=\"message user image\">
                        <!-- /.direct-chat-img -->
                        <div class=\"direct-chat-text\">
                            I would love to.
                        </div>
                        <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                    </div>
                    <!--/.direct-chat-messages-->

                    <!-- Contacts are loaded here -->
                    <div class=\"direct-chat-contacts\">
                        <ul class=\"contacts-list\">
                        <li>
                            <a href=\"#\">
                            <img class=\"contacts-list-img\" src=\"img/user1-128x128.jpg\" alt=\"User Avatar\">

                            <div class=\"contacts-list-info\">
                                <span class=\"contacts-list-name\">
                                Count Dracula
                                <small class=\"contacts-list-date float-right\">2/28/2015</small>
                                </span>
                                <span class=\"contacts-list-msg\">How have you been? I was...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href=\"#\">
                            <img class=\"contacts-list-img\" src=\"img/user7-128x128.jpg\" alt=\"User Avatar\">

                            <div class=\"contacts-list-info\">
                                <span class=\"contacts-list-name\">
                                Sarah Doe
                                <small class=\"contacts-list-date float-right\">2/23/2015</small>
                                </span>
                                <span class=\"contacts-list-msg\">I will be waiting for...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href=\"#\">
                            <img class=\"contacts-list-img\" src=\"img/user3-128x128.jpg\" alt=\"User Avatar\">

                            <div class=\"contacts-list-info\">
                                <span class=\"contacts-list-name\">
                                Nadia Jolie
                                <small class=\"contacts-list-date float-right\">2/20/2015</small>
                                </span>
                                <span class=\"contacts-list-msg\">I'll call you back at...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href=\"#\">
                            <img class=\"contacts-list-img\" src=\"img/user5-128x128.jpg\" alt=\"User Avatar\">

                            <div class=\"contacts-list-info\">
                                <span class=\"contacts-list-name\">
                                Nora S. Vans
                                <small class=\"contacts-list-date float-right\">2/10/2015</small>
                                </span>
                                <span class=\"contacts-list-msg\">Where is your new...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href=\"#\">
                            <img class=\"contacts-list-img\" src=\"img/user6-128x128.jpg\" alt=\"User Avatar\">

                            <div class=\"contacts-list-info\">
                                <span class=\"contacts-list-name\">
                                John K.
                                <small class=\"contacts-list-date float-right\">1/27/2015</small>
                                </span>
                                <span class=\"contacts-list-msg\">Can I take a look at...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href=\"#\">
                            <img class=\"contacts-list-img\" src=\"img/user8-128x128.jpg\" alt=\"User Avatar\">

                            <div class=\"contacts-list-info\">
                                <span class=\"contacts-list-name\">
                                Kenneth M.
                                <small class=\"contacts-list-date float-right\">1/4/2015</small>
                                </span>
                                <span class=\"contacts-list-msg\">Never mind I found...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        </ul>
                        <!-- /.contacts-list -->
                    </div>
                    <!-- /.direct-chat-pane -->
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer\">
                    <form action=\"#\" method=\"post\">
                        <div class=\"input-group\">
                        <input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
                        <span class=\"input-group-append\">
                            <button type=\"button\" class=\"btn btn-warning\">Send</button>
                        </span>
                        </div>
                    </form>
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!--/.direct-chat -->
                </div>
                <!-- /.col -->

                <div class=\"col-md-6\">
                <!-- USERS LIST -->
                <div class=\"card\">
                    <div class=\"card-header\">
                    <h3 class=\"card-title\">Latest Members</h3>

                    <div class=\"card-tools\">
                        <span class=\"badge badge-danger\">8 New Members</span>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                        <i class=\"fas fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                        <i class=\"fas fa-times\"></i>
                        </button>
                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body p-0\">
                    <ul class=\"users-list clearfix\">
                        <li>
                        <img src=\"img/user1-128x128.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                        <span class=\"users-list-date\">Today</span>
                        </li>
                        <li>
                        <img src=\"img/user8-128x128.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">Norman</a>
                        <span class=\"users-list-date\">Yesterday</span>
                        </li>
                        <li>
                        <img src=\"img/user7-128x128.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">Jane</a>
                        <span class=\"users-list-date\">12 Jan</span>
                        </li>
                        <li>
                        <img src=\"img/user6-128x128.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">John</a>
                        <span class=\"users-list-date\">12 Jan</span>
                        </li>
                        <li>
                        <img src=\"img/user2-160x160.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">Alexander</a>
                        <span class=\"users-list-date\">13 Jan</span>
                        </li>
                        <li>
                        <img src=\"img/user5-128x128.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">Sarah</a>
                        <span class=\"users-list-date\">14 Jan</span>
                        </li>
                        <li>
                        <img src=\"img/user4-128x128.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">Nora</a>
                        <span class=\"users-list-date\">15 Jan</span>
                        </li>
                        <li>
                        <img src=\"img/user3-128x128.jpg\" alt=\"User Image\">
                        <a class=\"users-list-name\" href=\"#\">Nadia</a>
                        <span class=\"users-list-date\">15 Jan</span>
                        </li>
                    </ul>
                    <!-- /.users-list -->
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer text-center\">
                    <a href=\"javascript:\">View All Users</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!--/.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class=\"card\">
                <div class=\"card-header border-transparent\">
                <h3 class=\"card-title\">Latest Orders</h3>

                <div class=\"card-tools\">
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                    <i class=\"fas fa-minus\"></i>
                    </button>
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                    <i class=\"fas fa-times\"></i>
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table m-0\">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Item</th>
                        <th>Status</th>
                        <th>Popularity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href=\"pages/examples/invoice.html\">OR9842</a></td>
                        <td>Call of Duty IV</td>
                        <td><span class=\"badge badge-success\">Shipped</span></td>
                        <td>
                        <div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">90,80,90,-70,61,-83,63</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href=\"pages/examples/invoice.html\">OR1848</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class=\"badge badge-warning\">Pending</span></td>
                        <td>
                        <div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">90,80,-90,70,61,-83,68</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href=\"pages/examples/invoice.html\">OR7429</a></td>
                        <td>iPhone 6 Plus</td>
                        <td><span class=\"badge badge-danger\">Delivered</span></td>
                        <td>
                        <div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">90,-80,90,70,-61,83,63</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href=\"pages/examples/invoice.html\">OR7429</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class=\"badge badge-info\">Processing</span></td>
                        <td>
                        <div class=\"sparkbar\" data-color=\"#00c0ef\" data-height=\"20\">90,80,-90,70,-61,83,63</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href=\"pages/examples/invoice.html\">OR1848</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class=\"badge badge-warning\">Pending</span></td>
                        <td>
                        <div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">90,80,-90,70,61,-83,68</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href=\"pages/examples/invoice.html\">OR7429</a></td>
                        <td>iPhone 6 Plus</td>
                        <td><span class=\"badge badge-danger\">Delivered</span></td>
                        <td>
                        <div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">90,-80,90,70,-61,83,63</div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href=\"pages/examples/invoice.html\">OR9842</a></td>
                        <td>Call of Duty IV</td>
                        <td><span class=\"badge badge-success\">Shipped</span></td>
                        <td>
                        <div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">90,80,90,-70,61,-83,63</div>
                        </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class=\"card-footer clearfix\">
                <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-info float-left\">Place New Order</a>
                <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-secondary float-right\">View All Orders</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->

            <div class=\"col-md-4\">
            <!-- Info Boxes Style 2 -->
            <div class=\"info-box mb-3 bg-warning\">
                <span class=\"info-box-icon\"><i class=\"fas fa-tag\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">Inventory</span>
                <span class=\"info-box-number\">5,200</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class=\"info-box mb-3 bg-success\">
                <span class=\"info-box-icon\"><i class=\"far fa-heart\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">Mentions</span>
                <span class=\"info-box-number\">92,050</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class=\"info-box mb-3 bg-danger\">
                <span class=\"info-box-icon\"><i class=\"fas fa-cloud-download-alt\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">Downloads</span>
                <span class=\"info-box-number\">114,381</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class=\"info-box mb-3 bg-info\">
                <span class=\"info-box-icon\"><i class=\"far fa-comment\"></i></span>

                <div class=\"info-box-content\">
                <span class=\"info-box-text\">Direct Messages</span>
                <span class=\"info-box-number\">163,921</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->

            <div class=\"card\">
                <div class=\"card-header\">
                <h3 class=\"card-title\">Browser Usage</h3>

                <div class=\"card-tools\">
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                    <i class=\"fas fa-minus\"></i>
                    </button>
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                    <i class=\"fas fa-times\"></i>
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                    <div class=\"chart-responsive\">
                        <canvas id=\"pieChart\" height=\"150\"></canvas>
                    </div>
                    <!-- ./chart-responsive -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-md-4\">
                    <ul class=\"chart-legend clearfix\">
                        <li><i class=\"far fa-circle text-danger\"></i> Chrome</li>
                        <li><i class=\"far fa-circle text-success\"></i> IE</li>
                        <li><i class=\"far fa-circle text-warning\"></i> FireFox</li>
                        <li><i class=\"far fa-circle text-info\"></i> Safari</li>
                        <li><i class=\"far fa-circle text-primary\"></i> Opera</li>
                        <li><i class=\"far fa-circle text-secondary\"></i> Navigator</li>
                    </ul>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class=\"card-footer bg-light p-0\">
                <ul class=\"nav nav-pills flex-column\">
                    <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        United States of America
                        <span class=\"float-right text-danger\">
                        <i class=\"fas fa-arrow-down text-sm\"></i>
                        12%</span>
                    </a>
                    </li>
                    <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        India
                        <span class=\"float-right text-success\">
                        <i class=\"fas fa-arrow-up text-sm\"></i> 4%
                        </span>
                    </a>
                    </li>
                    <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        China
                        <span class=\"float-right text-warning\">
                        <i class=\"fas fa-arrow-left text-sm\"></i> 0%
                        </span>
                    </a>
                    </li>
                </ul>
                </div>
                <!-- /.footer -->
            </div>
            <!-- /.card -->

            <!-- PRODUCT LIST -->
            <div class=\"card\">
                <div class=\"card-header\">
                <h3 class=\"card-title\">Recently Added Products</h3>

                <div class=\"card-tools\">
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                    <i class=\"fas fa-minus\"></i>
                    </button>
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                    <i class=\"fas fa-times\"></i>
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body p-0\">
                <ul class=\"products-list product-list-in-card pl-2 pr-2\">
                    <li class=\"item\">
                    <div class=\"product-img\">
                        <img src=\"img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
                    </div>
                    <div class=\"product-info\">
                        <a href=\"javascript:void(0)\" class=\"product-title\">Samsung TV
                        <span class=\"badge badge-warning float-right\">\$1800</span></a>
                        <span class=\"product-description\">
                        Samsung 32\" 1080p 60Hz LED Smart HDTV.
                        </span>
                    </div>
                    </li>
                    <!-- /.item -->
                    <li class=\"item\">
                    <div class=\"product-img\">
                        <img src=\"img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
                    </div>
                    <div class=\"product-info\">
                        <a href=\"javascript:void(0)\" class=\"product-title\">Bicycle
                        <span class=\"badge badge-info float-right\">\$700</span></a>
                        <span class=\"product-description\">
                        26\" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
                    </div>
                    </li>
                    <!-- /.item -->
                    <li class=\"item\">
                    <div class=\"product-img\">
                        <img src=\"img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
                    </div>
                    <div class=\"product-info\">
                        <a href=\"javascript:void(0)\" class=\"product-title\">
                        Xbox One <span class=\"badge badge-danger float-right\">
                        \$350
                        </span>
                        </a>
                        <span class=\"product-description\">
                        Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                    </div>
                    </li>
                    <!-- /.item -->
                    <li class=\"item\">
                    <div class=\"product-img\">
                        <img src=\"img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
                    </div>
                    <div class=\"product-info\">
                        <a href=\"javascript:void(0)\" class=\"product-title\">PlayStation 4
                        <span class=\"badge badge-success float-right\">\$399</span></a>
                        <span class=\"product-description\">
                        PlayStation 4 500GB Console (PS4)
                        </span>
                    </div>
                    </li>
                    <!-- /.item -->
                </ul>
                </div>
                <!-- /.card-body -->
                <div class=\"card-footer text-center\">
                <a href=\"javascript:void(0)\" class=\"uppercase\">View All Products</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
{% endblock %}

{% block javascripts %}
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src=\"{{ asset('js/jquery/jquery.min.js') }}\"></script>
    <!-- Bootstrap -->
    <script src=\"{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}\"></script>
    <!-- overlayScrollbars -->
    <script src=\"{{ asset('js/overlayScrollbars/jquery.overlayScrollbars.min.js') }}\"></script>
    <!-- AdminLTE App -->
    <script src=\"{{ asset('js/adminlte.js') }}\"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src=\"{{ asset('js/jquery-mousewheel/jquery.mousewheel.js') }}\"></script>
    <script src=\"{{ asset('js/raphael/raphael.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-mapael/jquery.mapael.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-mapael/maps/usa_states.min.js') }}\"></script>
    <!-- ChartJS -->
    <script src=\"{{ asset('js/chart.js/Chart.min.js') }}\"></script>

    <!-- AdminLTE for demo purposes -->
    <script src=\"{{ asset('js/demo.js') }}\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"{{ asset('js/dashboard2.js') }}\"></script>
{% endblock %}
", "admin/index.html.twig", "C:\\Users\\Usuario\\Documents\\DESARROLLOS\\symfony5-admin\\templates\\admin\\index.html.twig");
    }
}
