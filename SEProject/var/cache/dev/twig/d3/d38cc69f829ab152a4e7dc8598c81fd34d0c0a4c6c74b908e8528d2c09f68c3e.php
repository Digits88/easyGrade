<?php

/* base.html.twig */
class __TwigTemplate_7f1ce68eb9ceed8a54d2015298bdb3632c803b6f8bbc54636f1d73cde0d99e6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headerdetail' => array($this, 'block_headerdetail'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'courselist' => array($this, 'block_courselist'),
            'modulename' => array($this, 'block_modulename'),
            'contentdetail' => array($this, 'block_contentdetail'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_032f3743f0bb53d0576de71d682bddcccc489b48be5190c09e1e16c8a17b9f56 = $this->env->getExtension("native_profiler");
        $__internal_032f3743f0bb53d0576de71d682bddcccc489b48be5190c09e1e16c8a17b9f56->enter($__internal_032f3743f0bb53d0576de71d682bddcccc489b48be5190c09e1e16c8a17b9f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('headerdetail', $context, $blocks);
        // line 11
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body background=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/images/back.jpg"), "html", null, true);
        echo "\">
        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 106
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 124
        echo "    </body>
</html>
";
        
        $__internal_032f3743f0bb53d0576de71d682bddcccc489b48be5190c09e1e16c8a17b9f56->leave($__internal_032f3743f0bb53d0576de71d682bddcccc489b48be5190c09e1e16c8a17b9f56_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_c27e44054a08cb57bdb60fd966bd8a29115b09106953060e0f3d0bbfe7a80cda = $this->env->getExtension("native_profiler");
        $__internal_c27e44054a08cb57bdb60fd966bd8a29115b09106953060e0f3d0bbfe7a80cda->enter($__internal_c27e44054a08cb57bdb60fd966bd8a29115b09106953060e0f3d0bbfe7a80cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "            <meta charset=\"UTF-8\" />
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">
        ";
        
        $__internal_c27e44054a08cb57bdb60fd966bd8a29115b09106953060e0f3d0bbfe7a80cda->leave($__internal_c27e44054a08cb57bdb60fd966bd8a29115b09106953060e0f3d0bbfe7a80cda_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_62367abcbdb0c133e5bd8b3f13aec08f287aa24da2f449dbadb925fccbc02234 = $this->env->getExtension("native_profiler");
        $__internal_62367abcbdb0c133e5bd8b3f13aec08f287aa24da2f449dbadb925fccbc02234->enter($__internal_62367abcbdb0c133e5bd8b3f13aec08f287aa24da2f449dbadb925fccbc02234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_62367abcbdb0c133e5bd8b3f13aec08f287aa24da2f449dbadb925fccbc02234->leave($__internal_62367abcbdb0c133e5bd8b3f13aec08f287aa24da2f449dbadb925fccbc02234_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83d96b8c31ed1d8dbd1c492c0a31d45bb515b8bbc40f74dcd1b9e2ff858c1734 = $this->env->getExtension("native_profiler");
        $__internal_83d96b8c31ed1d8dbd1c492c0a31d45bb515b8bbc40f74dcd1b9e2ff858c1734->enter($__internal_83d96b8c31ed1d8dbd1c492c0a31d45bb515b8bbc40f74dcd1b9e2ff858c1734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lecturer/css/coursestyles.css"), "html", null, true);
        echo "\">

            <!-- Font awesome -->
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <!-- Sandstone Bootstrap CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lecturer/css/bootsrap.min.css"), "html", null, true);
        echo "\">
            <!-- Bootstrap Datatables -->
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
            <!-- Bootstrap social button library -->
            <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/css/bootstrap-social.css"), "html", null, true);
        echo "\">
            <!-- Bootstrap select -->
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/css/bootstrap-select.css"), "html", null, true);
        echo "\">
            <!-- Bootstrap file input -->
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/css/fileinput.min.css"), "html", null, true);
        echo "\">
            <!-- Awesome Bootstrap checkbox -->
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/css/awesome-bootstrap-checkbox.css"), "html", null, true);
        echo "\">
            <!-- Admin Stye -->
            <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_83d96b8c31ed1d8dbd1c492c0a31d45bb515b8bbc40f74dcd1b9e2ff858c1734->leave($__internal_83d96b8c31ed1d8dbd1c492c0a31d45bb515b8bbc40f74dcd1b9e2ff858c1734_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_1be12526d5d11f7fb96e7afd6698ffe57a11cdc22841e0bdc98b83a335e1f5a6 = $this->env->getExtension("native_profiler");
        $__internal_1be12526d5d11f7fb96e7afd6698ffe57a11cdc22841e0bdc98b83a335e1f5a6->enter($__internal_1be12526d5d11f7fb96e7afd6698ffe57a11cdc22841e0bdc98b83a335e1f5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "            <div class=\"brand clearfix\">
                <a href=\"index.html\" class=\"logo\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/images/logo.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                <span class=\"menu-btn\"><i class=\"fa fa-bars\"></i></span>
                <ul class=\"ts-profile-nav\">
                    <li><a href=\"#\">Help</a></li>
                    <li><a href=\"#\">Settings</a></li>
                    <li class=\"ts-account\">
                        <a href=\"#\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/images/ts-avatar.jpg"), "html", null, true);
        echo "\" class=\"ts-avatar hidden-side\" alt=\"\"> Account <i class=\"fa fa-angle-down hidden-side\"></i></a>
                        <ul>
                            <li><a href=\"#\">My Account</a></li>
                            <li><a href=\"#\">Edit Account</a></li>
                            <li><a href=\"#\">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class=\"ts-main-content\">
                <nav class=\"ts-sidebar\">
                    <ul class=\"ts-sidebar-menu\">
                        <li class=\"ts-label\">Search</li>
                        <li>
                            <input type=\"text\" class=\"ts-sidebar-search\" placeholder=\"Search here...\">
                        </li>
                        <li class=\"ts-label\">Main</li>
                        <li><a href=\"/\"><i class=\"fa fa-dashboard\"></i> Dashboard</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-desktop\"></i> Courses</a>
                            <ul>
                                ";
        // line 65
        $this->displayBlock('courselist', $context, $blocks);
        // line 66
        echo "                            </ul>


                        </li>


                        <!-- Account from above -->
                        <ul class=\"ts-profile-nav\">
                            <li><a href=\"#\">Help</a></li>
                            <li><a href=\"#\">Settings</a></li>
                            <li class=\"ts-account\">
                                <a href=\"#\"><img src=\"img/ts-avatar.jpg\" class=\"ts-avatar hidden-side\" alt=\"\"> Account <i class=\"fa fa-angle-down hidden-side\"></i></a>
                                <ul>
                                    <li><a href=\"#\">My Account</a></li>
                                    <li><a href=\"#\">Edit Account</a></li>
                                    <li><a href=\"#\">Logout</a></li>
                                </ul>
                            </li>
                        </ul>

                    </ul>
                </nav>



                <div class=\"content-wrapper\">
                    <div class=\"container-fluid\">

                        <div class=\"row\">
                            <div class=\"col-md-12\">

                                <h2 class=\"page-title\">";
        // line 97
        $this->displayBlock('modulename', $context, $blocks);
        echo "</h2>
                                ";
        // line 98
        $this->displayBlock('contentdetail', $context, $blocks);
        // line 99
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_1be12526d5d11f7fb96e7afd6698ffe57a11cdc22841e0bdc98b83a335e1f5a6->leave($__internal_1be12526d5d11f7fb96e7afd6698ffe57a11cdc22841e0bdc98b83a335e1f5a6_prof);

    }

    // line 65
    public function block_courselist($context, array $blocks = array())
    {
        $__internal_4203e75f870bb7694696151e47c91e911ed6bd74fc0764e841ccb2a70c1050f2 = $this->env->getExtension("native_profiler");
        $__internal_4203e75f870bb7694696151e47c91e911ed6bd74fc0764e841ccb2a70c1050f2->enter($__internal_4203e75f870bb7694696151e47c91e911ed6bd74fc0764e841ccb2a70c1050f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courselist"));

        
        $__internal_4203e75f870bb7694696151e47c91e911ed6bd74fc0764e841ccb2a70c1050f2->leave($__internal_4203e75f870bb7694696151e47c91e911ed6bd74fc0764e841ccb2a70c1050f2_prof);

    }

    // line 97
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_47e0a1d0796a6ad2f729b0bf09bd54acbd5b07f3d545b9d1182db914ca7c285a = $this->env->getExtension("native_profiler");
        $__internal_47e0a1d0796a6ad2f729b0bf09bd54acbd5b07f3d545b9d1182db914ca7c285a->enter($__internal_47e0a1d0796a6ad2f729b0bf09bd54acbd5b07f3d545b9d1182db914ca7c285a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_47e0a1d0796a6ad2f729b0bf09bd54acbd5b07f3d545b9d1182db914ca7c285a->leave($__internal_47e0a1d0796a6ad2f729b0bf09bd54acbd5b07f3d545b9d1182db914ca7c285a_prof);

    }

    // line 98
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_e28ff5025c8675ea7b921e1d9a5c72faadf0b21d80eaece77b9576e28908fde3 = $this->env->getExtension("native_profiler");
        $__internal_e28ff5025c8675ea7b921e1d9a5c72faadf0b21d80eaece77b9576e28908fde3->enter($__internal_e28ff5025c8675ea7b921e1d9a5c72faadf0b21d80eaece77b9576e28908fde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_e28ff5025c8675ea7b921e1d9a5c72faadf0b21d80eaece77b9576e28908fde3->leave($__internal_e28ff5025c8675ea7b921e1d9a5c72faadf0b21d80eaece77b9576e28908fde3_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40ad7a82b2dfaf927a524e9fb463def47e5bfe1ae65a7c221fbd31172d3e5a6a = $this->env->getExtension("native_profiler");
        $__internal_40ad7a82b2dfaf927a524e9fb463def47e5bfe1ae65a7c221fbd31172d3e5a6a->enter($__internal_40ad7a82b2dfaf927a524e9fb463def47e5bfe1ae65a7c221fbd31172d3e5a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
            <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>


            <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/fileinput.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/chartData.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/main.js"), "html", null, true);
        echo "\"></script>


        ";
        
        $__internal_40ad7a82b2dfaf927a524e9fb463def47e5bfe1ae65a7c221fbd31172d3e5a6a->leave($__internal_40ad7a82b2dfaf927a524e9fb463def47e5bfe1ae65a7c221fbd31172d3e5a6a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 120,  328 => 119,  324 => 118,  320 => 117,  316 => 116,  312 => 115,  308 => 114,  304 => 113,  300 => 112,  293 => 107,  287 => 106,  276 => 98,  264 => 97,  253 => 65,  240 => 99,  238 => 98,  234 => 97,  201 => 66,  199 => 65,  175 => 44,  166 => 38,  163 => 37,  157 => 36,  148 => 31,  143 => 29,  138 => 27,  133 => 25,  128 => 23,  123 => 21,  118 => 19,  113 => 17,  107 => 14,  104 => 13,  98 => 12,  86 => 11,  74 => 5,  68 => 4,  59 => 124,  56 => 106,  54 => 36,  50 => 35,  44 => 33,  42 => 12,  37 => 11,  35 => 4,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         {% block headerdetail %}*/
/*             <meta charset="UTF-8" />*/
/*             <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">*/
/*             <meta name="description" content="">*/
/*             <meta name="author" content="">*/
/*         {% endblock %}*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/lecturer/css/coursestyles.css') }}">*/
/* */
/*             <!-- Font awesome -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/sep/css/font-awesome.min.css') }}">*/
/*             <!-- Sandstone Bootstrap CSS -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/lecturer/css/bootsrap.min.css') }}">*/
/*             <!-- Bootstrap Datatables -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/sep/css/dataTables.bootstrap.min.css') }}">*/
/*             <!-- Bootstrap social button library -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/sep/css/bootstrap-social.css') }}">*/
/*             <!-- Bootstrap select -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/sep/css/bootstrap-select.css') }}">*/
/*             <!-- Bootstrap file input -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/sep/css/fileinput.min.css') }}">*/
/*             <!-- Awesome Bootstrap checkbox -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/sep/css/awesome-bootstrap-checkbox.css') }}">*/
/*             <!-- Admin Stye -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/sep/css/style.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body background="{{ asset('bundles/sep/images/back.jpg') }}">*/
/*         {% block body %}*/
/*             <div class="brand clearfix">*/
/*                 <a href="index.html" class="logo"><img src="{{ asset('bundles/sep/images/logo.jpg') }}" class="img-responsive" alt=""></a>*/
/*                 <span class="menu-btn"><i class="fa fa-bars"></i></span>*/
/*                 <ul class="ts-profile-nav">*/
/*                     <li><a href="#">Help</a></li>*/
/*                     <li><a href="#">Settings</a></li>*/
/*                     <li class="ts-account">*/
/*                         <a href="#"><img src="{{ asset('bundles/sep/images/ts-avatar.jpg') }}" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>*/
/*                         <ul>*/
/*                             <li><a href="#">My Account</a></li>*/
/*                             <li><a href="#">Edit Account</a></li>*/
/*                             <li><a href="#">Logout</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="ts-main-content">*/
/*                 <nav class="ts-sidebar">*/
/*                     <ul class="ts-sidebar-menu">*/
/*                         <li class="ts-label">Search</li>*/
/*                         <li>*/
/*                             <input type="text" class="ts-sidebar-search" placeholder="Search here...">*/
/*                         </li>*/
/*                         <li class="ts-label">Main</li>*/
/*                         <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>*/
/*                         <li><a href="#"><i class="fa fa-desktop"></i> Courses</a>*/
/*                             <ul>*/
/*                                 {% block courselist %}{% endblock courselist %}*/
/*                             </ul>*/
/* */
/* */
/*                         </li>*/
/* */
/* */
/*                         <!-- Account from above -->*/
/*                         <ul class="ts-profile-nav">*/
/*                             <li><a href="#">Help</a></li>*/
/*                             <li><a href="#">Settings</a></li>*/
/*                             <li class="ts-account">*/
/*                                 <a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>*/
/*                                 <ul>*/
/*                                     <li><a href="#">My Account</a></li>*/
/*                                     <li><a href="#">Edit Account</a></li>*/
/*                                     <li><a href="#">Logout</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/* */
/*                     </ul>*/
/*                 </nav>*/
/* */
/* */
/* */
/*                 <div class="content-wrapper">*/
/*                     <div class="container-fluid">*/
/* */
/*                         <div class="row">*/
/*                             <div class="col-md-12">*/
/* */
/*                                 <h2 class="page-title">{% block modulename %}easyGrade{% endblock %}</h2>*/
/*                                 {% block contentdetail %}{% endblock %}*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/* */
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/*             <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* */
/* */
/*             <script src="{{ asset('bundles/sep/js/jquery.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/sep/js/bootstrap-select.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/sep/js/bootstrap.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/sep/js/jquery.dataTables.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/sep/js/dataTables.bootstrap.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/sep/js/Chart.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/sep/js/fileinput.js') }}"></script>*/
/*             <script src="{{ asset('bundles/sep/js/chartData.js') }}"></script>*/
/*             <script src="{{ asset('bundles/sep/js/main.js') }}"></script>*/
/* */
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
