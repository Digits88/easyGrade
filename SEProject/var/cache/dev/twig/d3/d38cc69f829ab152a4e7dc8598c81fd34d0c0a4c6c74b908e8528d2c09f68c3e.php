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
            'authenticatedUsername' => array($this, 'block_authenticatedUsername'),
            'sidebarmenu' => array($this, 'block_sidebarmenu'),
            'courselist' => array($this, 'block_courselist'),
            'modulename' => array($this, 'block_modulename'),
            'contentdetail' => array($this, 'block_contentdetail'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ab478a938e24b88fee02958c5dc303dac47de87754cc32e0ef2671e6399b9ef = $this->env->getExtension("native_profiler");
        $__internal_3ab478a938e24b88fee02958c5dc303dac47de87754cc32e0ef2671e6399b9ef->enter($__internal_3ab478a938e24b88fee02958c5dc303dac47de87754cc32e0ef2671e6399b9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 90
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 108
        echo "    </body>
</html>
";
        
        $__internal_3ab478a938e24b88fee02958c5dc303dac47de87754cc32e0ef2671e6399b9ef->leave($__internal_3ab478a938e24b88fee02958c5dc303dac47de87754cc32e0ef2671e6399b9ef_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_ec7d37d2fbce19335fd9b7ef1fc70995c053d9f3d1b13813ada63a7210a39983 = $this->env->getExtension("native_profiler");
        $__internal_ec7d37d2fbce19335fd9b7ef1fc70995c053d9f3d1b13813ada63a7210a39983->enter($__internal_ec7d37d2fbce19335fd9b7ef1fc70995c053d9f3d1b13813ada63a7210a39983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "            <meta charset=\"UTF-8\" />
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">
        ";
        
        $__internal_ec7d37d2fbce19335fd9b7ef1fc70995c053d9f3d1b13813ada63a7210a39983->leave($__internal_ec7d37d2fbce19335fd9b7ef1fc70995c053d9f3d1b13813ada63a7210a39983_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_be1a2cf88df1ea2a0199f19fba84893e19ba1fdda045ab06678dcddf8a535d37 = $this->env->getExtension("native_profiler");
        $__internal_be1a2cf88df1ea2a0199f19fba84893e19ba1fdda045ab06678dcddf8a535d37->enter($__internal_be1a2cf88df1ea2a0199f19fba84893e19ba1fdda045ab06678dcddf8a535d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_be1a2cf88df1ea2a0199f19fba84893e19ba1fdda045ab06678dcddf8a535d37->leave($__internal_be1a2cf88df1ea2a0199f19fba84893e19ba1fdda045ab06678dcddf8a535d37_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b54bd22685559f66c5d84cc6145344a8d0228a907a54eb25e1266f8d958eee79 = $this->env->getExtension("native_profiler");
        $__internal_b54bd22685559f66c5d84cc6145344a8d0228a907a54eb25e1266f8d958eee79->enter($__internal_b54bd22685559f66c5d84cc6145344a8d0228a907a54eb25e1266f8d958eee79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b54bd22685559f66c5d84cc6145344a8d0228a907a54eb25e1266f8d958eee79->leave($__internal_b54bd22685559f66c5d84cc6145344a8d0228a907a54eb25e1266f8d958eee79_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_293e4d5839aae56439750d3e040c2d6dd6d3b113b38f4fa6cf60aaef13252e46 = $this->env->getExtension("native_profiler");
        $__internal_293e4d5839aae56439750d3e040c2d6dd6d3b113b38f4fa6cf60aaef13252e46->enter($__internal_293e4d5839aae56439750d3e040c2d6dd6d3b113b38f4fa6cf60aaef13252e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\" class=\"ts-avatar hidden-side\" alt=\"\"> ";
        $this->displayBlock('authenticatedUsername', $context, $blocks);
        echo " <i class=\"fa fa-angle-down hidden-side\"></i></a>
                        <ul>
                            <li><a href=\"#\">My Account</a></li>
                            <li><a href=\"#\">Edit Account</a></li>
                            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class=\"ts-main-content\">
                <nav class=\"ts-sidebar\">
                    <ul class=\"ts-sidebar-menu\">
                        ";
        // line 57
        $this->displayBlock('sidebarmenu', $context, $blocks);
        // line 70
        echo "                    </ul>
                </nav>



                <div class=\"content-wrapper\">
                    <div class=\"container-fluid\">

                        <div class=\"row\">
                            <div class=\"col-md-12\">

                                <h2 class=\"page-title\">";
        // line 81
        $this->displayBlock('modulename', $context, $blocks);
        echo "</h2>
                                ";
        // line 82
        $this->displayBlock('contentdetail', $context, $blocks);
        // line 83
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_293e4d5839aae56439750d3e040c2d6dd6d3b113b38f4fa6cf60aaef13252e46->leave($__internal_293e4d5839aae56439750d3e040c2d6dd6d3b113b38f4fa6cf60aaef13252e46_prof);

    }

    // line 44
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_d9d59291e1fdc33b3452107218f97339c733dfdce148d2c12e42f544c28bd74c = $this->env->getExtension("native_profiler");
        $__internal_d9d59291e1fdc33b3452107218f97339c733dfdce148d2c12e42f544c28bd74c->enter($__internal_d9d59291e1fdc33b3452107218f97339c733dfdce148d2c12e42f544c28bd74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        
        $__internal_d9d59291e1fdc33b3452107218f97339c733dfdce148d2c12e42f544c28bd74c->leave($__internal_d9d59291e1fdc33b3452107218f97339c733dfdce148d2c12e42f544c28bd74c_prof);

    }

    // line 57
    public function block_sidebarmenu($context, array $blocks = array())
    {
        $__internal_7f31ea1ec8d6b58cf763ef6b0e7ce85a795245e4de2d65264486ad5e960824f3 = $this->env->getExtension("native_profiler");
        $__internal_7f31ea1ec8d6b58cf763ef6b0e7ce85a795245e4de2d65264486ad5e960824f3->enter($__internal_7f31ea1ec8d6b58cf763ef6b0e7ce85a795245e4de2d65264486ad5e960824f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarmenu"));

        // line 58
        echo "                        <li class=\"ts-label\">Search</li>
                        <li>
                            <input type=\"text\" class=\"ts-sidebar-search\" placeholder=\"Search here...\">
                        </li>
                        <li class=\"ts-label\">Main</li>
                        <li><a href=\"/\"><i class=\"fa fa-dashboard\"></i> Dashboard</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-desktop\"></i> Courses</a>
                            <ul>
                                ";
        // line 66
        $this->displayBlock('courselist', $context, $blocks);
        // line 67
        echo "                            </ul>
                        </li>
                        ";
        
        $__internal_7f31ea1ec8d6b58cf763ef6b0e7ce85a795245e4de2d65264486ad5e960824f3->leave($__internal_7f31ea1ec8d6b58cf763ef6b0e7ce85a795245e4de2d65264486ad5e960824f3_prof);

    }

    // line 66
    public function block_courselist($context, array $blocks = array())
    {
        $__internal_a6dc7e205e0ee3d64e980fb06377730b0c0c4ff8b8073611e67187f5c7ad982a = $this->env->getExtension("native_profiler");
        $__internal_a6dc7e205e0ee3d64e980fb06377730b0c0c4ff8b8073611e67187f5c7ad982a->enter($__internal_a6dc7e205e0ee3d64e980fb06377730b0c0c4ff8b8073611e67187f5c7ad982a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courselist"));

        
        $__internal_a6dc7e205e0ee3d64e980fb06377730b0c0c4ff8b8073611e67187f5c7ad982a->leave($__internal_a6dc7e205e0ee3d64e980fb06377730b0c0c4ff8b8073611e67187f5c7ad982a_prof);

    }

    // line 81
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_54f58a8c254baa18c73225f4bc0c8f04984dcce74a94836acba9bbabe5fbcf5b = $this->env->getExtension("native_profiler");
        $__internal_54f58a8c254baa18c73225f4bc0c8f04984dcce74a94836acba9bbabe5fbcf5b->enter($__internal_54f58a8c254baa18c73225f4bc0c8f04984dcce74a94836acba9bbabe5fbcf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_54f58a8c254baa18c73225f4bc0c8f04984dcce74a94836acba9bbabe5fbcf5b->leave($__internal_54f58a8c254baa18c73225f4bc0c8f04984dcce74a94836acba9bbabe5fbcf5b_prof);

    }

    // line 82
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_52afffe36d625962f3815f2fc1b7bed24672e50da189d7658c6eaf4b5481574e = $this->env->getExtension("native_profiler");
        $__internal_52afffe36d625962f3815f2fc1b7bed24672e50da189d7658c6eaf4b5481574e->enter($__internal_52afffe36d625962f3815f2fc1b7bed24672e50da189d7658c6eaf4b5481574e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_52afffe36d625962f3815f2fc1b7bed24672e50da189d7658c6eaf4b5481574e->leave($__internal_52afffe36d625962f3815f2fc1b7bed24672e50da189d7658c6eaf4b5481574e_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a885f8956a0d1001b1768c02b4fcd3e93af4e399ebce91a05bfd82beee42217f = $this->env->getExtension("native_profiler");
        $__internal_a885f8956a0d1001b1768c02b4fcd3e93af4e399ebce91a05bfd82beee42217f->enter($__internal_a885f8956a0d1001b1768c02b4fcd3e93af4e399ebce91a05bfd82beee42217f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
            <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>


            <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/fileinput.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/chartData.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sep/js/main.js"), "html", null, true);
        echo "\"></script>


        ";
        
        $__internal_a885f8956a0d1001b1768c02b4fcd3e93af4e399ebce91a05bfd82beee42217f->leave($__internal_a885f8956a0d1001b1768c02b4fcd3e93af4e399ebce91a05bfd82beee42217f_prof);

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
        return array (  349 => 104,  345 => 103,  341 => 102,  337 => 101,  333 => 100,  329 => 99,  325 => 98,  321 => 97,  317 => 96,  310 => 91,  304 => 90,  293 => 82,  281 => 81,  270 => 66,  261 => 67,  259 => 66,  249 => 58,  243 => 57,  232 => 44,  219 => 83,  217 => 82,  213 => 81,  200 => 70,  198 => 57,  186 => 48,  177 => 44,  168 => 38,  165 => 37,  159 => 36,  150 => 31,  145 => 29,  140 => 27,  135 => 25,  130 => 23,  125 => 21,  120 => 19,  115 => 17,  109 => 14,  106 => 13,  100 => 12,  88 => 11,  76 => 5,  70 => 4,  61 => 108,  58 => 90,  56 => 36,  52 => 35,  46 => 33,  44 => 12,  39 => 11,  37 => 4,  32 => 1,);
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
/*                         <a href="#"><img src="{{ asset('bundles/sep/images/ts-avatar.jpg') }}" class="ts-avatar hidden-side" alt=""> {% block authenticatedUsername %}{% endblock %} <i class="fa fa-angle-down hidden-side"></i></a>*/
/*                         <ul>*/
/*                             <li><a href="#">My Account</a></li>*/
/*                             <li><a href="#">Edit Account</a></li>*/
/*                             <li><a href="{{ path('fos_user_security_logout') }}">Logout</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="ts-main-content">*/
/*                 <nav class="ts-sidebar">*/
/*                     <ul class="ts-sidebar-menu">*/
/*                         {% block sidebarmenu %}*/
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
/*                         </li>*/
/*                         {% endblock sidebarmenu %}*/
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
