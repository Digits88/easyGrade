<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6f4a6273ba42d16dbd9748887a5356a3b71e248b6564adc0213ecafaddb0e27c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45130c8831af8d06c308436e783d8e514f885f6229f09927fe98f174cc830c7e = $this->env->getExtension("native_profiler");
        $__internal_45130c8831af8d06c308436e783d8e514f885f6229f09927fe98f174cc830c7e->enter($__internal_45130c8831af8d06c308436e783d8e514f885f6229f09927fe98f174cc830c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45130c8831af8d06c308436e783d8e514f885f6229f09927fe98f174cc830c7e->leave($__internal_45130c8831af8d06c308436e783d8e514f885f6229f09927fe98f174cc830c7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_60e3e14c01a945a42699b5240b761871fc51aac8edf2061b6be879a87978fb00 = $this->env->getExtension("native_profiler");
        $__internal_60e3e14c01a945a42699b5240b761871fc51aac8edf2061b6be879a87978fb00->enter($__internal_60e3e14c01a945a42699b5240b761871fc51aac8edf2061b6be879a87978fb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_60e3e14c01a945a42699b5240b761871fc51aac8edf2061b6be879a87978fb00->leave($__internal_60e3e14c01a945a42699b5240b761871fc51aac8edf2061b6be879a87978fb00_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fbea436035c6c749d1f1bc9f39a9a9efe395cb4762f8912e6afbc54a189be06 = $this->env->getExtension("native_profiler");
        $__internal_5fbea436035c6c749d1f1bc9f39a9a9efe395cb4762f8912e6afbc54a189be06->enter($__internal_5fbea436035c6c749d1f1bc9f39a9a9efe395cb4762f8912e6afbc54a189be06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5fbea436035c6c749d1f1bc9f39a9a9efe395cb4762f8912e6afbc54a189be06->leave($__internal_5fbea436035c6c749d1f1bc9f39a9a9efe395cb4762f8912e6afbc54a189be06_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eddcc0cbfab0a77b75bfc27b4b46dbdf9fb573d33dfd92aa3be39bfb4d610c6 = $this->env->getExtension("native_profiler");
        $__internal_3eddcc0cbfab0a77b75bfc27b4b46dbdf9fb573d33dfd92aa3be39bfb4d610c6->enter($__internal_3eddcc0cbfab0a77b75bfc27b4b46dbdf9fb573d33dfd92aa3be39bfb4d610c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3eddcc0cbfab0a77b75bfc27b4b46dbdf9fb573d33dfd92aa3be39bfb4d610c6->leave($__internal_3eddcc0cbfab0a77b75bfc27b4b46dbdf9fb573d33dfd92aa3be39bfb4d610c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
