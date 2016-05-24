<?php

/* SEPBundle:Default:index.html.twig */
class __TwigTemplate_ef2dfff390bb625148d9f5f219d2e211811f2861c2824aa5d5dbb5288d6b7a79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SEPBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c335bba76ae8d21653f9e770c8aab00fd03fe7383e80f6bba2a8a80e59272a7b = $this->env->getExtension("native_profiler");
        $__internal_c335bba76ae8d21653f9e770c8aab00fd03fe7383e80f6bba2a8a80e59272a7b->enter($__internal_c335bba76ae8d21653f9e770c8aab00fd03fe7383e80f6bba2a8a80e59272a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c335bba76ae8d21653f9e770c8aab00fd03fe7383e80f6bba2a8a80e59272a7b->leave($__internal_c335bba76ae8d21653f9e770c8aab00fd03fe7383e80f6bba2a8a80e59272a7b_prof);

    }

    public function getTemplateName()
    {
        return "SEPBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
