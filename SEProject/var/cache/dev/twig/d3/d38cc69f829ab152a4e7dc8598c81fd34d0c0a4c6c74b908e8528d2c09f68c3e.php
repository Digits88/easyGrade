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
            'modulename' => array($this, 'block_modulename'),
            'contentdetail' => array($this, 'block_contentdetail'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_543d6057c289fc8be1566d8c74ed76704dc178aa2f842de5f2af2c1b131aea96 = $this->env->getExtension("native_profiler");
        $__internal_543d6057c289fc8be1566d8c74ed76704dc178aa2f842de5f2af2c1b131aea96->enter($__internal_543d6057c289fc8be1566d8c74ed76704dc178aa2f842de5f2af2c1b131aea96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 109
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 127
        echo "    </body>
</html>
";
        
        $__internal_543d6057c289fc8be1566d8c74ed76704dc178aa2f842de5f2af2c1b131aea96->leave($__internal_543d6057c289fc8be1566d8c74ed76704dc178aa2f842de5f2af2c1b131aea96_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_c54bfd7add43c3850f49406aaf90b70c236e5099743b8be8dd228a363c9d47df = $this->env->getExtension("native_profiler");
        $__internal_c54bfd7add43c3850f49406aaf90b70c236e5099743b8be8dd228a363c9d47df->enter($__internal_c54bfd7add43c3850f49406aaf90b70c236e5099743b8be8dd228a363c9d47df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "            <meta charset=\"UTF-8\" />
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">
        ";
        
        $__internal_c54bfd7add43c3850f49406aaf90b70c236e5099743b8be8dd228a363c9d47df->leave($__internal_c54bfd7add43c3850f49406aaf90b70c236e5099743b8be8dd228a363c9d47df_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_9265ba554dcdf9e2807bf516f3d936c6ce73c66198d9703cb1e4c9b3596d56b9 = $this->env->getExtension("native_profiler");
        $__internal_9265ba554dcdf9e2807bf516f3d936c6ce73c66198d9703cb1e4c9b3596d56b9->enter($__internal_9265ba554dcdf9e2807bf516f3d936c6ce73c66198d9703cb1e4c9b3596d56b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9265ba554dcdf9e2807bf516f3d936c6ce73c66198d9703cb1e4c9b3596d56b9->leave($__internal_9265ba554dcdf9e2807bf516f3d936c6ce73c66198d9703cb1e4c9b3596d56b9_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c6f4d64bbecd53d69221e29789988dfabff66c6aa7cb3e8ceb0a49ab807d256 = $this->env->getExtension("native_profiler");
        $__internal_2c6f4d64bbecd53d69221e29789988dfabff66c6aa7cb3e8ceb0a49ab807d256->enter($__internal_2c6f4d64bbecd53d69221e29789988dfabff66c6aa7cb3e8ceb0a49ab807d256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2c6f4d64bbecd53d69221e29789988dfabff66c6aa7cb3e8ceb0a49ab807d256->leave($__internal_2c6f4d64bbecd53d69221e29789988dfabff66c6aa7cb3e8ceb0a49ab807d256_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_50556632679f35dc235f474b377a3465718cc093f55bfa5328964343a33bc79d = $this->env->getExtension("native_profiler");
        $__internal_50556632679f35dc235f474b377a3465718cc093f55bfa5328964343a33bc79d->enter($__internal_50556632679f35dc235f474b377a3465718cc093f55bfa5328964343a33bc79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <li><a href=\"panels.html\">Programming Fundamentals</a></li>
                                <li><a href=\"buttons.html\">Theory of Computing</a></li>
                                <li><a href=\"notifications.html\">Data Structures and Algorithms</a></li>
                                <li><a href=\"typography.html\">Software Engineerinh</a></li>
                                <li><a href=\"icon.html\">Database Applications</a></li>
                                <li><a href=\"grid.html\">Computer Security</a></li>
                            </ul>
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
        // line 100
        $this->displayBlock('modulename', $context, $blocks);
        echo "</h2>
                                ";
        // line 101
        $this->displayBlock('contentdetail', $context, $blocks);
        // line 102
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_50556632679f35dc235f474b377a3465718cc093f55bfa5328964343a33bc79d->leave($__internal_50556632679f35dc235f474b377a3465718cc093f55bfa5328964343a33bc79d_prof);

    }

    // line 100
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_61df6edc309bf13c1fd64688c7cf500fb7474244d10411ea842af75ce608e822 = $this->env->getExtension("native_profiler");
        $__internal_61df6edc309bf13c1fd64688c7cf500fb7474244d10411ea842af75ce608e822->enter($__internal_61df6edc309bf13c1fd64688c7cf500fb7474244d10411ea842af75ce608e822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_61df6edc309bf13c1fd64688c7cf500fb7474244d10411ea842af75ce608e822->leave($__internal_61df6edc309bf13c1fd64688c7cf500fb7474244d10411ea842af75ce608e822_prof);

    }

    // line 101
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_40c05345f511a704f6863ee685af44efeb644cf06053de907971dd4b2cb98cff = $this->env->getExtension("native_profiler");
        $__internal_40c05345f511a704f6863ee685af44efeb644cf06053de907971dd4b2cb98cff->enter($__internal_40c05345f511a704f6863ee685af44efeb644cf06053de907971dd4b2cb98cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_40c05345f511a704f6863ee685af44efeb644cf06053de907971dd4b2cb98cff->leave($__internal_40c05345f511a704f6863ee685af44efeb644cf06053de907971dd4b2cb98cff_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c6dded3aecfafe84f70b0e9a06f16049af985f9b40f8b717139e80e37264111 = $this->env->getExtension("native_profiler");
        $__internal_7c6dded3aecfafe84f70b0e9a06f16049af985f9b40f8b717139e80e37264111->enter($__internal_7c6dded3aecfafe84f70b0e9a06f16049af985f9b40f8b717139e80e37264111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 110
        echo "
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
            <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>


            <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/fileinput.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/chartData.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/main.js"), "html", null, true);
        echo "\"></script>


        ";
        
        $__internal_7c6dded3aecfafe84f70b0e9a06f16049af985f9b40f8b717139e80e37264111->leave($__internal_7c6dded3aecfafe84f70b0e9a06f16049af985f9b40f8b717139e80e37264111_prof);

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
        return array (  320 => 123,  316 => 122,  312 => 121,  308 => 120,  304 => 119,  300 => 118,  296 => 117,  292 => 116,  288 => 115,  281 => 110,  275 => 109,  264 => 101,  252 => 100,  239 => 102,  237 => 101,  233 => 100,  174 => 44,  165 => 38,  162 => 37,  156 => 36,  147 => 31,  142 => 29,  137 => 27,  132 => 25,  127 => 23,  122 => 21,  117 => 19,  112 => 17,  106 => 14,  103 => 13,  97 => 12,  85 => 11,  73 => 5,  67 => 4,  58 => 127,  55 => 109,  53 => 36,  49 => 35,  43 => 33,  41 => 12,  36 => 11,  34 => 4,  29 => 1,);
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
/*                                 <li><a href="panels.html">Programming Fundamentals</a></li>*/
/*                                 <li><a href="buttons.html">Theory of Computing</a></li>*/
/*                                 <li><a href="notifications.html">Data Structures and Algorithms</a></li>*/
/*                                 <li><a href="typography.html">Software Engineerinh</a></li>*/
/*                                 <li><a href="icon.html">Database Applications</a></li>*/
/*                                 <li><a href="grid.html">Computer Security</a></li>*/
/*                             </ul>*/
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
